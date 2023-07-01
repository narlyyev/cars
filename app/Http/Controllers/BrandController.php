<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function show($slug)
    {
        $brand = Brand::where('slug', $slug)
            ->orderBy('id', 'desc')
            ->with('products')
            ->firstOrFail();

        $categories = Category::orderBy('id', 'desc')
            ->get();

        $brands = Brand::orderBy('id', 'desc')
            ->get();

        return view('brand.show')
            ->with([
                'brand' => $brand,
                'categories' => $categories,
                'brands' => $brands,
            ]);
    }
}
