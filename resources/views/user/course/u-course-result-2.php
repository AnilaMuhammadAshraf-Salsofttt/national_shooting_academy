<?php
    include('u-header-loggedin.php');
    $title = "Course Result";
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
                <div class="row">
                    <div class="col-lg-3 my-2 col-sm-6">
                        <p class="sidebar-heading my-0">Total Questions</p>
                    </div>
                    <div class="col-lg-3 my-2 col-sm-6">
                        <p class="sidebar-heading my-0">10 Questions</p>
                    </div>
                    <div class="col-lg-4 my-2 col-sm-6">
                        <p class="sidebar-heading my-0">Time</p>
                    </div>
                    <div class="col-lg-2 my-2 col-sm-6">
                        <p class="sidebar-heading my-0"><i class="fas fa-clock"></i> 00:10:00</p>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <div class="quiz-wrper border-0 rounded licenze">
                    <p class="failed p-3">Quiz Failed ! Thank you for attempting the quiz. </p>
                    <img src="images/quiz-img.png" alt="" class="img-fluid rounded">
                </div>
            </div>
        </div>
        <div class="row mt-3 justify-content-end">
            <a href="u-course-result.php" class="btn-cc-2 px-5">try again</a>
        </div>
    </div>
</section>


<?php include('footer.php') ?>