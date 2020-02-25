@extends('layouts.app', ['pageSlug' => 'noticias'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Editar Noticia') }}</h4>
                        </div>
                        <div class="col-4 text-right">
                            <!--<a href="{{ route('noticias.create') }}" class="btn btn-sm btn-primary">{{ __('Nueva Noticia') }}</a>-->
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
                    <form method="post" action="{{ route('noticias.update') }}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        
                        <input type="hidden" name="id" value="{{$noticia->id}}">

                        <div class="pl-lg-4">
                            <!-- titulo -->
                            <div class="form-group{{ $errors->has('titulo') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-titulo">{{ __('Título') }}</label>
                                <input type="text" name="titulo" id="input-titulo" class="form-control form-control-alternative{{ $errors->has('titulo') ? ' is-invalid' : '' }}" placeholder="{{ __('Título') }}" value="{{ $noticia->titulo }}" required autofocus>
                                @include('alerts.feedback', ['field' => 'titulo'])
                            </div>
                            
                            <!-- cuerpo -->
                            <div class="form-group{{ $errors->has('cuerpo') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-cuerpo">{{ __('Cuerpo') }}</label>
                                <textarea name="cuerpo" id="input-cuerpo" class="form-control form-control-alternative{{ $errors->has('cuerpo') ? ' is-invalid' : '' }} summernote" value="{{ old('cuerpo') }}" required height="400px" placeholder="Contenido de la noticia...">{{$noticia->cuerpo}}</textarea>
                                @include('alerts.feedback', ['field' => 'cuerpo'])
                            </div>

                            <!-- Categorías -->
                            <div class="form-group{{ $errors->has('categoria') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-categoria">{{ __('Categorías') }}</label>
                                <input type="text" name="categoria" id="input-categoria" class="form-control form-control-alternative{{ $errors->has('categoria') ? ' is-invalid' : '' }}" placeholder="{{ __('Ciencia, Política, Salud') }}" value="{{ $noticia->categoria }}" style="margin-bottom:5px;">
                                <small>Separadas por comas</small>
                                @include('alerts.feedback', ['field' => 'categoria'])
                            </div>
                            
                            <!-- Meta tags -->
                            <div class="form-group{{ $errors->has('meta_tags') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-meta_tags">{{ __('Metas') }}</label>
                                <input type="text" name="meta_tags" id="input-meta_tags" class="form-control form-control-alternative{{ $errors->has('meta_tags') ? ' is-invalid' : '' }}" placeholder="{{ __('Ciencia, Política, Salud') }}" value="{{ $noticia->meta_tags }}" style="margin-bottom:5px;">
                                <small style="margin-top: 5px;">Separadas por comas</small>
                                @include('alerts.feedback', ['field' => 'meta_tags'])
                            </div>

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
                                <img style="" id="preview_foto" width="50%" src="{{asset('')}}images/noticias/thumbs/{{$noticia->foto_url}}" alt="">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Guardar Cambios') }}</button>
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
