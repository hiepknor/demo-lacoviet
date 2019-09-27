<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Category;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Offer;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Product;
use Mckenziearts\Shopper\Models\Media;

class ProductController extends Controller
{
    private $category;

    private $product;

    private $offer;

    private $media;

    public function __construct
    (
        Category $category,
        Product $product,
        Offer $offer,
        Media $media
    )
    {
        $this->category = $category;
        $this->product = $product;
        $this->offer = $offer;
        $this->media = $media;
    }

    public function index() {
        return view('pages.product', [
            'all_categories' => $this->category->get(),
            'category' =>  $this->category,
            'product' => $this->product->get(),
            'offer' => $this->offer
        ]);
    }

    public function detail($categorySlug, $productSlug) {
        $product = $this->product->whereSlug($productSlug)->first();
        $productId = $this->product->whereSlug($productSlug)->value('id');
        $productPrice = $this->offer->whereProductId($productId);
        return view('pages.product-detail', [
            'all_categories' => $this->category->get(),
            'product' => $product,
            'productPrice' => $productPrice,
        ]);
    }
}
