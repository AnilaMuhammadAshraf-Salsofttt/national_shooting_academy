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
            <div class="col-12">
                <a href="create-course.php" class="h-link"><i class="fas fa-angle-left"></i>
                    <h5 class="i_t mb-0">Courses</h5>
                </a>
            </div>
        </div>


        <div class="row">
            <div class="col-12">

                <div class="card create_course c-dets">
                    <div class="card-header">
                        <p>
                            Course Details
                        </p>
                    </div>
                    <div class="card-body">

                        <form action="">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Course Name</label>
                                    <input type="text" class="cc" placeholder="Course Name">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Charges</label>
                                    <input type="number" class="cc" placeholder="Charges">

                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Status*</label>
                                    <select name="" id="status" class="cc">
                                        <option value="" disabled selected>Select</option>
                                        <option value="">Active</option>
                                        <option value="">InActive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-12">
                                    <label for="" class="cc">Course Description</label>
                                    <textarea name="" id="" cols="30" rows="10" class="cc"></textarea>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-12">
                                    <h6 class="edit_c_head">
                                        Features of course
                                    </h6>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-xl-2 col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Label</label>
                                    <input type="text" class="cc" placeholder="Abc">
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Label</label>
                                    <input type="text" class="cc" placeholder="Abc">
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Label</label>
                                    <input type="text" class="cc" placeholder="Abc">
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Label</label>
                                    <input type="text" class="cc" placeholder="Abc">
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Label</label>
                                    <input type="text" class="cc" placeholder="Abc">
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Label</label>
                                    <input type="text" class="cc" placeholder="Abc">
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Label</label>
                                    <input type="text" class="cc" placeholder="Abc">
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Label</label>
                                    <input type="text" class="cc" placeholder="Abc">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <a href="#" class="btn-cc-1">Update</a>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>




        </div>
    </div>
</section>


<?php include('footer.php') ?>