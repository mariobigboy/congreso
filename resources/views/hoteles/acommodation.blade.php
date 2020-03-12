@include('header')
@include('navbar')

        
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/acommodationbg.jpg);">
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
                <div class="col-12 col-lg-12">
                    <!-- Single Room Details Area -->
                    <div class="single-room-details-area mb-50">
                        <h1>Special Guests</h1>
                        <!-- Room Thumbnail Slides -->
                       <div style="width: 80%; margin: 0 auto;">
                            <div class="room-thumbnail-slides mb-50">
                                <div id="room-thumbnail--slide" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                            
                                        <li data-target="#room-thumbnail--slide" data-slide-to="0" class="active">
                                            <img src="{{asset('')}}img/bg-img/logoHotel1.jpg" class="d-block w-100" alt="">
                                        </li>
                                        <li data-target="#room-thumbnail--slide" data-slide-to="1">
                                            <img src="{{asset('')}}img/bg-img/logoHotel2.jpg" class="d-block w-100" alt="">
                                        </li>
                            
                                        <li data-target="#room-thumbnail--slide" data-slide-to="2">
                                            <img src="{{asset('')}}img/bg-img/logoHotel3.jpg" class="d-block w-100" alt="">
                                        </li>
                                        <li data-target="#room-thumbnail--slide" data-slide-to="3">
                                            <img src="{{asset('')}}img/bg-img/logoHotel4.jpg" class="d-block w-100" alt="">
                                        </li>
                                        <li data-target="#room-thumbnail--slide" data-slide-to="4">
                                            <img src="{{asset('')}}img/bg-img/logoHotel5.jpg" class="d-block w-100" alt="">
                                        </li>
                                        <li data-target="#room-thumbnail--slide" data-slide-to="5">
                                            <img src="{{asset('')}}img/bg-img/logoHotel6.jpg" class="d-block w-100" alt="">
                                        </li>
                                    </ol>
                                    <div class="carousel-inner">
                            
                                        <div class="carousel-item active">
                                            <a href="#"><img src="{{asset('')}}img/bg-img/49.jpg" class="d-block w-100" alt=""></a>
                                        </div>
                                        <div class="carousel-item ">
                                           <a href="{{'hotel/2'}}"><img src="{{asset('')}}img/bg-img/48.jpg" class="d-block w-100" alt=""></a> 
                                        </div>
                            
                                        <div class="carousel-item">
                                           <a href="{{'hotel/3'}}"><img src="{{asset('')}}img/bg-img/3333.jpg" class="d-block w-100" alt=""></a> 
                                        </div>
                                        <div class="carousel-item">
                                           <a href="{{'hotel/4'}}"><img src="{{asset('')}}img/bg-img/444.jpg" class="d-block w-100" alt=""></a> 
                                        </div>
                                        <div class="carousel-item">
                                           <a href="{{'hotel/5'}}"><img src="{{asset('')}}img/bg-img/555.jpg" class="d-block w-100" alt=""></a> 
                                        </div>
                                        <div class="carousel-item">
                                          <a href="{{'hotel/6'}}"><img src="{{asset('')}}img/bg-img/666.jpg" class="d-block w-100" alt=""></a>  
                                        </div>
                                    </div>
                            
                            
                                </div>
                            </div>
                       </div>

                     </div>

                   

                    <!-- Room Review -->
                   
                </div>

               
        </div>
    </div>
    <!-- Rooms Area End -->

    <!-- Call To Action Area Start -->
    <section class="roberto-cta-area">
        <div class="container">
            <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/1.jpg);">
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