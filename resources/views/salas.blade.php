@include('header')
@include('navbar')

        
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/acommodationbg.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcrumb-content d-flex align-items-center justify-content-between pb-5">
                        <h2 class="room-title">Salas</h2>
                        <!--<h2 class="room-price">Tarifas Exclusivas <span>SAE</span></h2>-->
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
                <div class="col-12 col-lg-12 mb-5">
                    <!-- Single Room Details Area -->
                    <div class="single-room-details-area mb-50">
                        <h1>Buen Ayre</h1>
                        <!-- Room Thumbnail Slides -->
                        <img src="{{asset('')}}img/bg-img/acommodationbg.jpg" alt="">

                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores aut nesciunt dolor quod sit vitae dicta, nemo cum laboriosam! Explicabo et soluta alias placeat earum, minima nihil tempore autem in accusamus modi saepe officiis voluptatum veniam officia delectus. Beatae est, rem quidem, cum eius fuga nesciunt facere sapiente necessitatibus at!</p>
                </div>

                <div class="col-12 col-lg-12 mb-5">
                    <!-- Single Room Details Area -->
                    <div class="single-room-details-area mb-50">
                        <h1>Álamo</h1>
                        <!-- Room Thumbnail Slides -->
                        <img src="{{asset('')}}img/bg-img/acommodationbg.jpg" alt="">

                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam eligendi illo ad voluptates blanditiis sunt, a minima numquam officia laboriosam fugit provident delectus consectetur aperiam ipsam rem quam quasi accusamus.</p>
                </div>

                <div class="col-12 col-lg-12 mb-5">
                    <!-- Single Room Details Area -->
                    <div class="single-room-details-area mb-50">
                        <h1>Jacarandá</h1>
                        <!-- Room Thumbnail Slides -->
                        <img src="{{asset('')}}img/bg-img/acommodationbg.jpg" alt="">

                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam eligendi illo ad voluptates blanditiis sunt, a minima numquam officia laboriosam fugit provident delectus consectetur aperiam ipsam rem quam quasi accusamus.</p>
                </div>

                <div class="col-12 col-lg-12 mb-5">
                    <!-- Single Room Details Area -->
                    <div class="single-room-details-area mb-50">
                        <h1>Pacará</h1>
                        <!-- Room Thumbnail Slides -->
                        <img src="{{asset('')}}img/bg-img/acommodationbg.jpg" alt="">

                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam eligendi illo ad voluptates blanditiis sunt, a minima numquam officia laboriosam fugit provident delectus consectetur aperiam ipsam rem quam quasi accusamus.</p>
                </div>
            </div>       
        </div>
    </div>
    <!-- Rooms Area End -->

    @include('banner_acommodation')
    
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