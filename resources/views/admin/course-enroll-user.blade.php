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
                                            <h1 class="in-heading">Course Log </h1>
                                            <!-- <a href="blocked-users-v1.php" class="bluee-btn mt-2 mt-md-0">Blocked Users</a> -->
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
                                                            <h5>First Name</h5>
                                                            <p>{{$trainer->user->first_name }}</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <ul class="">
                                                        <li>
                                                            <h5>Email</h5>
                                                            <p>{{$trainer->user->email }}</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4"></div>
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

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="info-bg mt-2">
                                                <h3>Trainer’s Details</h3>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="maain-tabble table-responsive">
                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>s.no</th>
                                                    <th>User Id</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Enrollment Date</th>
                                                    <th>Charges</th>
                                                    <th>Status</th>
                                                    <th>Attempts</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $id=1;
                                                @endphp
                                               @foreach ($course as $item)
                                               <tr>

                                    <td>{{  $id++ }}</td>
                                    <td>{{ $item->user->id }}</td>
                                    <td>{{ $item->user->first_name }}</td>
                                    <td>{{ $item->user->last_name }}</td>
                                    <td>{{ date('Y-m-d',strtotime($item->created_at)) }}</td>
                                    <td>{{ $item->charges }}</td>
                                    <td>{{ $item->status }}</td>


                                               </tr>
                                                   
                                               @endforeach
                                            </tbody>
                                        </table>
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
