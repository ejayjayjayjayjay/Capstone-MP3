@extends('admin.admin_dashboard')

@section('title', 'Product Management')
@section('content-header', 'Product Management')
@section('css')
    <link rel="stylesheet" href="{{ asset('/resources/css/app.css') }}">
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
    </style>
    <div class="text-center">
        <h3 class="p-3 pb-0 font-weight-bold">Products List</h3>
    </div>
    <div class="d-flex align-items-center">
        <div class="d-flex align-items-center mb-3">
            <div class="flex-grow-5"></div>
            <a href="{{ route('products.create') }}" class="btn btn-success">Add Product</a>
        </div>
    </div>
    <div class="card product-list container-fluid">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Barcode</th>
                        <th>Price</th>
                        <th>Stocks</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product => $row)
                        <tr>
                            <td>{{ $row->name }}</td>
                            <td><img class="product-img img-thumbnail" src="{{ Storage::url($row->image) }}" alt="">
                            </td>
                            <td>{{ $row->barcode }}</td>
                            <td>{{ config('settings.currency_symbol') }}{{ $row->price }}</td>
                            <td>{{ $row->quantity }}</td>
                            <td>
                                <span
                                    class="right badge badge-{{ $row->status ? 'success' : 'danger' }}">{{ $row->status ? 'Active' : 'Inactive' }}</span>
                            </td>
                            <td>{{ $row->created_at }}</td>
                            <td>{{ $row->updated_at }}</td>
                            <td>
                                <a href="{{ route('products.edit', $row) }}" class="btn btn-primary">
                                    <i class='bx bxs-edit'></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{ URL::to('/products/delete-product/' . $row->id) }}" class="btn btn-danger"><i
                                        class='bx bxs-trash'></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->render() }}
        </div>
    </div>
@endsection
