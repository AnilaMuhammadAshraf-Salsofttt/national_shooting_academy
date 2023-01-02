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
                <div class="row">
                    <div class="offset-lg-3 col-lg-3 col-6">
                        <p class="sidebar-heading green-text my-0"><i class="fas fa-clock"></i> 00:10:00</p>
                    </div>
                    <div class="offset-lg-4 col-lg-2 col-6">
                        <p class="sidebar-heading black-text my-0">Question: 1/10</p>
                    </div>
                    <div class="col-xl-10 col-12">
                        <p class="p-sm black-text">Question 1</p>
                        <p class="p-sm black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo?</p>
                        <form action="" class="quiz user-quiz mt-3">
                            <div class="row">
                                <div class="col-12">
                                    <label class="container-quiz">Option A
                                        <input type="radio" checked="checked" name="radio">
                                        <span class="checkmark-quiz"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label class="container-quiz">Option B
                                        <input type="radio" name="radio">
                                        <span class="checkmark-quiz"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label class="container-quiz">Option C
                                        <input type="radio" name="radio">
                                        <span class="checkmark-quiz"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label class="container-quiz">Option D
                                        <input type="radio" name="radio">
                                        <span class="checkmark-quiz"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 quiz-f">
                                    <a href="u-course-quiz-2.php" class="btn-cc-2">Previous</a>
                                    <a href="u-course-quiz-3.php" class="btn-cc-1">Next</a>
                                    <a href="#_" class="btn-cc-2">Skip</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3 justify-content-end">
            <a href="u-course-result.php" class="btn-cc-1">complete</a>
        </div>
    </div>
</section>


<?php include('footer.php') ?>