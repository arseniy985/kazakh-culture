<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Отображение списка всех категорий
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Отображение конкретной категории по slug
     */
    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $items = $category->items;
        
        return view('categories.show', compact('category', 'items'));
    }
}
