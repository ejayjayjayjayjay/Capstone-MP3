@extends('frontend.master_dashboard')
@section('main')
    <!-- ======= About Us Section ======= -->
    <div class="d-flex container-fluid" lc-helper="background"
        style="height:50vh; background:url({{ asset('frontend/assets/images/hero-img-2.jpg') }})  center / cover no-repeat;">
    </div>
    <div class="container p-5 bg-light" style="margin-top:-100px">
        <div class="row">
            <div class="col-md-4 text-center align-self-center">
                <div class="lc-block border-end border-2 ">
                    <div editable="rich">
                        <p class="display-4 text-secondary">ABOUT US</p>
                    </div>
                </div><!-- /lc-block -->
            </div><!-- /col -->
            <div class="col-md-8">
                <div class="lc-block ">
                    <div editable="rich">
                        <p class="display-4">Unitop MetalWire Corporation.</p>
                    </div>
                </div><!-- /lc-block -->
            </div><!-- /col -->
        </div>
        <div class="row">
            <div class="col-md-9 offset-md-1">
                <div class="lc-block mt-5">
                    <div editable="rich">
                        <p class="lead text-secondary">A more than 30 years in business that combines factory production and
                            wholesale, Unitop Metalwire Technologies actively serves the market by engaging in a variety of
                            activities, including project design, product development, large-scale production, and some
                            on-field building.</p>
                        <p class="lead text-secondary"> We are actively serving the Metalwire market in the Philippines,
                            including the NCR, Eastern Visayas, North, and South Luzon markets. Our goals are to "strictly
                            control the quality for survival in the industry and gaining reputation for development of the
                            enterprise" and to continuously expand the local market.
                            Our constant goal is to be honest and prioritize the demands of our customers. Our motto is
                            "serving clients totally and innovating to serve you best."Everyone is invited to stop by and
                            talk about future collaboration. We are eager to collaborate with you in the coming century when
                            the flow of the global economy sweeps us both together to produce something great! </p>
                    </div>
                </div><!-- /lc-block -->
            </div><!-- /col -->
        </div>
    </div>


    <div class="col-12 d-flex justify-content-center align-items-center text-center pb-5">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <div class="text-left">
                        <h4>Business Culture</h4>
                        <p>Corporate culture is not something that is brought in from abroad; rather, it is the culmination
                            of many years of cultural experience within the company, and it serves as the theoretical
                            foundation for guiding the company's growth and development.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/assets/images/Picture1.png') }}" class="img-responsive" style="width:100%">
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/assets/images/Picture2.png') }}" class="img-responsive" style="width:100%">
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <div class="text-left">
                        <h4>Business Objectives</h4>
                        <p>Quality first, aiming to lead the industry based on moral principles and providing genuine
                            customer service.</p>
                        <!-- <a href="#" class="btn btn-primary text-white" style="border-radius: 50px;">Get Started</a> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <div class="text-left">
                        <h4>Enterprise Strength</h4>
                        <p>We are the source manufacturer: Because we are the source with the best cost control, our
                            products lead the peer group with high quality and affordable prices.</p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/assets/images/Picture3.png') }}" class="img-responsive" style="width:100%">
                </div>
            </div>

        </div>
    </div>

    </div>
    <!-- End Adventages Section -->
    <!-- End About Us Section -->
@endsection
