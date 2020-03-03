@include('header')
   

            
	@include('navbar')

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('')}}img/bg-img/bg2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Cursos</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('landing')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cursos</li>
                            </ol>
                        </nav>
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

                	@foreach($cursos as $curso)
                		<!-- Single Room Area -->
	                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
	                        <!-- Room Thumbnail -->
	                        <div class="room-thumbnail">
	                            <img src="{{asset('')}}images/cursos/thumbs/{{$curso->foto_url}}" alt="">
	                        </div>
	                        <!-- Room Content -->
	                        <div class="room-content">
	                            <h2>{{$curso->tema}}</h2>
	                            <!--<h4>400$ <span>/ Day</span></h4>-->
	                            <div class="room-feature">
	                            	@php
	                            		$persona = $curso->disertante->persona;
	                            	@endphp
	                                <h6 class="capitalize">Dictado por: <span>{{$persona->nombre}} {{$persona->apellido}}</span></h6>
	                                <h6>Ubicación: <span>{{$curso->lugar}}</span></h6>
	                                <h6>Fecha: <span>{{$curso->fecha_curso}}</span></h6>
	                                <h6>Hora: <span>{{$curso->hora_curso}} hs</span></h6>
	                            </div>
	                            <a href="curso/{{$curso->id}}" class="btn view-detail-btn">Detalles <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
	                        </div>
	                    </div>
                	@endforeach

                    

                    <!-- Pagination -->
                    <nav class="roberto-pagination wow fadeInUp mb-100" data-wow-delay="1000ms">
                        <ul class="pagination">
                        	<!--
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next <i class="fa fa-angle-right"></i></a></li>-->
                            {{$cursos->links()}}
                        </ul>
                    </nav>
                </div>

                <div class="col-12 col-lg-4">
                    @include('sidebar_instagram')
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->

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