<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Contracts\Support\Renderable;


class HomeController extends Controller
{

    public function index()
    {
        $orders = Order::with(['items', 'payments'])->get();
        $customers_count = Customer::count();
        $products_count = Product::count();

        return view('dashboard', [
            'orders' => $orders,
            'customers_count' => $customers_count,
            'products_count' => $products_count,
        ]);
    }
}
