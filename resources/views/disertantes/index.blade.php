@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title"><strong>{{ __('Disertantes') }}</strong></h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('disertantes.create') }}" class="btn btn-sm btn-primary">{{ __('Nuevo Disertante') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success">
                          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="tim-icons icon-simple-remove"></i>
                          </button>
                          <span>
                            <b> {{ session('status') }}</span>
                        </div>
                    @endif

                    <div class="">

                        @if(count($disertantes ) > 0)
                        <table class="table tablesorter table-hover table-click" id="">
                            <thead class=" text-primary">
                                <th scope="col"></th>
                                <th scope="col">{{ __('Name') }}</th>
                                <th scope="col">{{ __('Email') }}</th>
                                <th scope="col">{{ __('Creation Date') }}</th>
                                {{-- <th scope="col"></th> --}}
                            </thead>
                            <tbody>
                                    @php
                                        $i = 0;
                                    @endphp

                                    @foreach ($disertantes as $disertante)
                                        @php
                                            $i++;
                                        @endphp
                                        <tr onclick="location.href='{{ route('disertantes.edit', $disertante->id)}}';">
                                            <td>{{ $i }}</td>
                                            <td>{{ Str::title($disertante->nombre) }} {{ Str::title($disertante->apellido) }}</td>
                                            <td>
                                                <a href="mailto:{{ $disertante->email }}">{{ $disertante->email }}</a>
                                            </td>
                                            <td>{{ ($disertante->created_at) }}</td>
                                            
                                        </tr>
                                    @endforeach
                            </tbody>
                        </table>
                        @else
                            <p class="text-center">Aún no hay Disertantes</p>
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
