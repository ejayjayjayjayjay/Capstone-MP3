@extends('admin.admin_dashboard')

@section('title', 'Create Product')
@section('content-header', 'Create Product')
@section('admin')
    <style>
        /* Table styles */
        .table-bordered {
            border: 1px solid #ddd;
        }

        .table-hover tbody tr:hover {
            background-color: #f5f5f5;
        }

        .table th,
        .table td {
            padding: 8px;
            vertical-align: middle;
        }

        /* Image styles */
        .product-img {
            max-width: 100px;
            max-height: 100px;
        }

        /* Badge styles */
        .badge {
            padding: 5px 10px;
            font-size: 12px;
            border-radius: 20px;
            text-transform: uppercase;
        }

        .badge-success {
            background-color: #28a745;
            color: #fff;
        }

        .badge-danger {
            background-color: #dc3545;
            color: #fff;
        }

        /* Button styles */
        .btn {
            padding: 5px 10px;
            font-size: 14px;
            border-radius: 4px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }
    </style>
    <div class="d-flex align-items-center">
        <div>
            <h5 class="p-5 pb-2">Products</h5>
        </div>
        <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
        </div>
    </div>
    <div class="card product-list container-fluid">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>

                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Barcode</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td><img class="product-img img-thumbnail" src="{{ Storage::url($product->image) }}"
                                    alt=""></td>
                            <td>{{ $product->barcode }}</td>
                            <td>{{ config('settings.currency_symbol') }}{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                <span
                                    class="right badge badge-{{ $product->status ? 'success' : 'danger' }}">{{ $product->status ? 'Active' : 'Inactive' }}</span>
                            </td>
                            <td>{{ $product->created_at }}</td>
                            <td>{{ $product->updated_at }}</td>
                            <td>
                                <a href="{{ route('products.edit', $product) }}" class="btn btn-primary"><i
                                        class="fas fa-edit"></i></a>
                                <button class="btn btn-danger btn-delete"
                                    data-url="{{ route('products.destroy', $product) }}"><i
                                        class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->render() }}
        </div>
    </div>
@endsection

@section('js')
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
                    text: "Do you really want to delete this product?",
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
