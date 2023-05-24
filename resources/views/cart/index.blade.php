@extends('agent.agent_dashboard')

@section('title', 'Create Customer and Place Order')
@section('content-header', 'Create Customer and Place Order')

@section('agent')
    <h1>Order Form</h1>

    @if (session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('order.process') }}" method="POST">
        @csrf

        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" required><br><br>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required><br><br>

        <label for="customer_name">Customer Name:</label>
        <input type="text" id="customer_name" name="customer_name" required><br><br>

        <input type="submit" value="Submit">
    </form>
    </body>

    </html>


@endsection
