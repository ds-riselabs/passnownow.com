<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register Here</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Fontawesome icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/css/fontawesome.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/fonts/css/solid.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/fonts/css/brands.css') }} ">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- SWIPER JS  --}}
    <link rel="stylesheet" href="{{ 'assets/css/swiper-bundle.min.css' }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsiveness.css') }}">

</head>

<body class="">
    <main class="container-fluid wrapper container__register">
        <div class="row  m-0 p-0">
            <div class="col-12 col-md-6 side-bg">
                <div class="content">
                        <h1>Take control of your
                            Education Anytime, Anywhere
                        </h1>
                        <p>
                            Super simple self studying, peer to peer collaborative learning both for teachers and students
                        </p>
                </div>
            </div>
            <div class="col-12 col-md-6 form__section">
                <div class="row m-0 p-0">
                    <div class="col-12 p-0 m-0 p-2 navigate-back">
                        <a href="{{ url('/') }}"><i class="fa-solid fa-arrow-left-long"></i></a>
                    </div>
                    <div class="col-12 p-0 m-0 my-4 text-center">
                        <img src="{{ asset('assets/images/logo-2.png') }}" alt="Passnownow Logo" class="logo-alt">
                    </div>
                    <div class="col-12 heading p-0">
                            <h6 class="p-0">Let’s login to your Passnownow account</h6>
                    </div>
                    <div class="col-12 mb-2">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Enter Email/Username</label>
                                <input type="email" id="email" class="form-control" aria-describedby="emailBlock" placeholder="example@email.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="inputPassword5" class="form-label">Enter Password</label>
                                <span class="pass_hidden">
                                    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordBlock" placeholder="password">
                                    <i class="fa-regular fa-eye-slash"></i>
                                </span>
                            
                            </div>
                            <div class="row">
                                <div class="col mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                </div>
                                <div class="col mb-3 form-check text-end fw-bold account-ask">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Forget Password</button>
                                    {{-- <p><a href="{{ url('/register')}}">Forget Password</a></p> --}}
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 submit-btn">Login</button>
                        </form>
                    </div>
                    <div class="col-12 mb-5 text-center account-ask">
                        <p>Don’t have an account? &nbsp;<span><a href="{{ url('/register')}}" class="fw-bold">Register Here</a></span></p>
                    </div>
                    <div class="col-12 mt-2 text-center">
                        <p>&copy; Copyright 2023 All Rights Reserved.</p>
                        <p><a href="#">Term & Condition</a> | <a href="#">Privacy & Policy</a></p>
                    </div>
                </div>
            </div>
        </div>


        @yield('modal')
    </main>
    </div>
</body>

</html>
