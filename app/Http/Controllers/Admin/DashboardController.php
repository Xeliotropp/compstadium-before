<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.dashboard', compact('orders'));
    }
}
