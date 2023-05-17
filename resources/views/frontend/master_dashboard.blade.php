<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FONT-AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- OWL SLIDER -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <title>Unitop Metal Wire Corp</title>
</head>

<body>
    <!-- NAVBAR -- START -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container px-5">
            <a class="navbar-brand" href="./index.html"><img class="img-fluid" src="{{asset('frontend/assets/images/UnitopLogo02.png')}}" alt="logo"
                    style="height: 50px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 menu-area">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./services.html">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about.html">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT US</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 menu-area">
                    <li class="nav-but">
                        <a class="btn btn-outline-light" href="#">LOG IN</a>
                    </li>
                    <li class="nav-but">
                        <a class="btn btn-outline-light" href="#">SIGN UP</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION START -->

    <div class="container-fluid">

        @yield('main')


    </div>

 <!-- FOOTER -- START -->

 <footer class="text-white text-center text-lg-start" style="background-color: #23242a;">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row mt-4">
            <!--Grid column-->
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">About company</h5>
  
                <p>
                  Unitop Metalwire Technologies offer customs metal works and fabrications services which can bring to life your architectural vision.
                </p>
  
                <p>
                  We are equipped to handle almost any sort of metal work. Call us and let us know how we can help.
                </p>
  
                <div class="mt-4">
                    <!-- Facebook -->
                    <a type="button" class="btn btn-floating btn-primary btn-lg"><i
                            class="fab fa-facebook-f"></i></a>
                    <!-- Dribbble -->
                    <a type="button" class="btn btn-floating btn-success btn-lg"><i class="fab fa-google"></i></a>
                    <!-- Twitter -->
                    <a type="button" class="btn btn-floating btn-info btn-lg"><i class="fab fa-twitter text-white"></i></a>
                    <!-- Google + -->
                    <a type="button" class="btn btn-floating btn-danger btn-lg"><i
                            class="fab fa-google-plus-g"></i></a>
                    <!-- Linkedin -->
                </div>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
  
                <h5 class="text-uppercase mb-4 mx-5">ADDRESS</h5>
  
                <ul class="fa-ul" style="margin-left: 1.65em;">
                    <li class="mb-3">
                        <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">43 SUSANO RD DEPARO 2 BRGY. 170 DISTRICT 1 1420 CALOOCAN CITY</span>
                    </li>
                    <li class="mb-3">
                        <span class="fa-li"><i class="fas fa-envelope"></i></span><span
                            class="ms-2">unitopmetalwire@gmail.com</span>
                    </li>
                    <li class="mb-3">
                        <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">8 986-6572 to 73</span>
                    </li>
                    <li class="mb-3">
                        <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">0923-375-2675
                        </span>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">Opening hours</h5>
  
                <table class="table text-center text-white">
                    <tbody class="font-weight-normal">
                        <tr>
                            <td>Mon - Thu:</td>
                            <td>8am - 9pm</td>
                        </tr>
                        <tr>
                            <td>Fri - Sat:</td>
                            <td>8am - 1am</td>
                        </tr>
                        <tr>
                            <td>Sunday:</td>
                            <td>9am - 10pm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright:
        <a class="text-white" href="#">UNITOP METALWIRE CORP.</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- FOOTER -- END -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
 
</body>

</html>