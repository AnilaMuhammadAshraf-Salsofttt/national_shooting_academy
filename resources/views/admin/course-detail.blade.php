<?php

$title = " User Listing";
$activeNav = 'user-listing';
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
                                        <div
                                            class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
                                            <h1 class="in-heading">
                                                Course Details
                                                </h1>
                                        </div>
                                    </div>
                                  
                                    <div class="top mt-5">
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="info-bg">
                                                <h3>Order Details</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="for-gray-bg">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul class="">
                                                        <li>
                                                            <h5>{{ $course->name }}</h5>
                                                            <img src="images/avtr-3.png" alt="">
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <ul class="">
                                                        <li>
                                                            <h5>Trainer Name</h5>
                                                            <p>{{ $course->user->first_name }}</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <ul class="">
                                                        <li>
                                                            <h5>Trainer Email </h5>
                                                            <p>{{ $course->user->email }}</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="">
                                                        <h3>Course Details</h3>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <ul class="">
                                                        <li>
                                                            <h5>Course Name</h5>
                                                            <p>{{ $course->name}}</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <ul class="">
                                                        <li>
                                                            <h5>Charges </h5>
                                                            <p>{{ $course->charges }}</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4"></div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="">
                                                        <h3>Course Overview Syllabus</h3>
                                                        <h5>Title</h5>
                                                        <p>
                                                            @foreach ($course->syllabus as $item)
                                                            <video width="320" height="240" controls>
                                                                <source src="{{ url('$item->video') }}" type="video/mp4">
                                                           
                                                              </video>
                                                            @endforeach
                                                            
                                                        </p>
                                                            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="">
                                                        <h3>Features of Course</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="user-pro-2">
                                                        <ul>
                                                            @foreach ($course->features as $item)
                                                     
                                                            <li>
                                                                <h5>{{$item->title}}</h5>
                                                                <p>{{$item->value}}</p>
                                                            </li>
                                                            @endforeach
                                                          
                                                        </ul>
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
    </div>
</div>
</div>





@include('admin.footer')
