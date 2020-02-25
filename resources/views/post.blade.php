<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Titulo</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('')}}img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('')}}style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Search Form -->
        <div class="search-form d-flex align-items-center">
            <div class="container">
                <form action="index.html" method="get">
                    <input type="search" name="search-form-input" id="searchFormInput" placeholder="Type your keyword ...">
                    <button type="submit"><i class="icon_search"></i></button>
                </form>
            </div>
        </div>

        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">

                    <div class="col-6">
                        <div class="top-header-content">
                            <a href="#"><i class="icon_phone"></i> <span>(123) 456-789-1230</span></a>
                            <a href="#"><i class="icon_mail"></i> <span>info.colorlib@gmail.com</span></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="top-header-content">
                            <!-- Top Social Area -->
                            <div class="top-social-area ml-auto">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="robertoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html"><img src="{{asset('')}}img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="./index.html">Home</a></li>
                                    <li><a href="./room.html">Rooms</a></li>
                                    <li><a href="./about.html">About Us</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">- Home</a></li>
                                            <li><a href="room.html">- Rooms</a></li>
                                            <li><a href="single-room.html">- Single Rooms</a></li>
                                            <li><a href="about.html">- About Us</a></li>
                                            <li><a href="blog.html">- Blog</a></li>
                                            <li><a href="single-blog.html">- Single Blog</a></li>
                                            <li><a href="contact.html">- Contact</a></li>
                                            <li><a href="#">- Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">News</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>

                                <!-- Search -->
                                <div class="search-btn ml-4">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                                <!-- Book Now -->
                                <div class="book-now-btn ml-3 ml-lg-5">
                                    <a href="#">Book Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('')}}img/bg-img/17.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <div class="breadcrumb-post-content">
                            <h2 class="post-title">{{ $noticia->titulo }}</h2>
                            <div class="post-meta">
                                <a href="#" class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> {{$noticia->fecha->format('M d, Y')}}</a>
                                <a href="#" class="post-author"><i class="fa fa-user" aria-hidden="true"></i> by {{$noticia->user->persona->nombre}} {{$noticia->user->persona->apellido}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Blog Area Start -->
    <div class="roberto-news-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail mb-50">
                        <img src="{{asset('')}}images/noticias/{{$noticia->foto_url}}" alt="">
                    </div>
                    <!-- Blog Details Text -->
                    <div class="blog-details-text">
                        {!! $noticia->cuerpo !!}

                        <!-- Blockquote -->
                        <!--<blockquote class="roberto-blockquote d-flex">
                            <div class="icon">
                                <img src="{{asset('')}}img/core-img/quote.png" alt="">
                            </div>
                            <div class="text">
                                <h5>“Before you took that first cruise, your thoughts about cruise ships and cruise vacations consisted of flashbacks to Love Boat re-runs. Cruising was all about sunny, tropical destinations like Bermuda”</h5>
                            </div>
                        </blockquote>

                        <p>The city of southern California, san diego is locally known as ‘America’s Finest City’. It’s located on San Diego Bay, an inlet of the Pacific Ocean near the Mexican border. San Diego is the second largest city in California and the seventh largest in the United States. It is also nicknamed as ‘America’s biggest small town’.</p>-->
                    </div>

                    <!-- Post Author Area -->
                    <div class="post-author-area d-flex align-items-center justify-content-between mb-50">
                        <ul class="popular-tags">

                            @foreach(explode(',', $noticia->meta_tags) as $item)
                                <li><a href="#">{{$item}},</a></li>
                            @endforeach
                           

                        </ul>

                        <!-- Author Social Info -->
                        <div class="author-social-info d-flex align-items-center">
                            <p>Compartir:</p>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <!-- Comments Area -->
                    <div class="comment_area mb-50 clearfix">
                        <h2>{{$comentarios->count()}} Comentarios</h2>

                        <ol>
                            @foreach($comentarios as $comentario)
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="{{asset('')}}images/avatar/{{ $comentario->user->persona->foto_url }}" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="post-date">{{$comentario->created_at->format('d M Y')}}</a>
                                            <h5>{{$comentario->user->persona->nombre}} {{$comentario->user->persona->apellido}}</h5>
                                            <p>{{$comentario->comentario}}</p>
                                            <a href="#" class="like" data-comentario="{{$comentario->id}}">Like</a>
                                            <a href="#" class="reply" data-comentario="{{$comentario->id}}">Reply</a>
                                        </div>
                                    </div>

                                @foreach($comentario->respuestas as $respuesta)
                                    <ol class="children">
                                        <li class="single_comment_area">
                                            <!-- Comment Content -->
                                            <div class="comment-content d-flex">
                                                <!-- Comment Author -->
                                                <div class="comment-author">
                                                    <img src="{{asset('')}}images/avatar/{{ $respuesta->user->persona->foto_url }}" alt="author">
                                                </div>
                                                <!-- Comment Meta -->
                                                <div class="comment-meta">
                                                    <a href="#" class="post-date">{{$respuesta->created_at->format('d M Y')}}</a>
                                                    <h5>{{$respuesta->user->persona->nombre}} {{$respuesta->user->persona->apellido}}</h5>
                                                    <p>{{$respuesta->comentario}}</p>
                                                    <a href="#" class="like" data-respuesta="{{$respuesta->id}}">Like</a>
                                                    <a href="#" class="reply" data-respuesta="{{$respuesta->id}}">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                @endforeach
                                </li>
                            @endforeach

                       
                        </ol>
                    </div>

                    <!-- Leave A Reply -->
                    <div class="roberto-contact-form mt-80 mb-100">
                        <h2>Dejar un comentario</h2>

                        <!-- Form -->
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" name="message-name" class="form-control mb-30" placeholder="Your Name">
                                </div>
                                <div class="col-12">
                                    <input type="email" name="message-email" class="form-control mb-30" placeholder="Email">
                                </div>
                                <div class="col-12">
                                    <input type="text" name="website" class="form-control mb-30" placeholder="Websites">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control mb-30" placeholder="Start the discussion..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn roberto-btn btn-3 mt-15">Post Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="roberto-sidebar-area pl-md-4">

                        <!-- Newsletter -->
                        <div class="single-widget-area mb-100">
                            <div class="newsletter-form">
                                <h5>Newsletter</h5>
                                <p>Subscribe our newsletter gor get notification new updates.</p>

                                <form action="#" method="post">
                                    <input type="email" name="nl-email" id="nlEmail" class="form-control" placeholder="Enter your email...">
                                    <button type="submit" class="btn roberto-btn w-100">Subscribe</button>
                                </form>
                            </div>
                        </div>

                        <!-- Recent Post -->
                        <div class="single-widget-area mb-100">
                            <h4 class="widget-title mb-30">Noticias Recientes</h4>

                            @foreach($noticias as $row)

                                <!-- Single Recent Post -->
                                <div class="single-recent-post d-flex">
                                    <!-- Thumb -->
                                    <div class="post-thumb">
                                        <a href="single-blog.html"><img src="{{asset('')}}images/noticias/thumbs/{{ $row->foto_url }}" alt=""></a>
                                    </div>
                                    <!-- Content -->
                                    <div class="post-content">
                                        <!-- Post Meta -->
                                        <div class="post-meta">
                                            <a href="#" class="post-author">{{$row->fecha->format('d M, Y')}}</a>
                                            <a href="#" class="post-tutorial">{{$row->categoria}}</a>
                                        </div>
                                        <a href="single-blog.html" class="post-title">{{Str::limit($row->titulo,30)}}</a>
                                    </div>
                                </div>
                            @endforeach

                            

                        </div>

                        <!-- Popular Tags -->
                        <div class="single-widget-area mb-100 clearfix">
                            <h4 class="widget-title mb-30">Tags</h4>
                            <!-- Popular Tags -->
                            <ul class="popular-tags">
                                <li><a href="#">Bed,</a></li>
                                <li><a href="#">Hotel,</a></li>
                                <li><a href="#">Travel,</a></li>
                                <li><a href="#">Restaurant,</a></li>
                                <li><a href="#">Sport,</a></li>
                                <li><a href="#">Trip,</a></li>
                                <li><a href="#">Music,</a></li>
                                <li><a href="#">Holiday,</a></li>
                                <li><a href="#">Tourist,</a></li>
                                <li><a href="#">Foody,</a></li>
                                <li><a href="#">Resorts.</a></li>
                            </ul>
                        </div>

                        <!-- Instagram -->
                        <div class="single-widget-area mb-100 clearfix">
                            <h4 class="widget-title mb-30">Instagram</h4>
                            <!-- Instagram Feeds -->
                            <ul class="instagram-feeds">
                                <li><a href="#"><img src="{{asset('')}}img/bg-img/33.jpg" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('')}}img/bg-img/34.jpg" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('')}}img/bg-img/35.jpg" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('')}}img/bg-img/36.jpg" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('')}}img/bg-img/37.jpg" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('')}}img/bg-img/38.jpg" alt=""></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->

    <!-- Call To Action Area Start -->
    <section class="roberto-cta-area">
        <div class="container">
            <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url({{asset('')}}img/bg-img/1.jpg);">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="cta-text mb-50">
                            <h2>Contact us now!</h2>
                            <h6>Contact (+12) 345-678-9999 to book directly or for advice</h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 text-right">
                        <a href="#" class="btn roberto-btn mb-50">Contact Now</a>
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

    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row align-items-baseline justify-content-between">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Footer Logo -->
                            <a href="#" class="footer-logo"><img src="{{asset('')}}img/core-img/logo2.png" alt=""></a>

                            <h4>+12 345-678-9999</h4>
                            <span>Info.colorlib@gmail.com</span>
                            <span>856 Cordia Extension Apt. 356, Lake Deangeloburgh, South Africa</span>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Our Blog</h5>

                            <!-- Single Blog Area -->
                            <div class="latest-blog-area">
                                <a href="#" class="post-title">Freelance Design Tricks How</a>
                                <span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> Jan 02, 2019</span>
                            </div>

                            <!-- Single Blog Area -->
                            <div class="latest-blog-area">
                                <a href="#" class="post-title">Free Advertising For Your Online</a>
                                <span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> Jan 02, 2019</span>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Links</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> About Us</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Our Room</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Career</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> FAQs</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-8 col-lg-4">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Subscribe Newsletter</h5>
                            <span>Subscribe our newsletter gor get notification about new updates.</span>

                            <!-- Newsletter Form -->
                            <form action="index.html" class="nl-form">
                                <input type="email" class="form-control" placeholder="Enter your email...">
                                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="{{ asset('') }}js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="{{ asset('') }}js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('') }}js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="{{ asset('') }}js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="{{ asset('') }}js/default-assets/active.js"></script>

</body>

</html>