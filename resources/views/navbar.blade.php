<!-- Main Header Start -->
        <div class="main-header-area" style="z-index: 99999;">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="robertoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html"><img src="{{asset('')}}img/core-img/logoSolo.svg" alt="" width="150"></a>

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
                                            <li><a href="{{route('landing')}}#disertantes">- Disertantes</a></li>
                                            <li><a href="{{route('programas.todos')}}">- Programa</a></li>
                                            <li><a href="#salas">- Salas</a></li>
                                            
                                    
                                        </ul>
                                    </li>
                                    <li><a href="#">Organización</a>
                                        <ul class="dropdown">
                                           <li><a href="#">- SAE</a></li>
                                            <li><a href="#">- AOA</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Acomodation</a></li>
                                    <li><a href="#">Contacto</a></li>
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