@extends('frontend.master_dashboard')
@section('main')
    <!-- SERVICES SECTION START -->


    <div class="container cont-services">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 opt-sm-0">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                    <img src="{{asset('frontend/assets/images/Picture4_241x362.png')}}" class="img-fluid" alt="Image" />
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
                                <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                    <img src="{{asset('frontend/assets/images/plasmaArc2_337x450.jpg')}}" class="img-fluid" alt="Image" />
                                    <div class="img-overlay bg-dark"></div>
                                </div>
                            </div>
                            <!--end col-->
    
                            <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                    <img src="{{asset('frontend/assets/images/Picture1_600x401.png')}}" class="img-fluid" alt="Image" />
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
                                <p class="card-text lh-2">This style of welding is also referred to as Metal Inert Gas (MIG). It uses a shielding gas along the wire electrode, which heats up the two metals to be joined. This method requires a constant voltage and direct-current power source, and is the most common industrial welding process which includes plate and large bore pipe.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 pt-2">
                            <div class="media align-items-center rounded shadow p-3">
                                <i class="fa-sharp fa-solid fa-fire-flame-simple"></i>
                                <h3 class="ml-3 mb-0 text-primary">Plasma Arc Welding (PAW)</h3>
                                <p class="card-text">Plasma arc welding, or PAW, is similar to GTAW, but it uses a smaller arc and lower voltages which increase the precision of the weld. This precision and voltage allows the use of this process to assemble delicate and heat sensitive devices, such a microchips and medical devices.</p>
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

    <div class="container gallery-container">

        <h1>SAMPLE FINISH PRODUCTS</h1>

        <p class="page-description text-center"></p>

        <div class="tz-gallery">

            <div class="row">

                <div class="col-sm-6 col-md-4 text-center">
                    <div class="thumbnail">
                        <a class="lightbox" href="{{ asset('frontend/assets/images/bicycleBasket.jpg') }}">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/bicycleBasket.jpg') }}"
                                alt="">
                        </a>
                        <div class="caption">
                            <h3>BB 131</h3>
                            <p>Bicycle Basket Brace</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="thumbnail">
                        <a class="lightbox" href="{{ asset('frontend/assets/images/apCabinetBasket.jpg') }}">
                            <img src="{{ asset('frontend/assets/images/apCabinetBasket.jpg') }}" alt="Bridge">
                        </a>
                        <div class="caption">
                            <h3>KC-010</h3>
                            <p>AP CABINET BASKET</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="thumbnail">
                        <a class="lightbox" href="{{ asset('frontend/assets/images/showerCaddy.jpg') }}">
                            <img src="{{ asset('frontend/assets/images/showerCaddy.jpg') }}" alt="Tuneel">
                        </a>
                        <div class="caption">
                            <h3>BR-124</h3>
                            <p>SHOWER CADDY OCTAGON</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="thumbnail">
                        <a class="lightbox" href="{{ asset('frontend/assets/images/doubleDeck.jpg') }}">
                            <img src="{{ asset('frontend/assets/images/doubleDeck.jpg') }}" alt="Coast">
                        </a>
                        <div class="caption">
                            <h3>DD-202</h3>
                            <p>STEEL BED DOUBLE DECK</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="thumbnail">
                        <a class="lightbox" href="{{ asset('frontend/assets/images/hangingPlate.jpg') }}">
                            <img src="{{ asset('frontend/assets/images/hangingPlate.jpg') }}" alt="Rails">
                        </a>
                        <div class="caption">
                            <h3>KU-114 & KU-113</h3>
                            <p>HANGING PLATE RACK</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="thumbnail">
                        <a class="lightbox" href="{{ asset('frontend/assets/images/openBasket.jpg') }}">
                            <img src="{{ asset('frontend/assets/images/openBasket.jpg') }}" alt="Traffic">
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
@endsection
