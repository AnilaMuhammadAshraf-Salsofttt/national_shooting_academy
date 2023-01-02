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
                            <h2 class="banner_heading  wow fadeInDown"  data-wow-duration="1s" data-wow-delay="3s">
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
                                <div class="media-body" >

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
                        <div class="modal-body" >

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
                        <img src="{{ asset('user_asset/images/circle-banner.png') }}"  class="wow fadeIn" data-wow-duration="1s" data-wow-delay="5s" alt="">
                        <img src="{{ asset('user_asset/images/ideaa-banner.png') }}" class="wow fadeIn" data-wow-duration="1s" data-wow-delay="5.2s" alt="">
                        <img src="{{ asset('user_asset/images/amara-banner.png') }}" class="wow fadeIn" data-wow-duration="1s" data-wow-delay="5.4s"class="wow fadeIn" data-wow-duration="1s" data-wow-delay="5s" alt="">
                        <img src="{{ asset('user_asset/images/circle-banner.png') }}"class="wow fadeIn" data-wow-duration="1s" data-wow-delay="5.6s" alt="">
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    @endsection

@section('js')


@endsection
