@include('header')
@include('navbar')

<!-- Breadcrumb Area Start -->
    <!--<div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('')}}img/bg-img/bg2.jpg);">-->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('')}}images/avatar/{{$disertante->persona->foto_url}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <div class="breadcrumb-post-content">
                            <h2 class="post-title">{{$disertante->persona->nombre}} {{$disertante->persona->apellido}}</h2>
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

	<div class="container" style="min-height: 600px; padding-top: 3em;">
		<div class="row">
			<div class="col-12 col-lg-6">
				<img src="{{asset('')}}images/avatar/{{$disertante->persona->foto_url}}" alt="" class="img-fluid">
			</div>
			<div class="col-12 col-lg-6">
				<h3>{{$disertante->persona->nombre}} {{$disertante->persona->apellido}}</h3>
				<p>{{$disertante->cv}}</p>	
			</div>
		</div>
	</div>

@include('banner_inscripcion')

@include('footer')

