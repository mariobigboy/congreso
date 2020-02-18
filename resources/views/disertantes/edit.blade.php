@extends('layouts.app')

@section('content')

    
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title"><strong>{{ __('Editar Disertante') }}</strong></h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('disertantes.index') }}" class="btn btn-sm btn-primary">{{ __('Ver Disertantes') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('disertantes.update') }}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        
                        <input type="hidden" name="id" value="{{ $persona->get('id') }}">
                        <h6 class="heading-small text-muted mb-4">{{ __('Información del Disertante') }}</h6>
                        <div class="pl-lg-4">
                            <!-- nombre -->
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-nombre">{{ __('Nombre') }}</label>
                                <input type="text" name="nombre" id="input-nombre" class="form-control form-control-alternative{{ $errors->has('nombre') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre') }}" value="{{ $persona->get('nombre') }}" required autofocus>
                                @include('alerts.feedback', ['field' => 'nombre'])
                            </div>
                            <!-- apellido -->
                            <div class="form-group{{ $errors->has('apellido') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-apellido">{{ __('Apellido') }}</label>
                                <input type="text" name="apellido" id="input-apellido" class="form-control form-control-alternative{{ $errors->has('apellido') ? ' is-invalid' : '' }}" placeholder="{{ __('Apellidos') }}" value="{{ $persona->get('apellido') }}" required autofocus>
                                @include('alerts.feedback', ['field' => 'apellido'])
                            </div>
                            <!-- dni -->
                            <div class="form-group{{ $errors->has('dni') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-dni">{{ __('DNI') }}</label>
                                <input type="text" name="dni" id="input-dni" class="form-control form-control-alternative{{ $errors->has('dni') ? ' is-invalid' : '' }}" placeholder="{{ __('Documento') }}" value="{{ $persona->get('dni') }}" disabled autofocus>
                                @include('alerts.feedback', ['field' => 'dni'])
                            </div>

                            <!-- email -->
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ $persona->get('email') }}" disabled>
                                @include('alerts.feedback', ['field' => 'email'])
                            </div>
                            <!-- telefono -->
                            <div class="form-group{{ $errors->has('telefono') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-telefono">{{ __('Teléfono') }}</label>
                                <input type="text" name="telefono" id="input-telefono" class="form-control form-control-alternative{{ $errors->has('telefono') ? ' is-invalid' : '' }}" placeholder="{{ __('Teléfono') }}" value="{{ $persona->get('telefono') }}" required autofocus>
                                @include('alerts.feedback', ['field' => 'telefono'])
                            </div>
                            <!-- Pais -->
                            <div class="form-group{{ $errors->has('pais') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-pais">{{ __('País') }}</label>
                                <input type="text" name="pais" id="input-pais" class="form-control form-control-alternative{{ $errors->has('pais') ? ' is-invalid' : '' }}" placeholder="{{ __('País') }}" value="{{ $persona->get('pais') }}" required>
                                @include('alerts.feedback', ['field' => 'pais'])
                            </div>
                            <!-- fecha_congreso -->
                            <!--<div class="form-group">
                                <label class="form-control-label " for="input-fecha">{{ __('Fecha') }}</label>
                                <input type="text" name="fecha_congreso" id="input-fecha" class="form-control form-control-alternative datepicker" placeholder="{{ __('31/12/2020') }}" value="{{ $persona->get('fecha_congreso') }}" required>
                            </div>-->
                            <!-- horario_congreso -->
                            <!--<div class="form-group">
                                <label class="form-control-label " for="input-hora">{{ __('Horario') }}</label>
                                <input type="text" name="hora_congreso" id="input-hora" class="form-control form-control-alternative timepicker" placeholder="{{ __('00:00') }}" value="{{ $persona->get('hora_congreso') }}" required>
                            </div>-->

                            <!-- foto -->
                            <div class="form-group">
                                <label for="" class="form-control-label">{{__('Foto')}}</label>
                                <div class="input-group mb-3">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input form-control" id="input-foto_url" aria-describedby="inputGroupFileAddon01" name="foto_url" >
                                    <label class="custom-file-label" for="input-foto_url">Elegir Foto</label>
                                  </div>
                                </div>
                            </div>

                            <div class="col-lg-12 text-center">
                                <img style="" id="preview_foto" width="50%" src="{{asset('')}}images/avatar/{{$persona->get('foto_url')}}" alt="">
                            </div>

                            <div class="text-left">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Guardar Cambios') }}</button>
                                <a href="{{ route('disertantes.destroy', $persona->get('id')) }}" type="button" class="btn btn-danger mt-4">{{ __('Eliminar') }}</a>
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
