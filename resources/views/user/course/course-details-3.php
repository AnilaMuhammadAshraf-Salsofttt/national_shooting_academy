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
                    <div class="card-header ">
                        <p>
                            Lecture Details
                        </p>

                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <label for="" class="cc">Lecture No</label>
                                <p class="p-course-details">01</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <label for="" class="cc">Lecture Title</label>
                                <p class="p-course-details">Abc Lecture</p>

                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <label for="" class="cc">Lecture Duration</label>
                                <p class="p-course-details">30 Mins</p>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-12">
                                <div class="lec_d_wrap">
                                    <img src="images/category-banner.png" alt="">
                                    <a href="" class="redPlay"><img src="images/redPlay.png" alt=""></a>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-12 d-flex align-items-center justify-content-between flex-md-row flex-column">
                                <a href="#" class="btn-cc-1">Previous</a>
                                <a href="#" class="btn-cc-3">Next</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>




        </div>
    </div>
</section>


<?php include('footer.php') ?>