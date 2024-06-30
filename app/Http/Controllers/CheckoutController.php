<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class CheckoutController extends Controller
{

    public function index()
    {
        // Retrieve cart items from session
        $cartItems = session()->get('cart', []);
    
        // Calculate subtotal
        $subtotal = 0;
        foreach ($cartItems as $item) {
            $product = Product::findOrFail($item['id']);
            $subtotal += $product->price * $item['quantity'];
        }
    
        // Pass the subtotal and cart items to the checkout page
        return view('checkout.index', compact('subtotal', 'cartItems'));
    }
    public function submit(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            // Add more validation rules as needed
        ]);

        // Create a new order
        $order = new Order();
        $order->user_id = Auth::id();
        $order->customer_name = $request->input('name');
        $order->customer_email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->total_amount = $request->input('total'); // Assuming $totalAmount is calculated elsewhere
        $order->save();
        

        // Clear the cart (assuming you have a function to clear the cart in your CartController)
        $this->clearCart();

        // Redirect to the order confirmation page
        return redirect()->route('orders.index')->with('success', 'Your order has been placed successfully.');
    }

    protected function clearCart()
    {
        // Implement your logic to clear the cart here
    }
}
