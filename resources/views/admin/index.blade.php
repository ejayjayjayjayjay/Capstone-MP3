@extends('admin.admin_dashboard')

@section('admin')
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <div class="col-10 card container">
        <div class="card-body">
            <h3 class="fw-bold text-center">Admin Dashboard</h3>
        </div>
    </div>
    <div class="d-flex align-items-center">
    </div>
    <div class="page-content">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            <div class="col">
                <div class="card radius-10 bg-gradient-deepblue">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <?php
                            // ...
                            $rows = DB::table('orders')->count();
                            ?>
                            <h5 class="mb-0 text-white">{{ $rows }}</h5>
                            <div class="ms-auto">
                                <i class='h1 bx bxs-cart-add'></i>
                            </div>
                        </div>
                        <div class="progress my-3 bg-light-transparent" style="height:3px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex align-items-center text-white">
                            <p class="mb-0">Total Orders</p>
                            <p class="mb-0 ms-auto"><span><i class='bx bx-up-arrow-alt'></i></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-orange">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <?php
                            // ...
                            $rows = DB::table('products')->count();
                            ?>
                            <h5 class="mb-0 text-white">{{ $rows }}</h5>
                            <div class="ms-auto">
                                <i class='h1 bx bxs-bed'></i>
                            </div>
                        </div>
                        <div class="progress my-3 bg-light-transparent" style="height:3px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <h5></h5>
                        </div>
                        <div class="d-flex align-items-center text-white">
                            <p class="mb-0">Total Products</p>
                            <p class="mb-0 ms-auto"><span><i class='bx bx-coffee-bean'></i></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-ohhappiness">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <?php
                            // ...
                            $rows = DB::table('users')->count();
                            ?>
                            <h5 class="mb-0 text-white">{{ $rows }}</h5>
                            <div class="ms-auto">
                                <i class='h1 bx bxs-user'></i>
                            </div>
                        </div>
                        <div class="progress my-3 bg-light-transparent" style="height:3px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex align-items-center text-white">
                            <p class="mb-0">Total Visitors</p>
                            <p class="mb-0 ms-auto"><span><i class='bx bx-up-arrow-alt'></i></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-ohhappiness">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <?php
                            // ...
                            $rows = DB::table('customers')->count();
                            ?>
                            <h5 class="mb-0 text-white">{{ $rows }}</h5>
                            <div class="ms-auto">
                                <i class='h1 bx bxs-user'></i>
                            </div>
                        </div>
                        <div class="progress my-3 bg-light-transparent" style="height:3px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex align-items-center text-white">
                            <p class="mb-0">Total Customers</p>
                            <p class="mb-0 ms-auto"><span><i class='bx bx-up-arrow-alt'></i></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card radius-10 bg-gradient-ohhappiness">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <?php
                        // ...
                        $rows = DB::table('payments')->sum('total_profit');
                        ?>
                        <h5 class="mb-0 text-white h1">₱{{ $rows }}</h5>
                        <div class="ms-auto">
                            <i class='h1 bx bxs-user'></i>
                        </div>
                    </div>
                    <div class="progress my-3 bg-light-transparent" style="height:3px;">
                        <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex align-items-center text-white">
                        <p class="mb-0">Total Profits</p>
                        <p class="mb-0 ms-auto"><span><i class='bx bxs-wallet'></i></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
