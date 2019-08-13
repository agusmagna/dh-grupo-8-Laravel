<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tigout') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/25a72e0cf0.js"></script>
    @yield('headScript')
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    @yield('css')
    <link href="{{ asset('css/stylesLayoutFrontend.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm">
            <div class="container">
              <header>
                <a class="navbar-brand logo" href="{{ url('/index') }}">
                    <img src="{{ asset('images/logo_sin_fondo_blanco.png')}}" alt="Logo">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      @if(Request::getPathInfo()=='/index')
                        <li><a href="{{ url('/index') }}">Inicio</a></li>
                        <li><a href="#quienes-somos">Conocenos</a></li>
                        <li><a href="#productos">Productos</a></li>
                        <li><a href="{{ url('/contacto') }}">Contacto</a></li>
                      @else
                      <li><a href="{{ url('/index') }}">Inicio</a></li>
                      <li><a href="{{ url('/index#quienes-somos') }}">Conocenos</a></li>
                      <li><a href="{{ url('/products/categories') }}">Productos</a></li>
                      <li><a href="{{ url('/contacto') }}">Contacto</a></li>
                      @endif

                    </ul>
                    @if(Auth::check() && Auth::user()->isAdmin())
                      <a href="{{ url('/panelAdmin')}}" class='panelAdminLink'>Ir al panel de edición</li>
                    @endif
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li>
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                          <a href="{{url('/profile')}}" class='profileIcon'><i class="far fa-user-circle"></i></a>
                          <a href="{{url('/logout')}}" class='logoutTigout'>Logout</a>
                            <!-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li> -->
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        </header>
      <div class="content">
        @yield('content')
      </div>

      <footer>
      <div class="logo-footer">
        <img src="{{ asset('images/logo_sin_fondo_blanco.png')}}" alt="Logo">
      </div>
      <div class="footer-navegacion">
        <div class="footer-capsulas">
          @for ($i=0; $i < 5; $i++)
            @if ($i%2==0)
              <div class="footer-capsula1"><img src="{{ asset('images/contorno_capsula.png')}}" alt=""></div>
            @else
              <div class="footer-capsula2"><img src="{{asset('images/contorno_capsula.png')}}" alt=""></div>
            @endif
          @endfor
        </div>
        <ul>
          @if(Request::getPathInfo()=='/index')
            <li><a href="{{ url('/index') }}">Inicio</a></li>
            <li><a href="#quienes-somos">Conocenos</a></li>
            <li><a href="#productos">Productos</a></li>
            <li><a href="{{ url('/contacto') }}">Contacto</a></li>
          @else
          <li><a href="{{ url('/index') }}">Inicio</a></li>
          <li><a href="index#quienes-somos">Conocenos</a></li>
          <li><a href="{{ url('/products/categories') }}">Productos</a></li>
          <li><a href="{{ url('/contacto') }}">Contacto</a></li>
          @endif
        </ul>
        </ul>
        <div class="footer-capsulas">
          @for ($i=0; $i < 5; $i++)
            @if ($i%2==0)
              <div class="footer-capsula1"><img src="{{ asset('images/contorno_capsula.png')}}" alt=""></div>
            @else
              <div class="footer-capsula2"><img src="{{asset('images/contorno_capsula.png')}}" alt=""></div>
            @endif
          @endfor
        </div>
      </div>
      <div class="redes-sociales">
        <h3>Seguinos en</h3>
        <div class="iconos">
          <a href="https://es-la.facebook.com/tigout.AR/"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/tigout.ar/"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </footer>
      <!-- scripts finales -->

      @yield('finalScript')

    </div>
</body>
</html>
