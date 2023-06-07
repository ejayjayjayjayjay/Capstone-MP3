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

        .d-flex.align-items-center {
            background-color: #f5f5f5;
            padding: 10px;
        }

        h5.p-5.pb-2 {
            margin: 0;
            padding: 10px;
            font-size: 20px;
        }

        .font-22.ms-auto {
            font-size: 22px;
            color: #777;
            cursor: pointer;
        }

        .container-fluid {
            padding: 20px;
        }

        .card {
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
        }

        form[action="{{ route('orders.index') }}"] {
            margin-bottom: 20px;
        }

        .col-md-5 {
            padding-right: 10px;
        }

        input[type="date"].form-control {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 8px;
            width: 100%;
        }

        .col-md-2 {
            padding-left: 10px;
        }

        .btn.btn-primary {
            background-color: #007bff;
            border: none;
            color: #fff;
        }

        .btn.btn-primary i {
            margin-right: 5px;
        }

        table.table.table-bordered.table-hover {
            width: 100%;
            border-collapse: collapse;
        }

        thead.thead-dark {
            background-color: #343a40;
            color: #fff;
        }

        th,
        td {
            padding: 10px;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        span.badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 14px;
        }

        span.badge-danger {
            background-color: #dc3545;
            color: #fff;
        }

        span.badge-warning {
            background-color: #ffc107;
            color: #000;
        }

        span.badge-success {
            background-color: #28a745;
            color: #fff;
        }

        span.badge-info {
            background-color: #17a2b8;
            color: #fff;
        }

        tfoot {
            font-weight: bold;
        }

        tfoot th {
            text-align: right;
        }

        .button-54 {
            font-family: "Open Sans", sans-serif;
            font-size: 16px;
            letter-spacing: 2px;
            text-decoration: none;
            text-transform: uppercase;
            color: black;
            cursor: pointer;
            border: 3px solid;
            padding: 0.25em 0.5em;
            box-shadow: 1px 1px 0px 0px, 2px 2px 0px 0px, 3px 3px 0px 0px, 4px 4px 0px 0px, 5px 5px 0px 0px;
            position: relative;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-54:active {
            box-shadow: 0px 0px 0px 0px;
            top: 5px;
            left: 5px;
        }

        @media (min-width: 768px) {
            .button-54 {
                padding: 0.25em 0.75em;
            }
        }
    </style>
    <div class="col-10 card container">
        <div class="card-body">
            <h3 class="fw-bold text-center">Add Order</h3>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <h3 class="p-5 pb-2 font-weight-bold"></h3>
                </div>
                <form class="form1" action="{{ route('ordercreate.store') }}" method="POST">
                    @csrf

                    <!-- Input fields for order details -->
                    <div>
                        <label for="product">Products:</label>
                        <select name="product" id="product">
                            @foreach ($products as $productId => $productName)
                                <option>{{ $products[$productId]->name }}</option>
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
                        <input type="number" name="quantity" id="quantity" required>
                    </div>

                    <div>
                        <label for="total">Price:</label>
                        <input type="number" name="total" id="total" required>
                    </div>

                    <div>
                        <label for="status">Payment:</label>
                        <select name="status" id="status" style="width: 100%;">
                            <option value="paid">Paid</option>
                            <option value="not paid">Not Paid</option>
                        </select>
                    </div>

                    @if (Auth::check())
                        <div class="pb-3">
                            <label for="user_id">Agent:</label>
                            <select name="user_id" id="user_id">
                                <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
                            </select>
                        </div>
                    @endif

                    <div>
                        <button class="btn3" type="submit">Create Order</button>
                    </div>
                </form>
            </div>
            <div class="col text-center">
                <h3 class="p-5 pb-2 font-weight-bold">Products</h3>
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th>Product No.</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Stocks</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $productId => $productName)
                            <tr class="text-center fw-bold">
                                <td>{{ $products[$productId]->id }}</td>
                                <td>{{ $products[$productId]->name }}</td>
                                <td>{{ $products[$productId]->description }}</td>
                                <td>₱ {{ $products[$productId]->price }}</td>
                                <td>{{ $products[$productId]->quantity }}</td>
                            </tr>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
