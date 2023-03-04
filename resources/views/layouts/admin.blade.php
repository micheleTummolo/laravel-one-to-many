<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Fontawesome 6 cdn -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">

        <header class="navbar flex-md-nowrap p-2 background_dark border_bottom">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">BoolPress</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <input class="form-control form-control-dark w-100" type="text" Placeholder="Search">
            
        </header>
        <div class="container-fluid">
            <div class="row h-100">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-flex collapse p-0 pt-3 flex-column justify-content-between background_dark border_right main_container">
                    <!-- Sidebar top -->    
                    <div class="position-sticky">
                            <div class="logo_container border_bottom d-flex justify-content-center">
                                <div class="logo_circle">
                                    <img src="{{ Vite::asset('resources/img/logo.png')}}" alt="logo-png">
                                </div>
                            </div>
                            <ul class="d-flex flex-column align-items-center mt-5 p-0">
                                <li class="text-left sidebar_link {{ Route::currentRouteName() == 'admin.dashboard' ? 'sidebar_selected' : '' }}">
                                    <a class="text-white text-decoration-none w-100" href="{{route('admin.dashboard')}}">
                                        <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Dashboard
                                    </a>
                                </li>
                                <li class="text-left mt-3 sidebar_link {{ Route::currentRouteName() == 'admin.projects.index' ? 'sidebar_selected' : '' }}">
                                    <a class="text-white text-decoration-none w-100" href="{{route('admin.projects.index') }}">
                                        <i class="fa-solid fa-newspaper fa-lg fa-fw"></i> Posts
                                    </a>
                                </li>

                            </ul>
                    </div>

                    <!-- Sidebar bottom -->
                    <div class="d-flex flex-column align-items-center">
                        <div class="w-50 border_bottom">
    
                        </div>    
                        <div class="sidebar_bottom w-100 d-flex justify-content-center">
                            <div class="sidebar_link">
                                <a class="text-danger w-100" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="fa-solid fa-right-from-bracket fa-lg fa-fw me-1"></i>
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 background_dark">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>
</html>
