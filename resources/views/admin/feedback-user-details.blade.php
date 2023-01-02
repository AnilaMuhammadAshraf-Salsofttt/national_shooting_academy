<?php

$title = " feedback";
$activeNav = 'feedback';
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
                                        <a href="{{ url('feedback') }}"><i class="fas fa-angle-left pr-2"></i></a><h1 class="in-heading"> Feedback  </h1>
                                        </div>
                                    </div>


                                    <div class="top mt-5">
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="info-bg">
                                                <h3>User</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="for-gray-bg">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-4 text-center">
                                                <img src="images/avtr-2.png" alt="">
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="px-2">
                                                    <h4>User ID: {{ $feedback->user_id }} </h4>
                                                    <h4>Registration Date:  {{ date('M Y,d',strtotime($feedback->created_at)) }}</h4>
                                                </div>
                                            </div>
                                            <!-- <div class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
                                                <div>
                                                </div>
                                                <img src="images/avtr-2.png" alt="">
                                                <div class="px-2">
                                                    <h4>Trainer ID: 001 </h4>
                                                    <h4>Registration Date: May, 2 2020</h4>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="row offset-xl-2">
                                            <div class="col-lg-4">
                                                <ul class="user-pro pb-0">
                                                    <li>
                                                        <h5>First Name</h5>
                                                        <p>{{ $feedback->user->first_name }}</p>
                                                    </li>
                                                    <li>
                                                        <h5>Email</h5>
                                                        <p>{{ $feedback->user->email }}</p>
                                                    </li>
                                                    <!-- <li>
                                                        <h5>Message </h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                            do eiusmod tempor incididunt ut labore et
                                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                        </p>
                                                    </li> -->
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="user-pro pb-0">
                                                    <li>
                                                        <h5>Last Name</h5>
                                                        <p>{{ $feedback->user->last_name }}</p>
                                                    </li>
                                                    <li>
                                                        <h5>Subject </h5>
                                                        <p>{{ $feedback->subject }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-8">
                                                <ul class="user-pro pt-0">
                                                    <h5>Message </h5>
                                                    <p>
                                                        {{ $feedback->message }}
                                                    </p>
                                                    </li>
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
        </section>
    </div>
</div>
</div>





@include('admin.footer')
