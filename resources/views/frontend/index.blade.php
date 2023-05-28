@extends('frontend.master_dashboard')
@section('main')
    <div class="">
        <div class="container-fluid col-xxl-8">
            <div class="row flex-lg-nowrap align-items-center g-5">
                <div class="order-lg-1 w-100">
                    <img style="clip-path: polygon(25% 0%, 100% 0%, 100% 99%, 0% 100%);"
                        src="{{ asset('frontend/assets/images/hero-image.jpg') }}" class="d-block mx-lg-auto img-fluid"
                        alt="unitopLogo" loading="lazy">
                </div>
                <div class="col-lg-6 col-xl-5 text-center text-lg-start pt-lg-5 mt-xl-4">
                    <div class="lc-block mb-4">
                        <div editable="rich">
                            <h1 class="fw-bold display-3">We Innovate to serve you best.</h1>
                        </div>
                    </div>

                    <div class="lc-block mb-5">
                        <div editable="rich">
                            <p class="rfs-8"> Unitop Metalwire Technologies offer customs metal works and fabrications
                                services which can bring to life your architectural vision. </p>
                        </div>
                    </div>

                    <div class="lc-block mb-6"><a class="btn btn-warning px-4 me-md-2 btn-lg" href="about"
                            role="button">Learn More</a>
                    </div>

                    <div class="lc-block mb-5 mt-4">
                        <div editable="rich">
                            <p class="fw-bold"> Some of our Clients based on trust:</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="lc-block col-3"><img class="img-fluid wp-image-975"
                                src="{{ asset('frontend/assets/images/client1.png') }}" width="" height="300"
                                srcset="" sizes="" alt=""></div>
                        <div class="lc-block col-3"><img class="img-fluid wp-image-977"
                                src="{{ asset('frontend/assets/images/client2.png') }}" width="" height="300"
                                srcset="" sizes="" alt=""></div>
                        <div class="lc-block col-3"><img class="img-fluid wp-image-974"
                                src="{{ asset('frontend/assets/images/client3.png') }}" width="" height="300"
                                srcset="" sizes="" alt=""></div>
                        <div class="lc-block col-3"><img class="img-fluid wp-image-967"
                                src="{{ asset('frontend/assets/images/client4.png') }}" width="" height="300"
                                srcset="" sizes="" alt=""></div>
                    </div>
                </div>
            </div>

        </div><!-- /lc-block -->
    </div>
    </div>


    <!-- HERO SECTION END -->

            <!-- SERVICES -- START -->
            <div class="row p-5 bg-light">
                <div class="col-12 text-center">
                    <h2>SAMPLE PRODUCTS</h2>
                    <p>Some of our recent works that we have finished.</p>
                </div>
                <div class="col-12 d-flex justify-content-center align-items-center text-center">
                    <div class="container">
                        <div class="row element">

                            <div class="col-lg-4 p-5">
                                <img class="img-fluid" src="{{ asset('frontend/assets/images/wireMesh.jpg') }}">
                                <h5 class="mb-2"><b>WM 140</b></h5>
                                <p>WIRE MESH (15 DIFFERENT SIZES)</p>
                            </div>

                            <div class="col-lg-4 p-5">
                                <img class="img-fluid" src="{{ asset('frontend/assets/images/stackableBasket.jpg') }}">
                                <h5 class="mb-2"><b>SB 50-L</b></h5>
                                <p>STACKABLE BASKET ( CHIP RACK )</p>
                            </div>

                            <div class="col-lg-4 p-5">
                                <img class="img-fluid" src="{{ asset('frontend/assets/images/revolving.jpg') }}">
                                <h5 class="mb-2"><b>RSQ 52-L</b></h5>
                                <p>REVOLVING SQUARE LONG</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SERVICES --- END -->

            <!-- CLIENT COMMENTS -->
            <div class="testimonial-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="section-header text-center">
                                <h4>What Clients Says</h4>
                                <p>Testimonials from Satisfied Customers.</p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="carousel slide" data-bs-ride="true" id="carouselExampleIndicators">
                                <div class="carousel-indicators">
                                    <button aria-label="Slide 1" class="active" data-bs-slide-to="0"
                                        data-bs-target="#carouselExampleIndicators" type="button"></button> <button
                                        aria-label="Slide 2" data-bs-slide-to="1"
                                        data-bs-target="#carouselExampleIndicators" type="button"></button> <button
                                        aria-label="Slide 3" data-bs-slide-to="2"
                                        data-bs-target="#carouselExampleIndicators" type="button"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="icon-area">
                                            <i class="fa fa-comments"></i>
                                        </div>
                                        <div class="content text-center">
                                            <p>"I have been a customer of your metal wire business for several years now, and I must say that your products never disappoint. The wire is always of high quality and meets my specifications perfectly. Your exceptional customer service is an added bonus. Keep up the great work!"</p>
                                            <div class="person"><img alt=""
                                                    src="{{ asset('frontend/assets/images/lemonSquareRound.png') }}">
                                            </div>
                                            <h5>Lemon Square</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="icon-area">
                                            <i class="fa fa-comments"></i>
                                        </div>
                                        <div class="content text-center">
                                            <p>I wanted to express my gratitude for the outstanding service I received from your metal wire business. Your knowledgeable staff helped me choose the right type and gauge of wire for my project, and it turned out to be the perfect fit. The quality of the wire is exceptional, and I couldn't be happier with my purchase.</p>
                                            <div class="person"><img alt=""
                                                    src="{{ asset('frontend/assets/images/oishiRound.png') }}"></div>
                                            <h5>Oishi</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="icon-area">
                                            <i class="fa fa-comments"></i>
                                        </div>
                                        <div class="content text-center">
                                            <p>"I'm thoroughly impressed with the level of professionalism and expertise exhibited by your metal wire business. Your team was incredibly helpful in assisting me with my order, and the wire I received was exactly what I needed. It's clear that you take pride in your products and value your customers. Thank you for a great experience!"</p>
                                            <div class="person"><img alt=""
                                                    src="{{ asset('frontend/assets/images/saverRound.png') }}"></div>
                                            <h5>Ever Department</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
