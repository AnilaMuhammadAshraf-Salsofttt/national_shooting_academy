<?php

$title = " subscription";

$activeNav = 'subscription';


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
                                            <h1 class="in-heading">Subscription Log  </h1>
                                            <!-- <a href="blocked-users-v1.php" class="bluee-btn mt-2 mt-md-0">Blocked Users</a> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link " id="pills-profile-tab"  href="{{ url('subscription_logs_user') }}">User </a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="pills-profile-tab"  href="{{ url('subscription_logs_trainer') }}" >Trainers</a>
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
                                        <form action="{{ url('subscription_logs_trainer') }}" method="GET">

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

                                  
                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>s.no</th>
                                                    <th>User Id</th>
                                                    <th>Full Name</th>
                                                    <th>last Name</th>
                                                    <th>Subscription Date</th>
                                                    <th>Package Type</th>
                                                    {{-- <th>Last Renewal Date</th> --}}
                                                    <th>Expiry Date</th>
                                                    <th>Charges</th>
                                                    <th>Status </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $id=1;
                                                @endphp
                                            @foreach ($UserPlan as $item)
                                                    
                                            <tr>
                                                <td>{{ $id++ }}</td>
                                                <td>{{ $item->user->id }}</td>
                                                <td>{{ $item->user->first_name }}</td>
                                                <td>{{ $item->user->last_name }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                @foreach ($item->plan as $items)
                                                <td>{{ $items->type }}</td>
                                                <td>{{ $items->created_at }}</td>

                                                <td>{{ $items->amount }}</td>
                                                <td>{{ $items->status }}</td>
                                                @endforeach
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
