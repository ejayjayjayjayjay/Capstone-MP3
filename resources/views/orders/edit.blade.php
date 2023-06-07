@extends('admin.admin_dashboard')

@section('title', 'Update Order')
@section('content-header', 'Update Order')

@section('admin')
    <style>
        .form-group1 {
            padding-bottom: 15px;
        }

        .calculator1 {
            padding-top: 15px;
        }

        .box1 {
            border-radius: 51px 5px;
            border: 2px;
        }
    </style>
    <div class="col-10 card container">
        <div class="card-body">
            <h3 class="fw-bold text-center">Update Order & Agent Commission</h3>
        </div>
    </div>
    <div class="col-9 mx-auto">
        <div class="box1 card container-fluid">
            <div class="card-body">
                <form action="{{ route('orders.updates', ['order' => $order->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="order_status" class="fw-bold">Update Order Status</label>
                        <select name="order_status" id="order_status" class="form-control">
                            <option value="pending" {{ $order->order_status == 'pending' ? 'selected' : '' }}>Pending
                            </option>
                            <option value="cancelled" {{ $order->order_status == 'cancelled' ? 'selected' : '' }}>Cancelled
                            <option value="for delivery" {{ $order->order_status == 'for delivery' ? 'selected' : '' }}>for
                                delivery
                            </option>
                            <option value="delivered" {{ $order->order_status == 'delivered' ? 'selected' : '' }}>delivered
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="user_id" class="fw-bold">Agent ID</label>
                        <input type="number" name="user_id" id="user_id" class="form-control"
                            value="{{ $order->user_id }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="agent_commission" class="fw-bold">Agent Commission</label>
                        <input type="number" name="total_commissions" id="agent_commission" class="form-control"
                            value="{{ $order->payment ? $order->payment->total_commissions : '' }}" required>
                    </div>

                    <div class="form-group1">
                        <label for="profit" class="fw-bold">Profit</label>
                        <input type="number" name="total_profit" id="profit" class="form-control"
                            value="{{ $order->payment ? $order->payment->total_profit : '' }}" required>
                    </div>

                    <input type="hidden" name="user_id" value="{{ $order->payment ? $order->payment->user_id : '' }} "
                        disabled>

                    <button type="submit" class="btn btn-primary">Update Order</button>

                    <a href="{{ route('orders.index') }}">
                        <button type="button" class="btn btn-danger">Cancel</button>
                    </a>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
