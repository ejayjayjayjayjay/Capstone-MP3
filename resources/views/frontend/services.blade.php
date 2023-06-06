@extends('frontend.master_dashboard')
@section('main')
    <!-- SERVICES SECTION START -->
    <style>
        .pic1 {
            border-radius: 99px 0px 0px 0px;
            -webkit-border-radius: 99px 0px 0px 0px;
            -moz-border-radius: 99px 0px 0px 0px;
        }

        .pic2 {
            border-radius: 0px 101px 0px 0px;
            -webkit-border-radius: 0px 101px 0px 0px;
            -moz-border-radius: 0px 101px 0px 0px;
        }

        .pic3 {
            border-radius: 0px 0px 59px 0px;
            -webkit-border-radius: 0px 0px 59px 0px;
            -moz-border-radius: 0px 0px 59px 0px;
        }

        .product1 {
            outline: 1px solid #FFFFFF;
            transition: outline 1s ease 0s;
        }

        .product1:hover {
            outline: 5px solid #000000;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: black;
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            width: 50%;
            max-width: 600px;
        }

        /* The Close Button */
        .close {
            color: white;
            position: absolute;
            top: 70px;
            right: 25px;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #999;
            text-decoration: none;
            cursor: pointer;
        }

        /* Hide the slides by default */
        .mySlides {
            display: none;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 70px;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }
    </style>


    <div class="container cont-services pt-5">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 opt-sm-0">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                <div class="work-desk rounded border-0 overflow-hidden">
                                    <img class="pic1 img-fluid"
                                        src="{{ asset('frontend/assets/images/Picture4_241x362.png') }}" class="img-fluid"
                                        alt="Image" />
                                    <div class="img-overlay bg-dark"></div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-6 col-md-6 col-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="work-desk rounded border-0 overflow-hidden">
                                    <img class="pic2 img-fluid"
                                        src="{{ asset('frontend/assets/images/plasmaArc2_337x450.jpg') }}" class="img-fluid"
                                        alt="Image" />
                                    <div class="img-overlay bg-dark"></div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                <div class="work-desk rounded border-0 overflow-hidden">
                                    <img class="pic3 img-fluid"
                                        src="{{ asset('frontend/assets/images/Picture1_600x401.png') }}" class="img-fluid"
                                        alt="Image" />
                                    <div class="img-overlay bg-dark"></div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end col-->

            <div class="col-lg-6 col-md-6 col-12 order-1 order-md-2">
                <div class="section-title ml-lg-5">
                    <h1 class="text-custom font-weight-normal mb-3">Our Services</h1>
                    <h4 class="title mb-4">
                        Our experienced and dedicated staff <br />
                        provide these services with a smile.
                    </h4>

                    <div class="row">
                        <div class="col-lg-6 mt-4 pt-2">
                            <div class="media align-items-center rounded shadow p-3">
                                <i class="fa-sharp fa-solid mb-0 text-custom fa-wrench"></i>
                                <h3 class="ml-3 mb-0 text-primary">Metal Insert Gas Welding (MIG)</h3>
                                <p class="card-text lh-2">This style of welding is also referred to as Metal Inert Gas
                                    (MIG). It uses a shielding gas along the wire electrode, which heats up the two metals
                                    to be joined. This method requires a constant voltage and direct-current power source,
                                    and is the most common industrial welding process which includes plate and large bore
                                    pipe.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 pt-2">
                            <div class="media align-items-center rounded shadow p-3">
                                <i class="fa-sharp fa-solid fa-fire-flame-simple"></i>
                                <h3 class="ml-3 mb-0 text-primary">Plasma Arc Welding (PAW)</h3>
                                <p class="card-text">Plasma arc welding, or PAW, is similar to GTAW, but it uses a smaller
                                    arc and lower voltages which increase the precision of the weld. This precision and
                                    voltage allows the use of this process to assemble delicate and heat sensitive devices,
                                    such a microchips and medical devices.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--enr row-->
    </div>
    <!-- SERVICES SECTION END -->

    <div class="container gallery-container pb-5">

        <h1>SAMPLE FINISH PRODUCTS</h1>

        <p class="page-description text-center"></p>

        <div class="tz-gallery">

            <div class="row">

                <div class="col-sm-6 col-md-4 text-center">
                    <div class="thumbnail column">
                        {{-- <a class="lightbox" href="{{ asset('frontend/assets/images/bicycleBasket.jpg') }}"> --}}
                        <img class="product1 img-fluid" src="{{ asset('frontend/assets/images/bicycleBasket.jpg') }}"
                            alt="" onclick="openModal();currentSlide(1)" class="hover-shadow">
                        </a>
                        <div class="caption">
                            <h3>BB 131</h3>
                            <p>Bicycle Basket Brace</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="thumbnail column">
                        {{-- <a class="lightbox" href="{{ asset('frontend/assets/images/apCabinetBasket.jpg') }}"> --}}
                        <img class="product1 img-fluid" src="{{ asset('frontend/assets/images/apCabinetBasket.jpg') }}"
                            alt="Bridge" onclick="openModal();currentSlide(2)" class="hover-shadow">
                        </a>
                        <div class="caption">
                            <h3>KC-010</h3>
                            <p>AP CABINET BASKET</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="thumbnail column">
                        {{-- <a class="lightbox" href="{{ asset('frontend/assets/images/showerCaddy.jpg') }}"> --}}
                        <img class="product1 img-fluid" src="{{ asset('frontend/assets/images/showerCaddy.jpg') }}"
                            alt="Tuneel" onclick="openModal();currentSlide(3)" class="hover-shadow">
                        </a>
                        <div class="caption">
                            <h3>BR-124</h3>
                            <p>SHOWER CADDY OCTAGON</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="thumbnail column">
                        {{-- <a class="lightbox" href="{{ asset('frontend/assets/images/doubleDeck.jpg') }}"> --}}
                        <img class="product1 img-fluid" src="{{ asset('frontend/assets/images/doubleDeck.jpg') }}"
                            alt="Coast" onclick="openModal();currentSlide(4)" class="hover-shadow">
                        </a>
                        <div class="caption">
                            <h3>DD-202</h3>
                            <p>STEEL BED DOUBLE DECK</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="thumbnail column">
                        {{-- <a class="lightbox" href="{{ asset('frontend/assets/images/hangingPlate.jpg') }}"> --}}
                        <img class="product1 img-fluid" src="{{ asset('frontend/assets/images/hangingPlate.jpg') }}"
                            alt="Rails" onclick="openModal();currentSlide(5)" class="hover-shadow">
                        </a>
                        <div class="caption">
                            <h3>KU-114 & KU-113</h3>
                            <p>HANGING PLATE RACK</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="thumbnail column">
                        {{-- <a class="lightbox" href="{{ asset('frontend/assets/images/openBasket.jpg') }}"> --}}
                        <img class="product1 img-fluid" src="{{ asset('frontend/assets/images/openBasket.jpg') }}"
                            alt="Traffic" onclick="openModal();currentSlide(6)" class="hover-shadow">
                        </a>
                        <div class="caption">
                            <h3>O-45</h3>
                            <p>OPEN END BASKET</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- The Modal/Lightbox -->
    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">

            <div class="mySlides">
                <div class="numbertext">1 / 6</div>
                <img class="img-fluid" src="{{ asset('frontend/assets/images/bicycleBasket.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 6</div>
                <img class="img-fluid" src="{{ asset('frontend/assets/images/apCabinetBasket.jpg') }}"
                    style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 6</div>
                <img class="img-fluid" src="{{ asset('frontend/assets/images/showerCaddy.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">4 / 6</div>
                <img class="img-fluid" src="{{ asset('frontend/assets/images/doubleDeck.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">5 / 6</div>
                <img class="img-fluid" class="img-fluid" src="{{ asset('frontend/assets/images/hangingPlate.jpg') }}"
                    style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">6 / 6</div>
                <img class="img-fluid" src="{{ asset('frontend/assets/images/openBasket.jpg') }}" style="width:100%">
            </div>

            <!-- Next/previous controls -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
    </div>
    <script>
        // Open the Modal
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        // Close the Modal
        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>
@endsection
