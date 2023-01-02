<?php

$title = " course";
$activeNav = 'course';
?>
@include('admin.header');
@include('admin.nav');
<!--customer start here-->

<div class="app-content content user view-customer customer-product">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card rounded pad-20">
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 d-flex">
                                            <a href="#"> <i class="fas fa-angle-left"></i></a>
                                            <h1 class="in-heading">Course Log </h1>
                                        </div>
                                    </div>

                                    <div class="top mt-5">
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="info-bg">
                                                <h3>Trainer’s Details</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="for-gray-bg">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul class="">
                                                        <li>
                                                            <img src="images/avtr-3.png" alt="">
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <ul class="">
                                                        <li>
                                                            <h5>Trainer Name</h5>
                                                            <p>{{$trainer->user->first_name }}</p>

                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <ul class="">
                                                        <li>
                                                            <h5>Trainer Email </h5>
                                                            <p>{{$trainer->user->email }}</p>

                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <ul class="">
                                                        <li>
                                                            <h5>Course Name</h5>
                                                            <p>{{$trainer->name }}</p>

                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <ul class="">
                                                        <li>
                                                            <h5>Charges</h5>
                                                            <p>${{$trainer->charges }}</p>

                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <ul class="">
                                                        <li>
                                                            <h5>Passing Criteria</h5>
                                                            <p>{{$trainer->passing_criteria }}%</p>

                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <ul class="">
                                                        <li>
                                                            <h5>Points per Question</h5>
                                                            <p>{{$trainer->points_per_quesiton }}</p>

                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="info-bg for-flex ">
                                                <h3>Total Questions</h3>
                                                <h3>{{ $count }} Questions</h3>
                                                <h3>Time</h3>
                                                <h3>00:10:00</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="for-gray-bg">
                                        <div class="container">
                                            <div class="row">
                                                    @php
                                                        $id=1;
                                                    @endphp
                                                @foreach ($course_quiz as $item)
                                                    
                                                <div class="col-lg-8">
                                                    <h5>Question {{ $id++ }}</h5>
                                                    <p>{{ $item->question }}</p>
                                                    @foreach ($item->answers as $items)
                                                        
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio1" name="customRadio"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio1">Option {{ $items->answer }}</label>
                                                    </div>
                                                    @endforeach

                                                </div>
                                                @endforeach

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
</div>
</div>
</div>




@include('admin.footer')
