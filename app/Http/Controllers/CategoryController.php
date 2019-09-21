<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Category;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Product;

class CategoryController extends Controller
{
    private $category;

    private $product;

    public function __construct
    (
        Category $category,
        Product $product
    )
    {
        $this->category = $category;
        $this->product = $product;
    }

    public function index($categorySlug) {
        $categoryBySlug = $this->category->where('slug', $categorySlug)->first();
        $product = $this->product->where('category_id', $categoryBySlug->id)->get();
        return view('pages.category', [
            'all_categories' => $this->category->get(),
            'category_by_slug' => $categoryBySlug,
            'product' => $product
        ]);
    }
}
