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
        <div class="row mb-5 text-center text-md-left">
            <div class="col-12 mb-4 mb-md-0">
                <h5 class="i_t mb-0">Contact Us</h5>
            </div>
        </div>


        <div class="row">
            <div class="col-12">

                <div class="card create_course contact-card">
                    <div class="card-header p-4">

                    </div>
                    <div class="card-body">

                        <form action="{{ url('user_contact_insert') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <p class="user-p mb-2">First Name</p>
                                    <input type="text" name="first_name" class="cc" placeholder="Enter First Name">
                                </div>
                                <div class="col-md-6 col-12">
                                    <p class="user-p mb-2">Last Name</p>
                                    <input type="text" name="last_name" class="cc" placeholder="Enter Last Name">
                                </div>
                                <div class="col-md-6 col-12">
                                    <p class="user-p mb-2">Email</p>
                                    <input type="email" name="email" class="cc" placeholder="Enter Email Address">
                                </div>
                                <div class="col-md-6 col-12">
                                    <p class="user-p mb-2">Subject</p>
                                    <input type="text" name="subject" class="cc" placeholder="Enter Subject">
                                </div>
                                <div class="col-12">
                                    <p class="user-p mb-2">Message*</p>
                                    <textarea name="message" id="" cols="30" rows="10" class="cc" spellcheck="false"></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn-cc-1">Send</button>
                                </div>
                            </div>
                        </form>


                    </div>

                </div>
            </div>




        </div>
    </div>
</section>

@endsection