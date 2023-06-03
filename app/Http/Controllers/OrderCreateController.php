<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderCreateController extends Controller
{

    public function index()
    {
        if (request()->wantsJson()) {
            return response(
                Product::all()
            );
        }
        $products = Product::latest()->paginate(10);
        return view('ordercreate.index')->with('products', $products);
    }

    public function create()
    {
        $products = Product::select('id','name', 'description', 'quantity', 'price')->get();
        $customers = Customer::pluck('first_name', 'id');
        $users = User::pluck('name', 'id');

        return view('ordercreate.index', compact('products', 'customers', 'users'));
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

        $product = Product::where('name', $order->product)->first(); // Assuming 'name' is the column representing the product name in the 'products' table

        if ($product) {
            if ($product->quantity < $order->quantity) {
                $notification = array(
                    'message' => 'Product is out of stock',
                    'alert-type' => 'error'
                );
                return redirect()->route('ordercreate.index')->with($notification);
            }

            $product->quantity -= $order->quantity;
            $product->save();
        }

        $order->save();

        $notification = array(
            'message' => 'Successfully Added',
            'alert-type' => 'success'
        );
        return redirect()->route('ordercreate.index')->with($notification);
    }


}
