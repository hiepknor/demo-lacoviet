<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Category;

class ProductController extends Controller
{
    public function __construct() {
        //
    }

    public function index() {
        $allCategories = Category::get();
        return view('pages.product', compact('allCategories'));
    }
}
