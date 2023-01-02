<?php

$title = " payments";

$activeNav = 'payments';


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
                                            <h1 class="in-heading">Payment Log </h1>
                                            <!-- <a href="blocked-users-v1.php" class="bluee-btn mt-2 mt-md-0">Blocked Users</a> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="pills-home-tab" 
                                                        href="{{ url('payment_logs') }}" 
                                                        aria-selected="true">Order Pay Log</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="pills-profile-tab" 
                                                        href="{{ url('payment_logs_course') }}"
                                                        aria-selected="false"> Course Pay Log</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="top mt-5">

                                        <div class="row">
                                            <div class="col-12">
                                                <label for="">sort by :</label>
                                            </div>
                                        </div>
                                      
                                        <form action="{{ url('payment_logs') }}" method="GET">

                                            <div class="row">
                                                <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                                                    <input type="date" placeholder="From" name="from" value="{{ Request::get('from') }}">
                                                </div>
                                                <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                                                    <input type="date" placeholder="To" name="to" value="{{ Request::get('to') }}">
                                                </div>
                                                <div class="col-xl-2 col-md-4 col-12">
                                                    <button type="submit" class="green-btn w-100">apply/clear</button>
                                                </div>
                                                <div class="col-lg-6 col-12 text-right">
    
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                            aria-labelledby="pills-home-tab">
                                            <div class="clearfix"></div>
                                            <div class="maain-tabble table-responsive">
                                                <table class="table table-striped table-bordered zero-configuration">
                                                    <thead>
                                                        <tr>
                                                            <th>s.no</th>
                                                            <th>User Id</th>
                                                            <th>Order ID</th>
                                                            <th>Order Date</th>
                                                            <th>Quantity</th>
                                                            <th>Amount paid</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    @php
                                                        $id=1;
                                                      
                                                    @endphp
                                                        
                                                    <tbody>
                                                    @foreach ($payment as $item)

                                                        <tr>
                                                            <td>{{ $id++ }}</td>
                                                            @if ($item->user == '')
                                                            <td>Gues checout</td>

                                                                @else
                                                                <td>{{ $item->user->first_name." ".$item->user->last_name }}</td>

                                                            @endif
                                                            <td>{{ $item->id }}</td>
                                                            <td>{{ date('M d,Y',strtotime($item->created_at)) }}</td>
                                                            <td>{{ $item->order_payment->count() }}</td>
                                                            <td>${{ $item->sub_total }}</td>
                                                            <td>{{ $item->status }}</td>
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
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!--customer end here-->



@include('admin.footer')
