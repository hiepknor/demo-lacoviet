<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Category;
use Mckenziearts\Shopper\Plugins\Orders\Models\Order;
use Mckenziearts\Shopper\Plugins\Orders\Models\PaymentMethod;
use Mckenziearts\Shopper\Plugins\Users\Models\User;
use Mckenziearts\Shopper\Plugins\Users\Models\Address;

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

    public function saveCustomer(Request $request) {
        $user = new User();

        $user->name     = $request->name;
        $user->password = 1;
        $user->phone    = $request->phone;

        $user->save();
    }

    public function saveAddress(Request $request) {
        $lastRecord = Address::orderBy('created_at', 'desc')->first();

        $address = new Address();

        if (isset($lastRecord)) {
            $address->user_id = ($lastRecord->id + 1);
        } 
        else {
            $address->user_id = 1;
        }

        $address->active       = 1;
        $address->country_id   = 1;
        $address->state_id     = 1;
        $address->city         = $request->city;
        $address->street       = $request->street;
        $address->phone_number = $request->phone;
        $address->address      = $request->address;

        $address->save();
    }

    public function saveOrder(Request $request) {
        $this->saveCustomer($request);

        $this->saveAddress($request);
        
        $lastRecord = Order::orderBy('created_at', 'desc')->first();

        $order = new Order();

        if (isset($lastRecord)) {
            $order->user_id = ($lastRecord->id + 1);
        } 
        else {
            $order->user_id = 1;
        }

        $order->status_id = 1;
        $order->order_number = "";
    }
}
