@extends('layouts.app', ['pageSlug' => 'cursos'])

@section('content')
@if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('superadmin'))
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Cursos') }}</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('cursos.create') }}" class="btn btn-sm btn-primary">{{ __('Nuevo Curso') }}</a>
                        </div>
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
                                <b> {{ session('success') }}</span>
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger">
                              <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="tim-icons icon-simple-remove"></i>
                              </button>
                              <span>
                                <b> {{ session('error') }}</span>
                            </div>
                        @endif
                        @if(count($cursos) > 0)
                        <table class="table tablesorter table-hover table-click" id="">
                            <thead class=" text-primary">
                                <th scope="col"></th>
                                <th scope="col">{{ __('Tema') }}</th>
                                <th scope="col">{{ __('Disertante') }}</th>
                                <th scope="col">{{ __('Fecha y hora') }}</th>
                                <th scope="col"></th>
                                {{-- <th scope="col"></th> --}}
                            </thead>
                            <tbody>
                                    @php
                                        $i = 0;
                                    @endphp

                                    @foreach ($cursos as $curso)

                                        @php
                                            $i++;
                                        @endphp
                                        <tr {{-- onclick="location.href='{{ route('disertantes.edit', $disertante->id)}}';" --}}>
                                            <td>{{ $i }}</td>
                                            <td>{{ Str::title($curso->tema) }}</td>
                                            <td class="capitalize">{{ $curso->disertante->persona->nombre }} {{ $curso->disertante->persona->apellido}}</td>
                                            <td>{{ $curso->fecha_curso }} {{ $curso->hora_curso }}</td>
                                            <td class="text-right">
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
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                            </tbody>
                        </table>
                        @else
                            <p class="text-center">Aún no hay Cursos</p>
                        @endif
                    </div>
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
