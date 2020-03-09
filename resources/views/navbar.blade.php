<!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        

        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">

                    <div class="col-6">
                        <div class="top-header-content">
                            <a href="#"><i class="icon_phone"></i> <span>(123) 456-789-1230</span></a>
                            <a href="#"><i class="icon_mail"></i> <span>info@cosae2020.com</span></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="top-header-content">
                            <!-- Top Social Area -->
                            <div class="top-social-area ml-auto">
                                <a href="https://www.facebook.com/cosae2020/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/hashtag/cosae2020?src=hashtag_click" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="https://www.instagram.com/cosae2020/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Top Header Area End -->
        
        <!-- Main Header Start -->
        <div class="main-header-area" style="z-index: 99999;">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="robertoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="{{route('landing')}}"><img src="{{asset('')}}img/core-img/logoSolo.svg" alt="" width="150"></a>

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
                                    <li class="active"><a href="{{route('landing')}}">Home</a></li>
                                    <li><a href="#">COSAE</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('comision.index')}}">- Comisión Directiva</a></li>
                                            <li><a href="{{route('disertantes.todos')}}">- Disertantes</a></li>
                                            <li><a href="{{route('cursos.todos')}}">- Workshops</a></li>
                                            <li><a href="{{route('programas.todos')}}">- Programa</a></li>
                                            <li><a href="{{route('salas.index')}}">- Salas</a></li>
                                            <li><a href="#">Organización</a>
                                                <ul class="dropdown">
                                                   <li><a href="#">- SAE</a></li>
                                                    <li><a href="#">- AOA</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--<li><a href="#">Organización</a>
                                        <ul class="dropdown">
                                           <li><a href="#">- SAE</a></li>
                                            <li><a href="#">- AOA</a></li>
                                        </ul>
                                    </li>-->
                                    <li><a href="{{route('hoteles.accomodation')}}">Acommodation</a></li>
                                    <li><a href="{{route('contacto.index')}}">Contacto</a></li>
                                    <li><a href="{{route('login')}}">Login</a></li>
                                </ul>

                                

                                <!-- Inscripción / Acceso -->
                                @auth
                                    <div class="book-now-btn ml-3 ml-lg-5">
                                        <a href="/admin">Mi Cuenta<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                @endauth
                                @guest
                                    <div class="book-now-btn ml-3 ml-lg-5">
                                        <a href="{{ route('inscripcion.index') }}">Inscripción<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                @endguest
                                
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->