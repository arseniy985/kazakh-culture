<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Маршруты для категорий и записей
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{slug}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/{categorySlug}/{itemSlug}', [ItemController::class, 'show'])->name('items.show');

// Старые маршруты сохраняем для совместимости
Route::get('/holidays', function () {
    return view('holidays.index');
});
Route::get('/holidays/nauryz', function () {
    return view('holidays.nauryz');
});

Route::get('/holidays/qurban', function () {
    return view('holidays.qurban');
});

Route::get('/holidays/tauelsizdik', function () {
    return view('holidays.tauelsizdik');
});

Route::get('/traditions', function () {
    return view('traditions.index');
});

Route::get('/traditions/besikke-salu', function () {
    return view('traditions.besikke-salu');
});
Route::get('/traditions/tusaukeser', function () {
    return view('traditions.tusaukeser');
});
Route::get('/traditions/qyz-uzatu', function () {
    return view('traditions.qyz-uzatu');
});
Route::get('/games', function () {
    return view('games.index');
})->name('games');

Route::get('/games/kokpar', function () {
    return view('games.kokpar');
});

Route::get('/games/asyk', function () {
    return view('games.asyk');
});

Route::get('/games/togyzkumalak', function () {
    return view('games.togyzkumalak');
});
Route::get('/foods', function () {
    return view('foods.index');
});

Route::get('/foods/besbarmak', function () {
    return view('foods.besbarmak');
});

Route::get('/foods/kuyrdak', function () {
    return view('foods.kuyrdak');
});

Route::get('/foods/qymyz', function () {
    return view('foods.qymyz');
});
Route::get('/patterns', function () {
    return view('patterns.index');

});Route::get('/patterns/qoshqar-muyiz', function () {
    return view('patterns.qoshqar-muyiz');
});

Route::get('/patterns/tuiye-taban', function () {
    return view('patterns.tuiye-taban');
});

Route::get('/patterns/qos-alqa', function () {
    return view('patterns.qos-alqa');
});
Route::get('/figures', function () {
    return view('figures.index');
});
Route::get('/figures/abai', function () {
    return view('figures.abai');
});

Route::get('/figures/kerey-zhanybek', function () {
    return view('figures.kerey-zhanybek');
});

Route::get('/figures/alikhan', function () {
    return view('figures.alikhan');
});

// Чат-бот
Route::get('/chatbot', [App\Http\Controllers\ChatbotController::class, 'index'])->name('chatbot.index');
Route::post('/chatbot/query', [App\Http\Controllers\ChatbotController::class, 'query'])->name('chatbot.query');

require __DIR__.'/auth.php';
