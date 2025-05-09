<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Убедимся, что хранилище существует
        Storage::makeDirectory('public/items');

        // Traditions
        $traditionItems = [
            [
                'title' => 'Бесікке салу',
                'slug' => 'besikke-salu',
                'content' => '<p>Бесікке салу — баланың алғашқы қадамына арналған дәстүр. Жаңа туған нәрестені бесікке бөлеп, оны жұрт алдында таныстыру дәстүрі. Халық тәрбиесінің бастауы.</p>
                <p>Жаңа туған нәрестені бесікке бөлеу — тәрбиелік мәні терең салт. Бесік — ана мен баланың арасындағы алтын көпір. Бұл салт балаға ұлттық тәрбие берудің алғашқы қадамы.</p>',
                'image' => 'items/besikke.jpg',
                'source_image' => 'besikke.jpg',
                'category_id' => Category::where('slug', 'traditions')->first()->id,
            ],
            [
                'title' => 'Тұсаукесер',
                'slug' => 'tusaukeser',
                'content' => '<p>Тұсаукесер — баланың алғашқы қадамына арналған дәстүр. Бұл сәтте бала жүре бастаған кезде, оның тұсауын кесу арқылы жақсы ниет, тілек білдіріледі.</p>
                <p>Тұсауды кесетін адам – ел ішінде сыйлы, адал, өмір жолы жақсы біреу болады. Бұл – баланың өмір жолы сол кісі сияқты жақсы болсын деген тілекпен жасалатын ырымы.</p>',
                'image' => 'items/tusaukeser.jpg',
                'source_image' => 'tusaukeser.jpg',
                'category_id' => Category::where('slug', 'traditions')->first()->id,
            ],
            [
                'title' => 'Қыз ұзату',
                'slug' => 'qyz-uzatu',
                'content' => '<p>Қыз ұзату – қыз баланы ұзатып, жаңа өмірге шығарып салу салты. Қоштасу, тілек айту, әдеп пен ұятты сақтаудың белгісі.</p>
                <p>Қыз ұзату – үлкен құрметке ие, салттық шара. Қазақ халқында қыз баланы ұзату жақсы дәстүрлер мен салтанатты рәсімдермен безендіріледі.</p>',
                'image' => 'items/qyz-uzatu.jpg',
                'source_image' => 'qyz-uzatu.jpg',
                'category_id' => Category::where('slug', 'traditions')->first()->id,
            ],
        ];

        // Foods
        $foodItems = [
            [
                'title' => 'Бесбармақ',
                'slug' => 'besbarmak',
                'content' => '<p>Бесбармақ — қазақ халқының ең танымал ұлттық тағамы. Бұл тағам көбіне тойларда, қонақ күтуде, салтанатты шараларда беріледі.</p>
                <p>Негізгі ингредиенттері: жылқы, қой немесе сиыр еті, қамыр және сорпа. Бесбармақ "бес саусақ" деген мағынаны білдіреді, яғни қолмен желінетін тағам.</p>',
                'image' => 'items/besbarmak.jpg',
                'source_image' => 'besbarmak.jpg',
                'category_id' => Category::where('slug', 'foods')->first()->id,
            ],
            [
                'title' => 'Қуырдақ',
                'slug' => 'kuyrdak',
                'content' => '<p>Қуырдақ - дәмі тіл үйіретін ұлттық қуырылған тағам. Әдетте бұл тағам малдың ішкі мүшелерінен (бауыр, бүйрек, жүрек, өкпе) дайындалады.</p>
                <p>Бұл тағам өте тез дайындалады және жалпы түркі халықтарына тән. Қуырдақ, көбінесе қонақтарды күтуде, соғымда немесе жаңа сойылған мал еті бар болған жағдайда пісіріледі.</p>',
                'image' => 'items/kuyrdak.jpg',
                'source_image' => 'kuyrdak.jpg',
                'category_id' => Category::where('slug', 'foods')->first()->id,
            ],
            [
                'title' => 'Қымыз',
                'slug' => 'qymyz',
                'content' => '<p>Қымыз - қазақ халқының дәстүрлі әрі шипалы сусыны, бие сүтінен ашытылған ұлттық сусын.</p>
                <p>Қымыз – қазақ даласында ежелден бері дәстүрлі сусын ретінде қолданылып келген, емдік және тағамдық қасиеттері жоғары. Қымыздың денсаулыққа пайдасы өте көп.</p>',
                'image' => 'items/qymyz.jpg',
                'source_image' => 'qymyz.jpg',
                'category_id' => Category::where('slug', 'foods')->first()->id,
            ],
        ];

        // Games
        $gameItems = [
            [
                'title' => 'Көкпар',
                'slug' => 'kokpar',
                'content' => '<p>Көкпар - ер жігіттің ептілігі мен батырлығын сынайтын шабандоздар ойыны. Бұл ойында атты адамдар тартыспақ болып екі топқа бөлінеді.</p>
                <p>Шабандоздар арнайы ешкі немесе лақтың терісін алып (көкпар) белгіленген жерге апаруы керек. Қарсылас топ оны тартып алуға тырысады.</p>',
                'image' => 'items/kokpar.jpg',
                'source_image' => 'kokpar.jpg',
                'category_id' => Category::where('slug', 'games')->first()->id,
            ],
            [
                'title' => 'Асық ату',
                'slug' => 'asyk',
                'content' => '<p>Асық ату - балалар арасында кең тараған дәлдік пен шапшаңдықты талап ететін ойын. Асық - қойдың асықты жілігінің буыны.</p>
                <p>Ойын барысында әр баланың өз асығы болады және оны басқа асықтарға атып түсіру керек. Асық ойындарының көп түрлері бар.</p>',
                'image' => 'items/asyk.jpg',
                'source_image' => 'asyk.jpg',
                'category_id' => Category::where('slug', 'games')->first()->id,
            ],
            [
                'title' => 'Тоғызқұмалақ',
                'slug' => 'togyzkumalak',
                'content' => '<p>Тоғызқұмалақ - логикалық ойлау қабілетін арттыратын зияткерлік ойын. Бұл ойын тақтасы 18 шұңқырдан тұрады, әр ойыншыға 9 шұңқырдан.</p>
                <p>Ойыншылар кезек-кезек доптарын (құмалақтарын) тақтаға орналастырады. Мақсат - қарсыластың құмалақтарын жинап алып, өз қоймаңызды толтыру.</p>',
                'image' => 'items/togyzkumalak.jpg',
                'source_image' => 'togyzkumalak.jpg',
                'category_id' => Category::where('slug', 'games')->first()->id,
            ],
        ];

        // Merge all
        $allItems = array_merge($traditionItems, $foodItems, $gameItems);

        // Create items
        foreach ($allItems as $item) {
            // Путь к исходному изображению в public
            $sourcePath = public_path('images/' . $item['source_image']);
            
            // Путь, где будет храниться файл в storage
            $targetPath = 'items/' . basename($item['image']);
            
            // Проверяем существование исходного файла
            if (File::exists($sourcePath)) {
                // Копируем файл в storage
                Storage::disk('public')->put($targetPath, File::get($sourcePath));
                
                // Обновляем путь к изображению в данных - здесь не добавляем 'storage/'
                $item['image'] = $targetPath;
            }
            
            // Удаляем source_image из данных перед созданием записи
            unset($item['source_image']);
            
            // Создаем запись элемента
            Item::create($item);
        }
    }
} 