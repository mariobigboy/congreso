@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Workshops') }}</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('programas.create') }}" class="btn btn-sm btn-primary">{{ __('Nuevo Workshop') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
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
                    
                    @if(count($programas ) > 0)
                    <table class="table tablesorter table-hover table-click" id="">
                        <thead class=" text-primary">
                            <th scope="col"></th>
                            <th scope="col">{{__('Imágen')}}</th>
                            <th scope="col">{{ __('Título') }}</th>
                            <th scope="col">{{ __('Descripción') }}</th>
                            <th scope="col">{{ __('Creation Date') }}</th>
                            <th scope="col"></th>
                            {{-- <th scope="col"></th> --}}
                        </thead>
                        <tbody>
                                @php
                                    $i = 0;
                                @endphp

                                @foreach ($programas as $programa)

                                    @php
                                        $i++;
                                    @endphp
                                    <tr {{-- onclick="location.href='{{ route('disertantes.edit', $disertante->id)}}';" --}}>
                                        <td>{{ $i }}</td>
                                        <td style="width:5%;"><img style="width:100%;" src="{{asset('')}}images/programas/thumbs/{{ $programa->foto_url }}" alt=""></td>
                                        <td>{{ $programa->titulo }}</td>
                                        <td>{{ Str::limit(strip_tags(html_entity_decode($programa->descripcion)),100,'...') }}</td>
                                        <td>{{ ($programa->created_at->format('d/m/Y H:i')) }}</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        <form action="programas/delete/{{$programa->id}}" method="get">
                                                            @csrf
                                                            
                                                            <a class="dropdown-item" href="programas/edit/{{ $programa->id }}">{{ __('Editar') }}</a>
                                                            <button type="button" class="dropdown-item" onclick="confirm('{{ __("¿Está seguro de eliminar este disertante?") }}') ? this.parentElement.submit() : ''">
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
                        <p class="text-center">Aún no hay Workshops</p>
                    @endif
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                       
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
