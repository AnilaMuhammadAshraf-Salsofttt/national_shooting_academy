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
                                                            <h5>First Name *</h5>
                                                            <input type="text" class="form-control"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                placeholder="Abc">
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <ul class="">
                                                        <li>
                                                            <h5>Email</h5>
                                                            <input type="text" class="form-control"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                placeholder="abc@xyz.com">
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="info-bg">
                                                <h3>Course Details</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="for-gray-bg">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <ul class="">
                                                        <li>
                                                            <h5>Course Name</h5>
                                                            <input type="text" class="form-control"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                placeholder="Course A">
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <ul class="">
                                                        <li>
                                                            <h5>Charges</h5>
                                                            <input type="text" class="form-control"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                placeholder="$123">
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4"></div>
                                            </div>
                                            <div>
                                                <a href="#" class="bluee-btn">Course Overview</a>
                                                <a href="#" class="bluee-btn">Syllabus</a>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="for-gray-bg">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="lecture-box">
                                                        <h6>Lecture 01</h6>
                                                        <h6>Lecture Title </h6>
                                                        <h6>30 Mins</h6>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="lecture-box">
                                                        <h6>Lecture 01</h6>
                                                        <h6>Lecture Title </h6>
                                                        <h6>30 Mins</h6>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="lecture-box">
                                                        <h6>Lecture 01</h6>
                                                        <h6>Lecture Title </h6>
                                                        <h6>30 Mins</h6>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="lecture-box">
                                                        <h6>Lecture 01</h6>
                                                        <h6>Lecture Title </h6>
                                                        <h6>30 Mins</h6>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="lecture-box">
                                                        <h6>Lecture 01</h6>
                                                        <h6>Lecture Title </h6>
                                                        <h6>30 Mins</h6>
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
    </div>
    </section>
</div>
</div>
</div>




@include('admin.footer')

