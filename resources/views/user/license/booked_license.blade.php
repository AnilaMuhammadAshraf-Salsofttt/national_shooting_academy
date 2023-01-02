<?php

$title = "License Categories";
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
    <img src="images/inner_target.png" class="target inner-target" alt="" srcset="">

    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <a href="{{ route('license.logs') }}" class="pi-backLink"><i class="fas fa-angle-left mr-1"></i> Category {{ $license->category->name }}</a>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="{{ asset('user_asset/images/laycaanse.png') }}" class="licesnce-ban" alt="">
            </div>
            <div class="col-lg-6">
                <h5 class="lic-1attmp">No of Attempts Allowed:  {{ $license->attempts }}</h5>
                {{-- <h5 class="lic-1attmp">No of Attempts Availed:  {{ $license->license_attempt->count() }}</h5>
                <h5 class="lic-1attmp">No of Attempts Remaining:  {{ $license->attempts-$license->license_attempt->count() }}</h5> --}}
                <h5 class="lic-1attmp">License Fee ${{ $license->fee }}</h5>

                <p class="lic-1desc">{{ $license->description }}</p>
                {{-- <a href="#" class="btn-blue" data-toggle="modal" data-target="#make-payment">Apply</a> --}}
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h6 class="bb-1">Description</h6>
                <p class="lic-1desc">{{ $license->description }}</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h6 class="bb-1">License Details</h6>
            </div>
        </div>
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-md-2 text-center text-md-left">
                <span class="lic-b">Category</span>
                <span class="lic-blu">{{ $license->category->name }}</span>
            </div>
            <div class="col-md-2 text-center text-md-left">
                <span class="lic-b">Attempts</span>
                <span class="lic-blu">{{ $license->attempts }}</span>
            </div>
        </div>
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-md-2 text-center text-md-left">
                <span class="lic-b">Description</span>
                <span class="lic-blu">{{ $license->description }}</span>
            </div>
            <div class="col-md-2 text-center text-md-left">
                <span class="lic-b">Fee</span>
                <span class="lic-blu">{{ $license->quiz_title}}</span>
            </div>
        </div>
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-md-2 text-center text-md-left">
                <span class="lic-b">Quiz title</span>
                <span class="lic-blu">{{ $license->quiz_title }}</span>
            </div>
            <div class="col-md-2 text-center text-md-left">
                <span class="lic-b">Duration</span>
                <span class="lic-blu">{{ $license->duration}}</span>
            </div>
        </div>
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-md-2 text-center text-md-left">
                <span class="lic-b">Passing Criteria</span>
                <span class="lic-blu">{{ $license->passing_criteria }}</span>
            </div>
            <div class="col-md-2 text-center text-md-left">
                <span class="lic-b">Points Per Question</span>
                <span class="lic-blu">{{ $license->points_per_question}}</span>
            </div>
        </div>
        <a href="{{ url('license_quiz_view/'.$license->id) }}" class="btn btn-danger">Start Quiz</a>
    </div>
</section>

@endsection

@section('js')


@endsection