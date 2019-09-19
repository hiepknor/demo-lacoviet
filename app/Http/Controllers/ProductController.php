<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Category;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Product;

class ProductController extends Controller
{
    public $publicParams;

    public $category;

    public $product;

    public function __construct(Category $category, Product $product) {
        $this->category = $category;
        $this->product = $product;
        $this->publicParams = [
            'allCategories' => $category->get(),
        ];
    }

    public function index() {
        return view('pages.product', [
            'allCategories' => $this->publicParams['allCategories']
        ]);
    }

    public function detail($categorySlug, $productSlug) {

        return view('pages.product-detail', [
            'allCategories' => $this->publicParams['allCategories']
        ]);
    }
}
