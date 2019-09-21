<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Category;
use Mckenziearts\Shopper\Plugins\Orders\Models\Order;
use Mckenziearts\Shopper\Plugins\Orders\Models\PaymentMethod;
use Mckenziearts\Shopper\Plugins\Users\Models\User;
use Mckenziearts\Shopper\Plugins\Users\Models\Address;
use Mckenziearts\Shopper\Plugins\Orders\Models\ShippingType;

class CheckoutController extends Controller
{
    private $category;

    private $paymentMethod;

    public function __construct
    (
        PaymentMethod $paymentMethod,
        Category $category,
        ShippingType $shippingType
    )
    {
        $this->category      = $category;
        $this->paymentMethod = $paymentMethod;
        $this->shippingType  = $shippingType;
    }

    public function index() {
        return view('pages.checkout', [
            'all_categories' => $this->category->get(),
            'paymentMethod'  => $this->paymentMethod->get(),
            'shippingType'   => $this->shippingType->get(),
        ]);
    }

    public function saveCustomer(Request $request) {
        $user = new User();

        $user->name              = $request->name;
        $user->last_name          = "";
        $user->email             = "user@".now()->toDateTimeString();
        $user->email_verified_at = Carbon::now();
        $user->password          = 1;
        $user->phone             = $request->phone;
        $user->avatar            = "";
        $user->remember_token    = "";

        $user->save();
    }

    public function saveAddress(Request $request) {
        $lastRecord = Address::orderBy('created_at', 'desc')->first();

        $address = new Address();

        if (isset($lastRecord)) {
            $address->user_id = ($lastRecord->user_id + 1);
        }
        else {
            $address->user_id = 1;
        }

        $address->active       = 1;
        $address->country_id   = 204;
        $address->state_id     = 240;
        $address->city         = $request->city;
        $address->street       = $request->street;
        $address->phone_number = $request->phone;
        $address->post_code    = "";
        $address->address      = $request->ward.','.$request->district;

        $address->save();
    }

    public function saveOrder(Request $request) {
        $this->saveCustomer($request);

        $this->saveAddress($request);

        // Get current date to string
        $now = Carbon::now()->toDateTimeString();

        // Check if have record
        $lastRecord = Order::orderBy('created_at', 'desc')->first();

        $order = new Order();

        if (isset($lastRecord)) {
            $order->user_id = ($lastRecord->user_id + 1);
        }
        else {
            $order->user_id = 1;
        }

        $order->status_id = 1;
        $order->order_number = $now."ORDER".$order->id;
        $order->secret_key = "";
        $order->total_price = $request->total_price;
        $order->shipping_price = "20000.00";
        $order->shipping_type_id = 1;
        $order->payment_method_id = $request->payment_method;
        $order->property = $request->property;

        $order->save();

        session()->flush();
        return response()->json(['success' => 'Product ordered successfully!']);
    }
}
