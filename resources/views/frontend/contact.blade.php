@extends('frontend.master_dashboard')
@section('main')

<div class="bg-background"></div>
<div class="container py-5">
    <div class="row py-5 g-3">

        <div class="col-md-6 first_col ">
            <h1 class="text-center mt-3">Contact Us</h1>
            <form class="p-4 mt-5">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Enter your Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email ID</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Enter your massage</label>
                    <textarea  type="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Send Now</button>
                </div>
            </form>
        </div>
        <div class="col-md-6 sec_col">
            <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=550&amp;hl=en&amp;q=UNITOP metalwire&amp;t=k&amp;z=20&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://capcuttemplate.org/">Capcuttemplate.org</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:550px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:550px;}.gmap_iframe {height:550px!important;}</style></div>
        </div>
    </div>
</div>

@endsection