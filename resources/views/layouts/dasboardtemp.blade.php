<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Fontawesome icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/css/fontawesome.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/fonts/css/solid.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/fonts/css/brands.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/fonts/css/regular.css') }} ">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">

    <style>
        @media (min-width: 768px) {
            /* .bd-placeholder-img-lg {
            font-size: 3.5rem;
          } */
        }
    </style>
</head>

<body>

    <header class="navbar sticky-top bg-white flex-md-nowrap p-1 g-1 shadow pe-md-3">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{url('/')}}"> 
            <img src="{{ asset('assets/images/logo.png') }}" alt="">
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed mt-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- <div class="row p-0 ">
            <div class="col-12 p-0"> --}}
        <input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search">
            {{-- </div>
        </div> --}}
        <div class="navbar-nav">
            <span class="top_icon">
                <i class="fa-regular fa-bell"></i>
            </span>
            <span class="top_icon">
                <i class="fa-solid fa-globe"></i>
            </span>
            <div class="nav-item text-nowrap py-1">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle profile" href="#" id="dropdown01" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="">
                    </a>
                    <ul class="dropdown-menu w-50" aria-labelledby="dropdown01">
                        <li><a class="dropdown-item" href="{{ url('about') }}">Signout</a></li>
                        <li><a class="dropdown-item" href="{{ url('contact') }}">Profile</a>
                    </ul>
                </li>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse">
                <div class="position-sticky">
                    <ul class="nav flex-column ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <i class="fa-solid fa-table-list"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-user-tie"></i>
                                Admin
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-regular fa-user"></i>
                                Students
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-briefcase"></i>
                                Classes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-list"></i>
                                Pass Questions
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-hand-holding-dollar"></i>
                                Pricing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-clock-rotate-left"></i>
                                History
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Signout
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                @yield('admincontent')
               
            </main>
        </div>
    </div>
</body>

</html>
