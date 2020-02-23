@extends('layouts.app', ['pageSlug' => 'noticias'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Noticias') }}</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('noticias.create') }}" class="btn btn-sm btn-primary">{{ __('Nueva Noticia') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if(count($noticias ) > 0)
                    <table class="table tablesorter table-hover table-click" id="">
                        <thead class=" text-primary">
                            <th scope="col"></th>
                            <th scope="col">{{__('Imágen')}}</th>
                            <th scope="col">{{ __('Título') }}</th>
                            <th scope="col">{{ __('By') }}</th>
                            <th scope="col">{{ __('Creation Date') }}</th>
                            <th scope="col"></th>
                            {{-- <th scope="col"></th> --}}
                        </thead>
                        <tbody>
                                @php
                                    $i = 0;
                                @endphp

                                @foreach ($noticias as $noticia)

                                    @php
                                        $i++;
                                    @endphp
                                    <tr {{-- onclick="location.href='{{ route('disertantes.edit', $disertante->id)}}';" --}}>
                                        <td>{{ $i }}</td>
                                        <td style="width:20%;"><img style="width:100%;" src="{{asset('')}}images/noticias/thumbs/{{$noticia->foto_url}}" alt=""></td>
                                        <td>{!!Str::limit($noticia->cuerpo,30,'...')!!}</td>
                                        <td>{{$noticia->user->persona->nombre}} {{$noticia->user->persona->apellido}}</td>
                                        <td>{{ ($noticia->created_at->format('d/m/Y H:i')) }}</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        <form action="{{'asd'}}" method="get">
                                                            @csrf
                                                            
                                                            <a class="dropdown-item" href="{{ '' }}">{{ __('Editar') }}</a>
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
                        <p class="text-center">Aún no hay Disertantes</p>
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
