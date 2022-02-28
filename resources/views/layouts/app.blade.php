<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ mix('js/showPassword.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

     <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/Favicon.png') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                @guest
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('ENGLISH IS FUN', 'ENGLISH IS FUN') }}
                </a>
                @endguest
                @auth
                <div class="bg-yellow">
                    <div class="bg-grey"></div>
                    <a href="" class="navbar-brand text-center mr-0"> {{ Auth::user()->name }}</a>
                </div>
              
                @endauth
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    {{-- <span class="navbar-toggler-icon"></span> --}}
                    <span class="material-icons">settings</span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>
                       
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="btn btn-nav-login shadow-none" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item" style="margin-left: 7px">
                                    <a class="btn btn-nav-register shadow-none" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="font-size: 22px">
                                    <span class="material-icons" style="color: black">settings</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item set-nav-item" href="{{ route('logout') }}"
                                    >
                                    {{ __('SETTINGS') }}
                                </a>
                                <a class="dropdown-item bg-hover" href="{{ route('logout') }}"
                                    >
                                    <span class="material-icons">volume_up</span>
                                    {{ __('Music') }}
                                    <span class="material-icons">toggle_on</span>
                                </a>
                                <a class="dropdown-item bg-hover" href="{{ route('logout') }}"
                                >
                                <span class="material-icons">music_note</span>
                              <span class="mb-2"> {{ __('Sound') }} </span> 
                                <span class="material-icons">toggle_off</span>
                            </a>
                            <a class="dropdown-item btn btn-nav-item text-center" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
