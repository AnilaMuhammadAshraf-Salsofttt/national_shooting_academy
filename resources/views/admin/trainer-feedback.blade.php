<?php

$title = " feedback";

$activeNav = 'feedback';


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
                                    </div>
                                    <div class="row">
                                        <div
                                            class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
                                            <h1 class="in-heading">Feedback </h1>
                                            <!-- <a href="blocked-users-v1.php" class="bluee-btn mt-2 mt-md-0">Blocked Users</a> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link " id="pills-home-tab" 
                                                    href="{{ url('feedback') }}"  
                                                        aria-selected="true">User </a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="pills-profile-tab"
                                                        href="{{ url('trainer_feedback') }}" 
                                                        aria-selected="false">Trainers</a>
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
                                        <form action="{{ url('trainer_feedback') }}" method="GET">

                                        <div class="row">
                                            <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                                                <input type="date" placeholder="From" name="from" value="{{ Request::get('from') }}" >
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
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @php
                                            $id=1;
                                        @endphp
                                        @foreach ($feedback as $item)
                                            
                                        <tbody>
                                            <tr>
                                                <td>{{ $id++ }}</td>
                                                <td>{{ $item->user_id }}</td>
                                                <td>{{ $item->user->first_name }}</td>
                                                <td>{{ $item->user->email }}</td>
                                                <td>{{ date('M Y,d',strtotime($item->created_at)) }}</td>
                                                <td>
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-drop-table btn-sm"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false"> <i
                                                                class="fa fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu" x-placement="bottom-start">
                                                            <a class="dropdown-item" href="{{ url('feedback_trainer_view/'.$item->id) }}"><i
                                                                    class="fa fa-eye"></i>View</a>
                                                                    <a class="dropdown-item" onclick="return confirm('are you sure want to delete')"  
                                                                    href="{{ url('feedback_delete/'.$item->id) }}"><i
                                                                           class="fas fa-trash"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                        @endforeach
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


