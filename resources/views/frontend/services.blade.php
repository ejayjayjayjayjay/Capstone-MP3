@extends('frontend.master_dashboard')
@section('main')

<!-- SERVICES SECTION START -->

   
   <section id="gallery">
    <div class="container">
        <div class="row">
            <div class="title text-center">
                <h1>Our Services</h1>
            </div>
        </div>
      <div class="row">
      <div class="col-lg-6 mb-6">
      <div class="card">
        <img src="{{asset('frontend/assets/images/Picture4.png')}}" alt="" class="card-img-top img-fluid" style="height: 276px;">
        <div class="card-body text-center">
          <h5 class="card-title">Metal Insert Gas Welding (MIG)</h5>
          <p class="card-text lh-2">This style of welding is also referred to as Metal Inert Gas (MIG). It uses a shielding gas along the wire electrode, which heats up the two metals to be joined. This method requires a constant voltage and direct-current power source, and is the most common industrial welding process which includes plate and large bore pipe.</p>
         <a href="" class="btn btn-warning btn-sm">Contact Us</a>
        </div>
       </div>
      </div>
      <div class="col-lg-6 mb-6">
      <div class="card">
        <img src="{{asset('frontend/assets/images/plasmaArc2.jpg')}}" alt="" class="card-img-top img-fluid" style="height: 276px;">
        <div class="card-body text-center">
          <h5 class="card-title">Plasma Arc Welding (PAW)</h5>
          <p class="card-text lh-1">Plasma arc welding, or PAW, is similar to GTAW, but it uses a smaller arc and lower voltages which increase the precision of the weld. This precision and voltage allows the use of this process to assemble delicate and heat sensitive devices, such a microchips and medical devices.The torch can also achieve very high temperatures in small spaces. Gas is pressurized inside the wand, creating plasma. The plasma is then ionized, making it electrically conductive. This allows the arc to be created, producing incredibly high temperatures that can melt the base metals. This allows plasma arc welding to be performed with no filler metal, a similarity it shares with TIG welding.</p>
         <a href="" class="btn btn-warning btn-sm">Contact Us</a>
        </div>
       </div>
      </div>
    </div>
  </div>
  </section>

<!-- SERVICES SECTION END -->

<div class="container gallery-container">

    <h1>SAMPLE FINISH PRODUCTS</h1>

    <p class="page-description text-center"></p>
    
    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-6 col-md-4 text-center">
                <div class="thumbnail">
                    <a class="lightbox" href="{{asset('frontend/assets/images/bicycleBasket.jpg')}}">
                        <img class="img-fluid" src="{{asset('frontend/assets/images/bicycleBasket.jpg')}}" alt="">
                    </a>
                    <div class="caption">
                        <h3>BB 131</h3>
                        <p>Bicycle Basket Brace</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 text-center">
                <div class="thumbnail">
                    <a class="lightbox" href="{{asset('frontend/assets/images/apCabinetBasket.jpg')}}">
                        <img src="{{asset('frontend/assets/images/apCabinetBasket.jpg')}}" alt="Bridge">
                    </a>
                    <div class="caption">
                        <h3>KC-010</h3>
                        <p>AP CABINET BASKET</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 text-center">
                <div class="thumbnail">
                    <a class="lightbox" href="{{asset('frontend/assets/images/showerCaddy.jpg')}}">
                        <img src="{{asset('frontend/assets/images/showerCaddy.jpg')}}" alt="Tuneel">
                    </a>
                    <div class="caption">
                        <h3>BR-124</h3>
                        <p>SHOWER CADDY OCTAGON</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 text-center">
                <div class="thumbnail">
                    <a class="lightbox" href="{{asset('frontend/assets/images/doubleDeck.jpg')}}">
                        <img src="{{asset('frontend/assets/images/doubleDeck.jpg')}}" alt="Coast">
                    </a>
                    <div class="caption">
                        <h3>DD-202</h3>
                        <p>STEEL BED DOUBLE DECK</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 text-center">
                <div class="thumbnail">
                    <a class="lightbox" href="{{asset('frontend/assets/images/hangingPlate.jpg')}}">
                        <img src="{{asset('frontend/assets/images/hangingPlate.jpg')}}" alt="Rails">
                    </a>
                    <div class="caption">
                        <h3>KU-114 & KU-113</h3>
                        <p>HANGING PLATE RACK</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 text-center">
                <div class="thumbnail">
                    <a class="lightbox" href="{{asset('frontend/assets/images/openBasket.jpg')}}">
                        <img src="{{asset('frontend/assets/images/openBasket.jpg')}}" alt="Traffic">
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