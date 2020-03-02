@include('header')
@include('navbar')

<!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('')}}img/bg-img/acommodationbg.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcrumb-content d-flex align-items-center justify-content-between pb-5">
                        <h2 class="room-title">Hoteles</h2>
                        <h2 class="room-price">Tarifas Exclusivas <span>SAE</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Rooms Area Start -->
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Single Room Details Area -->
                    <div class="single-room-details-area mb-50">
                        <!-- Room Thumbnail Slides -->
                        <img src="{{asset('')}}img/bg-img/logoHotel4.jpg" alt="">
                          
                        <embed src="{{asset('')}}img/hoteles/chsuites.pdf" type="application/pdf" width="100%" height="600px" />
                        </div>

                    <!-- Room Service -->
                    <div class="room-service mb-50">
                        <h4>Room Services</h4>

                        <ul>
                            <li><img src="{{asset('')}}img/core-img/icon1.png" alt=""> Air Conditioning</li>
                            <li><img src="{{asset('')}}img/core-img/icon3.png" alt=""> Restaurant quality</li>
                            <li><img src="{{asset('')}}img/core-img/icon4.png" alt=""> Cable TV</li>
                            <li><img src="{{asset('')}}img/core-img/icon5.png" alt=""> Unlimited Wifi</li>
                            <li><img src="{{asset('')}}img/core-img/icon6.png" alt=""> Service 24/24</li>
                        </ul>
                    </div>

                    
                </div>

                <div class="col-12 col-lg-4">
                    <!-- Hotel Reservation Area -->
                    <div class="hotel-reservation--area mb-100">
                        <form action="#" method="post">
                            <div class="form-group mb-30">
                                <label for="checkInDate">Special Prices for COSAE Assistants</label>
                                <div class="input-daterange" id="datepicker">
                                   <div style="border-radius: 10px; border: 3px solid #6aa1ed; padding: 5%">
                                    <h3 class= "text-center">From $70 + IVA</h3>
                                </div>
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <a href="https://www.chsuites.com/chmaderourbanosuites/" target="_blank" class="btn roberto-btn w-100">Check Available</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->

   <!-- Call To Action Area Start -->
    <section class="roberto-cta-area">
        <div class="container">
            <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url({{asset('')}}img/bg-img/1.jpg);">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="cta-text mb-50">
                            <h2>For Accomodation</h2>
                            <h6>Contact Us +54 11 49616141 (int.203)</h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 text-right">
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Area End -->

    <!-- Partner Area Start -->
    <div class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner-logo-content d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="{{asset('')}}img/core-img/p1.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="{{asset('')}}img/core-img/p2.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="{{asset('')}}img/core-img/p3.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="{{asset('')}}img/core-img/p4.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="{{asset('')}}img/core-img/p5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Area End -->
@include('footer')