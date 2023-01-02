<?php

$title = "Booked Course Details";
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


    <section class="login bg-page position-relative text-center text-sm-left">
        <img src="images/inner_target.png" class="target inner-target" alt="" srcset="">

        <div class="container">
            <div class="row mb-5">
                <div class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
                    <a href="{{ route('course.logs') }}"><h5 class="i_t mb-0"><i class="fas fa-angle-left"></i> Courses
                        </h5></a>
                </div>
            </div>
            <div class="course-inner">
                <div class="course-inner-header p-4">
                    <p class="sidebar-heading my-0">Trainer's Details</p>
                </div>
                <div class="p-4">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-3 col-sm-4">
                            <img src="images/trainer-icon.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4">
                            <p class="black-text">Trainer Name</p>
                            <p class="mt-0">{{ $booked_course->user->first_name." ".$booked_course->user->last_name }}</p>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4">
                            <p class="black-text">Trainer Email</p>
                            <p class="mt-0">{{ $booked_course->user->email }}</p>
                        </div>
                    </div>
                </div>
                <div class="course-inner-header p-4">
                    <p class="sidebar-heading my-0">Course Details</p>
                </div>
                <div class="p-4">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-12 mt-4">
                            <h6 class="medium">Course Overview <span class="blue-text"> Syllabus</span></h6>
                            @php
                                $id=1;
                            @endphp
                            @foreach ($booked_course->syllabus as $syllabuses)

                                <div class="course-details-inner mt-4">
                                    <div class="row justify-content-center">

                                        {{-- @foreach ($course_syllabi_booked as $syllabi_attemptses) --}}

                                        <div class="col-lg-2">
                                    <span class="check-mark">
                                        <i class="fas fa-check"></i>
                                    </span>
                                        </div>

                                        {{-- @endforeach --}}


                                        <div class="col-lg-3 col-sm-4 mb-2 mb-sm-0">
                                            <p class="my-0">Lecture {{ $id++ }}</p>
                                        </div>
                                        <div class="col-lg-5 col-sm-4 mb-2 mb-sm-0">
                                            <p class="my-0">Lecture {{ $syllabuses->title }}</p>
                                        </div>
                                        <div class="col-lg-2 col-sm-4">
                                            <p class="my-0">{{ $syllabuses->duration }} Mins</p>
                                        </div>
                                        <div class="col-lg-2 col-sm-4">
                                            <p class="my-0"><a
                                                    href="{{ url('booked_course_detail/'.$booked_course->id) }}">go</a>
                                            </p>
                                        </div>

                                    </div>
                                </div>

                            @endforeach

                            <div class="course-details-inner">
                                <div class="row justify-content-center">
                                    <div class="col-lg-2">
                                        <span class="check-mark"><i class="fas fa-check"></i></span>
                                    </div>
                                    <div class="col-lg-3 col-sm-4 mb-2 mb-sm-0">
                                        <p class="my-0">Quiz</p>
                                    </div>
                                    <div class="col-lg-5 col-sm-4 mb-2 mb-sm-0">
                                        <p class="my-0">Quiz </p>
                                    </div>
                                    <div class="col-lg-2 col-sm-4">
                                        <p class="my-0">{{ $booked_course->questions->count() }} Questions</p>
                                    </div>
                                    <div class="col-lg-2 col-sm-4">
                                        <p class="my-0"><a href="{{ route('quiz.view',$booked_course->id) }}">go</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="course-inner">
                <div class="course-inner-header p-4">
                    <p class="sidebar-heading my-0">Course Files</p>
                </div>
                <div class="p-4">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-12 mt-4">
                            <h6 class="medium">Overview <span class="blue-text"> Files</span></h6>
                            @php
                                $id=1;
                            @endphp
                            @foreach ($booked_course->files as $file)

                                <div class="course-details-inner mt-4">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-2">
                                            <span class="check-mark">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>

                                        <div class="col-lg-3 col-sm-4 mb-2 mb-sm-0">
                                            <p class="my-0"># {{ $id++ }}</p>
                                        </div>
                                        <div class="col-lg-5 col-sm-4 mb-2 mb-sm-0">
                                            <p class="my-0">Title:  {{ $file->title }}</p>
                                        </div>
                                        <div class="col-lg-2 col-sm-4">
                                            <p class="my-0"><a target="_blank" href="{{ $file->path }}">View</a> </p>
                                        </div>

                                    </div>
                                </div>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
