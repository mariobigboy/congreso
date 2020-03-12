@include('header')
@include('navbar')
	<!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('')}}img/bg-img/bg2.jpg);">
    	
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <div class="breadcrumb-post-content">
                            <h2 class="post-title">Disertantes</h2>
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

	<div class="container mt-5">
		<h2>Nuestros Disertantes</h2>
        <div class="row mt-5 mb-5">
            <div class="col-lg-12">
                <div class="table-responsive">
                    @if(count($disertantes ) > 0)
                    <table class="table tablesorter table-hover table-click" id="">
                        <thead class=" text-primary">
                            <th scope="col"></th>
                            <th scope="col">{{ __('Name & Surname') }}</th>
                            <th scope="col" width="600px">{{ __('CV') }}</th>
                        </thead>
                        <tbody>
                                @php
                                    $i = 0;
                                @endphp

                                @foreach ($disertantes as $disertante)

                                    @php
                                        $i++;
                                    @endphp
                                    <tr {{-- onclick="location.href='{{ route('disertantes.edit', $disertante->id)}}';" --}}>
                                        <td >
                                            <img class="rounded-circle" src="{{asset('')}}images/avatar/thumbs/{{$disertante->persona->foto_url}}" alt="">
                                        </td>
                                        <td>{{ Str::title($disertante->persona->nombre) }} {{ Str::title($disertante->persona->apellido) }}</td>
                                        <td>
                                            <p>{{Str::words($disertante->cv, 30)}} <a href="/disertante/{{$disertante->id}}" style="color:#007bff;"> Leer más</a></p>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                    @else
                        <p class="text-center">Aún no hay Disertantes</p>
                    @endif
                </div>
            </div>
        </div>
	</div>
@include('footer')
