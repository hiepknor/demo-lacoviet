<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Category;

class NewsController extends Controller
{
    public function __construct() {
        //
    }

    public function index() {
        $allCategories = Category::get();
        return view('pages.news', compact('allCategories'));
    }
}
