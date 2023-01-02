<?php

$title = "Login";
$activeNav = 'Login';
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
    <img src="images/inner_target.png" class="target inner-target" alt="" srcset="">
    <img src="images/membership-man.png" class="member-ship-man inner" alt="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="form__wrapper sub_form">
                    <div class="reg-header">
                        <h4>choose your subscription</h4>
                    </div>

                    <form action="{{ url('trainer/trainer_register_4') }}" method="get">

                        <div class="form-row">
                            <div class="col-12 text-center">
                                <p class="pckg_p">Select Package</p>
                            </div>
                        </div>
                            <input type="hidden" name="register_id" value="{{ $register_id }}">

                        @foreach ($plan as $plans)
                            
                        <div class="form-row justify-content-center">
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="card__Wrap">
                                    <div class="reg-header-inner">
                                        <p>{{ $plans->type }}</p>
                                    </div>
                                    <div class="body_pckg">
                                        <h4><sub>$</sub>{{ $plans->amount }}</h4>
                                        <p>Name : {{ $plans->name }}</p>
                                        <p>Description : {{ $plans->description }}</p>
                                  
                                        <input type="radio" name="radio" value="{{ $plans->id }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="form-row mt-4">
                            <div class="col-lg-6 col-md-6 col-12 mb-2 mb-md-0">
                                <a href="register-2.php" class="login__button">Previous</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <button type="submit" class="login__button">Continue</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection