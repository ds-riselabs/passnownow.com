@extends('layouts.index')

@section('content')
    <main class="container-fluid">
        <section class="container-fluid container__top">
            <div class="row">
                <div class="col-3 col-md-2">
                    <img src="{{ asset('assets/images/Chemistry.png') }}" alt="Chemistry">
                    <p class="title">Chemistry</p>
                </div>
                <div class="col-3 col-md-2">
                    <img src="{{ asset('assets/images/Cloud_Library.png') }}" alt="Computer">
                    <p class="title">Computer</p>
                </div>
                <div class="col-3 col-md-2">
                    <img src="{{ asset('assets/images/Geography.png') }}" alt="Geography">
                    <p class="title">Geography</p>
                </div>
                <div class="col-3 col-md-2">
                    <img src="{{ asset('assets/images/Biology.png') }}" alt="Biology">
                    <p class="title">Biology</p>
                </div>
                <div class="col-3 col-md-2">
                    <img src="{{ asset('assets/images/Maths.png') }}" alt="Mathematics">
                    <p class="title">Mathematics</p>
                </div>
                <div class="col-3 col-md-2">
                    <img src="{{ asset('assets/images/Sports.png') }}" alt="Physical Health">
                    <p class="title">Physical Health</p>
                </div>
            </div>
        </section>
        <Section class="container-fluid container__hero">
            <div class="row">
                <div class="col-12 col-md-6 hero__content">
                    <p class="total-enrol">6,000+ Students Enrolled</p>
                    <h1>Take Control of your Education Anytime, Anywhere</h1>
                    <p class="hero__info">Super simple self studying, peer to peer collaborative learning both for teachers
                        and students</p>
                    <div class="hero-btn">
                        <a href="#" class="btn btn-outline-primary btn-style">Register &nbsp; <i
                                class="fa-solid fa-arrow-right"></i></a>
                        <a href="#" class="btn btn-style btn-style-secondary">Learn More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6  hero-image">
                    <img src="{{ asset('assets/images/hero-image.png') }}" alt="Hero Image">
                </div>
            </div>
        </Section>
        <section class="container-fluid container__review">
            <div class="row">
                <div class="col-12 heading">
                    <h3>Learn from the largest education resources for students in Nigeria</h3>
                </div>
                <div class="col-12 reviews">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3 review">
                            <h3>5M+</h3>
                            <p>Lifetime <br /> Learners</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 review">
                            <h3>1M+</h3>
                            <p>Career <br /> Advices</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 review">
                            <h3>70%</h3>
                            <p>High Academic <br /> Performance</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 review">
                            <h3>5M+</h3>
                            <p>Daily <br /> Messages</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="container-fluid container__guide">
            <div class="row">
                <div class="col-12 col-md-2">
                    <img src="{{ asset('assets/images/formular.png') }}" alt="" class="formular-image">
                </div>
                <div class="col-12 col-md-8 heading">
                    <h3>How Passnownow Works</h3>
                    <p>
                        Passnownow is Nigeria’s foremost online learning platform that provides students with access to
                        high-quality educational materials tailored to their specific needs which are affordable and easily
                        accessible.
                    </p>
                </div>
                <div class="col-12 col-md-2">
                    <img src="{{ asset('assets/images/trig.png') }}" alt="" class="formular-image">
                </div>
            </div>
            <div class="row guides">
                <div class="col-12 col-md-4 guide">
                    <img src="{{ asset('assets/images/icon-user.png') }}" alt="Icon" class="mb-3" />
                    <h3>Create free account</h3>
                    <p>The first step is to create a free account with Passnownow by completing the user registration form.</p>
                </div>
                <div class="col-12 col-md-4 guide">
                    <img src="{{ asset('assets/images/icon-card.png') }}" alt="Icon" class="mb-3" />
                    <h3>Subscribe to a plan</h3>
                    <p>Choose from any of our packages to gain access to unlimited Class Notes and Exam Past Questions.</p>
                </div>
                <div class="col-12 col-md-4 guide">
                    <img src="{{ asset('assets/images/icon-book.png') }}" alt="Icon" class="mb-3" />
                    <h3>Access all subjects</h3>
                    <p>That’s it, you now have access to unlimited Class Notes and Exam Past Questions.</p>
                </div>
                <div class="col-12 col-md-4 guide">
                    <img src="{{ asset('assets/images/icon-message.png') }}" alt="Icon" class="mb-3" />
                    <h3>Seek career advice</h3>
                    <p>Seek advice on your career path from our experienced career counselor</p>
                </div>
                <div class="col-12 col-md-4 guide">
                    <img src="{{ asset('assets/images/icon-shield.png') }}" alt="Icon" class="mb-3" />
                    <h3>Access to past questions</h3>
                    <p>Passnownow gives you access to Thousands of exam past questions from JSCE, JSSCE TO JAMB</p>
                </div>
                <div class="col-12 col-md-4 guide">
                    <img src="{{ asset('assets/images/icon-medal.png') }}" alt="Icon" class="mb-3" />
                    <h3>Improve academic performance</h3>
                    <p>Learn with Passnownow to improve academic performance</p>
                </div>
            </div>
        </section>
    </main>
@endsection
