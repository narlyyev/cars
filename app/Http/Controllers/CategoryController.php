<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id)
    {
        $category = Category::with('products')
            ->findOrFail($id);

        $categories = Category::orderBy('id', 'desc')
            ->get();

        $brands = Brand::orderBy('id', 'desc')
            ->get();

        return view('category.show')
            ->with([
                'category' => $category,
                'categories' => $categories,
                'brands' => $brands,
            ]);
    }
}
