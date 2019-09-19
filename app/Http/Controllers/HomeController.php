<?php

namespace App\Http\Controllers;

use Mckenziearts\Shopper\Plugins\Catalogue\Models\Banner;

class HomeController extends Controller
{
    public $banner;

    public function __construct(Banner $banner) {
        $this->banner = $banner;
    }

    public function index() {
        $banner = $this->banner::get();
        return view('pages.home', compact('banner'));
    }
}
