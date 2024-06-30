<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function cart()
    {
        
        $cartItems = []; 

        return view('buyer.cart', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        return redirect()->route('cart')->with('success', 'Item added to cart successfully.');
    }

    public function updateCart(Request $request)
    {
            return redirect()->route('cart')->with('success', 'Cart updated successfully.');
    }

    public function checkout()
    {
         $cartItems = [];     return view('buyer.checkout', compact('cartItems'));
    }
}
