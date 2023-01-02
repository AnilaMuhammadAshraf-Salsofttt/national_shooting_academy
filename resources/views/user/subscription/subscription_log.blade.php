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
                <h5 class="i_t">Subscription Logs</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row mb-5">
                    <div class="col-lg-2 col-md-3 col-12">
                        <p class="m-0 up">Package Selected</p>
                        <span class="up">Yearly</span>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <p class="m-0 up">Next Renewal Package</p>
                        <span class="up">Yearly</span>

                        {{-- <span class="up">{{ $subscription_log[0]['plan'][0]['type'] }}</span> --}}
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <label class="container-chk wot">Auto renew subscription
                        
                            @if (auth()->user()->is_recurring == '1')

                            <input type="checkbox" checked onclick="recurring('0')"  data-toggle="modal" data-target="#rec_disabled">
                                
                            @else
                            <input type="checkbox" onclick="recurring('1')"  data-toggle="modal" data-target="#rec_enabled">
                                
                            @endif


                            <span class="checkmark-chk"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="date_wrapr">
                    <span>Sort By: </span>
                    <form action="{{ route('subscription.logs') }}" method="get">
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
                                <th>Subscription Date</th>
                                <th>Package Name</th>
                                <th>Package Type</th>
                                {{-- <th>Last Renewal Date</th> --}}
                                {{-- <th>Expiry Date</th> --}}
                                <th>Charges</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $id=1;
                            @endphp
                            @foreach ($subscription_log as $subscription_logs)
                            <tr>
                                <td>{{ $id++ }}</td>
                                <td>{{ \Carbon\Carbon::parse($subscription_logs->created_at)->format('M d, Y') }}</td>
                              
                              @foreach ($subscription_logs->plan as $plans)
                                <td>{{ $plans->name }}</td>
                                <td>{{ $plans->type }}</td>
                                <td>${{ $plans->amount }}</td>
                              @endforeach
                                
                            @php

                            $status =  $subscription_logs->status;
                            $array = ['0'=>'deactive','1'=>'active']; 

                            @endphp

                             <td>{{ $array[$status] }}</td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="rec_enabled" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content national_modal_generic">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body nmg">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="images/check.png" alt="">
                        <h4 class="modal_h4">Confirmation Message</h4>
                        <p class="modal_p">Recurring Payment has been
                            Enabled!</p>
                        <a href="#" data-dismiss="modal" class="modal__btn">Got it</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="rec_disabled" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content national_modal_generic">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body nmg">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="images/check.png" alt="">
                        <h4 class="modal_h4">Confirmation Message</h4>
                        <p class="modal_p">Recurring Payment has been
                            Disabled</p>
                        <a href="#" data-dismiss="modal" class="modal__btn">Got it</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('js')

<script>


    function recurring(is_recurring)
    {
       $.ajax({
           method:"post",
           url:"{{ route('subscription.recurring') }}",
           data:{is_recurring:is_recurring,_token:"{{ @csrf_token() }}"},
           success:function(data)
           {
                setInterval(function() {
                reload_data()
                }, 1500);

           }
       })


    }

   function reload_data()
   {
       window.location.reload();
   }

   

</script>


@endsection