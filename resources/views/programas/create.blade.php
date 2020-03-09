@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Nuevo Workshop') }}</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('programas.index') }}" class="btn btn-sm btn-primary">{{ __('Ver Workshops') }}</a>
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
                    <form method="post" action="{{ route('programas.store') }}" autocomplete="off" enctype="multipart/form-data">
                        @csrf

                        <div class="pl-lg-4">
                            <!-- titulo -->
                            <div class="form-group{{ $errors->has('titulo') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-titulo">{{ __('Título') }}</label>
                                <input type="text" name="titulo" id="input-titulo" class="form-control form-control-alternative{{ $errors->has('titulo') ? ' is-invalid' : '' }}" placeholder="{{ __('Título') }}" value="{{ old('titulo') }}" required autofocus>
                                @include('alerts.feedback', ['field' => 'titulo'])
                            </div>
                            
                            <!-- cuerpo -->
                            <div class="form-group{{ $errors->has('descripcion') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-descripcion">{{ __('Descripcion') }}</label>
                                <textarea name="descripcion" id="input-descripcion" class="form-control form-control-alternative{{ $errors->has('descripcion') ? ' is-invalid' : '' }} summernote" required height="400px" placeholder="Contenido del programa..."></textarea>
                                @include('alerts.feedback', ['field' => 'descripcion'])
                            </div>

                            <!-- precio -->
                            <div class="form-group{{ $errors->has('precio') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-unit-price">{{ __('Precio') }}</label>
                                <input type="number" name="precio" id="input-unit-price" class="form-control form-control-alternative{{ $errors->has('precio') ? ' is-invalid' : '' }}" placeholder="{{ __('100.50') }}" step="0.01" min="1.00" required>
                                @include('alerts.feedback', ['field' => 'precio'])
                            </div>

                            <!-- fecha -->
                            <div class="form-group{{ $errors->has('fecha_curso') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-fecha">{{ __('Fecha') }}</label>
                                <input type="text" name="fecha_curso" id="input-fecha" class="form-control form-control-alternative{{ $errors->has('fecha_curso') ? ' is-invalid' : '' }} datepicker" placeholder="{{ __('Fecha') }}" value="{{ old('fecha_curso') }}" required>
                                @include('alerts.feedback', ['field' => 'nombre'])
                            </div>
                            <!-- hora -->
                            <div class="form-group{{ $errors->has('hora_curso') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-hora">{{ __('Hora') }}</label>
                                <input type="text" name="hora_curso" id="input-hora" class="form-control form-control-alternative{{ $errors->has('hora_curso') ? ' is-invalid' : '' }} timepicker" placeholder="{{ __('Hora') }}" value="{{ old('hora_curso') }}" required >
                                @include('alerts.feedback', ['field' => 'hora_curso'])
                            </div>

                            <!-- lugar -->
                            <div class="form-group{{ $errors->has('lugar') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-lugar">{{ __('Lugar') }}</label>
                                <input type="text" name="lugar" id="input-lugar" class="form-control form-control-alternative{{ $errors->has('nombre') ? ' is-invalid' : '' }}" placeholder="{{ __('Lugar') }}" value="{{ old('lugar') }}" required >
                                @include('alerts.feedback', ['field' => 'lugar'])
                            </div>
                            
                            <!-- foto -->
                            <div class="form-group">
                                <label for="" class="form-control-label">{{__('Foto')}}</label>
                                <div class="input-group mb-3">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input form-control" id="input-foto_url" aria-describedby="inputGroupFileAddon01" name="foto_url" required>
                                    <label class="custom-file-label" for="input-foto_url">Elegir Foto</label>
                                  </div>
                                  
                                </div>
                            </div>

                            <div class="col-lg-12 text-center">
                                <img style="display:none;" id="preview_foto" width="50%" src="http://placekitten.com/g/300/600" alt="">
                            </div>

                            <div class="text-center">
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
