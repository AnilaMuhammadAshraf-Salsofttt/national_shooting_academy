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
        <div class="row mb-5">
            <div class="col-12 mb-5">
                <a href="{{ url('trainer/trainer_course_logs') }}" class="h-link"><i class="fas fa-angle-left"></i>
                    <h5 class="i_t mb-0">Courses</h5>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-12 ">
                <label for="" class="en-labl">Course Name</label>
                <p class="en-p">{{ !empty($enrolled_course[0]->course->name)?$enrolled_course[0]->course->name:"no name" }}</p>
            </div>
            <div class="col-lg-4 col-md-4 col-12 ">
                <label for="" class="en-labl">Course Id</label>
                <p class="en-p">{{ !empty($enrolled_course[0]->course->id)?$enrolled_course[0]->course->id:"no id" }}</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12  ">
                <h5 class="i_t mb-0">Enrolled Users</h5>
            </div>
        </div>
     
        <div class="row">

            <div class="col-12 p-0">

                <div class="maain-tabble table-responsive">
                    <table class="table zero-configuration pay_logs">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>User Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>enrollment date</th>
                                <th>charges</th>
                                <th>status</th>
                                {{-- <th>attempts</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $id=1;
                            @endphp
                            @foreach ($enrolled_course as $enrolled_courses)
                                
                            <tr>
                                <td>{{ $id++ }}</td>
                                <td>{{ $enrolled_courses->user->id }}</td>
                                <td>{{ $enrolled_courses->user->first_name }}</td>
                                <td>{{ $enrolled_courses->user->last_name }}</td>
                                <td>{{ $enrolled_courses->course->created_at }}</td>
                                <td>{{ $enrolled_courses->course->charges }}</td>
                                <td>{{ $enrolled_courses->course->status }}</td>
                             
                                <td>
                                    <button type="button" class="btn  btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu table_menu">
                                        <a class="dropdown-item" href="{{ route('course.enrolled_user_detail',$enrolled_courses->course->id) }}"><i class="fas fa-eye"></i>View Details </a>
                                    </div>
                                </td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection