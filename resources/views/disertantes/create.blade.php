@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title"><strong>{{ __('Nuevo Disertante') }}</strong></h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('disertantes.index') }}" class="btn btn-sm btn-primary">{{ __('Ver Disertantes') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                       
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
