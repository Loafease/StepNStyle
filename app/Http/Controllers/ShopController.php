<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function index()
   
{
    $products = Product::all();
    return view('shop.index', compact('products'));
}
    public function category($category)
{
    $products = Product::where('category', $category)->get();
    return view('shop', compact('products'));
}
}