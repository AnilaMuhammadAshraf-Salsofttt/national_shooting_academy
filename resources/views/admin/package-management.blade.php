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
                                    <div class="col-md-12">
                                        @if(Session::has('message'))
                                               <div class="alert alert-success">
                                                   <strong>{{ Session::get('message')  }}</strong>
                                               </div>
                                           @endif
                                           @if(Session::has('error'))
                                               <div class="alert alert-danger">
                                                 <strong>{{ Session::get('error')  }}</strong>
                                               </div>
                                           @endif
                                   </div>
                                    <div class="row">
                                        <div
                                            class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
                                            <h1 class="in-heading"> Package Management </h1>
                                            <a href="{{ url('edit_package/'.$plan->id) }}" class="bluee-btn mt-2 mt-md-0">Edit </a>
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
                                    <div class="for-gray-bg">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <ul class="user-pro">
                                                    <li>
                                                        <h5>Package Name</h5>
                                                        <p>{{ $plan->name }} </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="user-pro">
                                                    <li>
                                                        <h5>Charges </h5>
                                                        <p>${{ $plan->amount }} </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4"></div>

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
