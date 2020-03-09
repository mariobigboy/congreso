@include('header')
@include('navbar')
	<!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('')}}img/bg-img/bg2.jpg);">
    	
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <div class="breadcrumb-post-content">
                            <h2 class="post-title">Programas</h2>
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

	<div class="section-padding-100-0" style="min-height: 700px;">
        <div class="container">
    		<h2>Programas</h2>
            <div class="mt-5">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="day26-tab" data-toggle="tab" href="#day26" role="tab" aria-controls="day26" aria-selected="true">Wed 26</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="day27-tab" data-toggle="tab" href="#day27" role="tab" aria-controls="day27" aria-selected="false">Thu 27</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="day28-tab" data-toggle="tab" href="#day28" role="tab" aria-controls="day28" aria-selected="false">Fri 28</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="day29-tab" data-toggle="tab" href="#day29" role="tab" aria-controls="day29" aria-selected="false">Sat 29</a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade mt-4 show active" id="day26" role="tabpanel" aria-labelledby="day26">
                    <h3>Wed 26</h3>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col"><i class="fa fa-clock-o"></i></th>
                          <th scope="col">Tema</th>
                          <th scope="col">Lugar</th>
                          <th scope="col">Disertante</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($day26)>0)
                          @foreach($day26 as $curso)
                            <tr>
                              <th scope="row">{{$curso->hora_curso}}</th>
                              <td>{{$curso->tema}}</td>
                              <td>{{$curso->lugar}}</td>
                              <td>Disertante</td>
                            </tr>
                          @endforeach
                        @else
                           <tr>
                            <th></th>
                            <td>Aún no hay eventos este día.</td>
                            <td></td>
                            <td></td>
                          </tr>
                        @endif
                        
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade mt-4" id="day27" role="tabpanel" aria-labelledby="day27">
                    <h3>Thu 27</h3>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col"><i class="fa fa-clock-o"></i></th>
                          <th scope="col">Tema</th>
                          <th scope="col">Lugar</th>
                          <th scope="col">Disertante</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($day27)>0)
                          @foreach($day27 as $curso)
                            <tr>
                              <th scope="row">{{$curso->hora_curso}}</th>
                              <td>{{$curso->tema}}</td>
                              <td>{{$curso->lugar}}</td>
                              <td>Disertante</td>
                            </tr>
                          @endforeach
                        @else
                          <tr>
                            <th></th>
                            <td>Aún no hay eventos este día.</td>
                            <td></td>
                            <td></td>
                          </tr>
                        @endif
                        
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade mt-4" id="day28" role="tabpanel" aria-labelledby="day28">
                    <h3>Fri 28</h3>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col"><i class="fa fa-clock-o"></i></th>
                          <th scope="col">Tema</th>
                          <th scope="col">Lugar</th>
                          <th scope="col">Disertante</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($day28)>0)
                          @foreach($day28 as $curso)
                            <tr>
                              <th scope="row">{{$curso->hora_curso}}</th>
                              <td>{{$curso->tema}}</td>
                              <td>{{$curso->lugar}}</td>
                              <td>Disertante</td>
                            </tr>
                          @endforeach
                        @else
                           <tr>
                            <th></th>
                            <td>Aún no hay eventos este día.</td>
                            <td></td>
                            <td></td>
                          </tr>
                        @endif
                        
                      </tbody>
                    </table>
                  </div>
                    <div class="tab-pane fade mt-4" id="day29" role="tabpanel" aria-labelledby="day29">
                        <h3>Sat 29</h3>
                        <table class="table">
                      <thead>
                        <tr>
                          <th scope="col"><i class="fa fa-clock-o"></i></th>
                          <th scope="col">Tema</th>
                          <th scope="col">Lugar</th>
                          <th scope="col">Disertante</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($day29)>0)
                          @foreach($day29 as $curso)
                            <tr>
                              <th scope="row">{{$curso->hora_curso}}</th>
                              <td>{{$curso->tema}}</td>
                              <td>{{$curso->lugar}}</td>
                              <td>Disertante</td>
                            </tr>
                          @endforeach
                        @else
                           <tr>
                            <th></th>
                            <td>Aún no hay eventos este día.</td>
                            <td></td>
                            <td></td>
                          </tr>
                        @endif
                        
                      </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
	</div>
@include('footer')