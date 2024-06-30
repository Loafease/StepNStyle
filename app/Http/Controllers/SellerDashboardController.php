<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class SellerDashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role === 'seller') {
            return view('seller.dashboard');
        } else {
            // Handle unauthorized access or redirect to a different view
        }
    }
}
