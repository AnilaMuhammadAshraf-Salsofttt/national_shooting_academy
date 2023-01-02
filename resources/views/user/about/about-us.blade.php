<?php

$title = "User Dashboard";
$activeNav = 'user-dash';
?>

@extends('user.layouts.master')
@section('content')

<section class="banner inner_banner">
    @include('user.layouts.video')

 
    @include('user.layouts.video')


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

    <section class=" more_about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="abt">About Us</h6>
                            <h2 class="heading_text">
                                Team Of Professional<br>
                                Combat Veterans
                            </h2>
                            <p class="sub-text">
                                NSA (National Shooting Academy) is based in Pennsylvania and is dedicated to being the best academy for firearms training. We are dedicated to training people to protect themselves better. We all see how crime is on the rise in our country, and regardless of our class, we are in danger. It is better to be safe than sorry in such unpredictable times, and we take this very seriously.
                                <br>
                                <br>
                                <br>
                                We have worked hard with our team to create the best firearms safety training courses. We have industry-leading trainers on board to teach you all things about using a firearm and provide law -enforcement firearms training courses.
                                When you enroll in our tactical advantage firearms training, you will learn how to use your firearm with precision and safety. With our firearms training, you will become more knowledgeable about using firearms and how to teach others to use them.
                                We also provide consultations regarding safety and shooting range to people intending to set up their range or learn how to use their firearm at a shooting range safely.
                                <br>
                                <br>
                                <br>
                                We are privileged to use the industry’s best training materials and equipment. We have a specialized shooting range where we provide live shooting training. Also, our instructors are certified with the necessary expertise and experience.
                            </p>
                        </div>
                    </div>



                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="{{ asset('user_asset/images/about-us.png') }}" class="abt" alt="about us picture">
                </div>
            </div>
        </div>
    </section>
</section>
@endsection