@extends('frontend.master_dashboard')
@section('main')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        /***** fix the aos white space bug*****/
        html,
        body {
            width: 100%;
            overflow-x: hidden;
        }

        < !-- HTML !--><button class="button-30" role="button">Button 30</button>

        /* CSS */
        .button-30 {
            align-items: center;
            appearance: none;
            background-color: #FCFCFD;
            border-radius: 4px;
            border-width: 0;
            box-shadow: rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
            box-sizing: border-box;
            color: #36395A;
            cursor: pointer;
            display: inline-flex;
            font-family: "JetBrains Mono", monospace;
            height: 48px;
            justify-content: center;
            line-height: 1;
            list-style: none;
            overflow: hidden;
            padding-left: 16px;
            padding-right: 16px;
            position: relative;
            text-align: left;
            text-decoration: none;
            transition: box-shadow .15s, transform .15s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            white-space: nowrap;
            will-change: box-shadow, transform;
            font-size: 18px;
        }

        /* CSS */
        .button-73 {
            appearance: none;
            background-color: #FFFFFF;
            border-radius: 40em;
            border-style: none;
            box-shadow: #ADCFFF 0 -12px 6px inset;
            box-sizing: border-box;
            color: #000000;
            cursor: pointer;
            display: inline-block;
            font-family: -apple-system, sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            letter-spacing: -.24px;
            margin: 0;
            outline: none;
            padding: 1rem 1.3rem;
            quotes: auto;
            text-align: center;
            text-decoration: none;
            transition: all .15s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-73:hover {
            background-color: #FFC229;
            box-shadow: #FF6314 0 -6px 8px inset;
            transform: scale(1.125);
        }

        .button-73:active {
            transform: scale(1.025);
        }

        @media (min-width: 500px) {
            .button-73 {
                font-size: 1.5rem;
                padding: .75rem 2rem;
            }
        }

        .backgroundpara1 {
            height: 80vh;
            width: 100vw;
            background-image: url("frontend/assets/images/welderbackra.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            -webkit-clip-path: polygon(100% 0%, 94% 51%, 100% 100%, 25% 100%, 0% 50%, 25% 0%);
            clip-path: polygon(100% 0%, 94% 51%, 100% 100%, 25% 100%, 0% 50%, 25% 0%);

        }

        .title1 {
            color: white;
        }

        .mobileApp {
            color: white;
            text-align: justify;
        }

        #box1 {
            max-width: 600px;
            padding: 2px;
            background: rgba(255, 255, 255, .2);
            box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
        }

        /* This only changes this particular animation duration */
        .animate__animated.animate__bounce {
            --animate-duration: 2s;
        }

        /* This changes all the animations globally */
        :root {
            --animate-duration: 800ms;
            --animate-delay: 0.5s;
        }
    </style>
    <div class="custom-loader"></div>
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
                            <h1 class="fw-bold display-3 animate__animated animate__bounce ">We Innovate
                                to serve you best.
                            </h1>
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
            <h2 class="fw-bold">SAMPLE PRODUCTS</h2>
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

    <section class="backgroundpara1">
        <div class="container mb-5">
            <div class="row">
                <h1 class="title1 text-center"><span class="fw-bold">Our <span class="title-ready">Mobile App</span></span>
                </h1>
                <div class="d-flex pt-5">
                    <div class="col-md-6">
                        <img class="w-100 img-fluid" src="{{ asset('frontend/assets/images/unitoplogo2.svg') }}"
                            alt="">
                    </div>
                    <div id="box1" class="clas-md-6 text-center text-justify">
                        <p class="mobileApp fw-bold">At Unitop Metalwire Technologies, we understand the importance
                            of turning your ideas into tangible, awe-inspiring structures. Whether you're an architect,
                            designer, contractor, or a visionary individual, our skilled team is dedicated to providing
                            top-notch
                            metalwork solutions that surpass expectations.

                            Analytics and Reporting: Our app provides powerful analytics and reporting features that offer
                            valuable insights into project performance and productivity. Agents and admins can generate
                            customized reports, track key metrics, and identify areas for improvement, facilitating
                            data-driven decision-making.</p>
                        <button class="button-73"><a class="text-decoration-none text-dark"
                                href="{{ asset('frontend/assets/images/_Unitop_Metal_Wire_Corp_17170169.apk') }}"
                                download>Download Apk</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CLIENT COMMENTS -->
    <div class="testimonial-area mb-3">
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
                                aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators"
                                type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2"
                                data-bs-target="#carouselExampleIndicators" type="button"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="icon-area">
                                    <i class="fa fa-comments"></i>
                                </div>
                                <div class="content text-center">
                                    <p>"I have been a customer of your metal wire business for several years now, and I must
                                        say that your products never disappoint. The wire is always of high quality and
                                        meets my specifications perfectly. Your exceptional customer service is an added
                                        bonus. Keep up the great work!"</p>
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
                                    <p>I wanted to express my gratitude for the outstanding service I received from your
                                        metal wire business. Your knowledgeable staff helped me choose the right type and
                                        gauge of wire for my project, and it turned out to be the perfect fit. The quality
                                        of the wire is exceptional, and I couldn't be happier with my purchase.</p>
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
                                    <p>"I'm thoroughly impressed with the level of professionalism and expertise exhibited
                                        by your metal wire business. Your team was incredibly helpful in assisting me with
                                        my order, and the wire I received was exactly what I needed. It's clear that you
                                        take pride in your products and value your customers. Thank you for a great
                                        experience!"</p>
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
