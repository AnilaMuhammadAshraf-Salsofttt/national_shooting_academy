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
                <p class="green">Cleared</p>
                <h5 class="lic-1attmp">Category A</h5>
                <h5 class="lic-1attmp">No of Attempts Allowed: 03</h5>
                <h5 class="lic-1attmp">No of Attempts Availed: 02</h5>
                <h5 class="lic-1attmp">No of Attempts Remaining: 01</h5>
                <h5 class="lic-1attmp">License Fee $123</h5>
                <p class="lic-1desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    enim ad minim veniam, quis nostrud exercitation</p>
                <a href="#" class="btn-blue disabled">Apply</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h6 class="bb-1">Description</h6>
                <p class="lic-1desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    enim ad minim veniam, quis nostrud exercitation</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h6 class="bb-1">License Details</h6>
            </div>
        </div>
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-md-2 text-center text-md-left">
                <span class="lic-b">Label</span>
                <span class="lic-blu">Abc</span>
            </div>
            <div class="col-md-2 text-center text-md-left">
                <span class="lic-b">Label</span>
                <span class="lic-blu">Abc</span>
            </div>
        </div>
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-md-2 text-center text-md-left">
                <span class="lic-b">Label</span>
                <span class="lic-blu">Abc</span>
            </div>
            <div class="col-md-2 text-center text-md-left">
                <span class="lic-b">Label</span>
                <span class="lic-blu">Abc</span>
            </div>
        </div>
    </div>
</section>


<?php include('footer.php') ?>