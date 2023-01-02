<?php

$title = " course";
$activeNav = 'course';
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
                                            <h1 class="in-heading">COURSE LOG</h1>
                                            <!-- <a href="blocked-users-v1.php" class="bluee-btn mt-2 mt-md-0">Blocked Users</a> -->
                                        </div>
                                    </div>
                                    

                                    <div class="top mt-5">

                                        <div class="row">
                                            <div class="col-12">
                                                <label for="">sort by :</label>
                                            </div>
                                        </div>
                                        <form action="{{ url('course_log') }}" method="GET">

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
                                                    <th>Course ID</th>
                                                    <th>Trainer Id </th>
                                                    <th>Creation Date </th>
                                                    <th>Title</th>
                                                    <th>Charges</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @php
                                            $id=1;
                                        @endphp
                                            <tbody>
                                                @foreach ($course as $item)
                                                    
                                                <tr>
                                                    <td>{{ $id++ }}</td>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->trainer_id }}</td>
                                                    <td>{{ date('Y-m-d',strtotime($item->created_at))}}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>${{ $item->charges }}</td>
                                                 
                                                    <td>
                                                    <select name="status" class="form-control status" id="status"  onclick="getdata({{ $item->id }})">
                                                        <option value="active" <?php if($item->status == 'active') echo 'selected'?> >active</option>
                                                        <option value="inactive" <?php if($item->status == 'inactive') echo 'selected'?> >inactive</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-drop-table btn-sm"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false"> <i
                                                                class="fa fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu" x-placement="bottom-start">
                                                            <a class="dropdown-item" href="{{ url('course_log_detail/'.$item->id ) }}"><i
                                                                    class="fa fa-eye"></i>View Details</a>
                                                            <a class="dropdown-item" href="{{ url('course_enroll_user/'.$item->id ) }}"><i
                                                                    class="fa fa-eye"></i>View Enrolled Users</a>
                                                            <a class="dropdown-item" href="{{ url('course_quiz/'.$item->id ) }}"><i
                                                                    class="fa fa-eye"></i>View Quiz</a>
                                                                    
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

@include('admin.footer')

<script>
    function getdata(id){
   $(document).ready(function(){
       // $('.status').change(function(){
       // var  id = $(this).attr('data-id');
       var status = $('.status').val(); 
       $.ajax({
           url:"{{ url('change_course_status') }}",
           data:{id:id,status:status},
           success:function(data)
           {
           var a = JSON.parse(data);
           swal({
           position: 'top-end',
           icon: 'success',
           title: a.message,
           showConfirmButton: false,
           timer: 1500
           })
           }
       // })
       })
       })
       // alert(id);
}
   </script>