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
@endsection
