<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Category;
use Mckenziearts\Shopper\Plugins\Orders\Models\PaymentMethod;

class CheckoutController extends Controller
{
    private $category;

    private $paymentMethod;

    public function __construct
    (
        PaymentMethod $paymentMethod,
        Category $category
    )
    {
        $this->category = $category;
        $this->paymentMethod = $paymentMethod;
    }

    public function index() {
        return view('pages.checkout', [
            'all_categories' => $this->category->get(),
            'paymentMethod' => $this->paymentMethod->get(),
        ]);
    }
}
