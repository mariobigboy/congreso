@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Cursos') }}</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('cursos.index') }}" class="btn btn-sm btn-primary">{{ __('Ver Cursos') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if($disertantes->count()>0)
                        <form action="">

                            <!-- disertante -->
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-nombre">{{ __('Nombre') }}</label>
                                <select name="persona_id" id="idPersona" class="form-control">
                                    @foreach($disertantes as $disertante)
                                        <option value="{{ $disertante->persona->id }}">{{ $disertante->persona->nombre }}</option>
                                    @endforeach
                                </select>
                                
                                @include('alerts.feedback', ['field' => 'persona_id'])
                            </div>
                            <!-- nombre -->
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-nombre">{{ __('Nombre') }}</label>
                                <input type="text" name="nombre" id="input-nombre" class="form-control form-control-alternative{{ $errors->has('nombre') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre') }}" value="{{ old('nombre') }}" required autofocus>
                                @include('alerts.feedback', ['field' => 'nombre'])
                            </div>
                        </form>
                    @else
                        <p class="text-center">Debe existir un disertante para asociarlo a un curso, puede crear uno nuevo clickeando <a href="{{ route('disertantes.create') }}"><strong>aquí</strong></a></p>
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
