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
                                        <div class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
                                            <h1 class="in-heading">Users Listing </h1>
                                            <a href="{{ url('block_user') }}" class="bluee-btn mt-2 mt-md-0">Blocked Users</a>

                                        </div>
                                    </div>

                                    <div class="top mt-5">

                                        <div class="row">
                                            <div class="col-12">
                                                <label for="">sort by :</label>
                                            </div>
                                        </div>
                                        <form action="{{ url('users') }}" method="GET">

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
                                    <div class="clearfix"></div>
                                    <div class="maain-tabble table-responsive">
                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>s.no</th>
                                                    <th>User Id</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Registration Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @php
                                                $id=1;
                                            @endphp
                                            <tbody>
                                                @foreach ($user as $item)
                                                <tr>
                                                    <td>{{ $id++ }}</td>
                                                    <td>{{ $item->id}}</td>
                                                    <td>{{ $item->first_name}}</td>
                                                    <td>{{ $item->last_name}}</td>
                                                    <td>{{ date('Y-m-d',strtotime($item->created_at))}}</td>
                                                    <td>
                                                        <div class="btn-group mr-1 mb-1">
                                                            <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                            <div class="dropdown-menu" x-placement="bottom-start">
                                                                <a class="dropdown-item" href="{{ url('user_profile/'.$item->id) }}"><i class="fa fa-eye"></i>View</a>
                                                                <a class="dropdown-item" href="{{ url('user_edit_profile/'.$item->id) }}"><i class="fas fa-edit"></i>Edit</a>
                                                                <a class="dropdown-item block_user" href="#" data-toggle="modal" data-target="#block-modal-{{$item->id}}"  data-id="{{ $item->id }}" > 
                                                                    <i class="fa fa-ban"></i>Block</a>
                                                                {{-- <a class="dropdown-item" href="user-order-log.php"><i class="fas fa-shopping-cart"></i>Order log</a> --}}
                                                                <a class="dropdown-item" href="{{ url('user_sub_logs/'.$item->id) }}"><i class="fas fa-envelope"></i>SUBSCRIPTION log</a>
                                                                <a class="dropdown-item" href="{{ url('course/'.$item->id) }}"><i class="fas fa-clipboard-list"></i>course log</a>
                                                                <a class="dropdown-item" href="{{ url('user_pay_logs/'.$item->id) }}"><i class="fas fa-money-bill"></i>pay log</a>
                                                            </div>
                                                        </div>
                                                    </td>


                                                </tr>
                                                
                                                <div class="modal fade blocked-modal" id="block-modal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-12 text-center">
                                                                        <img src="images/qut.png" alt="">
                                                
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 text-center">
                                                                        <h1 class="modal-h1">Block User</h1>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 text-center">
                                                                        <p class="txt">Are you sure you want to <br> block the user?</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 d-flex justify-content-center align-items-center">
                                                                        <!-- <a href="" class="orange-btn mr-2" data-dismiss="modal" data-toggle="modal" data-target="#confirmed">Yes</a> -->
                                                                        <a href="" class="bluee-btn mr-2" data-dismiss="modal" >NO</a>
                                                                        <a href="" data-ids="{{ $item->id }}" class="bluee-btn get_id" data-dismiss="modal" data-toggle="modal" data-target="#confirmed">YES</a>
                                                                  
                                                                    </div>
                                                                </div>
                                                            </div>
                                                
                                                        </div>
                                                    </div>
                                                </div>
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

<!--block Modal -->
<div class="confirm_box">

    
</div>



@include('admin.footer')


<script>
$(document).ready(function(){
    $('.block_user').click(function(){

    id = $(this).attr('data-id');
    status = 'block';

    $.ajax({
        url:"{{ url('chnage_status_block') }}",
        data:{id:id,status:status},
        success:function(data)
        {
        $('.confirm_box').html(data);
        }
    })
    })
    })
</script>