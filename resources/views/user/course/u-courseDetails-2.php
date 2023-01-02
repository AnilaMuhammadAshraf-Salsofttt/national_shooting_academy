<?php
include('u-header-loggedin.php');
$title = "Course Details";
$activeNav = 'user-dash';
?>

<?php include('banner.php') ?>



<section class="login bg-page position-relative text-center text-sm-left">
    <img src="images/inner_target.png" class="target inner-target" alt="" srcset="">

    <div class="container">
        <div class="row mb-5">
            <div class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
                <a href="u-courseListing.php"><h5 class="i_t mb-0"><i class="fas fa-angle-left"></i> Courses</h5></a> 
            </div>
        </div>
        <div class="course-inner">
            <div class="course-inner-header p-4">
                <p class="sidebar-heading my-0">Trainer's Details</p>
            </div>
            <div class="p-4">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <img src="images/trainer-icon.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <p class="black-text">Trainer Name</p>
                        <p class="mt-0">Abc</p>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <p class="black-text">Trainer Email</p>
                        <p class="mt-0">abc@xyz.com</p>
                    </div>
                </div>
            </div>
            <div class="course-inner-header p-4">
                <p class="sidebar-heading my-0">Course Details</p>
            </div>
            <div class="p-4">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-7">
                        <div class="row">
                            <div class="col-7">
                                <p class="black-text mt-0">Course Name</p>
                                <p class="mt-0">Course A</p>
                            </div>
                            <div class="col-5">
                                <p class="black-text mt-0">Charges</p>
                                <p class="mt-0">$123</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 mt-3 mt-sm-0 col-sm-5">
                        <a href="#_" class="btn-cc-2">Book</a>
                    </div>
                    <div class="col-12 mt-4">
                        <h6 class="medium">Course Overview <span class="blue-text"> Syllabus</span></h6>
                        <div class="course-details-inner mt-4">
                            <div class="row justify-content-center">
                                <div class="col-lg-5 col-sm-4 mb-2 mb-sm-0">
                                    <p class="my-0">Lecture 01</p>
                                </div>
                                <div class="col-lg-5 col-sm-4 mb-2 mb-sm-0">
                                    <p class="my-0">Lecture Title</p>
                                </div>
                                <div class="col-lg-2 col-sm-4">
                                    <p class="my-0">30 Mins</p>
                                </div>
                            </div>
                        </div>
                        <div class="course-details-inner">
                            <div class="row justify-content-center">
                                <div class="col-lg-5 col-sm-4 mb-2 mb-sm-0">
                                    <p class="my-0">Lecture 01</p>
                                </div>
                                <div class="col-lg-5 col-sm-4 mb-2 mb-sm-0">
                                    <p class="my-0">Lecture Title</p>
                                </div>
                                <div class="col-lg-2 col-sm-4">
                                    <p class="my-0">30 Mins</p>
                                </div>
                            </div>
                        </div>
                        <div class="course-details-inner">
                            <div class="row justify-content-center">
                                <div class="col-lg-5 col-sm-4 mb-2 mb-sm-0">
                                    <p class="my-0">Lecture 01</p>
                                </div>
                                <div class="col-lg-5 col-sm-4 mb-2 mb-sm-0">
                                    <p class="my-0">Lecture Title</p>
                                </div>
                                <div class="col-lg-2 col-sm-4">
                                    <p class="my-0">30 Mins</p>
                                </div>
                            </div>
                        </div>
                        <div class="course-details-inner">
                            <div class="row justify-content-center">
                                <div class="col-lg-5 col-sm-4 mb-2 mb-sm-0">
                                    <p class="my-0">Quiz</p>
                                </div>
                                <div class="col-lg-5 col-sm-4 mb-2 mb-sm-0">
                                    <p class="my-0">Quiz Title</p>
                                </div>
                                <div class="col-lg-2 col-sm-4">
                                    <p class="my-0">10 Questions</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('footer.php') ?>