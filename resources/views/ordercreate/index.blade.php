@extends('agent.agent_dashboard')

@section('agent')
    <style>
        .form1 {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f5f5f5;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        select,
        input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select {
            height: 38px;
        }

        input[type="number"] {
            height: 38px;
        }

        .btn3 {
            display: inline-block;
            padding: 8px 12px;
            background-color: #4CAF50;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }
    </style>
    <div class="text-center">
        <h3 class="p-5 pb-2 font-weight-bold">Add Orders</h3>
    </div>
    <form class="form1" action="{{ route('ordercreate.store') }}" method="POST">
        @csrf

        <!-- Input fields for order details -->
        <div>
            <label for="product">Products:</label>
            <select name="product" id="product">
                @foreach ($products as $productId => $productName)
                    <option value="{{ $productId }}">{{ $productName }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="customer">Customer:</label>
            <select name="customer_id" id="customer">
                @foreach ($customers as $customerId => $customerName)
                    <option value="{{ $customerId }}">{{ $customerName }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity">
        </div>

        <div>
            <label for="total">Total:</label>
            <input type="number" name="total" id="total">
        </div>

        <div>
            <label for="status">Status:</label>
            <select name="status" id="status" style="width: 100%;">
                <option value="paid">Paid</option>
                <option value="not paid">Not Paid</option>
            </select>
        </div>

        <div>
            <label for="user_id">Agent:</label>
            <select name="user_id" id="user_id">
                @foreach ($users as $userId => $userName)
                    <option value="{{ $userId }}">{{ $userName }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <button class="btn3" type="submit">Create Order</button>
        </div>
    </form>
@endsection
