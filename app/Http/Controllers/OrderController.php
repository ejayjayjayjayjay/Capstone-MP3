<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Commission;
use Illuminate\Http\Request;
use App\Http\Requests\OrderStoreRequest;
use App\Models\Payment;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::query();

        if ($request->start_date) {
            $orders->where('created_at', '>=', $request->start_date);
        }

        if ($request->end_date) {
            $orders->where('created_at', '<=', $request->end_date . ' 23:59:59');
        }

        $orders = $orders->with('customer')->latest()->paginate(10);

        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(OrderStoreRequest $request)
    {
        $order = Order::create([
            'customer_id' => $request->customer_id,
            'user_id' => $request->user()->id,
        ]);

        // Update the agent's commission in the users table
        $agent = User::find($request->user()->id);
        $agent->total_commissions += $request->total_commissions;
        $agent->save();

        // Create a payment record with the amount and user ID
        $order->payments()->create([
            'total_profit' => $request->total_profit,
        ]);

        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

    public function show(Order $order)
    {
        // Implement logic for showing order details if needed
    }

    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        if (!$order) {
            return redirect()->route('orders.index')->with('error', 'Order not found.');
        }

        // Update order status
        $order->order_status = $request->input('order_status');
        $order->save();

        // Update or create commission record
        $commission = Commission::updateOrCreate(
            ['order_id' => $order->id],
            [   
                'user_id' => $request->input('user_id'),
                'total_commissions' => $request->input('total_commissions'),
                'total_profit' => $request->input('total_profit'),
            ]
        );

        // Update payment table with user_id
        $payment = Payment::where('order_id', $order->id)->first();
        if ($payment) {
            $payment->user_id = $request->input('user_id');
            $payment->save();
        }

        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }



}
