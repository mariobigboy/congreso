@include('header')
   

    @include('navbar')

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('')}}img/bg-img/bg2.jpg);">
        
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <div class="breadcrumb-post-content">
                            <h2 class="post-title">INSCRIPCIÓN</h2>
                            <div class="post-meta">
                                {{-- <a href="#" class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> {{$noticia->fecha->format('M d, Y')}}</a>
                                <a href="#" class="post-author"><i class="fa fa-user" aria-hidden="true"></i> by {{$noticia->user->persona->nombre}} {{$noticia->user->persona->apellido}}</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Blog Area Start -->
    <div class="roberto-news-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail mb-50">
                        <!--<img src="" alt="">-->
                    </div>
                                   
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel voluptatum reprehenderit, fugit, quod dolorem quia molestias laudantium velit officia odit aliquid cumque, soluta? Ab error iure tenetur veritatis dolorem repudiandae!</p>
                    </div>
                    <div>
                        @if(session('success_register'))
                            <div class="alert alert-success">
                              <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="tim-icons icon-simple-remove"></i>
                              </button>
                              <span>
                                Registrado correctamente! Ingrese <a href="/login">Aquí</a>
                              </span>
                            </div>
                        @endif
                    </div>
                    <!-- Leave A Reply -->
                    <div class="roberto-contact-form mt-80 mb-100">
                        <form id="formFormulario" action="{{ route('inscripcion.store') }}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inpNombres" class="col-md-5">Nombres</label>
                                  <div class="col-md-12">
                                    <input type="text" class="form-control {{ ($errors->has('nombres')? ' border-danger' : '') }}" id="inpNombres" name="nombres" placeholder="Nombres">
                                    @if($errors->has('nombres'))
                                        <small class="text-danger">{{$errors->first('nombres')}}</small>
                                    @endif
                                  </div>
                                </div>

                                <div class="form-group col-md-6">
                                  <label for="inpApellidos" class="col-md-5">Apellidos</label>
                                  <div class="col-md-12">
                                    <input type="text" class="form-control {{ ($errors->has('apellidos')? ' border-danger' : '') }}" id="inpApellidos" name="apellidos" placeholder="Apellidos">
                                    @if($errors->has('apellidos'))
                                        <small class="text-danger">{{$errors->first('apellidos')}}</small>
                                    @endif
                                  </div>
                                </div>

                                <div class="form-group col-md-6">
                                  <label for="inpDni" class="col-md-5">DNI</label>
                                  <div class="col-md-12">
                                    <input type="text" class="form-control {{ ($errors->has('dni')? ' border-danger' : '') }}" id="inpDni" name="dni" placeholder="00000000">
                                    @if($errors->has('dni'))
                                        <small class="text-danger">{{$errors->first('dni')}}</small>
                                    @endif
                                  </div>
                                </div>

                                <div class="form-group col-md-6">
                                  <label for="inpEmail" class="col-md-5">Email</label>
                                  <div class="col-md-12">
                                    <input type="email" class="form-control {{ ($errors->has('email')? ' border-danger' : '') }}" id="inpEmail" name="email" placeholder="email@ejemplo.com">
                                    @if($errors->has('email'))
                                        <small class="text-danger">{{$errors->first('email')}}</small>
                                    @endif
                                  </div>
                                </div>

                                <div class="form-group col-md-6">
                                  <label for="input-telefono" class="col-md-5">Teléfono</label>
                                  <div class="col-md-12">
                                    <input type="text" class="form-control" id="input-telefono" name="telefono" placeholder="+54 387 000 0000">
                                  </div>
                                </div>

                                <div class="form-group col-md-6">
                                  <label for="inpPass" class="col-md-5">Contraseña</label>
                                  <div class="col-md-12">
                                    <input type="password" class="form-control {{ ($errors->has('password')? ' border-danger' : '') }}" id="inpPass" name="password" placeholder="Contraseña">
                                    @if($errors->has('password'))
                                        <small class="text-danger">{{$errors->first('password')}}</small>
                                    @endif
                                  </div>
                                </div>

                            </div>
                            <div class="form-group col-md-12 text-left">
                                <button type="submit" class="btn btn-primary">Registrar!</button>
                            </div>

                          
                          
                         {{--  <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck">
                              <label class="form-check-label" for="gridCheck">
                                Check me out
                              </label>
                            </div>
                          </div> --}}
                        </form>
                    </div>
                </div>

                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="roberto-sidebar-area pl-md-4">

                        @include('newsletter')
                        
                        @include('sidebar_instagram_2')

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->

    @include('banner_inscripcion')

    <!-- Partner Area Start -->
    <div class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner-logo-content d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="{{asset('')}}img/core-img/p1.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="{{asset('')}}img/core-img/p2.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="{{asset('')}}img/core-img/p3.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="{{asset('')}}img/core-img/p4.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="{{asset('')}}img/core-img/p5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Area End -->

    @include('footer')