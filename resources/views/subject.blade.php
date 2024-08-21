@extends('layouts.index')

@section('content')
    <Section class="container-fluid container__banner">
        <div class="row">
            <div class="col-12 p-5">
                <h1>SUBJECT</h1>
            </div>
        </div>
    </Section>
    <section class="container-fluid container_search">
        <div class="row">
            <div class="col-12 search_col">
                <form action="">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" value="" placeholder="Search">
                        <input type="button" value="Search">
                </form>
            </div>
        </div>
    </section>


    <section class="container-fluid container__notes">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h6>Class Notes</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 mb-3">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/images/student-writing.png') }}" alt="">
                </div>
                <div class="note_info p-2">
                    <h5>JSS 1 Class Notes</h5>
                    <p>Start studying with our wide collection of all SSS 1 Class Notes all Terms on all Secondary
                        School Subjects</p>
                    <button class="note_btn">VIEW ALL SUBJECTS</button>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/images/student-writing.png') }}" alt="">
                </div>
                <div class="note_info p-2">
                    <h5>JSS 2 Class Notes</h5>
                    <p>Start studying with our wide collection of all SSS 1 Class Notes all Terms on all Secondary
                        School Subjects</p>
                    <button class="note_btn">VIEW ALL SUBJECTS</button>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/images/student-writing.png') }}" alt="">
                </div>
                <div class="note_info p-2">
                    <h5>JSS 3 Class Notes</h5>
                    <p>Start studying with our wide collection of all SSS 1 Class Notes all Terms on all Secondary
                        School Subjects</p>
                    <button class="note_btn">VIEW ALL SUBJECTS</button>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/images/student-writing.png') }}" alt="">
                </div>
                <div class="note_info p-2">
                    <h5>SSS 1 Class Notes</h5>
                    <p>Start studying with our wide collection of all SSS 1 Class Notes all Terms on all Secondary
                        School Subjects</p>
                    <button class="note_btn">VIEW ALL SUBJECTS</button>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/images/student-writing.png') }}" alt="">
                </div>
                <div class="note_info p-2">
                    <h5>SSS 2 Class Notes</h5>
                    <p>Start studying with our wide collection of all SSS 1 Class Notes all Terms on all Secondary
                        School Subjects</p>
                    <button class="note_btn">VIEW ALL SUBJECTS</button>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/images/student-writing.png') }}" alt="">
                </div>
                <div class="note_info p-2">
                    <h5>SSS 3 Class Notes</h5>
                    <p>Start studying with our wide collection of all SSS 1 Class Notes all Terms on all Secondary
                        School Subjects</p>
                    <button class="note_btn">VIEW ALL SUBJECTS</button>
                </div>
            </div>
        </div>
        <div class="row past__questions">
            <div class="col-12 col-md-4 mb-3">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/images/student-writing.png') }}" alt="">
                </div>
                <div class="note_info p-2">
                    <h5>JSSCE Past Questions</h5>
                    <p>Test yourself on any JSSCE Exam Past Questions</p>
                    <button class="note_btn">VIEW ALL SUBJECTS</button>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/images/student-writing.png') }}" alt="">
                </div>
                <div class="note_info p-2">
                    <h5>SSCE Past Questions</h5>
                    <p>Test yourself on any JSSCE Exam Past Questions</p>
                    <button class="note_btn">VIEW ALL SUBJECTS</button>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/images/student-writing.png') }}" alt="">
                </div>
                <div class="note_info p-2">
                    <h5>UTME/JAMB Past Questions</h5>
                    <p>Test yourself on any JSSCE Exam Past Questions</p>
                    <button class="note_btn">VIEW ALL SUBJECTS</button>
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
