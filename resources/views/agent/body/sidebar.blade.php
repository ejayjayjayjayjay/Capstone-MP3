<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('adminbackend/assets/images/UnitopLogo02.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Agent</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="{{ route('agent.dashboard') }}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li>
            <a href="{{ route('agent.profile') }}">
                <div class="parent-icon"><i class='bx bxs-user-detail'></i>
                </div>
                <div class="menu-title">Profile</div>
            </a>
        </li>

        <li>
            <a href="{{ route('orderagent.index') }}">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Status of Orders</div>
            </a>
        </li>

        <li>
            <a href="{{ route('ordercreate.index') }}">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Add Order</div>
            </a>
        </li>

        <li>
            <a href="{{ route('customers.index') }}">
                <div class="parent-icon"><i class='bx bxs-user'></i>
                </div>
                <div class="menu-title">Add Customer</div>
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
