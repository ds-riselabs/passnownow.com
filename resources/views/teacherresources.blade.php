@extends('layouts.index')

@section('content')
    <Section class="container-fluid container__banner teacher__banner">
        <div class="row">
            <div class="col-12 banner">
                <h1>Teacher <span class="red_header">Resources</span></h1>
                <p class="text-center header_content">
                    Passnownow is Nigeria’s foremost online learning platform
                    that provides students with access to high-quality educational
                    materials tailored to their specific needs
                </p>
            </div>
        </div>
    </Section>
    {{-- <section class="container-fluid container__search">
        <div class="row p-0 m-0">
            <div class="col-12 col-md-6 search__form">
                <form action="">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" value="" placeholder="Search Subject">
                    <input type="button" value="Search">
                </form>
            </div>
        </div>
    </section> --}}

    <section class="container-fluid container__subjects mt-5 teacher__subjects">
        <div class="row">
            <div class="col-12 text-center mb-5 header">
                <h6>Teachers Methodology <br /> (Category One)</h6>
                <p class="text-dark">
                    It is important that teachers learn to use a variety 
                    of teaching methodologies in order to cater for the 
                    range of learning needs and requirements that are 
                    present within most class environments. Within this 
                    section a variety of teaching methodologies will be 
                    explored and their various advantages and disadvantages outlined.
                </p>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 col-md-4 mb-5">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/images/education-removelaptop.png') }}" alt="">
                </div>
                <div class="note_info p-2 text-center">
                    <p>Lesson One</p>
                    <h5 class="mb-5">Explicit Teaching</h5>
                    <a href="{{ url('explicit') }}" class="note_btn">READ NOW &nbsp; <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-5">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/images/charts.png') }}" alt="">
                </div>
                <div class="note_info p-2 text-center">
                    <p>Lesson Two</p>
                    <h5 class="mb-5">Command Style</h5>
                    <a href="{{url('command')}}" class="note_btn">READ NOW &nbsp; <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-5">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/images/dark_chart.png') }}" alt="">
                </div>
                <div class="note_info p-2 text-center">
                    <p>Lesson Three</p>
                    <h5 class="mb-5">Teaching By Task</h5>
                    <a href="{{url('task')}}" class="note_btn">READ NOW &nbsp; <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-5">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/images/half_laptop.png') }}" alt="">
                </div>
                <div class="note_info p-2 text-center">
                    <p>Lesson Four</p>
                    <h5 class="mb-5">Individual Progression</h5>
                    <a href="{{url('progression')}}" class="note_btn">READ NOW &nbsp; <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-5">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/images/coffee_laptop.png') }}" alt="">
                </div>
                <div class="note_info p-2 text-center">
                    <p>Lesson Five</p>
                    <h5 class="mb-5">Guided Discovery</h5>
                    <a href="{{url('discovery')}}" class="note_btn">READ NOW &nbsp; <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-5">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/images/palmtop.png') }}" alt="">
                </div>
                <div class="note_info p-2 text-center">
                    <p>Lesson Six</p>
                    <h5 class="mb-5">Problem Solving</h5>
                    <a href="#" class="note_btn">READ NOW &nbsp; <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
        <div class="row past__questions">
            <div class="col-12 text-center mb-5 header">
                <h6>Teachers Methodology <br /> (Category Two)</h6>
                <p class="text-dark">
                    Passnownow is Nigeria’s foremost online learning 
                    platform that provides students with access to high-quality
                     educational materials tailored to their specific needs which 
                     are affordable and easily accessible.Passnownow is Nigeria’s 
                     foremost online learning platform that provides students with 
                     access to high-quality educational materials tailored to their 
                     specific needs which are affordable and easily accessible.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 mb-3">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/images/education-removelaptop.png') }}" alt="">
                </div>
                <div class="note_info p-2 text-center">
                    <p>Lesson One</p>
                    <h5>Useful Skills For Teachers</h5>
                    <button class="note_btn">READ NOW &nbsp; <i class="fa-solid fa-arrow-right-long"></i></button>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/images/dark_chart.png') }}" alt="">
                </div>
                <div class="note_info p-2 text-center">
                    <p>Lesson Two</p>
                    <h5>Qualities of a Good Teacher</h5>
                    <button class="note_btn">READ NOW &nbsp; <i class="fa-solid fa-arrow-right-long"></i></button>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/images/charts.png') }}" alt="">
                </div>
                <div class="note_info p-2 text-center">
                    <p>Lesson Three</p>
                    <h5>Teaching By Task</h5>
                    <button class="note_btn">READ NOW &nbsp; <i class="fa-solid fa-arrow-right-long"></i></button>
                </div>
            </div>
        </div>
    </section>



    <script src="./assets/js/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".swiper", {
            // Optional parameters
            direction: "horizontal",
            // effect: "fade",
            loop: true,
            autoplay: {
                dely: '2000'
            },

            // If we need pagination
            pagination: {
                el: ".swiper-pagination",
            },

            // Navigation arrows
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
                size: '1rem'
            },

        });
    </script>
@endsection
