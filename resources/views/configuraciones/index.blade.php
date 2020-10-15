@extends('layouts.app', ['pageSlug' => 'configuraciones'])

@section('content')
@if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('superadmin'))
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Configuraciones') }}</h4>
                        </div>
                        {{-- <div class="col-4 text-right">
                            <a href="{{ route('cursos.create') }}" class="btn btn-sm btn-primary">{{ __('Nuevo Curso') }}</a>
                        </div> --}}
                    </div>
                </div>
                <div class="card-body">
                    <div class="">
                        @if(session('success'))
                            <div class="alert alert-success">
                              <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="tim-icons icon-simple-remove"></i>
                              </button>
                              <span>{{ session('success') }}</span>
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger">
                              <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="tim-icons icon-simple-remove"></i>
                              </button>
                              <span>{{ session('error') }}</span>
                            </div>
                        @endif
                    </div>
                    <form method="POST" action="{{ route('configuraciones.save') }}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        
                        <input type="hidden" name="id" value="{{ $configs->id }}">
                        <h6 class="heading-small text-muted mb-4">{{ __('MercadoPago') }}</h6>
                        <div class="pl-lg-4">

                            
                            <!-- mp_title -->
                            <div class="form-group{{ $errors->has('mp_title') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-title">{{ __('Título') }}</label>
                                <input type="text" name="mp_title" id="input-title" class="form-control form-control-alternative{{ $errors->has('mp_title') ? ' is-invalid' : '' }}" placeholder="{{ __('Título') }}" value="{{ $configs->mp_title }}" required>
                                <small>El título se mostrará al asistente al momento del pago.</small>
                                @include('alerts.feedback', ['field' => 'mp_title'])
                            </div>
                            <!-- mp_description -->
                            <div class="form-group{{ $errors->has('mp_description') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-descripcion">{{ __('Descripción') }}</label>
                                <input type="text" name="mp_description" id="input-descripcion" class="form-control form-control-alternative{{ $errors->has('mp_description') ? ' is-invalid' : '' }}" placeholder="{{ __('Descripción') }}" value="{{ $configs->mp_description }}" required>
                                <small>La descripción se mostrará al asistente al momento del pago.</small>
                                @include('alerts.feedback', ['field' => 'mp_description'])
                            </div>
                            <!-- mp_unit_price -->
                            <div class="form-group{{ $errors->has('mp_unit_price') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-unit-price">{{ __('Precio Unitario') }}</label>
                                <input type="number" name="mp_unit_price" id="input-unit-price" class="form-control form-control-alternative{{ $errors->has('mp_unit_price') ? ' is-invalid' : '' }}" placeholder="{{ __('100.50') }}" value="{{ $configs->mp_unit_price }}" step="0.01" min="1.00" required>
                                <small>El título se mostrará al asistente al momento del pago.</small>
                                @include('alerts.feedback', ['field' => 'mp_unit_price'])
                            </div>
                            <!-- mp_access_token -->
                            <div class="form-group{{ $errors->has('mp_access_token') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-access-token">{{ __('Access Token') }}</label>
                                <input type="text" name="mp_access_token" id="input-access-token" class="form-control form-control-alternative{{ $errors->has('mp_access_token') ? ' is-invalid' : '' }}" placeholder="{{ __('Access Token') }}" value="{{ $configs->mp_access_token }}" >
                                <small>Token de acceso. Obtener <a target="_blank" href="https://www.mercadopago.com/mla/account/credentials">aquí</a></small>
                                @include('alerts.feedback', ['field' => 'mp_access_token'])
                            </div>
                            <!-- mp_public_key -->
                            <div class="form-group{{ $errors->has('mp_public_key') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-public-key">{{ __('Public Key') }}</label>
                                <input type="text" name="mp_public_key" id="input-public-key" class="form-control form-control-alternative{{ $errors->has('mp_public_key') ? ' is-invalid' : '' }}" placeholder="{{ __('Public Key') }}" value="{{ $configs->mp_public_key }}" >
                                <small>Token de acceso. Obtener <a target="_blank" href="https://www.mercadopago.com/mla/account/credentials">aquí</a></small>
                                @include('alerts.feedback', ['field' => 'mp_public_key'])
                            </div>

                            <!-- mp_client_id -->
                            <div class="form-group{{ $errors->has('mp_client_id') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-client-id">{{ __('Client ID') }}</label>
                                <input type="text" name="mp_client_id" id="input-client-id" class="form-control form-control-alternative{{ $errors->has('mp_client_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Client ID') }}" value="{{ $configs->mp_client_id }}" >
                                <small>Client ID. Obtener <a target="_blank" href="https://www.mercadopago.com/mla/account/credentials">aquí</a></small>
                                @include('alerts.feedback', ['field' => 'mp_public_key'])
                            </div>
                            <!-- mp_client_secret -->
                            <div class="form-group{{ $errors->has('mp_client_secret') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-client-secret">{{ __('Client Secret') }}</label>
                                <input type="text" name="mp_client_secret" id="input-client-secret" class="form-control form-control-alternative{{ $errors->has('mp_client_secret') ? ' is-invalid' : '' }}" placeholder="{{ __('Client Secret') }}" value="{{ $configs->mp_client_secret }}" >
                                <small>Client Secret. Obtener <a target="_blank" href="https://www.mercadopago.com/mla/account/credentials">aquí</a></small>
                                @include('alerts.feedback', ['field' => 'mp_client_secret'])
                            </div>


                            <div class="text-left">
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
@endif
@endsection
