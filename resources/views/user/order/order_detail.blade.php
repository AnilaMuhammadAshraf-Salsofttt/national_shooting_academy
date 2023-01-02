<?php

$title = "User Dashboard";
$activeNav = 'user-dash';
?>

@extends('user.layouts.master')
@section('content')

<section class="banner inner_banner">
    @include('user.layouts.video')

    <!-- <img src="images/banner-bg.png" class="banner_1" alt="N/A"> -->
    <img src="{{ asset('user_asset/images/banner-bg-inner-2.png')}}" class="banner_2" alt="N/A">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 col-lg-12">
                    <div class="order_logs banner">
                        <h1 class="banner_heading">
                            The Tactical<br>
                            Skills To Respond<br>
                            With Confidence
                        </h1>
                    </div>
            </div>
        </div>
    </div>
</section>




<section class="login bg-page position-relative">
    <img src="images/inner_target.png" class="target inner-target" alt="" srcset="">

    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-md-left">
                <h5 class="i_t mb-0"><a href="{{ route('order.logs') }}"><i class="fas fa-angle-left"></i></a> Order Log</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="course-inner-header d-flex align-items-center justify-content-between p-4">
                    <p class="sidebar-heading my-0">Order Details</p>
                    <p class="my-0">Status: {{ $order_log->status }}</p>
                </div>
                <div class="p-lg-5 pt-0 order-card">
                    <div class="row">
                        <div class="col-md-6 col-sm-7">
                            <div class="row">
                                <div class="col-sm-7 mt-3">
                                    <p class="black-text mt-0">First Name</p>
                                    <p class="mt-0">{{ $order_log->customer_first_name }}</p>
                                </div>
                                <div class="col-sm-5 mt-3">
                                    <p class="black-text mt-0">Last Name</p>
                                    <p class="mt-0">{{ $order_log->customer_last_name }}</p>
                                </div>
                                <div class="col-sm-7 mt-3">
                                    <p class="black-text mt-0">Phone</p>
                                    <p class="mt-0">+{{ $order_log->customer_phone }}</p>
                                </div>
                                <div class="col-sm-5 mt-3">
                                    <p class="black-text mt-0">Email</p>
                                    <p class="mt-0">{{ $order_log->customer_email }}</p>
                                </div>
                           
                                <div class="col-sm-5 mt-3">
                                    <p class="black-text mt-0">Payment Method</p>
                                    <p class="mt-0">Stripe</p>
                                </div>
                                <div class="col-sm-6 mt-lg-5 mt-3">
                                    <p class="sidebar-heading black-text mt-0">Billing Address</p>
                                    <p class="mt-3">{{ $order_log->billing_address1 }}</p>
                                    <p class="">{{ $order_log->billing_address2 }}</p>
                                    <p class="">{{ $order_log->billing_zip }}</p>
                                    <p class="">{{ $order_log->billing_country }}</p>
                                </div>
                                <div class="col-sm-6 mt-lg-5 mt-3">
                                    <p class="sidebar-heading black-text mt-0">Shipping Address</p>
                                    <p class="mt-3">{{ $order_log->shipping_address1 }}</p>
                                    <p class="">{{ $order_log->shipping_address2 }}</p>
                                    <p class="">{{ $order_log->shipping_zip }}</p>
                                    <p class="">{{ $order_log->shipping_country }}</p>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="table-responsive cart-table px-3">
                    <table class="table shopping-cart-wrap cart m-0">
                        <thead class="text-muted border-0">
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col" width="200" class="">Price</th>
                                <th scope="col" width="120">Quantity</th>
                                <th scope="col" width="200" class="">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order_log->order_payment as $order_payments)
                            @foreach ($order_payments->products as $products)
                            <tr>
                                <td class="pt-4 pb-4">
                                    <div class="img-wrap"> 
                                            <img src="{{ $products->base_image }}" class="img-fluid mr-4" alt="" style="max-width: 15%;"> 
                                            <div class="product-description">
                                                <p class="text-muted mt-0">{{ $products->name }}</p>
                                            </div>
                                    </div>
                                </td>
                                <td class=""><small class="text-muted">${{ $order_payments->unit_price }}</small></td>
                                <td class=""><small class="text-muted">{{ $order_payments->quantity }}</small></td>
                                <td class=""><small class="text-muted">${{ $order_payments->line_total }}</small></td>
                            </tr>
                            @endforeach
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="ml-auto col-xl-4 col-lg-6 col-12">
                <div class="row">
                    <div class="col-6">
                        <p class="color__black semi-bold">Sub Total</p>
                        <p class="color__black semi-bold">Total</p>
                    </div>
                    <div class="col-6">
                        <p class="color__black semi-bold">${{ $order_log->sub_total }}</p>
                        <p class="color__black semi-bold">${{ $order_log->sub_total }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection