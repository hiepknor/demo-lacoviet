<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Category;
use Mckenziearts\Shopper\Plugins\Orders\Models\PaymentMethod;

class CheckoutController extends Controller
{
    private $paymentMethod;

    public function __construct(PaymentMethod $paymentMethod) {
        $this->paymentMethod = $paymentMethod;
    }

    public function index() {
        $allCategories = Category::get();
        $paymentMethod = $this->paymentMethod->get();
        return view('pages.checkout', compact('allCategories', 'paymentMethod'));
    }
}
