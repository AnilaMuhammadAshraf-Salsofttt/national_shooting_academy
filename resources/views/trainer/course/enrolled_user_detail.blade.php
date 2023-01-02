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
    <img src="images/inner_target.png" class="target inner-target" alt="" srcset="">

    <div class="container">
        <div class="row mb-5 text-center text-md-left">
            <div class="col-xl-2 col-lg-3 col-md-4 mb-4 mb-md-0">
                <a href="{{ route('course.enrolled_user',Request::segment(3)) }}" class="h-link"><i class="fas fa-angle-left"></i>
                    <h5 class="i_t mb-0">Courses</h5>
                </a>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-12 mb-4 mb-md-0">
                <label for="" class="en-labl">Course Name</label>
                <p class="en-p">{{ $enrolled_course->name }}</p>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-12 ">
                <label for="" class="en-labl">Course Id</label>
                <p class="en-p">{{ $enrolled_course->id }}</p>
            </div>
        </div>


        <div class="row">
            <div class="col-12">

                <div class="card create_course c-dets">
                    <div class="card-header p-4">

                    </div>
                    <div class="card-body">

                        <div class="row mt-4">
                            <div class="col-12 col-12 d-flex justify-content-center">
                                <div class="media align-items-center inner-media">
                                    {{-- <img class="mr-3" src="{{ $enrolled_course->user->userimage?$enrolled_course->user->userimage:asset('user_asset/images/profile-img.png') }}" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="mt-0">User Id {{ $enrolled_course->user->id }}</h5>
                                        <h5 class="mt-0">User Name {{ $enrolled_course->user->first_name." ".$enrolled_course->user->last_name  }}</h5>

                                    </div> --}}
                                </div>
                            </div>
                        </div>

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">

                              <h5 class="nav-link blue active" id="home-tab" data-toggle="tab"
                               href="#home" role="tab" aria-controls="home" aria-selected="true"> Course Overview</h5>
                            </li>
                            <li class="nav-item">
                              <h5 class="nav-link blue" id="profile-tab" data-toggle="tab" href="#profile" 
                              role="tab" aria-controls="profile" aria-selected="false">Syllabus</h5>
                            </li>
                           
                          </ul>
                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="row mt-5">
                            <div class="col-12">
                                <h5 class="blue"> Course Overview <span>Syllabus</span> </h5>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <label for="" class="cc">Description</label>
                                <p class="p-course-details">
                                {{  $enrolled_course->description }}
                                
                                </p>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <label for="" class="cc">Features of Courses</label>
                            </div>
                        </div>
                        <div class="row mt-2">

                            <div class="col-md-4 col-12">


                                @foreach ($enrolled_course->features as $features)
                                    
                                <div class="row">
                                    <div class="col-6">
                                        <p class="p-course-details">{{ $features->title }}</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="p-course-details">{{ $features->value }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row mt-5">
                            @php
                            $id=1;
                       
                        @endphp
                            @foreach ($enrolled_course->syllabus as $syllabuses)

                            <div class="col-12">
                                <div class="course_d_wrap shadow-sm">
                                    <div class="i_w">
                                        <label class="container-chk wot">
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark-chk"></span>
                                        </label>
                                    </div>

                                    <div class="i_w">
                                        <p class="my-0">Lecture {{ $id++ }}</p>
                                    </div>
                                    <div class="i_w">
                                        <p>Lecture {{ $syllabuses->title }}</p>
                                    </div>
                                    <div class="i_w">
                                        <p>{{ $syllabuses->duration }} Mins</p>
                                    </div>
                                 
                                </div>
                            </div>
                            @endforeach


                            <div class="col-12">
                                <div class="course_d_wrap shadow-sm">
                                    <div class="i_w">
                                        <label class="container-chk wot">
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark-chk"></span>
                                        </label>
                                    </div>

                                    <div class="i_w">
                                        <p class="my-0">Quiz</p>
                                    </div>
                                    <div class="i_w">
                                        <p>Quiz</p>
                                    </div>
                                    <div class="i_w">
                                        <p>{{ $enrolled_course->questions->count() }} Questions</p>
                                    </div>
                                    <div class="i_w">
                                        <p><a href="{{ route('course.enrolled_user_quiz',Request::segment(3)) }}">view quiz</a></p>
                                    </div>
                                 
                                </div>
                            </div>
                            

                        </div>

                    </div>
                  </div>




                    </div>

                </div>
            </div>




        </div>
    </div>
</section>

@endsection