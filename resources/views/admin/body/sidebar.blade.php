<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('adminbackend/assets/images/UnitopLogo02.png') }}" class="w-75 mx-auto d-block"
                alt="logo icon">
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon"><i class='bx bx-tachometer'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.profile') }}">
                <div class="parent-icon"><i class='bx bxs-user-detail'></i>
                </div>
                <div class="menu-title">Profile</div>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.Chatagent') }}">
                <div class="parent-icon"><i class='bx bxs-user-detail'></i>
                </div>
                <div class="menu-title">Message</div>
            </a>
        </li>

        <div class="dropdown">
            <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bxs-user-detail'></i>
                User Management
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="{{ route('admin.allagent') }}"><i class='bx bxs-user-detail'></i>All
                        Users</a></li>
                <li><a class="dropdown-item" href="{{ route('admin.AddAgentIndex') }}"><i
                            class='bx bxs-user-detail'></i>Add Users</a></li>
            </ul>
        </div>

        <li>
            <a href="{{ route('customeragent.index') }}">
                <div class="parent-icon"><i class='bx bxs-user'></i>
                </div>
                <div class="menu-title">Customers</div>
            </a>
        </li>

        <li>
            <a href="{{ route('orders.index') }}">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Orders</div>
            </a>
        </li>

        <li>
            <a href="{{ route('products.index') }}">
                <div class="parent-icon"><i class='bx bx-layer'></i>
                </div>
                <div class="menu-title">Products</div>
            </a>
        </li>

        <li class="mt-5">
            <a href="{{ route('admin.logout') }}">
                <div class="text-danger parent-icon"><i class='bx bx-log-out'></i>
                </div>
                <div class="menu-title">Logout</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->

</div>
