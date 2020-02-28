@include('header')
@include('navbar')
	<!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('')}}img/bg-img/bg2.jpg);">
    	
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <div class="breadcrumb-post-content">
                            <h2 class="post-title">Programas</h2>
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

	<div class="container">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, deleniti, doloribus porro ab distinctio fugiat vitae tempore hic ipsa incidunt aliquam tenetur voluptas praesentium laudantium! Consequuntur sapiente ratione dolorum nihil.</p>
	</div>
@include('footer')