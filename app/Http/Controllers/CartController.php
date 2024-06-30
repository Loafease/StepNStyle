<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = session()->get('cart', []);
        $subtotal = array_sum(array_column($cartItems, 'subtotal'));

        // Default available sizes
        $sizes = ['7', '7.5', '8', '8.5','9','9.5','10','10.5','11','11.5'];

        // Ensure each cart item has a size
        foreach ($cartItems as &$item) {
            if (!isset($item['size'])) {
                $item['size'] = '7'; // Default size if not set
            }
        }
        session()->put('cart', $cartItems);

        $total = $subtotal;
        return view('cart.index', compact('cartItems', 'sizes', 'subtotal', 'total'));
    }

    public function add(Request $request)
    {
        $product = $request->only(['id', 'name', 'price', 'image', 'size']);
        $product['quantity'] = 1;
        $product['subtotal'] = $product['price'] * $product['quantity'];

        // Check if 'size' input exists in the request
        if (!$request->has('size')) {
            $product['size'] = '7'; // Default size if not provided
        }

        $cart = session()->get('cart', []);
        if (isset($cart[$product['id']])) {
            $cart[$product['id']]['quantity'] += 1;
            $cart[$product['id']]['subtotal'] += $product['price'];
        } else {
            $cart[$product['id']] = $product;
        }

        session()->put('cart', $cart);

        if ($request->ajax()) {
            return response()->json(['success' => 'Product added to cart!']);
        }

        return redirect()->route('cart.index')->with('success', 'Product added to cart!');
    }

    public function update(Request $request, $id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            $cart[$id]['size'] = $request->size; // Update size as well
            $cart[$id]['subtotal'] = $cart[$id]['price'] * $request->quantity;
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);
        unset($cart[$id]);
        session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }

    public function clear()
    {
        session()->forget('cart');
        return redirect()->route('cart.index');
    }
}
