@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Nuevo Programa') }}</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('programas.index') }}" class="btn btn-sm btn-primary">{{ __('Ver Programas') }}</a>
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
                    <form method="post" action="{{ route('programas.update') }}" autocomplete="off" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{$programa->id}}">
                        <div class="pl-lg-4">
                            <!-- titulo -->
                            <div class="form-group{{ $errors->has('titulo') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-titulo">{{ __('Título') }}</label>
                                <input type="text" name="titulo" id="input-titulo" class="form-control form-control-alternative{{ $errors->has('titulo') ? ' is-invalid' : '' }}" placeholder="{{ __('Título') }}" value="{{ $programa->titulo }}" required autofocus>
                                @include('alerts.feedback', ['field' => 'titulo'])
                            </div>
                            
                            <!-- cuerpo -->
                            <div class="form-group{{ $errors->has('descripcion') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-descripcion">{{ __('Descripcion') }}</label>
                                <textarea name="descripcion" id="input-descripcion" class="form-control form-control-alternative{{ $errors->has('descripcion') ? ' is-invalid' : '' }} summernote" required height="400px" placeholder="Contenido del programa...">{!!$programa->descripcion!!}</textarea>
                                @include('alerts.feedback', ['field' => 'descripcion'])
                            </div>

                            
                            <!-- foto -->
                            <div class="form-group">
                                <label for="" class="form-control-label">{{__('Foto')}}</label>
                                <div class="input-group mb-3">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input form-control" id="input-foto_url" aria-describedby="inputGroupFileAddon01" name="foto_url">
                                    <label class="custom-file-label" for="input-foto_url">Elegir Foto</label>
                                  </div>
                                  
                                </div>
                            </div>

                            <div class="col-lg-12 text-center">
                                <img style="" id="preview_foto" width="50%" src="{{asset('')}}images/programas/{{$programa->foto_url}}" alt="">
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
