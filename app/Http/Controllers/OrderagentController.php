<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Requests\OrderStoreRequest;

class OrderagentController extends Controller
{
    public function create()
    {
        $customers = Customer::all(); // Fetch all customers from the database
        return view('orderagent.index')->with(['customers' => $customers]);
    }

   public function index(Request $request)
    {
        $user = $request->user(); // Get the logged-in user
        $orders = Order::where('user_id', $user->id); // Filter orders by user_id

        if ($request->start_date) {
            $orders = $orders->where('created_at', '>=', $request->start_date);
        }
        if ($request->end_date) {
            $orders = $orders->where('created_at', '<=', $request->end_date . ' 23:59:59');
        }

        $orders = $orders->with(['items', 'payments', 'customer'])->latest()->paginate(10);

        $total = $orders->map(function ($i) {
            return $i->total();
        })->sum();

        $receivedAmount = $orders->map(function ($i) {
            return $i->receivedAmount();
        })->sum();

        return view('orderagent.index', compact('orders', 'total', 'receivedAmount'));
    }

    public function store(OrderStoreRequest $request)
    {
        $user = $request->user(); // Get the logged-in user

        $order = Order::create([
            'user_id' => $user->id,
            'customer' => $request->customer,
            'total' => $request->total,
            'received' => $request->received,
            'status' => $request->status,
            'remain' => $request->total - $request->received,
            'created_at' => Carbon::now(),
        ]);

        // You can adjust the logic below to fit your item and payment models

        // $cart = $user->cart()->get();
        // foreach ($cart as $item) {
        //     $order->items()->create([
        //         'price' => $item->price * $item->pivot->quantity,
        //         'quantity' => $item->pivot->quantity,
        //         'product_id' => $item->id,
        //     ]);
        //     $item->quantity = $item->quantity - $item->pivot->quantity;
        //     $item->save();
        // }
        // $user->cart()->detach();

        // $order->payments()->create([
        //     'amount' => $request->amount,
        //     'user_id' => $user->id,
        // ]);

        return 'success';
    }

}
