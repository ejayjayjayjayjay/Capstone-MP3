<style>
    .navbar {
        background-color: #6b6969;
    }
</style>
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container px-5">
        <a class="navbar-brand" href="/"><img class="img-fluid"
                src="{{ asset('frontend/assets/images/UnitopLogo02.png') }}" alt="logo" style="height: 50px;"></a>
        <button class="navbar-toggler navbar navbar-dark bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 menu-area">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact">CONTACT US</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 menu-area">
                <li class="nav-but">
                    <a class="btn btn-outline-light" href="{{ route('admin.login') }}">LOG IN</a>
                </li>
                <li class="nav-but">
                    {{-- <a class="btn btn-outline-light" href="#">SIGN UP</a> --}}
                </li>
            </ul>
        </div>
    </div>
</nav>
