@include('header')
   

    @include('navbar')

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('')}}img/bg-img/bg3.jpg);">
    	
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <div class="breadcrumb-post-content">
                            <h2 class="post-title">COMISIÓN DIRECTIVA</h2>
                            <div class="post-meta">
                                {{-- <a href="#" class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> {{$noticia->fecha->format('M d, Y')}}</a>
                                <a href="#" class="post-author"><i class="fa fa-user" aria-hidden="true"></i> by {{$noticia->user->persona->nombre}} {{$noticia->user->persona->apellido}}</a> --}}
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
                        <!--<img src="" alt="">-->
                    </div>
                                   
					<div>
                        <div>
                            <h5>COMISIÓN DIRECTIVA SAE 2020:</h5>
                                <strong>PRESIDENTE:</strong><p> Dr. Emilio Manzur </p>
                                <strong>VICEPRESIDENTE:</strong><p> Dra. María Laura Esain </p>
                                <strong>SECRETARIA:</strong><p> Dra. María Agustina Benavídez </p>
                                <strong>PROSECRETARIA:</strong><p> Dra. Laura Severino </p>
                                <strong>TESORERO:</strong><p> Dr. Federico Gibaja </p>
                                <strong>PROTESORERO:</strong><p> Dra. Ana Laura Resa </p>
                                <strong>VOCAL PRESIDENTE ENTRANTE:</strong><p> Dr. Jorge Basilaki </p>
                                <strong>VOCAL TITULAR:</strong><p> Dr. Gonzalo García </p>
                                <strong>VOCAL TITULAR:</strong><p> Dr. Carlos Cantarini </p>
                                <strong>VOCAL TITULAR:</strong><p> Dra. Marcela Roitman </p>
                                <strong>VOCAL TITULAR:</strong><p> Dr. Rodolfo Hilú </p>
                                <strong>VOCAL SUPLENTE:</strong><p> DR. Ciro Quiroga </p>
                                <strong>VOCAL SUPLENTE:</strong><p> Dra. Alicia Labarta</p>
                        </div>
                        <br><br>
                        <div>
                            <h5>COMISION ORGANIZADORA XIX COSAE</h5>
                        
                            <strong>PRESIDENTE</strong>
                            <p>Dr. Pablo Ensinas</p>
    
                            <strong>SECRETARIA</strong>
                            <p>Dra. Carolina Chaves</p>
    
                            <strong>TESORERO</strong>
                            <p>Dr. Federico Gibaja</p>
    
                            <strong>INTENDENCIA</strong>
                            <p>Dr. Jorge Basilaki</p>
    
                            <strong>ASESOR CIENTÍFICO</strong>
                            <p>Dr. Gonzalo García</p>
    
                            <strong>IV ENCUENTRO ESTUDIANTIL</strong>
                            <p>Dra. Maria de los Ángeles Bulacio <br>
                            Dr. Rodolfo Hilú</p>
    
                            <strong>V ENCUENTRO LATINOAMERICANO DE ESTUDIANTES DE POSGRADO</strong>
                            <p>Dra.  Susana Alvarez Serrano <br> Dra. Laura Esaín</p>
    
                            <strong>PROTOCOLO Y CEREMONIAL</strong>
                            <p>Dr. Carlos Cantarini</p>
    
                            <strong>PRENSA Y DIFUSIÓN</strong>
                            <p>Dr. Carlos Russo <br>
                            Dra. Agustina Berasategui</p>
    
                            <strong>STANDS COMERCIALES</strong>
                            <p>Dr. Jorge Basilaki <br>
                            Dr. Carlos Cantarini</p></div>
					</div>
                    
                </div>

                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="roberto-sidebar-area pl-md-4">

                        @include('newsletter')
                        
                        @include('sidebar_instagram')

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->

    @include('banner_inscripcion')

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