<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Client\RequestException;

class OpenRouterService implements AIServiceInterface
{
    private string $apiKey;
    private string $baseUrl = 'https://openrouter.ai/api/v1';
    private string $defaultModel = 'meta-llama/llama-4-scout:free';

    /**
     * Конструктор сервиса Open Router
     *
     * @param string $apiKey API ключ для доступа к Open Router
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * Отправляет запрос к Open Router и получает ответ
     *
     * @param string $context Контекст/системный промпт для нейросети
     * @param string $text Текст запроса пользователя
     * @param mixed $model Модель нейросети (по умолчанию meta-llama/llama-4-scout:free)
     * @return string Ответ от нейросети
     * @throws RequestException
     */
    public function query(string $context, string $text, mixed $model = null): string
    {
        if (!$model) {
            $model = $this->defaultModel;
        }

        try {
            $response = Http::withHeaders([
                'Authorization' => "Bearer {$this->apiKey}",
                'HTTP-Referer' => config('app.url'),
                'X-Title' => config('app.name'),
            ])->post("{$this->baseUrl}/chat/completions", [
                'model' => $model,
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => $context
                    ],
                    [
                        'role' => 'user',
                        'content' => $text
                    ]
                ]
            ]);

            if ($response->successful()) {
                $data = $response->json();
                return $data['choices'][0]['message']['content'] ?? 'Нет ответа от нейросети';
            } else {
                // Логирование ошибки
                Log::error('OpenRouter API error', [
                    'status' => $response->status(),
                    'response' => $response->json()
                ]);

                return "Ошибка при обращении к API: {$response->status()} - " .
                       ($response->json()['error']['message'] ?? 'Неизвестная ошибка');
            }
        } catch (\Exception $e) {
            Log::error('OpenRouter exception', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return "Произошла ошибка при обращении к нейросети: {$e->getMessage()}";
        }
    }
} 