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
                                                    <th>Order ID</th>
                                                    <th>Order Date</th>
                                                    <th>Title</th>
                                                    <th>Quantity</th>
                                                    <th>Amount paid</th>
                                                    <th>Order Status</th>
                                                    <th>Action</th>
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
                                                    <td>
                                                        <div class="btn-group mr-1 mb-1">
                                                            <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                            <div class="dropdown-menu" x-placement="bottom-start">
                                                                <a class="dropdown-item" href="user-order-details.php"><i class="fa fa-eye"></i>View</a>
                                                            </div>
                                                        </div>
                                                    </td>                                           
                                                </tr>
                                                <tr>
                                                    <td>02</td>
                                                    <td>001</td>
                                                    <td>May 2, 2020</td>
                                                    <td>name</td>
                                                    <td>06</td>
                                                    <td>$123</td>
                                                    <td>Delivered</td>
                                                    <td>
                                                        <div class="btn-group mr-1 mb-1">
                                                            <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                            <div class="dropdown-menu" x-placement="bottom-start">
                                                                <a class="dropdown-item" href="user-order-details.php"><i class="fa fa-eye"></i>View</a>
                                                            </div>
                                                        </div>
                                                    </td>             
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td>001</td>
                                                    <td>May 2, 2020</td>
                                                    <td>name</td>
                                                    <td>06</td>
                                                    <td>$123</td>
                                                    <td>In Process</td>
                                                    <td>
                                                        <div class="btn-group mr-1 mb-1">
                                                            <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                            <div class="dropdown-menu" x-placement="bottom-start">
                                                                <a class="dropdown-item" href="user-order-details.php"><i class="fa fa-eye"></i>View</a>
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

<!--block Modal -->
<div class="modal fade blocked-modal" id="block-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="images/qut.png" alt="">

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="modal-h1">Block User</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="txt">Are you sure you want to <br> block the user?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <!-- <a href="" class="orange-btn mr-2" data-dismiss="modal" data-toggle="modal" data-target="#confirmed">Yes</a> -->
                        <a href="" class="bluee-btn mr-2" data-dismiss="modal" >NO</a>
                        <a href="" class="bluee-btn" data-dismiss="modal" data-toggle="modal" data-target="#confirmed">YES</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--confirmed Modal -->
<div class="modal fade blocked-modal" id="confirmed" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="images/check-blu.png" alt="">

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="modal-h1">System Message</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="txt">User has been blocked</p>
                    </div>
                </div>
                <div class="row">
                    
                </div>
            </div>

        </div>
    </div>
</div>






@include('admin.footer')
