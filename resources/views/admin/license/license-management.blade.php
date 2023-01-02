<?php

$title = " license-management";

$activeNav = 'license';


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
                                            <h1 class="in-heading">License Management  </h1>
                                            <a href="{{ url('license_add') }}" class="bluee-btn mt-2 mt-md-0">Add New </a>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div
                                            class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
                                            <h1 class="in-heading">License Listing </h1>
                                        </div>
                                    </div>

                                    <div class="top mt-5">

                                        <div class="row">
                                            <div class="col-12">
                                                <label for="">sort by :</label>
                                            </div>
                                        </div>
                                        <form action="{{ url('license') }}" method="GET">

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
                                                    <th>License Category</th>
                                                    <th>License Status</th>
                                                    <th>Allowed Attempts</th>
                                                    <th>Fee</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $id=1;
                                                @endphp
                                                @foreach ($license as $item)
                                                    
                                                <tr>
                                                    <td>{{ $id++ }}</td>
                                                      {{-- @foreach ($item->category as $items) --}}
                                                    <td>{{  $item->category->name }}</td>
                                                          
                                                      {{-- @endforeach --}}
                                                    <td>
                                                        <select name="status" id="status" class="form-control" onclick="change_status({{ $item->id }})">
                                                            <option value="active" @if ($item->status == 'active') Selected
                                                                
                                                            @endif>Active</option>
                                                            <option value="inactive" @if ($item->status == 'inactive') Selected
                                                                
                                                                @endif>Inactive</option>
                                                        </select>
                                                    </td>
                                                    <td>{{ $item->attempts }}</td>
                                                    <td>${{ $item->fee }}</td>
                                                    <td>
                                                        <div class="btn-group mr-1 mb-1">
                                                            <button type="button" class="btn btn-drop-table btn-sm"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"> <i
                                                                    class="fa fa-ellipsis-v"></i></button>
                                                            <div class="dropdown-menu" x-placement="bottom-start">
                                                                <a class="dropdown-item" href="{{ url('license_view/'.$item->id) }}"><i
                                                                        class="fa fa-eye"></i>View</a>
                                                                <a class="dropdown-item" href="{{ url('license_edit/'.$item->id) }}"><i
                                                                        class="fas fa-edit"></i>Edit</a>

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


@include('admin.footer')
<script>
    function change_status(id){

    $(document).ready(function(){
       var status =  $('#status').val();

        $.ajax({
            url:"{{ url('change_status') }}",
            method:"post",
            data:{status:status,id:id,_token: "{{ csrf_token() }}"},
            success:function(data)
            {
                setInterval(function() {
                    reload_data()
                    }, 1000);
            }
        })
    })

    }

    function reload_data(){
        window.location.reload(true);
    }
</script>