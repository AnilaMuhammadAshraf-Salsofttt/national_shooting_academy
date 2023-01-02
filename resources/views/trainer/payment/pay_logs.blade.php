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
        <div class="row">
            <div class="col-12 text-center text-md-left">
                <h5 class="i_t">Pay Logs</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="date_wrapr">
                    <span>Sort By: </span>
                    <form action="{{ url('trainer/pay_logs') }}" method="get">
                        <div class="row">

                    <div class="b">
                        <p>From</p>
                        <input type="date" class="form-control"  name="from" value="{{ Request::get('from') }}">
                    </div>
                    <div class="b">
                        <p>To</p>
                        <input type="date" class="form-control"  name="to" value="{{ Request::get('to') }}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Apply Filter</button>
                </div>

                </form>
                </div>
            </div>
            <div class="col-12 p-0">

                <div class="maain-tabble table-responsive">
                    <table class="table zero-configuration pay_logs">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Course Id</th>
                                <th>User Id</th>
                                <th>date</th>
                                <th>title</th>
                                <th>Charges</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $id=1;
                            @endphp

                            @foreach ($course_register as $course_registers)
                                
                            <tr>
                                <td>{{ $id++ }}</td>
                                <td>{{ $course_registers->course_id }}</td>
                                <td>{{ $course_registers->user_id }}</td>
                                <td>{{ \Carbon\Carbon::parse($course_registers->course->created_at)->format('M d, Y') }}</td>
                                <td>{{ $course_registers->course->name }}</td>
                                <td>${{ $course_registers->price_paid }}</td>
                              
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