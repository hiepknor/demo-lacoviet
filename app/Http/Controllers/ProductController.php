<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Category;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Product;

class ProductController extends Controller
{
    private $publicParams;

    private $category;

    private $product;

    public function __construct(Category $category, Product $product) {
        $this->category = $category;
        $this->product = $product;
        $this->publicParams = [
            'allCategories' => $category->get(),
        ];
    }

    public function index() {
        $product = $this->product->get();
        return view('pages.product', [
            'allCategories' => $this->publicParams['allCategories'],
            'product' => $product,
        ]);
    }

    public function detail($categorySlug, $productSlug) {
        $product = $this->product->where('slug', $productSlug)->first();
        return view('pages.product-detail', [
            'allCategories' => $this->publicParams['allCategories'],
            'product' => $product,
        ]);
    }
}
