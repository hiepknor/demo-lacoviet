<?php

namespace App\Http\Controllers;

use Mckenziearts\Shopper\Plugins\Catalogue\Models\Banner;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Category;

class HomeController extends Controller
{
    public $banner;

    public function __construct(Banner $banner) {
        $this->banner = $banner;
    }

    public function index() {
        $banner = $this->banner::get();
        $allCategories = Category::get();
        return view('pages.home', compact('banner', 'allCategories'));
    }
}
