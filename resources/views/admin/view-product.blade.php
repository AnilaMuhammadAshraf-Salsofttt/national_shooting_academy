<?php

$title = " inventory-management";

$activeNav = 'inventory-management';


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
                                        <div class="col-12 d-flex ">
                                            <a href="#"> <i class="fas fa-angle-left pr-2"></i></a>
                                            <h1 class="in-heading">Inventory Management </h1>
                                            <!-- <a href="blocked-users-v1.php" class="bluee-btn mt-2 mt-md-0">Blocked Users</a> -->
                                        </div>
                                    </div>

                                    <div class="top mt-5">
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="info-bg">
                                                <h3>View Product </h3>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- @php
                                        dd($product);
                                    @endphp --}}
                                    <div class="for-gray-bg">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h1 class="black-heding text-center mb-0">Product {{ $product->name }} </h1>
                                                    {{-- <h6 class="black-heding text-center">Category {{ $product->category->name }}</h6> --}}
                                                    <div class="slider-for">
                                                            
                                                        <div>
                                                            <img src="{{ $product->base_image }}"
                                                                class="img-fluid prodct-pic" alt="">
                                                        </div>
                                                     
                                                    </div>
                                                    <div class="slider-nav">
                                                            @foreach ($image as $item)
                                                                
                                                        <div>
                                                            <img src="{{ $item->image }}"

                                                                class="img-fluid prodct-pic1" alt="">
                                                        </div>
                                                        @endforeach
                                                      
                                                   
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <a class="nav-link active" id="pills-home-tab"
                                                                data-toggle="pill" href="#pills-home" role="tab"
                                                                aria-controls="pills-home"
                                                                aria-selected="true">Description </a>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <a class="nav-link" id="pills-profile-tab"
                                                                data-toggle="pill" href="#pills-profile" role="tab"
                                                                aria-controls="pills-profile"
                                                                aria-selected="false">Specifications</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content" id="pills-tabContent">
                                                        <div class="tab-pane fade show active" id="pills-home"
                                                            role="tabpanel" aria-labelledby="pills-home-tab">{{ $product->description }}<br> <br>
</div>
                                                        {{-- <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                                            aria-labelledby="pills-profile-tab">Lorem ipsum
                                                            dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore
                                                            magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                            exercitation <br> <br>

                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                            do eiusmod tempor incididunt ut labore et dolore magna
                                                            aliqua.
                                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                                            irure dolor in reprehenderit in voluptate velit esse</div> --}}
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
