<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::where('stock', '>', 0)
            ->orderBy('id', 'desc')
            ->paginate(15);

        $brands = Brand::orderBy('id', 'desc')
            ->get();

        $categories = Category::orderBy('id', 'desc')
            ->get();

        return view('home')
            ->with([
                'products' => $products,
                'brands' => $brands,
                'categories' => $categories,
            ]);
    }
}
