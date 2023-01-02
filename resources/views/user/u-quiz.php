<?php
include('u-header-loggedin.php');
$title = "License Categories";
$activeNav = 'user-dash';
?>

<?php include('banner.php') ?>



<section class="login bg-page position-relative">
    <img src="images/inner_target.png" class="target inner-target" alt="" srcset="">

    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <a href="u-licenseCategories.php" class="pi-backLink"><i class="fas fa-angle-left mr-1"></i> Category A</a>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="images/laycaanse.png" class="licesnce-ban" alt="">
            </div>
            <div class="col-lg-6">
                <h5 class="qz-b">$30</h5>
                <h6 class="qz-b">Attempt 01</h6>
                <h6 class="qz-b">Quiz</h6>
                <div class="qz-card">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Total Questions:</p>
                        </div>
                        <div class="col-md-6">
                            <i class="fas fa-question-circle"></i>
                            <span class="jxhg">10 Questions</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Time:</p>
                        </div>
                        <div class="col-md-6">
                            <i class="far fa-clock"></i>
                            <span class="jxhg">00:10:00</span>
                        </div>
                    </div>
                </div>
                <a href="u-quiz-1.php" class="btn-blue tx-bold">Start</a>
            </div>
        </div>

    </div>
</section>


<?php include('footer.php') ?>