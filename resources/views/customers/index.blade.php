@extends('agent.agent_dashboard')

@section('title', 'Customer Management')
@section('content-header', 'Customer Management')
@section('agent')
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

    <div class="d-flex align-items-center">
        <div>
            <h5 class="p-5 pb-2">Customers List</h5>
        </div>
        <div class="d-flex justify-content-end align-items-end mb-3">
            <a href="{{ route('customers.create') }}" class="btn btn-success btn-add-customer">Add Customer</a>
        </div>
        <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
        </div>
    </div>
    <div class="card container-fluid">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Avatar</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>
                                <img width="40px" class="img-thumbnail" src="{{ $customer->getAvatarUrl() }}"
                                    alt="">
                            </td>
                            <td>{{ $customer->first_name }} {{ $customer->last_name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>{{ $customer->created_at }}</td>
                            <td>
                                <a href="{{ route('customers.edit', $customer) }}" class="btn btn-primary">
                                    <i class='bx bxs-edit'></i>
                                </a><button class="btn btn-danger btn-delete"
                                    data-url="{{ route('customers.destroy', $customer) }}">
                                    <i class='bx bx-trash'></i>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $customers->render() }}
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.btn-delete', function() {
                $this = $(this);
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "Do you really want to delete this customer?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No',
                    reverseButtons: true
                }).then((result) => {
                    if (result.value) {
                        $.post($this.data('url'), {
                            _method: 'DELETE',
                            _token: '{{ csrf_token() }}'
                        }, function(res) {
                            $this.closest('tr').fadeOut(500, function() {
                                $(this).remove();
                            })
                        })
                    }
                })
            })
        })
    </script>
@endsection
