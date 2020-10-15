@include('header')
@include('navbar')

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('')}}images/noticias/{{$noticia->foto_url}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <div class="breadcrumb-post-content">
                            <h2 class="post-title">{{ $noticia->titulo }}</h2>
                            <div class="post-meta">
                                <a href="#" class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> {{$noticia->fecha->format('M d, Y')}}</a>
                                <a href="#" class="post-author"><i class="fa fa-user" aria-hidden="true"></i> by {{$noticia->user->persona->nombre}} {{$noticia->user->persona->apellido}}</a>
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
                        <img src="{{asset('')}}images/noticias/{{$noticia->foto_url}}" alt="">
                    </div>
                    <!-- Blog Details Text -->
                    <div class="blog-details-text">
                        {!! $noticia->cuerpo !!}

                        <!-- Blockquote -->
                        <!--<blockquote class="roberto-blockquote d-flex">
                            <div class="icon">
                                <img src="{{asset('')}}img/core-img/quote.png" alt="">
                            </div>
                            <div class="text">
                                <h5>“Before you took that first cruise, your thoughts about cruise ships and cruise vacations consisted of flashbacks to Love Boat re-runs. Cruising was all about sunny, tropical destinations like Bermuda”</h5>
                            </div>
                        </blockquote>

                        <p>The city of southern California, san diego is locally known as ‘America’s Finest City’. It’s located on San Diego Bay, an inlet of the Pacific Ocean near the Mexican border. San Diego is the second largest city in California and the seventh largest in the United States. It is also nicknamed as ‘America’s biggest small town’.</p>-->
                    </div>

                    <!-- Post Author Area -->
                    <div class="post-author-area d-flex align-items-center justify-content-between mb-50">
                        <ul class="popular-tags">

                            @foreach(explode(',', $noticia->meta_tags) as $item)
                                <li><a href="#">{{$item}},</a></li>
                            @endforeach
                           

                        </ul>

                        <!-- Author Social Info -->
                        <div class="author-social-info d-flex align-items-center">
                            <p>Compartir:</p>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <!-- Comments Area -->
                    <div class="comment_area mb-50 clearfix">
                        <h2>{{$comentarios->count()}} Comentarios</h2>

                        <ol>
                            @foreach($comentarios as $comentario)
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="{{asset('')}}images/avatar/{{ $comentario->user->persona->foto_url }}" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="post-date">{{$comentario->created_at->format('d M Y')}}</a>
                                            <h5>{{$comentario->user->persona->nombre}} {{$comentario->user->persona->apellido}}</h5>
                                            <p>{{$comentario->comentario}}</p>
                                            <a href="#" class="like" data-comentario="{{$comentario->id}}">Like</a>
                                            <a href="#" class="reply" data-comentario="{{$comentario->id}}">Reply</a>
                                        </div>
                                    </div>

                                @foreach($comentario->respuestas as $respuesta)
                                    <ol class="children">
                                        <li class="single_comment_area">
                                            <!-- Comment Content -->
                                            <div class="comment-content d-flex">
                                                <!-- Comment Author -->
                                                <div class="comment-author">
                                                    <img src="{{asset('')}}images/avatar/{{ $respuesta->user->persona->foto_url }}" alt="author">
                                                </div>
                                                <!-- Comment Meta -->
                                                <div class="comment-meta">
                                                    <a href="#" class="post-date">{{$respuesta->created_at->format('d M Y')}}</a>
                                                    <h5>{{$respuesta->user->persona->nombre}} {{$respuesta->user->persona->apellido}}</h5>
                                                    <p>{{$respuesta->comentario}}</p>
                                                    <a href="#" class="like" data-respuesta="{{$respuesta->id}}">Like</a>
                                                    <a href="#" class="reply" data-respuesta="{{$respuesta->id}}">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                @endforeach
                                </li>
                            @endforeach

                       
                        </ol>
                    </div>

                    <!-- Leave A Reply -->
                    <div class="roberto-contact-form mt-80 mb-100">
                        <h2>Dejar un comentario</h2>

                        <!-- Form -->
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" name="message-name" class="form-control mb-30" placeholder="Your Name">
                                </div>
                                <div class="col-12">
                                    <input type="email" name="message-email" class="form-control mb-30" placeholder="Email">
                                </div>
                                <div class="col-12">
                                    <input type="text" name="website" class="form-control mb-30" placeholder="Websites">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control mb-30" placeholder="Start the discussion..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn roberto-btn btn-3 mt-15">Post Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="roberto-sidebar-area pl-md-4">

                        @include('newsletter')

                        <!-- Recent Post -->
                        <div class="single-widget-area mb-100">
                            <h4 class="widget-title mb-30">Noticias Recientes</h4>

                            @foreach($noticias as $row)

                                <!-- Single Recent Post -->
                                <div class="single-recent-post d-flex">
                                    <!-- Thumb -->
                                    <div class="post-thumb">
                                        <a href="{{$row->id}}"><img src="{{asset('')}}images/noticias/thumbs/{{ $row->foto_url }}" alt=""></a>
                                    </div>
                                    <!-- Content -->
                                    <div class="post-content">
                                        <!-- Post Meta -->
                                        <div class="post-meta">
                                            <a href="{{$row->id}}" class="post-author">{{$row->fecha->format('d M, Y')}}</a>
                                            <a href="{{$row->id}}" class="post-tutorial">{{$row->categoria}}</a>
                                        </div>
                                        <a href="{{$row->id}}" class="post-title">{{Str::limit($row->titulo,30)}}</a>
                                    </div>
                                </div>
                            @endforeach

                            

                        </div>

                        <!-- Popular Tags -->
                        <div class="single-widget-area mb-100 clearfix">
                            <h4 class="widget-title mb-30">Tags</h4>
                            <!-- Popular Tags -->
                            <ul class="popular-tags">
                                <li><a href="#">Bed,</a></li>
                                <li><a href="#">Hotel,</a></li>
                                <li><a href="#">Travel,</a></li>
                                <li><a href="#">Restaurant,</a></li>
                                <li><a href="#">Sport,</a></li>
                                <li><a href="#">Trip,</a></li>
                                <li><a href="#">Music,</a></li>
                                <li><a href="#">Holiday,</a></li>
                                <li><a href="#">Tourist,</a></li>
                                <li><a href="#">Foody,</a></li>
                                <li><a href="#">Resorts.</a></li>
                            </ul>
                        </div>

                        <!-- Instagram -->
                        @include('sidebar_instagram_2')

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->

    <!-- Call To Action Area Start -->
    <section class="roberto-cta-area">
        <div class="container">
            <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url({{asset('')}}img/bg-img/1.jpg);">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="cta-text mb-50">
                            <h2>Contact us now!</h2>
                            <h6>Contact (+12) 345-678-9999 to book directly or for advice</h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 text-right">
                        <a href="#" class="btn roberto-btn mb-50">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Area End -->

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