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
                                            <h1 class="in-heading">ORDER LOG  </h1>
                                            <!-- <a href="blocked-users-v1.php" class="bluee-btn mt-2 mt-md-0">Blocked Users</a> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
                                            <!-- <h1 class="in-heading">ORDER LOG  </h1> -->
                                            {{-- <div>
                                            <a href="order-log.php" class="bluee-btn mt-2 mt-md-0">Order Pay Log </a>
                                            <a href="order-log-v1.php" class="bluee-btn mt-2 mt-md-0">Course Pay Log  </a>
                                            </div> --}}
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
                                                    <th>Order ID</th>
                                                    <th>Order Date</th>
                                                    <th>Title</th>
                                                    <th>Quantity</th>
                                                    <th>Amount paid</th>
                                                    <th>Order Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>01</td>
                                                    <td>001</td>
                                                    <td>May 2, 2020</td>
                                                    <td>name</td>
                                                    <td>06</td>
                                                    <td>$123</td>
                                                    <td>Pending</td>                                                
                                                </tr>
                                                <tr>
                                                    <td>02</td>
                                                    <td>001</td>
                                                    <td>May 2, 2020</td>
                                                    <td>name</td>
                                                    <td>06</td>
                                                    <td>$123</td>
                                                    <td>Delivered</td>   
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td>001</td>
                                                    <td>May 2, 2020</td>
                                                    <td>name</td>
                                                    <td>06</td>
                                                    <td>$123</td>
                                                   <td>In Process</td>   
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