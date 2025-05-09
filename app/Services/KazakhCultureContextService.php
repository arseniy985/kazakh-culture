<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Support\Facades\DB;

class KazakhCultureContextService
{
    /**
     * Системный промпт для нейросети с данными о категориях и записях
     * 
     * @return string
     */
    public function getSystemPrompt(): string
    {
        // Получаем все категории с элементами
        $categories = Category::with('items')->get();
        
        // Создаем контекст с информацией о категориях и элементах
        $categoriesInfo = [];
        
        foreach ($categories as $category) {
            $itemsInfo = [];
            
            foreach ($category->items as $item) {
                $itemsInfo[] = [
                    'id' => $item->id,
                    'title' => $item->title,
                    'slug' => $item->slug,
                    'excerpt' => mb_substr(strip_tags($item->content), 0, 100) . '...',
                ];
            }
            
            $categoriesInfo[] = [
                'id' => $category->id,
                'title' => $category->title,
                'slug' => $category->slug,
                'description' => $category->description,
                'items' => $itemsInfo
            ];
        }
        
        // Преобразуем в JSON
        $contextJson = json_encode($categoriesInfo, JSON_UNESCAPED_UNICODE);
        
        // Базовый промпт
        $basePrompt = <<<EOT
Ты - умный помощник по казахской культуре, который помогает пользователям изучать традиции, обычаи, игры, кухню и другие аспекты культуры Казахстана.

Отвечай на вопросы пользователей относительно казахской культуры кратко, точно и информативно.
Если пользователь задает вопрос, который не связан с казахской культурой, вежливо сообщи, что ты специализируешься только на вопросах о Казахстане и его традициях.

Сохраняй позитивный и дружелюбный тон. Не генерируй вредоносный, оскорбительный, политически чувствительный или неприемлемый контент.

ВАЖНО: Форматируй свои ответы, используя Markdown. Используй заголовки, списки, жирный и курсивный текст там, где это уместно для лучшей читаемости.

Отвечай на казахском или русском языке - на том, на котором задан вопрос.

У тебя есть доступ к базе данных категорий и записей о казахской культуре. Вот полный список:

{$contextJson}

Если вопрос пользователя относится к одной из этих категорий или записей, ОБЯЗАТЕЛЬНО включи в свой ответ код с информацией о соответствующей категории или записи в следующем формате:

Для категории: [CATEGORY:slug_категории]
Для записи: [ITEM:slug_категории:slug_записи]

Например:
[CATEGORY:traditions]
[ITEM:foods:besbarmak]

Не заменяй и не модифицируй эти форматы строк, они будут использованы для создания ссылок.

Примеры использования Markdown:
1. Для заголовков: "## Казахские традиции"
2. Для жирного текста: "**Важная информация**"
3. Для курсива: "*интересный факт*"
4. Для списков: "- Первый пункт", "1. Нумерованный пункт"
5. Для цитат: "> Народная мудрость"

Старайся разнообразить форматирование, чтобы твои ответы были удобны для чтения.
EOT;

        return $basePrompt;
    }

    /**
     * Анализирует запрос пользователя и ищет совпадения с категориями или элементами
     * 
     * @param string $userQuery Запрос пользователя
     * @return array Массив с ответом и найденными ссылками
     */
    public function analyzeQuery(string $userQuery): array
    {
        $result = [
            'has_match' => false,
            'links' => [],
            'response' => ''
        ];

        // Ищем совпадения с категориями
        $matchedCategories = $this->findMatchingCategories($userQuery);
        
        // Ищем совпадения с элементами
        $matchedItems = $this->findMatchingItems($userQuery);

        // Если нашлись совпадения
        if ($matchedCategories->isNotEmpty() || $matchedItems->isNotEmpty()) {
            $result['has_match'] = true;
            $result['response'] = "Я нашел информацию по вашему запросу. Вы можете узнать больше по следующим ссылкам:";
            
            // Добавляем ссылки на категории
            foreach ($matchedCategories as $category) {
                $result['links'][] = [
                    'title' => $category->title,
                    'url' => route('categories.show', $category->slug),
                    'type' => 'category'
                ];
            }
            
            // Добавляем ссылки на элементы
            foreach ($matchedItems as $item) {
                $result['links'][] = [
                    'title' => $item->title,
                    'url' => route('items.show', [$item->category->slug, $item->slug]),
                    'type' => 'item'
                ];
            }
        }

        return $result;
    }

    /**
     * Ищет категории, соответствующие запросу
     * 
     * @param string $query Запрос пользователя
     * @return \Illuminate\Database\Eloquent\Collection
     */
    private function findMatchingCategories(string $query): \Illuminate\Database\Eloquent\Collection
    {
        // Сперва ищем точные совпадения
        $exactMatches = Category::where('title', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->get();
            
        if ($exactMatches->isNotEmpty()) {
            return $exactMatches;
        }

        // Если точных совпадений нет, используем полнотекстовый поиск
        $keywords = preg_split('/\s+/', $query);
        $query = Category::query();
        
        foreach ($keywords as $keyword) {
            if (mb_strlen($keyword) > 3) {
                $query->orWhere('title', 'like', '%' . $keyword . '%')
                    ->orWhere('description', 'like', '%' . $keyword . '%');
            }
        }
        
        return $query->limit(3)->get();
    }

    /**
     * Ищет элементы, соответствующие запросу
     * 
     * @param string $query Запрос пользователя
     * @return \Illuminate\Database\Eloquent\Collection
     */
    private function findMatchingItems(string $query): \Illuminate\Database\Eloquent\Collection
    {
        // Сперва ищем точные совпадения
        $exactMatches = Item::where('title', 'like', '%' . $query . '%')
            ->orWhere('content', 'like', '%' . $query . '%')
            ->with('category') // Загружаем связанную категорию
            ->get();
            
        if ($exactMatches->isNotEmpty()) {
            return $exactMatches;
        }

        // Если точных совпадений нет, используем полнотекстовый поиск
        $keywords = preg_split('/\s+/', $query);
        $query = Item::query();
        
        foreach ($keywords as $keyword) {
            if (mb_strlen($keyword) > 3) {
                $query->orWhere('title', 'like', '%' . $keyword . '%')
                    ->orWhere('content', 'like', '%' . $keyword . '%');
            }
        }
        
        return $query->with('category')->limit(3)->get();
    }
} 