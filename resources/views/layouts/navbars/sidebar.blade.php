<div class="sidebar" data="green">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('AOA') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('ADMINISTRACIÓN') }}</a>
        </div>
        <ul class="nav">

            @if(Auth::user()->hasRole('superadmin'))
                <!-- aquí los items para Super administrador: -->
                <li @if (isset($pageSlug) && $pageSlug == 'dashboard') class="active " @endif>
                    <a href="{{ route('home') }}">
                        <i class="tim-icons icon-chart-pie-36"></i>
                        <p>{{ __('Dashboard') }}</p>
                    </a>
                </li>

                <li @if (isset($pageSlug) && $pageSlug == 'asistentes') class="active " @endif>
                    <a href="{{ route('asistentes.index') }}">
                        <i class="tim-icons icon-single-02"></i>
                        <p>{{ __('Asistentes') }}</p>
                    </a>
                </li>

                <li @if (isset($pageSlug) && $pageSlug == 'disertantes') class="active " @endif>
                    <a href="{{ route('disertantes.index') }}">
                        <i class="tim-icons icon-badge"></i>
                        <p>{{ __('Disertantes') }}</p>
                    </a>
                </li>

                <li @if (isset($pageSlug) && $pageSlug == 'programas') class="active " @endif>
                    <a href="{{ route('programas.index') }}">
                        <i class="tim-icons icon-notes"></i>
                        <p>{{ __('Programas') }}</p>
                    </a>
                </li>

                <li @if (isset($pageSlug) && $pageSlug == 'noticias') class="active " @endif>
                    <a href="{{ route('noticias.index') }}">
                        <i class="tim-icons icon-paper"></i>
                        <p>{{ __('Noticias') }}</p>
                    </a>
                </li>

                <li @if (isset($pageSlug) && $pageSlug == 'cursos') class="active " @endif>
                    <a href="{{ route('cursos.index') }}">
                        <i class="tim-icons icon-trophy"></i>
                        <p>{{ __('Cursos') }}</p>
                    </a>
                </li>

                <li @if (isset($pageSlug) && $pageSlug == 'galerias') class="active " @endif>
                    <a href="{{ route('pages.galerias') }}">
                        <i class="tim-icons icon-image-02"></i>
                        <p>{{ __('Galerías') }}</p>
                    </a>
                </li>

                
                <li>
                    <a data-toggle="collapse" href="#laravel-examples" aria-expanded="false">
                        <i class="fab fa-laravel" ></i>
                        <span class="nav-link-text" >{{ __('Laravel Examples') }}</span>
                        <b class="caret mt-1"></b>
                    </a>

                    <div class="collapse show" id="laravel-examples">
                        <ul class="nav pl-4">
                            <li @if (isset($pageSlug) && $pageSlug == 'profile') class="active " @endif>
                                <a href="{{ route('profile.edit')  }}">
                                    <i class="tim-icons icon-single-02"></i>
                                    <p>{{ __('User Profile') }}</p>
                                </a>
                            </li>
                            
                            <li @if (isset($pageSlug) && $pageSlug == 'users') class="active " @endif>
                                <a href="{{ route('user.index')  }}">
                                    <i class="tim-icons icon-bullet-list-67"></i>
                                    <p>{{ __('User Management') }}</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li @if (isset($pageSlug) && $pageSlug == 'icons') class="active " @endif>
                    <a href="{{ route('pages.icons') }}">
                        <i class="tim-icons icon-atom"></i>
                        <p>{{ __('Icons') }}</p>
                    </a>
                </li>
                <li @if (isset($pageSlug) && $pageSlug == 'maps') class="active " @endif>
                    <a href="{{ route('pages.maps') }}">
                        <i class="tim-icons icon-pin"></i>
                        <p>{{ __('Maps') }}</p>
                    </a>
                </li>
                <li @if (isset($pageSlug) && $pageSlug == 'notifications') class="active " @endif>
                    <a href="{{ route('pages.notifications') }}">
                        <i class="tim-icons icon-bell-55"></i>
                        <p>{{ __('Notifications') }}</p>
                    </a>
                </li>
                <li @if (isset($pageSlug) && $pageSlug == 'tables') class="active " @endif>
                    <a href="{{ route('pages.tables') }}">
                        <i class="tim-icons icon-puzzle-10"></i>
                        <p>{{ __('Table List') }}</p>
                    </a>
                </li>
                <li @if (isset($pageSlug) && $pageSlug == 'typography') class="active " @endif>
                    <a href="{{ route('pages.typography') }}">
                        <i class="tim-icons icon-align-center"></i>
                        <p>{{ __('Typography') }}</p>
                    </a>
                </li>
                <!--<li @if (isset($pageSlug) && $pageSlug == 'rtl') class="active " @endif>
                    <a href="{{ route('pages.rtl') }}">
                        <i class="tim-icons icon-world"></i>
                        <p>{{ __('RTL Support') }}</p>
                    </a>
                </li>-->
                <!--<li class=" {{ isset($pageSlug) && $pageSlug == 'upgrade' ? 'active' : '' }}">
                    <a href="{{ route('pages.upgrade') }}">
                        <i class="tim-icons icon-spaceship"></i>
                        <p>{{ __('Upgrade to PRO') }}</p>
                    </a>
                </li>-->
            @endif

            @if(Auth::user()->hasRole('admin'))
                <!-- aquí los items para Administrador: -->
            @endif

            @if(Auth::user()->hasRole('user'))
                <!-- aquí los items para usuario: -->
            @endif

            @if(Auth::user()->hasRole('asistente'))
                <!-- aquí los items para asistente: -->
                <li @if (isset($pageSlug) && $pageSlug == 'dashboard') class="active " @endif>
                    <a href="{{ route('home') }}">
                        <i class="tim-icons icon-notes"></i>
                        <p>{{ __('Inicio') }}</p>
                    </a>
                </li>

                <li @if (isset($pageSlug) && $pageSlug == 'matricula') class="active " @endif>
                    <a href="{{ route('programas.index') }}">
                        <i class="tim-icons icon-notes"></i>
                        <p>{{ __('Matricula') }}</p>
                    </a>
                </li>

                <li @if (isset($pageSlug) && $pageSlug == 'miscursos') class="active " @endif>
                    <a href="{{ route('cursos.my') }}">
                        <i class="tim-icons icon-paper"></i>
                        <p>{{ __('Mis cursos') }}</p>
                    </a>
                </li>

            @endif
        </ul>
    </div>
</div>
