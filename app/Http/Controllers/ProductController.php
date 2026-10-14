<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::query()
            ->where('is_active', true)
            ->where('category', '!=', 'bundle')
            ->orderBy('id')
            ->get();

        $bundles = Product::query()
            ->where('is_active', true)
            ->where('category', 'bundle')
            ->orderBy('id')
            ->get();

        return view('home', compact('products', 'bundles'));
    }

    public function show(Product $product): View
    {
        abort_unless($product->is_active, 404);

        $relatedProducts = Product::query()
            ->where('is_active', true)
            ->where('id', '!=', $product->id)
            ->take(3)
            ->get();

        return view('products.show', compact('product', 'relatedProducts'));
    }
}
