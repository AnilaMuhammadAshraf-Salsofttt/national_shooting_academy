<?php

$title = "category";

$activeNav = 'category';


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
                                            <h1 class="in-heading">CATEGORY MANAGEMENT </h1>
                                            <a href="{{ url('category_add') }}" class="bluee-btn mt-2 mt-md-0">ADD CATEGORY</a>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div
                                            class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
                                            <h1 class="in-heading">Category Listing</h1>
                                        </div>
                                    </div>

                                    <div class="top mt-5">

                                        <div class="row">
                                            <div class="col-12">
                                                <label for="">sort by :</label>
                                            </div>
                                        </div>
                                        <form action="{{ url('category') }}" method="GET">

                                        <div class="row">
                                            <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                                                <input type="date" placeholder="From" name="from" value="{{ Request::get('from') }}">
                                            </div>
                                            <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                                                <input type="date" placeholder="To" name="to" value="{{ Request::get('to') }}">
                                            </div>
                                            <div class="col-xl-2 col-md-4 col-12">
                                                <button type="submit" class="green-btn w-100">apply</button>
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
                                                    <th>Category Name</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php    
                                                    $id=1;
                                                @endphp
                                                @foreach ($category as $item)
                                                    
                                                <tr>
                                                    <td>{{ $id++ }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->status }}</td>
                                                    <td>
                                                        <div class="btn-group mr-1 mb-1">
                                                            <button type="button" class="btn btn-drop-table btn-sm"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"> <i
                                                                    class="fa fa-ellipsis-v"></i></button>
                                                            <div class="dropdown-menu" x-placement="bottom-start">
                                                                <a class="dropdown-item" href="{{ url('category_edit/'.$item->id) }}"><i
                                                                        class="fas fa-edit"></i>Edit</a>
                                                                <a class="dropdown-item" onclick="return confirm('Do you Want to Dlete...!')" href="{{ url('category_delete/'.$item->id) }}"><i
                                                                        class="fas fa-trash"></i>delete</a>

                                                            </div>
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
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!--customer end here-->

<!--block Modal -->
<div class="modal fade blocked-modal" id="block-modal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <a href="" class="bluee-btn mr-2" data-dismiss="modal">NO</a>
                        <a href="" class="bluee-btn" data-dismiss="modal" data-toggle="modal"
                            data-target="#confirmed">YES</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--confirmed Modal -->
<div class="modal fade blocked-modal" id="confirmed" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <img src="images/check-blu.png" alt="">

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="modal-h1">System Message</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="txt">User has been blocked</p>
                    </div>
                </div>
                <div class="row">

                </div>
            </div>

        </div>
    </div>
</div>






@include('admin.footer')
