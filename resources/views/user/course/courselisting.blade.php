<?php

$title = "Course Listing";
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
            <div class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
                <h5 class="i_t mb-0">Courses</h5>
            </div>
        </div>
        <div class="row">

@foreach ($course as $courses)
    
            <div class="col-lg-4 col-md-6 col-12">
                <a href="{{ url('user_course_detail/'.$courses->id) }}">
                    <div class="lic-card course-card">
                        {{-- <img src="{{ asset('user_asset/images/course-1.png') }}" alt=""> --}}
                        <img src="{{ url('storage/course/'.$courses->image) }}" alt="">
                        <div class="foot">
                            <h5>{{ $courses->name }}</h5>
                            <div class="d-flex align-items-center">
                                {{-- <i class="fas mr-3 fa-user-circle"></i> --}}
                                <p class="mt-0">{{ $courses->user->first_name." ".$courses->user->last_name }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            @endforeach



        </div>
        <div class="row dataTables_wrapper">
            <div class="col-sm-12 col-md-5">
                {{-- <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div> --}}
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                   {{ $course->render() }}
                    {{-- <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection