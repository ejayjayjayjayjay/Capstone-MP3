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
    </style>

    <div class="d-flex align-items-center">
        <div>
            <h5 class="p-5 pb-2 text-align-center">Latest Orders</h5>
        </div>
        <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card">

            <div class="card-body">
                <div class="row">

                    <div class="col-md-12">
                        <form action="{{ route('orders.index') }}">
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
                                    <button class="btn btn-primary" type="submit"><i class="fas fa-filter"></i>
                                        Filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Customer</th>
                            <th>Total</th>
                            <th>Received</th>
                            <th>Status</th>
                            <th>Remain.</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->getCustomerName() }}</td>
                                <td>{{ config('settings.currency_symbol') }} {{ $order->formattedTotal() }}</td>
                                <td>{{ config('settings.currency_symbol') }} {{ $order->formattedReceivedAmount() }}</td>
                                <td>
                                    @if ($order->receivedAmount() == 0)
                                        <span class="badge badge-danger">Not Paid</span>
                                    @elseif($order->receivedAmount() < $order->total())
                                        <span class="badge badge-warning">Partial</span>
                                    @elseif($order->receivedAmount() == $order->total())
                                        <span class="badge badge-success">Paid</span>
                                    @elseif($order->receivedAmount() > $order->total())
                                        <span class="badge badge-info">Change</span>
                                    @endif
                                </td>
                                <td>{{ config('settings.currency_symbol') }}
                                    {{ number_format($order->total() - $order->receivedAmount(), 2) }}</td>
                                <td>{{ $order->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>

                        <tr>
                            <th></th>
                            <th></th>
                            <th>{{ config('settings.currency_symbol') }} {{ number_format($total, 2) }}</th>
                            <th>{{ config('settings.currency_symbol') }} {{ number_format($receivedAmount, 2) }}</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
                {{ $orders->render() }}
            </div>
        </div>
    </div>
@endsection
