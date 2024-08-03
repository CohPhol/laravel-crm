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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/sidebar.css')
    
    
</head>
<body>
    <div id="app">
        <div class="d-flex">
            <!-- Sidebar -->
            <aside id="sidebar" class="sidebar-toggle">
                <div class="sidebar-logo">
                    <a href="{{ url('/dashboard') }}">CRM</a>
                </div>
                <!-- Sidebar Navigation -->
                <ul class="sidebar-nav p-0">
                    <li class="sidebar-item">
                        <a href="{{ url('/dashboard') }}" class="sidebar-link">
                            <i class="lni lni-user"></i>
                            <span class="sidebar-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-header">
                        Models
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                            data-bs-target="#products" aria-expanded="true" aria-controls="products">
                            <i class="lni lni-protection"></i>
                            <span class="sidebar-text">Products</span>
                        </a>
                        <ul id="products" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link sidebar-child">Product List</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link sidebar-child">Register</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="lni lni-popup"></i>
                            <span class="sidebar-text">Notification</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="lni lni-cog"></i>
                            <span class="sidebar-text">Setting</span>
                        </a>
                    </li>
                </ul>
                <!-- Sidebar Navigation Ends -->
                {{-- <div class="sidebar-footer">
                    <a href="{{ route('logout') }}" class="sidebar-link">
                        <i class="lni lni-exit"></i>
                        <span class="sidebar-text">Logout</span>
                    </a>
                </div> --}}
            </aside>
            <!-- Sidebar Ends -->
            <!-- Main Component -->
            <div class="main">
                <nav class="navbar navbar-expand justify-content-between">
                    <button class="toggler-btn" type="button">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <!-- User Menu -->
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="userMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('media/placeholder-user.jpg') }}" alt="user" class="rounded-circle" width="30">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenuButton">
                            <li><a class="dropdown-item" href="{{ route('profile.edit')}}">Account Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Sign Out</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    @vite('resources/js/sidebar.js')
</body>
</html>
