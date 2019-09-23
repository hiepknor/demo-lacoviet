<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Category;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Offer;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Product;

class ProductController extends Controller
{
    private $category;

    private $product;

    private $offer;

    public function __construct
    (
        Category $category,
        Product $product,
        Offer $offer
    )
    {
        $this->category = $category;
        $this->product = $product;
        $this->offer = $offer;
    }

    public function index() {
        return view('pages.product', [
            'all_categories' => $this->category->get(),
            'product' => $this->product->get(),
            'offer' => $this->offer
        ]);
    }

    public function detail($categorySlug, $productSlug) {
        $product = $this->product->whereSlug($productSlug)->first();
        $productId = $this->product->whereSlug($productSlug)->first()->value('id');
        $productPrice = $this->offer->whereProductId($productId)->first();
        return view('pages.product-detail', [
            'all_categories' => $this->category->get(),
            'product' => $product,
            'productPrice' => $productPrice
        ]);
    }
}
