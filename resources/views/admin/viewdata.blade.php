@extends('layouts.dasboardtemp')

@section('admincontent')
    <section class="container-fluid profile__container">
        <div class="row">
            <div class="col-12 col-lg-7 profile_data">
                <div class="top">
                    <h5>Account Information</h5>
                </div>
                <form>
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" name="fname" class="form-control" id="firstName" aria-describedby="emailHelp" placeholder="Winner" />
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" name="lname" class="form-control" id="lastName" aria-describedby="emailHelp" placeholder="Effiong" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="eamil" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@gmail.com" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Current Password</label>
                        <input type="password" name="oldpassword" class="form-control" id="exampleInputPassword1" placeholder="******" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">New Password</label>
                        <input type="password" name="newpassword" class="form-control" id="exampleInputPassword1" placeholder="******" />
                    </div>
                    <div class="mb-3">
                        <label for="confirmInputPassword1" class="form-label">Confirm Password</label>
                        <input type="password" name="confirmpassword" class="form-control" id="confirmInputPassword1" placeholder="******" />
                    </div>
                
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
            <div class="col-12 col-lg-5 profile">
                <div class="image_wrapper">
                    <img src="{{asset('assets/images/avatar.png')}}" class="profile_image" alt="">
                </div>
                <h5>Winner Effiong</h5>
                <button class="btn">Change profile photo</button>
                <br>
                <a href="#">Delete profile photo</a href="#">
            </div>
        </div>
    </section>
    <section class="container-fluid history__container">
        <div class="row">
            <div class="col-12 mt-5">
                <h2>Activities</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-3 mb-md-0 shadow subscription_history">
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
                            <td><h6>N10,000.00</h6></td>
                            <td><span class="status"><i class="fa-solid fa-circle"></i> <span>Current</span></span></td>
                        </tr>
                        <tr>
                            <td>
                                <h6>Yearly Plan</h6>
                                <p>#00001 | 12-08-24</p>
                            </td>
                            <td><h6>N10,000.00</h6></td>
                            <td><span class="status exp"><i class="fa-solid fa-circle"></i> <span>Expired</span></span></td>
                        </tr>
                        <tr>
                            <td>
                                <h6>Yearly Plan</h6>
                                <p>#00001 | 12-08-24</p>
                            </td>
                            <td><h6>N10,000.00</h6></td>
                            <td ><span class="status exp"><i class="fa-solid fa-circle"></i> <span>Expired</span></span></td>
                        </tr>
                        <tr>
                            <td>
                                <h6>Yearly Plan</h6>
                                <p>#00001 | 12-08-24</p>
                            </td>
                            <td><h6>N10,000.00</h6></td>
                            <td><span class="status"><i class="fa-solid fa-circle"></i> <span>Current</span></span></td>
                        </tr>
                        <tr>
                            <td>
                                <h6>Yearly Plan</h6>
                                <p>#00001 | 12-08-24</p>
                            </td>
                            <td><h6>N10,000.00</h6></td>
                            <td><span class="status exp"><i class="fa-solid fa-circle"></i> <span>Expired</span></span></td>
                        </tr>
                        <tr>
                            <td>
                                <h6>Yearly Plan</h6>
                                <p>#00001 | 12-08-24</p>
                            </td>
                            <td><h6>N10,000.00</h6></td>
                            <td ><span class="status exp"><i class="fa-solid fa-circle"></i> <span>Expired</span></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
