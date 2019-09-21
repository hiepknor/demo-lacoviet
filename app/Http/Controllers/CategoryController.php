<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Category;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Product;

class CategoryController extends Controller
{
    public function __construct() {
        //
    }

    public function index($categorySlug) {
        $allCategories = Category::get();
        $categoryBySlug = Category::where('slug', $categorySlug)->first();
        $product = Product::where('category_id', $categoryBySlug->id)->get();
        return view('pages.category', compact('allCategories', 'categoryBySlug', 'product'));
    }
}
