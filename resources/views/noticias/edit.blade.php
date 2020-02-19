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
                     <form method="post" action="{{ route('noticias.store') }}" autocomplete="off" enctype="multipart/form-data">
                        @csrf

                        <!--<h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>-->
                        <div class="pl-lg-4">
                            <div class="form-group{{ $errors->has('titulo') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-titulo">{{ __('Título') }}</label>
                                <input type="text" name="titulo" id="input-titulo" class="form-control form-control-alternative{{ $errors->has('titulo') ? ' is-invalid' : '' }}" placeholder="{{ __('Título') }}" value="{{ old('titulo') }}" required autofocus>
                                @include('alerts.feedback', ['field' => 'titulo'])
                            </div>

                            <div class="form-group{{ $errors->has('cuerpo') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-cuerpo">{{ __('Email') }}</label>
                                <textarea name="cuerpo" id="input-cuerpo" class="form-control summernote form-control-alternative{{ $errors->has('cuerpo') ? ' is-invalid' : '' }}" value="{{ old('cuerpo') }}" required height="400px"></textarea>
                                @include('alerts.feedback', ['field' => 'cuerpo'])
                            </div>
                            
                            <div class="form-group">
                                <label class="form-control-label" for="">Foto Principal</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input form-control" id="inpFile" aria-describedby="inputGroupFileAddon01" name="foto_url">
                                    <label class="custom-file-label" for="inpFile">Choose file</label>
                                </div>
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
