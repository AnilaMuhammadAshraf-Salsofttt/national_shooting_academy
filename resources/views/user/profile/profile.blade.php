<?php

$title = "User Dashboard";
$activeNav = 'user-dash';
?>



@extends('user.layouts.master')
@section('content')

<section class="banner inner_banner">
    @include('user.layouts.video')

    <!-- <img src="images/banner-bg.png" class="banner_1" alt="N/A"> -->
    <img src="{{ asset('user_asset/images/banner-bg-inner-2.png')}}" class="banner_2" alt="N/A">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 col-lg-12">
                    <div class="item banner">
                        <h1 class="banner_heading">
                            The Tactical<br>
                            Skills To Respond<br>
                            With Confidence
                        </h1>
                    </div>
            </div>
        </div>
    </div>
</section>



<section class="login bg-page position-relative">
    <img src="{{ asset('user_asset/images/inner_target.png') }}" class="target inner-target" alt="" srcset="">

    <div class="container">

        <div class="row mb-5">
            <div class="col-12">
                <h5 class="i_t mb-0">Profile</h5>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row">
                <p class="user-p">User Id {{ Auth::user()->id }}</p>
                <img src="{{  Auth::user()->userimage ? Auth::user()->userimage:  asset('user_asset/images/profile-img.png') }}" alt="" class="profile-img">
                <a href="{{ url('user_front_edit_profile') }}" class="profile_link">Edit Profile</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="col-md-12">
                    @if(Session::has('message'))
                           <div class="alert alert-success">
                               <strong>{{ Session::get('message')  }}</strong>
                           </div>
                       @endif
                       @if(Session::has('error'))
                           <div class="alert alert-danger">
                             <strong>{{ Session::get('error')  }}</strong>
                           </div>
                       @endif
               </div>
                <div class="card profile-card">
                    <div class="card-header">
                        <p>Personal Information</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <p class="user-p">First Name</p>
                                <p class="user-meta">{{ Auth::user()->first_name }}</p>
                            </div>
                            <div class="col-md-6 col-12">
                                <p class="user-p">Last Name</p>
                                <p class="user-meta">{{ Auth::user()->first_name }}</p>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6 col-12">
                                <p class="user-p">Phone Number</p>
                                <p class="user-meta">+{{ Auth::user()->phone }}</p>
                            </div>
                            <div class="col-md-6 col-12">
                                <p class="user-p">Email</p>
                                <p class="user-meta">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-header">
                        <p>Address Details</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <p class="user-p">Address</p>
                                <p class="user-meta">{{ Auth::user()->address }}</p>
                            </div>
                            <div class="col-md-6 col-12">
                                <p class="user-p">Country</p>
                                <p class="user-meta">{{ Auth::user()->country }}</p>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6 col-12">
                                <p class="user-p">State</p>
                                <p class="user-meta">{{ Auth::user()->state }}</p>
                            </div>
                            <div class="col-md-6 col-12">
                                <p class="user-p">City</p>
                                <p class="user-meta">{{ Auth::user()->city }}</p>
                            </div>
                            <div class="col-md-6 col-12 mt-4">
                                <p class="user-p">Zip Code</p>
                                <p class="user-meta">{{ Auth::user()->zipcode }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
</section>

@endsection