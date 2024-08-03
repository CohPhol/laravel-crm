<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite(['resources/css/sidebar.css', 'resources/js/bootstrap.js'])
</head>
<body>
    <div id="app">
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline">Menu</span>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                                <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                            </li>
                            <li>
                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                    <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                                    <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                            </li>
                        </ul>
                        <hr>
                        <div class="dropdown pb-4">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                <span class="d-none d-sm-inline mx-1">loser</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col py-3">
                    Content area...
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/dashboard') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                          <li class="nav-item dropdown">
                            <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              Profile
                            </button>
                            <ul class="dropdown-menu dropdown-menu">
                                <li><a href={{ route('profile.create') }} class="dropdown-item" >Create</a></li> 
                                <li><a href={{ route('profile.edit') }} class="dropdown-item">Edit</a></li>
                            </ul>
                          </li>
                        </ul>
                    </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @Auth
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endAuth
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
