@extends('admin.admin_dashboard')

@section('title', 'Orders List')
@section('content-header', 'Order List')
@section('content-actions')
@endsection

@section('admin')
    <style>
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

        {{ $orders->render() }} {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .box1 {
            border-radius: 51px 5px;
            border: 2px;
        }

        #name {
            width: 30%;
        }
    </style>
    <div class="col-10 card container">
        <div class="card-body">
            <h3 class="fw-bold text-center">List of Orders</h3>
        </div>
    </div>
    <div class="container-fluid pt-5">
        <div class="box1">
            <div class="">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('orders.index') }}" method="GET">
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="date" name="start_date" class="form-control"
                                        value="{{ request('start_date') }}" />
                                </div>
                                <div class="col-md-5">
                                    <input type="date" name="end_date" class="form-control"
                                        value="{{ request('end_date') }}" />
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fas fa-filter"></i> Filter By Date
                                    </button>
                                </div>
                            </div>
                        </form>

                        <form action="{{ route('orders.index') }}" method="GET">
                            <div class="form-group col-xs-4">
                                <label for="name">Name of Customer:</label>
                                <input type="text" id="name" name="name" class="form-control col-xs-4"
                                    placeholder="Enter name">
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Filter By Name</button>
                        </form>

                    </div>
                </div>
                <hr>
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th>Order No.</th>
                            <th>Product Name</th>
                            <th>Customer</th>
                            <th>Quantity</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th>Date of Order</th>
                            <th>Date Updated</th>
                            <th>Agent Name</th>
                            <th>Total Paid</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr class="fw-bold text-center">
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->product }}</td>
                                <td>{{ $order->customer->first_name }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>{{ $order->status }}</td>
                                <td>{{ $order->order_status }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->updated_at }}</td>
                                <td>{{ $order->user->name }}</td>
                                <td>{{ $order->total }}</td>
                                <td>
                                    <a href="{{ route('orders.edit', $order) }}" class="btn btn-primary">Update</a>
                                </td>
                                <td>
                                    <a href="{{ URL::to('/orders/delete-order/' . $order->id) }}"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $orders->render() }}
            </div>
        </div>
    </div>

@endsection
