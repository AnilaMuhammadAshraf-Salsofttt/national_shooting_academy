<?php

$title = "Quiz view";
$activeNav = 'trainer-quiz';
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
        <div class="row mb-5">
            <div class="col-12">
                <a href="{{ url('trainer/trainer_course_logs') }}" class="h-link"><i class="fas fa-angle-left"></i>
                    <h5 class="i_t mb-0">Course</h5>
                </a>
            </div>
        </div>

        <div class="row text-center text-md-left">
            <div class="col-xl-3 col-lg-3 col-md-3 col-12 mb-4 mb-md-0 bold">
                <label for="" class="en-labl">Course Name</label>
                <p class="en-p">{{ $enrolled_course->name }}</p>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-12 mb-4 mb-md-0 bold">
                <label for="" class="en-labl">Passing Criteria</label>
                <p class="en-p">{{ $enrolled_course->passing_criteria }}%</p>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-12 mb-4 mb-md-0 bold">
                <label for="" class="en-labl">Points Per Question</label>
                <p class="en-p">{{ $enrolled_course->points_per_quesiton }}</p>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-12 mb-4 mb-md-0 bold">
                <label for="" class="en-labl">User's Number Of Attempts</label>
                <p class="en-p">{{ $enrolled_course->attempts }}</p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 overflow-x">
                <div class="card quiz_card">
                    <div class="card-header">
                        <p>Total Questions</p>
                        <p>10 Questions</p>
                        <p>Time</p>
                        <p><i class="far fa-clock"></i> 00:10:00</p>
                    </div>
                    <div class="card-body">
@php
    $id = 1;
@endphp
                        @foreach ($enrolled_course->questions as $questions)
                            
                        <div class="quest_wrap mb-4">
                            <div class="row">
                                <div class="col-12 ">
                                    <div class="ww">
                                        <div class="w">
                                            <p class="blue">Question {{ $id++ }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 ">
                                    <p class="texty">
                                        {{ $questions->question }}
                                    </p>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">

                                    @php
                                    $alpha = 'a';
                                @endphp
                                        @foreach ($questions->answers as $answers)
                                               
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="container-quiz"><span style='color:red;'>{{ "(".$alpha++.")" }}</span> {{ $answers->answer }}
                                                        <input type="radio" onclick="radio_ans('{{ $answers->course_question_id}}','{{ $answers->correct }}')" name="radio-{{ $answers->course_question_id }}" value="{{ $answers->correct }}">
                                                        <span class="checkmark-quiz"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            @endforeach
    



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