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
                    <form action="recover-password-3.php">
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="login_password" class="active">new password*</label>
                                    <input type="password" class="form-control" id="login_password" placeholder="Enter Password">
                                    <i class="fa fa-lock active" aria-hidden="true"></i>
                                    <button class="see_password"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="login_password" class="active">reType password*</label>
                                    <input type="password" class="form-control" id="login_password" placeholder="Enter Password">
                                    <i class="fa fa-lock active" aria-hidden="true"></i>
                                    <button class="see_password"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>


                        <div class="form-row mt-4">
                            <div class="col-12">
                                <button type="submit" class="login__button">Update</button>
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