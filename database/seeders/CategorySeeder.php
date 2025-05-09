<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Убедимся, что хранилище существует
        Storage::makeDirectory('public/categories');

        $categories = [
            [
                'title' => 'Салт-дәстүрлер',
                'slug' => 'traditions',
                'description' => 'Қазақ халқының салт-дәстүрлері — ғасырлар бойы қалыптасқан өмір сүру салтының, тұрмыс-тіршілігінің және рухани байлығының айнасы.',
                'image' => 'categories/traditions.jpg',
                'source_image' => 'besikke.jpg', // Исходное изображение из public/images
            ],
            [
                'title' => 'Ұлттық ойындар',
                'slug' => 'games',
                'description' => 'Қазақ ұлттық ойындары – жастарды тәрбиелеудің, шынықтырудың, ерлікке баулудың тамаша үлгісі.',
                'image' => 'categories/games.jpg',
                'source_image' => 'kokpar.jpg', // Исходное изображение из public/images
            ],
            [
                'title' => 'Ұлттық тағамдар',
                'slug' => 'foods',
                'description' => 'Қазақтың ұлттық тағамдары – ұлт мәдениетінің ажырамас бөлігі.',
                'image' => 'categories/foods.jpg',
                'source_image' => 'besbarmak.jpg', // Исходное изображение из public/images
            ],
            [
                'title' => 'Ою-өрнек',
                'slug' => 'patterns',
                'description' => 'Қазақтың ою-өрнегі – ұлттық мәдениетінің ерекше бір саласы.',
                'image' => 'categories/patterns.jpg',
                'source_image' => 'oyu1.jpg', // Исходное изображение из public/images
            ],
            [
                'title' => 'Ұлттық мерекелер',
                'slug' => 'holidays',
                'description' => 'Ұлттық мерекелер – халықтың тарихи дәстүрлері мен мәдениетінің айнасы.',
                'image' => 'categories/holidays.jpg',
                'source_image' => 'nauryz.jpg', // Исходное изображение из public/images
            ],
            [
                'title' => 'Тұлғалар мен тарих',
                'slug' => 'figures',
                'description' => 'Қазақ тарихындағы маңызды тұлғалар мен оқиғалар туралы мәліметтер.',
                'image' => 'categories/figures.jpg',
                'source_image' => 'abai.jpg', // Исходное изображение из public/images
            ],
        ];

        foreach ($categories as $category) {
            // Путь к исходному изображению в public
            $sourcePath = public_path('images/' . $category['source_image']);
            
            // Путь, где будет храниться файл в storage
            $targetPath = 'categories/' . basename($category['image']);
            
            // Проверяем существование исходного файла
            if (File::exists($sourcePath)) {
                // Копируем файл в storage
                Storage::disk('public')->put($targetPath, File::get($sourcePath));
                
                // Обновляем путь к изображению в данных - здесь не добавляем 'storage/'
                $category['image'] = $targetPath;
            }
            
            // Удаляем source_image из данных перед созданием записи
            unset($category['source_image']);
            
            // Создаем запись категории
            Category::create($category);
        }
    }
} 