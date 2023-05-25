<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('adminbackend/assets/images/UnitopLogo02.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Admin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
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
            <a href="{{ route('admin.allagent') }}">
                <div class="parent-icon"><i class='bx bxs-user-detail'></i>
                </div>
                <div class="menu-title">Add Agents</div>
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
                <div class="parent-icon"><i class='bx bxs-cuboid'></i>
                </div>
                <div class="menu-title">Products</div>
            </a>
        </li>
        <li>
            <a href="{{ route('customers.index') }}">
                <div class="parent-icon"><i class='bx bxs-user'></i>
                </div>
                <div class="menu-title">Customers</div>
            </a>
        </li>
        <li class="mb-5 pb-5">
            <a href="{{ route('admin.logout') }}">
                <div class="parent-icon"><i class='bx bx-log-out'></i>
                </div>
                <div class="menu-title">Logout</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->

</div>
