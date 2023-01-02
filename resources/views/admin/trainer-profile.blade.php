<?php

$title = " Tariner Listing";

$activeNav = 'trainer-listing';


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
                                        <div
                                            class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
                                            <h1 class="in-heading"> Profile </h1>
                                            <!-- <a href="blocked-users-v1.php" class="bluee-btn mt-2 mt-md-0">Blocked Users</a> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div
                                            class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
                                            <!-- <h1 class="in-heading">ORDER LOG  </h1> -->
                                            <div>
                                                <!-- <a href="blocked-users-v1.php" class="bluee-btn mt-2 mt-md-0">Order Pay Log </a>
                                            <a href="blocked-users-v1.php" class="bluee-btn mt-2 mt-md-0">Course Pay Log  </a> -->
                                            </div>
                                            <img src="images/avtr-2.png" alt="">
                                            <div>
                                                <h4>User ID {{ $user->id }} </h4>
                                                <h4>User Name: {{ $user->first_name." ".$user->last_name }}</h4>
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
                                                        <p>{{ $user->first_name }}</p>
                                                    </li>
                                                    <li>
                                                        <h5>Phone Number</h5>
                                                        <p>{{ $user->phone }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="user-pro">
                                                    <li>
                                                        <h5>Last Name</h5>
                                                        <p>{{ $user->last_name }}</p>
                                                    </li>
                                                    <li>
                                                        <h5>Email</h5>
                                                        <p>{{ $user->email }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4"></div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="info-bg">
                                                <h3>Address Details</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="for-gray-bg">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <ul class="user-pro">
                                                    <li>
                                                        <h5>Address</h5>
                                                        <p>{{ $user->address }}</p>
                                                    </li>
                                                    <li>
                                                        <h5>State</h5>
                                                        <p>{{ $user->city }}</p>
                                                    </li>
                                                    <li>
                                                        <h5>Zip Code</h5>
                                                        <p>{{ $user->zipcode }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="user-pro">
                                                    <li>
                                                        <h5>Country</h5>
                                                        <p>{{ $user->country }}</p>
                                                    </li>
                                                    <li>
                                                        <h5>City</h5>
                                                        <p>{{ $user->city }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4"></div>

                                        </div>
                                    </div>
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
