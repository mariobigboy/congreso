@include('header')

@include('navbar')

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area contact-breadcrumb bg-img bg-overlay jarallax" style="background-image: url({{asset('')}}img/bg-img/bg4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center mt-100">
                        <h2 class="page-title">Contact Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('landing')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Google Maps & Contact Info Area Start -->
    <section class="google-maps-contact-info">
        <div class="container-fluid">
            <div class="google-maps-contact-content">
                <div class="row">
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h4>Phone</h4>
                            <p>(+5411) 4961-6141</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h4>Address</h4>
                            <p>Macacha Güemes 351</p>
                            <p>Buenos Aires</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-calendar-o" aria-hidden="true"></i>
                            <h4>Dates</h4>
                            <p>26-29 DE AGOSTO</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h4>Email</h4>
                            <p>info@cosae2020.com</p>
                        </div>
                    </div>
                </div>

                <!-- Google Maps -->
                <div class="google-maps">
                    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d82774.69671830302!2d24.077286625210185!3d56.96328499537209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfb0e5073ded%3A0x400cfcd68f2fe30!2sRiga%2C+Latvia!5e0!3m2!1sen!2sbd!4v1549536732147" allowfullscreen></iframe>-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6567.772802307162!2d-58.36457659538798!3d-34.607033963083445!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3945c8c351477a54!2sHilton%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1583589072271!5m2!1ses-419!2sar" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Google Maps & Contact Info Area End -->

    <!-- Contact Form Area Start -->
    <div class="roberto-contact-form-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h6>Contact Us</h6>
                        <h2>Leave Message</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Form -->
                    <div class="roberto-contact-form">
                        <form action="#" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    <input type="text" name="name" class="form-control mb-30" placeholder="Your Name">
                                </div>
                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    <input type="email" name="email" class="form-control mb-30" placeholder="Your Email">
                                </div>
                                <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                                    <textarea name="message" class="form-control mb-30" placeholder="Your Message"></textarea>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms">
                                    <button type="submit" class="btn roberto-btn mt-15">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Area End -->

    @include('banner_inscripcion')

    <!-- Partner Area Start -->
    <div class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner-logo-content d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p1.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p2.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p3.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p4.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Area End -->

@include('footer')