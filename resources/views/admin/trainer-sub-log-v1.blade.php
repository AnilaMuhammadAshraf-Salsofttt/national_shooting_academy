<?php

$title = " Trainer Listing";
$activeNav = 'trainer-listing';
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
                                            <h1 class="in-heading">SUBSCRIPTION LOG</h1>
                                            <!-- <a href="blocked-users-v1.php" class="bluee-btn mt-2 mt-md-0">Blocked Users</a> -->
                                        </div>
                                    </div>
                                 

                                    <div class="top mt-5">

                                        <div class="row">
                                            <div class="col-12">
                                                <label for="">sort by :</label>
                                            </div>
                                        </div>
                                        <form action="{{ url('user_sub_logs/'.Request::segment(2)) }}" method="GET">

                                            <div class="row">
                                                <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                                                    <input type="date" placeholder="From" name="from">
                                                </div>
                                                <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                                                    <input type="date" placeholder="To" name="to">
                                                </div>
                                                <div class="col-xl-2 col-md-4 col-12">
                                                    <button type="submit" class="green-btn w-100">apply/clear</button>
                                                </div>
                                                <div class="col-lg-6 col-12 text-right">
                                                    
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="maain-tabble table-responsive">
                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>s.no</th>
                                                    <th>Subscription Date</th>
                                                    <th>Package Type</th>
                                                    <th>Last Renewal Date</th>
                                                    <th>Expiry Date</th>
                                                    <th>Charges</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>

                                            @php
                                                $id=1;
                                            @endphp
                                            <tbody>
                                                @foreach ($UserPlan as $item)
                                                    
                                                <tr>
                                                    <td>{{ $id++ }}</td>
                                                    <td>{{ date('Y-m-d',strtotime($item->created_at)) }}</td>
                                                    <td>@foreach ($item->plan as $items)
                                                    {{ $items->name }}
                                                    @endforeach</td>
                                                    <td>{{ date('Y-m-d',strtotime($item->created_at)) }}</td>
                                                    <td>{{ date('Y-m-d',strtotime($item->created_at)) }}</td>
                                                    <td>@foreach ($item->plan as $items)
                                                        {{ $items->amount }}
                                                        @endforeach</td>
                                                    @if ($item->status == '1')
                                                    <td>Active</td>
                                                    @else
                                                    <td>Deactive</td>
                                                        
                                                    @endif
                                                                                              
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
            </section>
        </div>
    </div>
</div>

<!--customer end here-->


@include('admin.footer')

