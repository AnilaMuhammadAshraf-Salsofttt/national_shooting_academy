<?php

$title = " User Listing";

$activeNav = 'user-listing';


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
                                            <h1 class="in-heading">
                                                < </h1>
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
                                                <h4>User ID 001 </h4>
                                                <h4>User Name: Jogn Max</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="top mt-5">
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="info-bg">
                                                <h3>Order Details</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="for-gray-bg">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <ul class="user-pro">
                                                    <li>
                                                        <h5>First Name</h5>
                                                        <p>Abc</p>
                                                    </li>
                                                    <li>
                                                        <h5>Phone Number</h5>
                                                        <p>+1 333 333 4444</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2">
                                                <ul class="user-pro">
                                                    <li>
                                                        <h5>Last Name</h5>
                                                        <p>Abc</p>
                                                    </li>
                                                    <li>
                                                        <h5>Email</h5>
                                                        <p>abc@xyz.com</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2">
                                                <ul class="user-pro">
                                                    <li>
                                                        <h5>Last Name</h5>
                                                        <p>Abc</p>
                                                    </li>
                                                    <li>
                                                        <h5>Email</h5>
                                                        <p>abc@xyz.com</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- <div class="col-lg-3"></div> -->
                                            <div class="col-lg-3 offset-3">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        Dropdown button
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </div>

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

