@extends('layouts.app', ['pageSlug' => 'cursos'])

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
                    @if($disertantes->count()>0)
                        <form action="{{route('cursos.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- disertante -->
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-nombre">{{ __('Nombre') }}</label>
                                <select name="disertante_id" id="idPersona" class="form-control" required>
                                    <option value="">Seleccione Disertante</option>
                                    @foreach($disertantes as $disertante)
                                        <option value="{{ $disertante->id }}">{{ $disertante->persona->nombre}} {{ $disertante->persona->apellido }}</option>
                                        }
                                    @endforeach
                                </select>
                                
                                @include('alerts.feedback', ['field' => 'disertante_id'])
                            </div>
                            <!-- tema -->
                            <div class="form-group{{ $errors->has('tema') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-tema">{{ __('Tema') }}</label>
                                <input type="text" name="tema" id="input-tema" class="form-control form-control-alternative{{ $errors->has('tema') ? ' is-invalid' : '' }}" placeholder="{{ __('Tema') }}" value="{{ old('tema') }}" required autofocus>
                                @include('alerts.feedback', ['field' => 'tema'])
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
                            <!-- contenido -->
                            <div class="form-group{{ $errors->has('contenido') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-contenido">{{ __('Contenido') }}</label>
                                <textarea name="contenido" id="input-contenido" class="form-control form-control-alternative{{ $errors->has('contenido') ? ' is-invalid' : '' }}" placeholder="{{ __('Contenido') }}"  required></textarea>
                                @include('alerts.feedback', ['field' => 'contenido'])
                            </div>
                            <!-- lugar -->
                            <div class="form-group{{ $errors->has('lugar') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-lugar">{{ __('Lugar') }}</label>
                                <input type="text" name="lugar" id="input-lugar" class="form-control form-control-alternative{{ $errors->has('nombre') ? ' is-invalid' : '' }}" placeholder="{{ __('Lugar') }}" value="{{ old('lugar') }}" required >
                                @include('alerts.feedback', ['field' => 'lugar'])
                            </div>

                            <div class="text-left">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Guardar') }}</button>
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
