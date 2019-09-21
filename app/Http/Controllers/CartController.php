<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Category;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Product;

class CartController extends Controller
{
    private $product;
    private $category;

    public function __construct
    (
        Product $product,
        Category $category
    )
    {
        $this->product = $product;
        $this->category = $category;
    }

    public function index()
    {

        return view('pages.cart', [
            'all_categories' => $this->category->get(),
        ]);
    }

    public function addToCart($id)
    {
        $product = Product::find($id);

        if (!$this->product) {

            abort(404);
        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if (!$cart) {

            $cart = [
                $id => [
                    "id" => $id,
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $this->roundPrice($product->offers()->value('price')),
                    "photo" => $product->photo
                ]
            ];

            session()->put('cart', $cart);

            return redirect('gio-hang')->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect('gio-hang')->with('success', 'Product added to cart successfully!');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id" => $id,
            "name" => $product->name,
            "quantity" => 1,
            "price" => $this->roundPrice($product->offers()->value('price')),
            "photo" => $product->photo
        ];

        session()->put('cart', $cart);

        return redirect('gio-hang')->with('success', 'Product added to cart successfully!');
    }

    public function updateCart(Request $request)
    {
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function removeCart(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

    private function roundPrice($price) {
        return round($price, 0);
    }
}
