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
                                            <h1 class="in-heading">BLOCKED USERS</h1>
                                            <!-- <a href="blocked-users-v1.php" class="bluee-btn mt-2 mt-md-0">Blocked Users</a> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
                                            <h1 class="in-heading">Courses</h1>
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
                                        <div class="row">
                                            <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                                                <input type="text" id="datepicker-2" placeholder="From">
                                            </div>
                                            <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                                                <input type="text" id="datepicker-3" placeholder="To">
                                            </div>
                                            <div class="col-xl-2 col-md-4 col-12">
                                                <button type="button" class="green-btn w-100">apply/clear</button>
                                            </div>
                                            <div class="col-lg-6 col-12 text-right">
                                                
                                            </div>
                                        </div>
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
                                            <tbody>
                                                <tr>
                                                    <td>01</td>
                                                    <td>001</td>
                                                    <td>May 2, 2020</td>
                                                    <td>Course A</td>
                                                    <td>$123</td>
                                                    <td>Completed</td>
                                                    <td>
                                                        <div class="btn-group mr-1 mb-1">
                                                            <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                            <div class="dropdown-menu" x-placement="bottom-start">
                                                                <a class="dropdown-item" href="user-details.php"><i class="fa fa-eye"></i>View</a>
                                                                
                                                            </div>
                                                        </div>
                                                    </td>                                          
                                                </tr>
                                                <tr>
                                                    <td>02</td>
                                                    <td>001</td>
                                                    <td>May 2, 2020</td>
                                                    <td>Course A</td>
                                                    <td>$123</td>
                                                    <td>In Process </td>
                                                    <td>
                                                        <div class="btn-group mr-1 mb-1">
                                                            <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                            <div class="dropdown-menu" x-placement="bottom-start">
                                                                <a class="dropdown-item" href="user-details.php"><i class="fa fa-eye"></i>View</a>
                                                                
                                                            </div>
                                                        </div>
                                                    </td>            
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td>001</td>
                                                    <td>May 2, 2020</td>
                                                    <td>Course A</td>
                                                    <td>$123</td>
                                                    <td>Pending</td>
                                                    <td>
                                                        <div class="btn-group mr-1 mb-1">
                                                            <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                            <div class="dropdown-menu" x-placement="bottom-start">
                                                                <a class="dropdown-item" href="user-details.php"><i class="fa fa-eye"></i>View</a>
                                                                
                                                            </div>
                                                        </div>
                                                    </td>                
                                                </tr>

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
