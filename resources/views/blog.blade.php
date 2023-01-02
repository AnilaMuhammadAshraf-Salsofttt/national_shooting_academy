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
                                <h3 class="abt">Why Is Shooting Consultancy Mandatory?</h3>
                                <br>
                                <br>
                                <h6 class="heading_text">
                                    If a person opts to get firearm training, they must remember that expert consultancy is mandatory to avoid blunders and massive hazards.
                                </h6>
                                <p class="sub-text">
                                    One can never understand a field's complexity unless one enters that particular area. It is not easy to get training and become a field expert. A person who does not value the efforts and investment of others does not go a long way. Many people may not know this, but firearm training is one of the toughest fields as it requires proper attention, care, and a lot of physical and mental investment. If a person opts to get firearm training, they must remember that shooting consultancy is mandatory to avoid blunders and massive hazards.
                                </p>
                                <h6>Importance of Shooting Consultancy</h6>
                                <p class="sub-text">
                                    Below are a few reasons that prove why shooting consultancy is important and how it can benefit people.
                                    <br>
                                    <br>
                                </p>
                                <h6 class="blog-points-headings">Experts Know the Reality</h6>
                                <p class="sub-text">
                                    Just like every other field, firearm shooting has some in-depth insights too that only the experts can understand. A beginner can never know how complex the field is until they enter it. Shooting consultancy helps to know the reality of firearm training, its importance and develops a lot of new perceptions.
                                </p>
                                <h6 class="blog-points-headings">Firearm Handling is Not Easy</h6>
                                <p class="sub-text">
                                    Everyone knows that firearm is not a toy; it needs attention and a proper set of rules for handling and management. With firearm consultancy, it gets easier for learners to understand handling the weapon. When on the field, firearm shooting experts make sure to tell students even the slightest detail about the field.
                                </p>
                                <h6 class="blog-points-headings">Sense of Shooting</h6>
                                <p class="sub-text">
                                    Unlike many unusual events, when a person takes proper shooting consultancy, they build a sense of the shooting. With experts by their side, students learn to control the urge of shooting randomly in the sky. These people are trained, and they very well understand the problems and issues caused by random shootings.
                                </p>
                                <h6 class="blog-points-headings">Improved Behavior</h6>
                                <p class="sub-text">
                                    As mentioned earlier, firearm consultancy builds new perceptions. When learners get specialized training, their behaviors change; they understand the importance of life and learn to control their anger too
                                </p>
                                <br><br>
                                <h5>Verdict</h5>
                                <p class="sub-text">
                                    With time, it gets hard to learn about new fields and understand things outside one's career. But, if a person has interests beyond their chosen field, they must always pursue them. A lot of young people are interested in getting professional firearm training. They must consult a proper academy and get expert training.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <img width="100%" src="{{ asset('user_asset/images/blog.jpg') }}" class="abt" alt="Firearm Training">
                        <p>Picture of Two Firearm Shooters</p>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <style>
        .blog-points-headings {
            color: #518bd9;
        }
    </style>
@endsection
