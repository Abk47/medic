<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        #loader {
          transition: all 0.3s ease-in-out;
          opacity: 1;
          visibility: visible;
          position: fixed;
          height: 100vh;
          width: 100%;
          background: #fff;
          z-index: 90000;
        }
  
        #loader.fadeOut {
          opacity: 0;
          visibility: hidden;
        }
  
        .spinner {
          width: 40px;
          height: 40px;
          position: absolute;
          top: calc(50% - 20px);
          left: calc(50% - 20px);
          background-color: #333;
          border-radius: 100%;
          -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
          animation: sk-scaleout 1.0s infinite ease-in-out;
        }
  
        @-webkit-keyframes sk-scaleout {
          0% { -webkit-transform: scale(0) }
          100% {
            -webkit-transform: scale(1.0);
            opacity: 0;
          }
        }
  
        @keyframes sk-scaleout {
          0% {
            -webkit-transform: scale(0);
            transform: scale(0);
          } 100% {
            -webkit-transform: scale(1.0);
            transform: scale(1.0);
            opacity: 0;
          }
        }
      </style>
</head>
<body>
        <!-- @Page Loader -->
    <!-- =================================================== -->
    <div id='loader'>
        <div class="spinner"></div>
      </div>
  
      <script>
        window.addEventListener('load', function load() {
          const loader = document.getElementById('loader');
          setTimeout(function() {
            loader.classList.add('fadeOut');
          }, 300);
        });
      </script>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
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
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
