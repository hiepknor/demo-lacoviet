<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Category;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Product;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Offer;

class CategoryController extends Controller
{
    private $offer;

    public function __construct
    (
        Offer $offer
    )
    {
        $this->offer = $offer;
    }

    public function index($categorySlug) {
        $all_categories = Category::get();
        $category_by_slug = Category::where('slug', $categorySlug)->first();
        $product = Product::where('category_id', $category_by_slug->id)->get();
        $offer = $this->offer;
        return view('pages.category', compact('all_categories', 'category_by_slug', 'product', 'offer'));
    }
}
