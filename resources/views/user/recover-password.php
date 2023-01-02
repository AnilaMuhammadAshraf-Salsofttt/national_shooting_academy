<?php
include('header.php');
$title = "Recover Password";
$activeNav = 'recover-pass';
?>

<?php include('banner.php') ?>



<section class="login bg-page position-relative">
    <img src="images/inner_target.png" class="target inner-target" alt="" srcset="">
    <img src="images/membership-man.png" class="member-ship-man inner" alt="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="form__wrapper recover_pass_card">
                    <div class="row mb-4">
                        <div class="col-12">
                            <p class="auth__heading">Password Recovery</p>
                        </div>
                    </div>
                    <form action="recover-password-2.php">
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="login_email" class="active">email:</label>
                                    <input type="email" class="form-control" id="login_email" placeholder="Enter Email Address">
                                    <i class="fa fa-envelope active" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-row mt-4">
                            <div class="col-12">
                                <button type="submit" class="login__button">Conitnue</button>
                            </div>
                        </div>

                        <div class="form-row mt-4 mb-4">
                            <div class="col-12 text-center">
                                <a href="login.php" class="back"><i class="fas fa-arrow-left"></i> Back to login</a>

                            </div>
                        </div>




                    </form>
                </div>
            </div>
        </div>

    </div>


</section>















<?php include('footer.php') ?>