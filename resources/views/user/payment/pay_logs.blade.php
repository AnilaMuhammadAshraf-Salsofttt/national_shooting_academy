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
                    <div class="b">
                        <p>From</p>
                        <input type="text" class="date-input" id="from-d">
                    </div>
                    <div class="b">
                        <p>To</p>
                        <input type="text" class="date-input" id="to-d">
                    </div>
                    <a href="#" class="apply-btn">Apply Filter</a>
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
                            <tr>
                                <td>01</td>
                                <td>001</td>
                                <td>abc Session</td>
                                <td>May 2, 2020</td>
                                <td>10:30 Am</td>
                                <td>$123</td>
                              
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection