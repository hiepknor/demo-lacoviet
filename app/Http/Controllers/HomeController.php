<?php

namespace App\Http\Controllers;

use Mckenziearts\Shopper\Plugins\Catalogue\Models\Banner;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Category;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Product;

class HomeController extends Controller
{
    private $banner;

    private $category;

    private $product;

    public function __construct(Banner $banner, Category $category, Product $product) {
        $this->banner = $banner;
        $this->category = $category;
        $this->product = $product;
    }

    public function index() {
        $banner = $this->banner::get();
        $allCategories = Category::get();
        $product = $this->product->get();
        return view('pages.home', [
            'banner' => $banner,
            'allCategories' => $allCategories,
            'product' => $product
        ]);
    }
}
