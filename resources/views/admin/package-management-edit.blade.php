<?php

$title = " package-management";

$activeNav = 'package-management';


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
                                            <h1 class="in-heading"> Package Management </h1>
                                            <!-- <a href="package-management-edit.php" class="bluee-btn mt-2 mt-md-0">Edit
                                            </a> -->
                                        </div>
                                    </div>
                                    <div class="top mt-5">
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="info-bg">
                                                <h3>Package </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ url('update_package') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" value="{{ $plan->id }}" name="id">
                                    <div class="for-gray-bg">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <ul class="user-pro">
                                                    <li>
                                                        <h5>Package Name</h5>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="Yearly Package " name="name" value="{{ $plan->name }}">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="user-pro">
                                                    <li>
                                                        <h5>Charges </h5>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="$123 " name="amount" value="{{ $plan->amount }}">
                                                    </li>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4"></div>
                                        </div>
                                    </div>
                                    <div class="py-2">
                                        <button type="submit" href="package-management.php" class="bluee-btn mt-2 mt-md-0">Update 
                                        </button>
                                    </div>
                                </form>


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

