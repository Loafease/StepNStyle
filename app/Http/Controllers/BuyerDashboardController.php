<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class BuyerDashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role === 'buyer') {
            return view('buyer.dashboard');
        } else {
            // Handle unauthorized access or redirect to a different view
        }
    }
}
