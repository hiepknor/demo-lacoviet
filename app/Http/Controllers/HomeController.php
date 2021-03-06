<?php

namespace App\Http\Controllers;

use Mckenziearts\Shopper\Plugins\Catalogue\Models\Banner;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Category;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Offer;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Product;

class HomeController extends Controller
{
    private $banner;

    private $category;

    private $product;

    private $offer;

    public function __construct
    (
        Banner $banner,
        Category $category,
        Product $product,
        Offer $offer
    )
    {
        $this->banner = $banner;
        $this->category = $category;
        $this->product = $product;
        $this->offer = $offer;
    }

    public function index() {
        return view('pages.home', [
            'banner' => $this->banner::get(),
            'all_categories' => $this->category->get(),
            'product' => $this->product->get(),
            'offer' => $this->offer,
        ]);
    }
}
