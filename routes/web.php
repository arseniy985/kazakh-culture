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

// Редиректы со старых маршрутов на новые
Route::get('/holidays', function () {
    return redirect()->route('categories.show', 'holidays');
});

Route::get('/holidays/nauryz', function () {
    return redirect()->route('items.show', ['holidays', 'nauryz']);
});

Route::get('/holidays/qurban', function () {
    return redirect()->route('items.show', ['holidays', 'qurban']);
});

Route::get('/holidays/tauelsizdik', function () {
    return redirect()->route('items.show', ['holidays', 'tauelsizdik']);
});

Route::get('/traditions', function () {
    return redirect()->route('categories.show', 'traditions');
});

Route::get('/traditions/besikke-salu', function () {
    return redirect()->route('items.show', ['traditions', 'besikke-salu']);
});

Route::get('/traditions/tusaukeser', function () {
    return redirect()->route('items.show', ['traditions', 'tusaukeser']);
});

Route::get('/traditions/qyz-uzatu', function () {
    return redirect()->route('items.show', ['traditions', 'qyz-uzatu']);
});

Route::get('/games', function () {
    return redirect()->route('categories.show', 'games');
})->name('games');

Route::get('/games/kokpar', function () {
    return redirect()->route('items.show', ['games', 'kokpar']);
});

Route::get('/games/asyk', function () {
    return redirect()->route('items.show', ['games', 'asyk']);
});

Route::get('/games/togyzkumalak', function () {
    return redirect()->route('items.show', ['games', 'togyzkumalak']);
});

Route::get('/foods', function () {
    return redirect()->route('categories.show', 'foods');
});

Route::get('/foods/besbarmak', function () {
    return redirect()->route('items.show', ['foods', 'besbarmak']);
});

Route::get('/foods/kuyrdak', function () {
    return redirect()->route('items.show', ['foods', 'kuyrdak']);
});

Route::get('/foods/qymyz', function () {
    return redirect()->route('items.show', ['foods', 'qymyz']);
});

Route::get('/figures', function () {
    return redirect()->route('categories.show', 'figures');
});

Route::get('/figures/abai', function () {
    return redirect()->route('items.show', ['figures', 'abai']);
});

Route::get('/figures/kerey-zhanybek', function () {
    return redirect()->route('items.show', ['figures', 'kerey-zhanybek']);
});

Route::get('/figures/alikhan', function () {
    return redirect()->route('items.show', ['figures', 'alikhan']);
});

// Паттерны оставляем как есть (по требованию пользователя)
Route::get('/patterns', function () {
    return view('patterns.index');
});

Route::get('/patterns/qoshqar-muyiz', function () {
    return view('patterns.qoshqar-muyiz');
});

Route::get('/patterns/tuiye-taban', function () {
    return view('patterns.tuiye-taban');
});

Route::get('/patterns/qos-alqa', function () {
    return view('patterns.qos-alqa');
});

// Чат-бот
Route::get('/chatbot', [App\Http\Controllers\ChatbotController::class, 'index'])->name('chatbot.index');
Route::post('/chatbot/query', [App\Http\Controllers\ChatbotController::class, 'query'])->name('chatbot.query');

require __DIR__.'/auth.php';
