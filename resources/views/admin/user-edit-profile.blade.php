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
                                    @if(session()->has('message'))
                                    <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                    </div>
                                    @endif
                                    {{-- @if(session()->has('message'))
                                    <div class="alert alert-danger">
                                    {{ session()->get('message') }}
                                    </div>
                                    @endif --}}
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
                                    <form action="{{ url('update_profile') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <div class="for-gray-bg">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <ul class="user-pro">
                                                    <li>
                                                        <h5>First Name</h5>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="Abc" name="first_name" 
                                                            value="{{ $user->first_name }}">
                                                    </li>
                                                    <li>
                                                        <h5>Phone Number</h5>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Abc" name="phone" 
                                                        value="{{ $user->phone }}">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="user-pro">
                                                    <li>
                                                        <h5>Last Name</h5>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Abc" name="last_name" 
                                                        value="{{ $user->last_name }}">
                                                    </li>
                                                    <li>
                                                        <h5>Email</h5>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Abc" name="email" 
                                                        value="{{ $user->email }}" readonly>
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
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Abc" name="address" 
                                                        value="{{ $user->address }}">
                                                    </li>
                                                    <li>
                                                        <h5>State</h5>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Abc" name="state" 
                                                        value="{{ $user->state }}">
                                                    </li>
                                                    <li>
                                                        <h5>Zip Code</h5>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Abc" name="zipcode" 
                                                        value="{{ $user->zipcode }}">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="user-pro">
                                                    <li>
                                                        <h5>Country</h5>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Abc" name="country" 
                                                        value="{{ $user->country }}">
                                                    </li>
                                                    <li>
                                                        <h5>City</h5>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Abc" name="city" 
                                                        value="{{ $user->city }}">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4"></div>
                                        </div>
                                        <div class="row">
                                            <div class="user-pro">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="bluee-btn">UPDATE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>


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
