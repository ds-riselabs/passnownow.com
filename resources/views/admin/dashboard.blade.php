@extends('layouts.dasboardtemp')

@section('admincontent')
    <section class="container-fluid greeting__containter mt-3">
        <div class="row">
            <div class="col-12 col-md-6 greetings ">
                <h2>Hello Winner!</h2>
                <p>Let's learn something today</p>
                <br>
                <p class="greeting-text">Goodluck with your studies</p>
            </div>
            <div class="col-12 col-md-6  p-4 pb-0 greeting-img">
                <img src="{{ asset('assets/images/admin/greeting-img.png') }}" alt="" class="">
            </div>
        </div>
    </section>
    <section class="container-fluid notifiication__containter  shadow mt-4">
        <div class="row p-2">
            <div class="col-12 col-md-8 subscription">
                <i class="fa-regular fa-credit-card"></i>
                <p>Your Subscription ends on 28 August 2024</p>
            </div>
            <div class="col-12 col-md-4  text-md-end">
                <button class="btn upgrade-btn">Upgrade</button>
            </div>
        </div>
    </section>
    <section class="container-fluid top-courses__containter  shadow my-4">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mb-2">
                <div class="card courses">
                    <div class="image_wrapper">
                        <img src="{{ asset('assets/images/admin/course-img1.png') }}" class="course-img" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="courses-tag">Passnownow</div>
                        <h5 class="card-title">English Language</h5>
                        {{-- <p class="card-text">UI/UX</p> --}}
                        <button type="button" class="btn">View Details</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-2">
                <div class="card courses">
                    <div class="image_wrapper">
                        <img src="{{ asset('assets/images/admin/course-img2.png') }}" class="course-img" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="courses-tag">Passnownow</div>
                        <h5 class="card-title">Mathematics</h5>
                        {{-- <p class="card-text">UI/UX</p> --}}
                        <button type="button" class="btn">View Details</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-2">
                <div class="card courses">
                    <div class="image_wrapper">
                        <img src="{{ asset('assets/images/admin/course-img3.png') }}" class="course-img" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="courses-tag">Passnownow</div>
                        <h5 class="card-title">Home Economics</h5>
                        {{-- <p class="card-text">UI/UX</p> --}}
                        <button type="button" class="btn">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid history__container">
        <div class="row">
            <div class="col-12 col-md-7 mb-3 subscription_history">
                <div class="top">
                    <h5>Subscription History</h5>
                    <a href="#">See All</a>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Package</th>
                            <th>Price</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h6>Yearly Plan</h6>
                                <p>#00001 | 12-08-24</p>
                            </td>
                            <td>N10,000.00</td>
                            <td class="status">Current</td>
                        </tr>
                        <tr>
                            <td>
                                <h6>Yearly Plan</h6>
                                <p>#00001 | 12-08-24</p>
                            </td>
                            <td>N10,000.00</td>
                            <td class="status">Expired</td>
                        </tr>
                        <tr>
                            <td>
                                <h6>Yearly Plan</h6>
                                <p>#00001 | 12-08-24</p>
                            </td>
                            <td>N10,000.00</td>
                            <td class="status">Expired</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12 col-md-5 subjects_history">
                <div class="top">
                    <h5>Completed Subjects</h5>
                    <a href="#">See All</a>
                </div>

                <div>
                    <h6>English Language</h6>
                    <p>Completed</p>
                </div>
                <div>
                    <h6>Mathematics</h6>
                    <p>In Progress</p>
                </div>
            </div>
        
        </div>

    </section>

    {{-- <h2>Section title</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Header</th>
                    <th scope="col">Header</th>
                    <th scope="col">Header</th>
                    <th scope="col">Header</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1,001</td>
                    <td>random</td>
                    <td>data</td>
                    <td>placeholder</td>
                    <td>text</td>
                </tr>
                <tr>
                    <td>1,002</td>
                    <td>placeholder</td>
                    <td>irrelevant</td>
                    <td>visual</td>
                    <td>layout</td>
                </tr>
                <tr>
                    <td>1,003</td>
                    <td>data</td>
                    <td>rich</td>
                    <td>dashboard</td>
                    <td>tabular</td>
                </tr>
                <tr>
                    <td>1,003</td>
                    <td>information</td>
                    <td>placeholder</td>
                    <td>illustrative</td>
                    <td>data</td>
                </tr>
                <tr>
                    <td>1,004</td>
                    <td>text</td>
                    <td>random</td>
                    <td>layout</td>
                    <td>dashboard</td>
                </tr>
                <tr>
                    <td>1,005</td>
                    <td>dashboard</td>
                    <td>irrelevant</td>
                    <td>text</td>
                    <td>placeholder</td>
                </tr>
                <tr>
                    <td>1,006</td>
                    <td>dashboard</td>
                    <td>illustrative</td>
                    <td>rich</td>
                    <td>data</td>
                </tr>
                <tr>
                    <td>1,007</td>
                    <td>placeholder</td>
                    <td>tabular</td>
                    <td>information</td>
                    <td>irrelevant</td>
                </tr>
                <tr>
                    <td>1,008</td>
                    <td>random</td>
                    <td>data</td>
                    <td>placeholder</td>
                    <td>text</td>
                </tr>
                <tr>
                    <td>1,009</td>
                    <td>placeholder</td>
                    <td>irrelevant</td>
                    <td>visual</td>
                    <td>layout</td>
                </tr>
                <tr>
                    <td>1,010</td>
                    <td>data</td>
                    <td>rich</td>
                    <td>dashboard</td>
                    <td>tabular</td>
                </tr>
                <tr>
                    <td>1,011</td>
                    <td>information</td>
                    <td>placeholder</td>
                    <td>illustrative</td>
                    <td>data</td>
                </tr>
                <tr>
                    <td>1,012</td>
                    <td>text</td>
                    <td>placeholder</td>
                    <td>layout</td>
                    <td>dashboard</td>
                </tr>
                <tr>
                    <td>1,013</td>
                    <td>dashboard</td>
                    <td>irrelevant</td>
                    <td>text</td>
                    <td>visual</td>
                </tr>
                <tr>
                    <td>1,014</td>
                    <td>dashboard</td>
                    <td>illustrative</td>
                    <td>rich</td>
                    <td>data</td>
                </tr>
                <tr>
                    <td>1,015</td>
                    <td>random</td>
                    <td>tabular</td>
                    <td>information</td>
                    <td>text</td>
                </tr>
            </tbody>
        </table>
    </div> --}}
@endsection
