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
            <div class="col-12">
                <a href="u-courseListing.php"><h5 class="i_t mb-0"><i class="fas fa-angle-left"></i> Course A</h5></a> 
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
                <p class="sidebar-heading my-0">Quiz Details</p>
            </div>
            <div class="p-4">
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-sm-4 mt-3">
                        <p class="black-text mt-0">Total Questions</p>
                        <p class="mt-0">10 Questions</p>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4 mt-3">
                        <p class="black-text mt-0">Time</p>
                        <p class="mt-0">00:10:00</p>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4 mt-3">
                        <p class="black-text mt-0">Attempt</p>
                        <p class="mt-0">01/03</p>
                    </div>
                    <div class="col-12 mt-4">
                        <a href="u-course-quiz-2.php" class="btn-cc-1">Start</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('footer.php') ?>