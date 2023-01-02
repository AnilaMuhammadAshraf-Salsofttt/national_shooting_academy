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
            <div class="course-inner-header p-4 d-flex justify-content-between">
                <p class="sidebar-heading my-0">Trainer's Details</p>
                <p class="sidebar-heading my-0">Status: Inprogress</p>
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
                <p class="sidebar-heading my-0">Lecture Details</p>
            </div>
            <div class="p-4">
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-sm-4 mt-3">
                        <p class="black-text mt-0">Lecture No</p>
                        <p class="mt-0">01</p>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4 mt-3">
                        <p class="black-text mt-0">Lecture Title</p>
                        <p class="mt-0">Abc Lecture</p>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4 mt-3">
                        <p class="black-text mt-0">Lecture Duration</p>
                        <p class="mt-0">30 mins</p>
                    </div>
                    <div class="col-12 mt-4">
                        <a href="#_"><img src="images/course-video.png" alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="row justify-content-between mt-3">
                    <div class="col-lg-6 col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="#_" class="btn-cc-1 w-100 text-center">Previous</a>
                            </div>
                            <div class="col-md-6">
                                <a href="#_" class="btn-cc-2 w-100 text-center">Mark Complete</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xl-3">
                        <a href="u-booked-courseDetails-4.php" class="btn-cc-1 w-100 text-center">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('footer.php') ?>