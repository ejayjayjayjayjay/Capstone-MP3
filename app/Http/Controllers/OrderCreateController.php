<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderCreateController extends Controller
{
    public function create()
    {
        $products = Product::pluck('name', 'id');
        $productPrices = Product::pluck('price', 'id');
        $customers = Customer::pluck('first_name', 'id');
        $users = User::pluck('name', 'id');

        return view('ordercreate.index', compact('products', 'productPrices', 'customers', 'users'));
    }

    public function store(Request $request)
    {
        $order = new Order();
        $order->product = $request->input('product');
        $order->customer_id = $request->input('customer_id');
        $order->quantity = $request->input('quantity');
        $order->total = $request->input('total');
        $order->status = $request->input('status');
        $order->user_id = $request->input('user_id');

        $order->save();

        $notification = array(
            'message' => 'Successfully Added',
                    'alert-type' => 'success'
        );
        return redirect()->route('ordercreate.index')->with($notification);
    }

}
