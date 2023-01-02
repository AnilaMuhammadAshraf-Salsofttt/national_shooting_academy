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
                                        <div class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
                                            <h1 class="in-heading">COURSES</h1>
                                            <!-- <a href="blocked-users-v1.php" class="bluee-btn mt-2 mt-md-0">Blocked Users</a> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
                                            <!-- <h1 class="in-heading">ORDER LOG  </h1> -->
                                            <div>
                                            <!-- <a href="blocked-users-v1.php" class="bluee-btn mt-2 mt-md-0">Order Pay Log </a>
                                            <a href="blocked-users-v1.php" class="bluee-btn mt-2 mt-md-0">Course Pay Log  </a> -->
                                            </div>
                                            <img src="images/avtr-2.png" alt="">
                                            <div>
                                            <h4>User ID 001 </h4>
                                            <h4>User Name: Jogn Max</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="top mt-5">

                                        <div class="row">
                                            <div class="col-12">
                                                <label for="">sort by :</label>
                                            </div>
                                        </div>
                                        <form action="{{ url('course/'.Request::segment(2)) }}" method="GET">

                                            <div class="row">
                                                <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                                                    <input type="date" placeholder="From" name="from">
                                                </div>
                                                <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                                                    <input type="date" placeholder="To" name="to">
                                                </div>
                                                <div class="col-xl-2 col-md-4 col-12">
                                                    <button type="submit" class="green-btn w-100">apply/clear</button>
                                                </div>
                                                <div class="col-lg-6 col-12 text-right">
                                                    
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="maain-tabble table-responsive">
                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>s.no</th>
                                                    <th>Course ID</th>
                                                    <th>Enrollment Date</th>
                                                    <th>Title</th>
                                                    <th>Amount paid</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @php
                                                $id=1;
                                            @endphp
                                            <tbody>
                                                @foreach ($course as $item)
                                                    
                                                <tr>
                                                    <td>{{ $id++; }}</td>
                                                    <td>{{ $item->course_id }}</td>
                                                    <td>{{ date('Y-m-d',strtotime($item->created_at))}}</td>
                                                    <td>${{ $item->course->name }}</td>
                                                    <td>{{ $item->price_paid }}</td>
                                                    <td>{{ $item->status }}</td>
                                                    <td>
                                                        <div class="btn-group mr-1 mb-1">
                                                            <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                            <div class="dropdown-menu" x-placement="bottom-start">
                                                                <a class="dropdown-item" href="{{ url('course_detail/'.$item->course_id) }}"><i class="fa fa-eye"></i>View</a>
                                                            </div>
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
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!--customer end here-->

@include('admin.footer')
