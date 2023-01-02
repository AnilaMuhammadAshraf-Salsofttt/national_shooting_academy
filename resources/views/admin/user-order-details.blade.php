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
                                            <a href="#_"> <i class="fas fa-angle-left"></i></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div
                                            class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
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
                                                <div class="col-lg-3">
                                                    <ul class="">
                                                        <li>
                                                            <h5>First Name</h5>
                                                            <p>ABC</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul class="">
                                                        <li>
                                                            <h5>Last Name </h5>
                                                            <p>ABC</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul class="">
                                                        <li>
                                                            <h5>Phone </h5>
                                                            <p>+44 1234 234 4444</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label for="exampleFormControlSelect1">Status</label>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <option>Pending </option>
                                                        <option>Completed </option>
                                                        <option>In Process</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <ul class="">
                                                        <li>
                                                            <h5>First Name</h5>
                                                            <p>ABC</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul class="">
                                                        <li>
                                                            <h5>Last Name </h5>
                                                            <p>ABC</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul class="">
                                                        <li>
                                                            <h5>Phone </h5>
                                                            <p>+44 1234 234 4444</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="">
                                                        <h3>Course Details</h3>
                                                        <ul class="">
                                                            <li>
                                                                <p>Rikkard Ambrose</p>
                                                                <p>Abc Street here </p>
                                                                <p>Zipcode</p>
                                                                <p>Country</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="">
                                                        <h3>Course Details</h3>
                                                        <ul class="">
                                                            <li>
                                                                <p>Rikkard Ambrose</p>
                                                                <p>Abc Street here </p>
                                                                <p>Zipcode</p>
                                                                <p>Country</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=" my-2">
                                        <div class="container-fluid">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="">
                                                        <tr>
                                                            <th scope="col" class="text-left">Product </th>
                                                            <th scope="col">Unit Price </th>
                                                            <th scope="col">Quantity </th>
                                                            <th scope="col"> </th>
                                                            <th scope="col"> </th>
                                                            <th scope="col"> </th>
                                                            <th scope="col"> </th>
                                                            <th scope="col">Line Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="for-gray-bg">
                                                            <th scope="row"><img src="images/prdct-a.png" alt="">
                                                                <p> Product A</p>
                                                            </th>
                                                            <td>$123</td>
                                                            <td>Quantity 1 </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>$123</td>
                                                        </tr>
                                                        <tr class="for-gray-bg">
                                                            <th scope="row"><img src="images/prdct-a.png" alt="">
                                                                <p> Product A</p>
                                                            </th>
                                                            <td>$123</td>
                                                            <td>Quantity 1 </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>$123</td>
                                                        </tr>
                                                        <tr class="for-gray-bg">
                                                            <th scope="row">
                                                            </th>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td class="text-left">
                                                                <h5> Sub Total <br> Total</h5>
                                                            </td>
                                                            <td>$123 <br> $123</td>
                                                        </tr>
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
        </div>
        </section>
    </div>
</div>
</div>


@include('admin.footer')



