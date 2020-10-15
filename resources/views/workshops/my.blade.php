@extends('layouts.app', ['pageSlug' => 'misworkshops'])

@section('content')
@if(Auth::user()->hasRole('asistente'))
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Cursos Inscriptos') }}</h4>
                        </div>
                        {{-- <div class="col-4 text-right">
                            <a href="{{ route('cursos.create') }}" class="btn btn-sm btn-primary">{{ __('Nuevo Curso') }}</a>
                        </div> --}}
                    </div>
                </div>
                <div class="card-body">
                    <div class="">
                        @if(session('success'))
                            <div class="alert alert-success">
                              <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="tim-icons icon-simple-remove"></i>
                              </button>
                              <span>
                                {{ session('success') }}</span>
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger">
                              <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="tim-icons icon-simple-remove"></i>
                              </button>
                              <span>
                                {{ session('error') }}</span>
                            </div>
                        @endif
                    </div>

                    
                    
                    <!-- aqui tabla -->
                    @if(count($cursos_inscripto) > 0)
                    <table class="table tablesorter table-hover table-click" id="">
                        <thead class=" text-primary">
                            <th scope="col"></th>
                            <th scope="col">{{ __('Tema') }}</th>
                            <th scope="col">{{ __('Disertante') }}</th>
                            <th scope="col">{{ __('Fecha y hora') }}</th>
                            {{-- <th scope="col"></th> --}}
                            {{-- <th scope="col"></th> --}}
                        </thead>
                        <tbody>
                                @php
                                    $i = 0;

                                @endphp

                                @foreach ($cursos_inscripto as $curso)

                                    @php
                                        $i++;
                                    @endphp
                                    <tr {{-- onclick="location.href='{{ route('disertantes.edit', $disertante->id)}}';" --}}>
                                        <td>{{ $i }}</td>
                                        <td>{{ Str::title($curso->tema) }}</td>
                                        <td class="capitalize">{{ $curso->disertante->persona->nombre }} {{ $curso->disertante->persona->apellido}}</td>
                                        <td>{{ $curso->fecha_curso }} {{ $curso->hora_curso }}</td>
                                        {{-- <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        <form action="{{ route('cursos.destroy', $curso->id)}}" method="get">
                                                            @csrf
                                                            

                                                            <a class="dropdown-item" href="{{ route('cursos.edit', $curso->id)}}">{{ __('Editar') }}</a>
                                                            <button type="button" class="dropdown-item" onclick="confirm('{{ __("¿Está seguro de eliminar este curso?") }}') ? this.parentElement.submit() : ''">
                                                                        {{ __('Eliminar') }}
                                                            </button>
                                                        </form>
                                                </div>
                                            </div>
                                        </td> --}}
                                        
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                    @else
                        <p class="text-center">Aún no estas matriculado a un curso.</p>
                    @endif
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                       
                    </nav>
                </div>
            </div>
        </div>

        <!-- cursos -->
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Workshops Disponibles') }}</h4>
                        </div>
                        {{-- <div class="col-4 text-right">
                            <a href="{{ route('cursos.create') }}" class="btn btn-sm btn-primary">{{ __('Nuevo Curso') }}</a>
                        </div> --}}
                    </div>
                </div>
                <div class="card-body">

                    @php
                        $has_one = 0;
                    @endphp
                    @foreach($cursos as $curso)
                        @if($ids_cursos_inscripto->contains($curso->id))
                            @php
                                $has_one ++;
                            @endphp
                        @endif
                    @endforeach
                    <!-- aqui tabla -->
                    @if(count($cursos) > 0 && count($cursos) > $has_one)
                    <form action="{{route('cursos.save_my_curses')}}" id="form-registro" method="POST">
                        <input type="hidden" name="asistente_id" value="{{$asistente->id}}">
                        <table class="table tablesorter table-hover table-click" id="">
                            <thead class=" text-primary">
                                <th scope="col"></th>
                                <th scope="col">{{ __('Tema') }}</th>
                                <th scope="col">{{ __('Disertante') }}</th>
                                <th scope="col">{{ __('Fecha y hora') }}</th>
                                <th scopre="col">{{__('Precio')}}</th>
                                <th scope="col">{{__('Seleccionar')}}</th>
                                {{-- <th scope="col"></th> --}}
                            </thead>
                            <tbody>
                                    @csrf
                                    
                                    @php
                                        $i = 0;
                                    @endphp

                                    @foreach ($cursos as $curso)
                                        @if(!$ids_cursos_inscripto->contains($curso->id))
                                            @php
                                                $i++;
                                            @endphp
                                            <tr {{-- onclick="location.href='{{ route('disertantes.edit', $disertante->id)}}';" --}}>
                                                <td>{{ $i }}</td>
                                                <td>{{ Str::title($curso->tema) }}</td>
                                                <td class="capitalize">{{ $curso->disertante->persona->nombre }} {{ $curso->disertante->persona->apellido}}</td>
                                                <td>{{ $curso->fecha_curso }} {{ $curso->hora_curso }}</td>
                                                <td>{{ $curso->precio }}</td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="cursos[]" value="{{$curso->id}}">
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                        
                                    @endforeach
                                </form>
                            </tbody>
                        </table>
                        <div class="text-left">
                            <button type="submit" class="btn btn-success mt-4">Inscribir</button>
                        </div>
                    </form>
                    @else
                        <p class="text-center">Aún no hay cursos disponibles.</p>
                    @endif
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                       
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection
