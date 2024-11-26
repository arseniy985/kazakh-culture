<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Список товаров
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Форма добавления товара
    public function create()
    {
        return view('products.create');
    }

    // Сохранение нового товара
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
        }

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $path,
        ]);

        return redirect()->route('products.index')->with('success', 'Товар добавлен!');
    }
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // Форма редактирования товара
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Обновление товара
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $product->update(['image' => $path]);
        }

        $product->update($request->only('name', 'description', 'price'));

        return redirect()->route('products.index')->with('success', 'Товар обновлён!');
    }

    // Удаление товара
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Товар успешно удален!');
    }

}
