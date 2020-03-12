@extends('layouts.app', ['pageSlug' => 'asistentes'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title"><strong>{{ __('Asistentes Registrados') }}</strong></h4>
                        </div>
                        <div class="col-4 text-right">
                            <!--<a href="{{ route('asistentes.create') }}" class="btn btn-sm btn-primary">{{ __('Nuevo Asistente') }}</a>-->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="">
                        @if(count($asistentes) > 0)
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col"> </th>
                                <th scope="col">{{ __('Nombre y Apellido') }}</th>
                                <th scope="col">{{ __('Email') }}</th>
                                <th scope="col">{{ __('Dni') }}</th>
                                <th scope="col">{{ __('telefono') }}</th>
                                <th scope="col">{{ __('Registrado') }}</th>
                                <th scope="col">{{ __('Matricula') }}</th>
                                {{-- <th scope="col"></th> --}}
                            </thead>
                            <tbody>
                                    @php
                                        $i = 0;
                                    @endphp

                                    @foreach ($asistentes as $asistente)
                                        @php
                                            $i++;
                                        @endphp
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td class="capitalize">{{ $asistente->nombre }} {{ $asistente->apellido }}</td>
                                            <td>
                                                <a href="mailto:{{ $asistente->email }}">{{ $asistente->email }}</a>
                                            </td>
                                            <td>{{ $asistente->dni }}</td>
                                            <td>{{ $asistente->telefono }}</td>
                                            <td>{{ ($asistente->created_at->format('d M Y, H:i')) }}</td>
                                            <td><a href="#">Pagos</a></td>
                                            
                                        </tr>
                                    @endforeach
                            </tbody>
                        </table>
                        @else
                            <p class="text-center">Aún no hay asistentes</p>
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
@endsection
