@extends('admin.admin_dashboard')

@section('title', 'Customer Management')
@section('content-header', 'Customer Management')
@section('admin')
    <style>
        form[action="{{ route('orders.index') }}"] {
            margin-bottom: 20px;
        }

        input[type="date"].form-control {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 8px;
            width: 100%;
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

        ..box1 {
            border-radius: 51px 5px;
            border: 2px;
        }
    </style>
    <div class="col-10 card container">
        <div class="card-body">
            <h3 class="fw-bold text-center">List of Customers</h3>
        </div>
    </div>
    <div class="box1 container-fluid pt-5">
        <div class="">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>Fullname</th>
                        <th>Email</th>
                        <th>Phonenumber</th>
                        <th>Address</th>
                        <th>Date</th>
                        <th>Agent Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer => $row)
                        <tr class="fw-bold text-center">
                            <td>{{ $row->first_name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->phone }}</td>
                            <td>{{ $row->address }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td>{{ $row->user->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $customers->render() }}
        </div>
    </div>
@endsection
