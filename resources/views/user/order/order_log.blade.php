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
        <div class="row mb-5">
            <div class="col-12 d-flex justify-content-between align-order_logss-center flex-column flex-md-row ">
                <h5 class="i_t mb-0">Order Logs</h5>
                {{-- <a href="create-course.php" class="create_btn">Create New</a> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="date_wrapr">
                    <span>Sort By: </span>
                    <form action="{{ route('order.logs') }}" method="get">
                        <div class="row">

                    <div class="b">
                        <p>From</p>
                        <input type="date" class="form-control"  name="from" value="{{ Request::get('from') }}">
                    </div>
                    <div class="b">
                        <p>To</p>
                        <input type="date" class="form-control"  name="to" value="{{ Request::get('to') }}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Apply Filter</button>
                </div>

                </form>
                </div>
            </div>
            <div class="col-12 p-0">

                <div class="maain-tabble table-responsive">
                    <table class="table zero-configuration pay_logs">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Order Id</th>
                                <th>Order date</th>
                                <th>Quantity</th>
                                <th>Amount Paid</th>
                                <th>Order Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order_log as  $key => $order_logs)

                            <tr>
                                <td>{{ $key++ }}</td>
                                <td>{{ $order_logs->id }}</td>
                                <td>{{ date('M d,Y',strtotime($order_logs->created_at)) }}</td>
                                <td>{{ $order_logs->order_payment->count() }}</td>
                                <td>${{ $order_logs->sub_total }}</td>
                                <td>{{ $order_logs->status }}</td>
                                
                                <td>
                                    <button type="button" class="btn  btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu table_menu">
                                         <a class="dropdown-item" href="{{ route('order.detail',$order_logs->id) }}"><i class="fa fa-eye"></i>View Details </a>
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
</section>


@endsection