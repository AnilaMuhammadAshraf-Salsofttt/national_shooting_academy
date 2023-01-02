<?php

$title = " Profile";
$activeNav = 'Profile';
?>
@include('admin.header');
@include('admin.nav');
<!--customer start here-->

<div class="app-content content user view-customer customer-product">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card rounded pad-20">
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <h1 class="in-heading"> Admin profile </h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div
                                            class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
                                            <div>
                                            </div>
                                            <div class="text-center">
                                                <h1 class=""> profile </h1>
                                                <div class="col-12 form-group">
                                                    <div class="attached"> 
                                                      <img src="{{  (Auth::guard('admin')->user()->image) ? Auth::guard('admin')->user()->image:  asset('images/student-pro-girl.png')}}" id="user_image" alt="">
                                                    </div>
                                                  </div>
                                            </div>
                                            <div>
                                                <h4>Admin ID {{ Auth::guard('admin')->user()->id }} </h4>
                                                <h4>Admin Name: {{ Auth::guard('admin')->user()->name }} </h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="top mt-5">
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="info-bg">
                                                <h3>Personal Information</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="for-gray-bg">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <ul class="user-pro">
                                                    <li>
                                                        <h5>First Name</h5>
                                                        <p>{{ Auth::guard('admin')->user()->first_name }} </p>
                                                    </li>
                                                    <li>
                                                        <h5>Phone Number</h5>
                                                        <p>{{ Auth::guard('admin')->user()->phone }} </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="user-pro">
                                                    <li>
                                                        <h5>Last Name</h5>
                                                        <p>{{ Auth::guard('admin')->user()->last_name }} </p>
                                                    </li>
                                                    <li>
                                                        <h5>Email</h5>
                                                        <p>{{ Auth::guard('admin')->user()->email }} </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4"></div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                                {{-- <h3>Address Details</h3> --}}
                                                <a href="{{ url('edit_profile') }}" class="bluee-btn mt-2 mt-md-0">Edit Profile</a>
                                                <a href="{{ url('edit_password') }}" class="bluee-btn mt-2 mt-md-0">Edit password</a>

                                        </div>
                                    </div>

                                    {{-- <div class="for-gray-bg">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <ul class="user-pro">
                                                    <li>
                                                        <h5>Address</h5>
                                                        <p>Abc street 123 road</p>
                                                    </li>
                                                    <li>
                                                        <h5>State</h5>
                                                        <p>Abc</p>
                                                    </li>
                                                    <li>
                                                        <h5>Zip Code</h5>
                                                        <p>1223</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="user-pro">
                                                    <li>
                                                        <h5>Country</h5>
                                                        <p>Abc</p>
                                                    </li>
                                                    <li>
                                                        <h5>City</h5>
                                                        <p>Abc</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4"></div>

                                        </div>
                                    </div> --}}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>
</div>
</div>





@include('admin.footer')
