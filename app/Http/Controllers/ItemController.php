<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Отображение списка всех записей
     */
    public function index()
    {
        $items = Item::with('category')->get();
        return view('items.index', compact('items'));
    }
    
    /**
     * Отображение конкретной записи по slug
     */
    public function show($categorySlug, $itemSlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();
        $item = Item::where('slug', $itemSlug)
                    ->where('category_id', $category->id)
                    ->firstOrFail();
        
        $relatedItems = Item::where('category_id', $category->id)
                           ->where('id', '!=', $item->id)
                           ->limit(3)
                           ->get();
        
        return view('items.show', compact('item', 'category', 'relatedItems'));
    }
}
