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
                    <form method="post" action="{{ route('disertantes.store') }}" autocomplete="off">
                        @csrf

                        <h6 class="heading-small text-muted mb-4">{{ __('Información del Disertante') }}</h6>
                        <div class="pl-lg-4">
                            <!-- nombre -->
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-nombre">{{ __('Nombre') }}</label>
                                <input type="text" name="nombre" id="input-nombre" class="form-control form-control-alternative{{ $errors->has('nombre') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre') }}" value="{{ old('nombre') }}" required autofocus>
                                @include('alerts.feedback', ['field' => 'nombre'])
                            </div>
                            <!-- apellido -->
                            <div class="form-group{{ $errors->has('apellido') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-apellido">{{ __('Apellido') }}</label>
                                <input type="text" name="apellido" id="input-apellido" class="form-control form-control-alternative{{ $errors->has('apellido') ? ' is-invalid' : '' }}" placeholder="{{ __('Apellidos') }}" value="{{ old('apellido') }}" required autofocus>
                                @include('alerts.feedback', ['field' => 'apellido'])
                            </div>
                            <!-- dni -->
                            <div class="form-group{{ $errors->has('dni') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-dni">{{ __('DNI') }}</label>
                                <input type="text" name="dni" id="input-dni" class="form-control form-control-alternative{{ $errors->has('dni') ? ' is-invalid' : '' }}" placeholder="{{ __('Documento') }}" value="{{ old('dni') }}" required autofocus>
                                @include('alerts.feedback', ['field' => 'dni'])
                            </div>

                            <!-- email -->
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required>
                                @include('alerts.feedback', ['field' => 'email'])
                            </div>
                            <!-- telefono -->
                            <div class="form-group{{ $errors->has('telefono') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-telefono">{{ __('Teléfono') }}</label>
                                <input type="text" name="telefono" id="input-telefono" class="form-control form-control-alternative{{ $errors->has('telefono') ? ' is-invalid' : '' }}" placeholder="{{ __('Teléfono') }}" value="{{ old('telefono') }}" required autofocus>
                                @include('alerts.feedback', ['field' => 'telefono'])
                            </div>
                            <!-- Pais -->
                            <div class="form-group{{ $errors->has('pais') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-pais">{{ __('País') }}</label>
                                <input type="text" name="pais" id="input-pais" class="form-control form-control-alternative{{ $errors->has('pais') ? ' is-invalid' : '' }}" placeholder="{{ __('País') }}" value="" required>
                                @include('alerts.feedback', ['field' => 'pais'])
                            </div>
                            <!-- fechaCongreso -->
                            <div class="form-group">
                                <label class="form-control-label" for="input-fecha">{{ __('Fecha') }}</label>
                                <input type="text" name="fechaCongreso" id="input-fecha" class="form-control form-control-alternative" placeholder="{{ __('Fecha Congreso') }}" value="" required>
                            </div>

                            <div class="text-left">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Guardar') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                       
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
