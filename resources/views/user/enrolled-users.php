<?php
include('header-loggedin.php');
$title = "User Dashboard";
$activeNav = 'user-dash';
?>

<?php include('banner.php') ?>



<section class="login bg-page position-relative">
    <img src="images/inner_target.png" class="target inner-target" alt="" srcset="">

    <div class="container">
        <div class="row mb-5">
            <div class="col-12 mb-5">
                <a href="create-course.php" class="h-link"><i class="fas fa-angle-left"></i>
                    <h5 class="i_t mb-0">Courses</h5>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-12 ">
                <label for="" class="en-labl">Course Name</label>
                <p class="en-p">Course A</p>
            </div>
            <div class="col-lg-4 col-md-4 col-12 ">
                <label for="" class="en-labl">Course Id</label>
                <p class="en-p">001</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12  ">
                <h5 class="i_t mb-0">Enrolled Users</h5>
            </div>
        </div>
        <div class="row">

            <div class="col-12 p-0">

                <div class="maain-tabble table-responsive">
                    <table class="table zero-configuration pay_logs">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>User Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>enrollment date</th>
                                <th>charges</th>
                                <th>status</th>
                                <th>attempts</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>001</td>
                                <td>abc</td>
                                <td>abc</td>
                                <td>May 2, 2020</td>
                                <td>$123</td>
                                <td>Pending</td>
                                <td>
                                    1
                                </td>
                                <td>
                                    <button type="button" class="btn  btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu table_menu">
                                        <a class="dropdown-item" href="enrolled-user-details.php"><i class="fas fa-eye"></i>View Details </a>
                                    </div>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>


<?php include('footer.php') ?>