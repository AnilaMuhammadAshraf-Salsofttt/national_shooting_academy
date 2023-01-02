<?php
$title = "Home";
$activeNav = 'Home';
?>

@extends('user.layouts.master')
@section('content')

<section class="banner">

    @include('user.layouts.video')

    <img src="{{ asset('user_asset/images/banner-img1.png') }}" class="banner_2" alt="N/A">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="banner_title wow fadeInDown" data-wow-duration="1s" data-wow-delay="2.5s">national shooting academy</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-10 col-lg-12">
                <div class="carousel_wrap owl-carousel ">
                    <div class="item">
                        <h2 class="banner_heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="3s">
                            We use the industry’s leading <br>
                            and finest gun, gear,<br>
                            and trainers.

                        </h2>
                        <p class="banner_subtitle wow fadeInDown" data-wow-duration="1s" data-wow-delay="4s">
                            National Shooting Academy is committed to train people to protect themselves.
                            <br>

                        </p>
                    </div>


                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="wrapper">
                    <a href="{{ url('user_about') }}" class="btn-shoot bg-blue mr-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="4.5s">more about us <i class="fas fa-arrow-right"></i> </a>
                    {{-- <a href="javascript:void(0)" class="play_video  wow fadeInUp" data-wow-duration="1s" data-wow-delay="4.5s" data-toggle="modal" data-target="#exampleModal">
                        <div class="media align-items-center">
                            <img class="mr-3" src="{{ asset('user_asset/images/play.png') }}" alt="Play Button">
                    <div class="media-body">

                        <p>watch <br>
                            intro video</p>

                    </div>
                </div>
                </a> --}}
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width:150%;height:500px;margin-left:-120px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Introduction video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <video style="width: 99%;
         height: 399px;
         margin-left: 4px;" controls>
                        <source src="{{ url('storage/national_shooting_academy.mov') }}" type="video/mp4">
                    </video>

                </div>

            </div>
        </div>
    </div>

    {{-- <div class="row mt-100">
            <div class="col-12">
                <div class="wrapper banner-partners">
                    <img src="{{ asset('user_asset/images/circle-banner.png') }}" class="wow fadeIn" data-wow-duration="1s" data-wow-delay="5s" alt="">
    <img src="{{ asset('user_asset/images/ideaa-banner.png') }}" class="wow fadeIn" data-wow-duration="1s" data-wow-delay="5.2s" alt="">
    <img src="{{ asset('user_asset/images/amara-banner.png') }}" class="wow fadeIn" data-wow-duration="1s" data-wow-delay="5.4s" class="wow fadeIn" data-wow-duration="1s" data-wow-delay="5s" alt="">
    <img src="{{ asset('user_asset/images/circle-banner.png') }}" class="wow fadeIn" data-wow-duration="1s" data-wow-delay="5.6s" alt="">
    </div>
    </div>
    </div> --}}
    </div>
</section>

<section class="about">
    <div class="container">
        <img src="images/target.png" class="target" alt="" srcset="">
        <div class="row">
            <div class="col-12">
                <h2 class="heading_text wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
                    Excellence, <br>
                    Skills, And Leadership.
                </h2>
                <p class="sub-text wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                    Welcome to the best shooting range, period. We offer a multitude of features and training <br>
                    programs for all combat enthusiasts. Visit our facilities and experience yourself.
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-12 mt-5">
                <a href="{{ url('user_course') }}" class="w-100">
                    <div class="card-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                        <img src="{{ asset('user_asset/images/cardbg-1.jpg') }}" class="card-bg" alt="">
                        <img src="{{ asset('user_asset/images/cardicon-1.png') }}" class="card-icon" alt="">
                        <div class="card-meta">
                            <p class="card-title">Certified Instructors</p>
                            <p class="card-text">We employ only best-certified instructors...</p>
                        </div>
                        <p class="card_i">
                            <i class="fas fa-arrow-right"></i>
                        </p>

                    </div>
                </a>

            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-5">
                <a href="{{ url('user_login') }}" class="w-100">
                    <div class="card-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="1.5s">
                        <img src="{{ asset('user_asset/images/cardbg-2.png') }}" class="card-bg" alt="">
                        <img src="{{ asset('user_asset/images/gun-icon.png') }}" class="card-icon" alt="">
                        <div class="card-meta">
                            <p class="card-title">Advanced Training</p>
                            <p class="card-text">We specialize in military, law enforcement...</p>
                        </div>
                        <p class="card_i">
                            <i class="fas fa-arrow-right"></i>
                        </p>

                    </div>
                </a>

            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-5">
                <a href="{{ url('user_login') }}" class="w-100">
                    <div class="card-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="2s">
                        <img src="{{ asset('user_asset/images/cardbg-3.png') }}" class="card-bg" alt="">
                        <img src="{{ asset('user_asset/images/target-icon.png') }}" class="card-icon" alt="">
                        <div class="card-meta">
                            <p class="card-title">Great Training Area</p>
                            <p class="card-text">There is everything that our trainees might...</p>
                        </div>
                        <p class="card_i">
                            <i class="fas fa-arrow-right"></i>
                        </p>

                    </div>
                </a>

            </div>
        </div>
    </div>
</section>

<section class=" more_about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="row">
                    <div class="col-12">
                        <h2 class="heading_text wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
                            Team Of Professional<br>
                            Combat Veterans
                        </h2>
                        <p class="sub-text wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            NSA is based in the State of Pennsylvania and is aimed at
                            training people to protect themselves better.
                            <br>
                            <br>
                            <br>
                            We all see how crime is on the rise in our country, and regardless of our class, we are in danger. In such unpredictable times, it is better to be safe than sorry, and we take this very seriously.
                            <br>
                            <br>
                            <br>
                            We have worked hard with our team to create the best training
                            curriculums for the respective programs.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="{{ url('user_about') }}" class="btn-shoot bg-blue mr-3 wow fadeIn" data-wow-duration="1s" data-wow-delay="2s">Read More <i class="fas fa-arrow-right"></i> </a>
                    </div>
                </div>


            </div>
            <div class="col-lg-6 col-md-6 col-12 d-none d-lg-block">
                <img src="{{ asset('user_asset/images/about-us.png') }}" class="abt wow fadeInRight" data-wow-duration="1s" data-wow-delay="2s" alt="about us picture">
            </div>
        </div>
    </div>
</section>

<section class="featured-courses">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="heading_text color-white wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                    Featured Courses
                </h2>
                <p class="sub-text color-white wow fadeIn" data-wow-duration="1s" data-wow-delay="1.5s">
                    Browse through our effective, time-tested and affordable shooting courses <br>
                    for civilians now. Join our community and stay connected with the club members <br>
                    for regular news, updates and our new facilities.
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 d-none d-lg-none d-xl-block"></div>
            <div class="col-xl-10 col-lg-12 p-0">
                <div class="adjustment">
                    <div class="course-slider owl-carousel">

                        @foreach ($course as $courses)

                        <div class="item">

                            <div class="course-wrap wow fadeInDown" data-wow-duration="1s" data-wow-delay="2s">
                                <a href="{{ url('user_course_detail/'.$courses->id) }}">
                                    <img src="{{ url('storage/course/'.$courses->image) }}" alt="">

                                    <div class="inner_item shadow">

                                        <p class="name">{{ $courses->user->first_name." ".$courses->user->last_name }}</p>
                                        <p class="featued_tag">

                                            {{-- @foreach ($courses->features as $features)
                                                {{  $features->title }}
                                            @endforeach --}}

                                        </p>
                                        <h6 class="course_name">{{ $courses->name }}</h6>
                                        <p class="course_exceprt">{{substr($courses->description,0,50)}}...</p>
                                        <p class="course_price">${{ $courses->charges }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        @endforeach


                        {{-- <div class="item">
                            <div class="course-wrap wow fadeInDown"  data-wow-duration="1s" data-wow-delay="2.2s">
                                <img src="{{ asset('user_asset/images/course-2.png') }}" alt="">
                        <div class="inner_item shadow">
                            <p class="name">john smith</p>
                            <p class="featued_tag">featured courses</p>
                            <h5 class="course_name">Great training area</h5>
                            <p class="course_exceprt">Upgrade your skills or learn from..</p>
                            <p class="course_price">$350</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="course-wrap wow fadeInDown" data-wow-duration="1s" data-wow-delay="2.3s">
                        <img src="{{ asset('user_asset/images/course-1.png') }}" alt="">
                        <div class="inner_item shadow">
                            <p class="name">john smith</p>
                            <p class="featued_tag">featured courses</p>
                            <h5 class="course_name">Great training area</h5>
                            <p class="course_exceprt">Upgrade your skills or learn from..</p>
                            <p class="course_price">$350</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="course-wrap wow fadeInDown" data-wow-duration="1s" data-wow-delay="2.5s">
                        <img src="{{ asset('user_asset/images/course-2.png')}}" alt="">
                        <div class="inner_item shadow">
                            <p class="name">john smith</p>
                            <p class="featued_tag">featured courses</p>
                            <h5 class="course_name">Great training area</h5>
                            <p class="course_exceprt">Upgrade your skills or learn from..</p>
                            <p class="course_price">$350</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

    </div>
    </div>

    </div>
</section>

<section class="membership">
    <img src="{{ asset('user_asset/images/membership-man.png') }}" class="member-ship-man wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="1s" alt="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="heading_text wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                    Join our <br> membership
                </h2>
                <p class="sub-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                    <span class="blue-txt">$25.00</span> Gets <span class="blue-txt">20%</span> off Merchandise and Training with application local personal <br>
                    lessons at Elizabeth Township Sportsmen’s Association...
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="yearly-text wow fadeIn" data-wow-duration="1s" data-wow-delay="2s">yearly plan</p>
                <p class="yearly-sub wow fadeIn" data-wow-duration="1s" data-wow-delay="2s">National Shooting academy</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="membership_card shadow-sm wow fadeInDown" data-wow-duration="1s" data-wow-delay="2s">

                    <div class="mem_item">
                        <p class="mem-price">
                            <sup>$</sup>69.00
                        </p>
                        <span class="mem-time">
                            1 hour
                        </span>
                        <label class="container-memcheck">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark-memcheck"></span>
                        </label>
                    </div>
                    <div class="mem_item">
                        <p class="mem-price">
                            <sup>$</sup>125.00
                        </p>
                        <span class="mem-time">
                            2 hour
                        </span>
                        <label class="container-memcheck">
                            <input type="radio" name="radio">
                            <span class="checkmark-memcheck"></span>
                        </label>
                    </div>
                    <div class="mem_item">
                        <p class="mem-price">
                            <sup>$</sup>225.00
                        </p>
                        <span class="mem-time">
                            4 hour
                        </span>
                        <label class="container-memcheck">
                            <input type="radio" name="radio">
                            <span class="checkmark-memcheck"></span>
                        </label>
                    </div>
                    <div class="flex-break"></div>

                    <div class="relative_wrapper">
                        <a href="{{ url('user_login') }}" class="book_mem">Get this plan</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="free_trial">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="{{ asset('user_asset/images/free_t_man.png')}}" class="ft_img wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="2s" alt="">
            </div>
            <div class="col-lg-6 col-md-12">
                <h2 class="heading_text color-white wow fadeInDown" data-wow-duration="1s" data-wow-delay="2.5s">
                    Fire Arms Training <br>
                    With Certified & Expert <br>
                    Trainers
                </h2>
                <a href="{{ url('user_login') }}" class="btn-shoot bg-white color-blue mt-5 wow zoomIn" data-wow-duration="1s" data-wow-delay="2s">Free trial training <i class="fas fa-arrow-right"></i> </a>
            </div>
        </div>
    </div>
</section>

<section class="our_merch">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="heading_text wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                    Our <br>
                    Merchandize
                </h2>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 p-40">
        <div class="row">
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
            <div class="col-12">
                <div class="merch-slider owl-carousel">
                    @foreach ($product as $products)

                    <div class="merch_item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.5s">
                        <a href="{{ url('user_inner_product/'.$products->id.'/'.$products->category_id) }}">


                            <div class="top">
                                <img src="{{ $products->base_image }}" alt="">
                            </div>



                            <div class="hover-wrap ">
                                <div class="bottom">
                                    <p class="m_label">{{ $products->name }}</p>
                                    {{-- <p class="merch_name">{{ $products->description }}</p> --}}
                                    {{-- <p class="merch_price">$30.00 - $34.00</p> --}}
                                    <p class="merch_price">${{ $products->price }}</p>
                                </div>

                                <div class="bottom_hover shadow-sm">
                                    <form action="{{ url('addToCart') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $products->id }}" name="id">
                                        <input type="hidden" value="{{ $products->name }}" name="name">
                                        <input type="hidden" value="{{ $products->price }}" name="price">
                                        <input type="hidden" value="{{ $products->description }}" name="description">
                                        <input type="hidden" value="{{ $products->base_image }}" name="base_image">
                                        <input type="hidden" value="1" name="quantity">
                                        <button class="btn btn-primary">Add To Cart</button>
                                    </form>
                                    {{-- <a href="">Add to cart</a> --}}

                                    @if ($products->wishlist == '')

                                    <div class="wrap">
                                        <a href="{{ url('add_to_wishlist/'.$products->id)  }}" class="wishlist">
                                            <i class="far fa-heart"></i></a>
                                    </div>
                                    @else
                                    <div class="wrap">
                                        <a href="{{ url('remove_to_wishlist/'.$products->id)  }}" class="wishlist">
                                            <i style="color:red;" class="fa fa-heart"></i></a>
                                    </div>
                                    @endif

                                </div>
                        </a>

                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
    <div class="row mt-50">
        <div class="col-12 text-center">
            <a href="{{ url('user_inner_category_filter') }}" class="btn-simple wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">View all</a>
        </div>
    </div>
    </div>
</section>
@endsection
@section('js')
@endsection