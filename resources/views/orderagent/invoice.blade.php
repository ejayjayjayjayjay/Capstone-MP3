<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<style>
    body {
        background-color: #F6F6F6;
        margin: 70;
        padding: 0;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0;
        padding: 0;
    }

    p {
        margin: 0;
        padding: 0;
    }

    .container {
        width: 50%;
        margin-right: auto;
        margin-left: auto;
    }

    .brand-section {
        background-color: #111111;
        padding: 10px 40px;
    }

    .logo {
        width: 50%;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .col-6 {
        width: 50%;
        flex: 0 0 auto;
    }

    .text-white {
        color: #fff;
    }

    .company-details {
        float: right;
        text-align: right;
    }

    .body-section {
        padding: 16px;
        border: 1px solid gray;
    }

    .heading {
        font-size: 20px;
        margin-bottom: 08px;
    }

    .sub-heading {
        color: #262626;
        margin-bottom: 05px;
    }

    table {
        background-color: #fff;
        width: 100%;
        border-collapse: collapse;
    }

    table thead tr {
        border: 1px solid #111;
        background-color: #f2f2f2;
    }

    table td {
        vertical-align: middle !important;
        text-align: center;
    }

    table th,
    table td {
        padding-top: 08px;
        padding-bottom: 08px;
    }

    .table-bordered {
        box-shadow: 0px 0px 5px 0.5px gray;
    }

    .table-bordered td,
    .table-bordered th {
        border: 1px solid #dee2e6;
    }

    .text-right {
        text-align: end;
    }

    .w-20 {
        width: 20%;
    }

    .float-right {
        float: right;
    }


    /* CSS */
    .button-54 {
        font-family: "Open Sans", sans-serif;
        font-size: 16px;
        letter-spacing: 2px;
        text-decoration: none;
        text-transform: uppercase;
        color: #000;
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
</head>

<body>

    <div class="container-fluid pt-5 pb-3">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <img class="invoicelogo w-75" src="{{ asset('adminbackend/assets/images/UnitopLogo02.png') }}"
                        alt="">
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <p class="text-white">43 SUSANO RD DEPARO 2 BRGY. 170</p>
                        <p class="text-white">DISTRICT 1 1420 CALOOCAN CITY</p>
                        <p class="text-white">0923-375-2675</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Invoice No.: 00{{ $orders->id }}</h2>
                    <p class="sub-heading">Order Date: {{ $orders->created_at }}</p>
                    <p class="sub-heading">Email Address: {{ $orders->customer->email }}</p>
                </div>
                <div class="col-6">
                    <p class="sub-heading">Full Name:
                        {{ $orders->customer->first_name }}{{ $orders->customer->last_name }}</p>
                    <p class="sub-heading">Address: {{ $orders->customer->address }}</p>
                    <p class="sub-heading">Phone Number: {{ $orders->customer->phone }}</p>
                </div>
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Ordered Items</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>No.</th>
                        <th>Product</th>
                        <th class="w-20">Quantity</th>
                        <th class="w-20">Agent Name</th>
                        <th class="w-20">Grandtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $orders->id }}</td>
                        <td>{{ $orders->product }}</td>
                        <td>{{ $orders->quantity }}</td>
                        <td>{{ $orders->user->name }}</td>
                        <td class="fw-bold">₱ {{ $orders->total }}</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <h3 class="heading">Payment Status: {{ $orders->status }}</h3>
            <h3 class="heading">Order Status: {{ $orders->order_status }}</h3>
        </div>
        <div class="body-section">
            <p>&copy; Copyright 2023 - Unitop. All rights reserved.
                <a href="https://www.unitop.fun/" class="float-right">https://www.unitop.fun/</a>
            </p>
        </div>
    </div>


    <section>
        <div class="container">
            <div class="d-flex">
                <div class="col-4">
                    <div>
                        <a href="{{ route('orderagent.index') }}">
                            <button class="button-54">Back</button>
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <a href="">
                            <button class="print-button button-54" onclick="window.print()">Print</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
