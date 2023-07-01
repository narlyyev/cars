<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug)
    {
        $product = Product::where('slug', $slug)
            ->with('brand')
            ->with('category')
            ->orderBy('id', 'desc')
            ->firstOrFail();

        $categories = Category::orderBy('id', 'desc')
            ->get();

        $brands = Brand::orderBy('id', 'desc')
            ->get();

        return view('product.show')
            ->with([
                'product' => $product,
                'categories' => $categories,
                'brands' => $brands,
            ]);
    }
}
