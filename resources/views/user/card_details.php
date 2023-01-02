<?php
include('header.php');
$title = "Login";
$activeNav = 'Login';
?>

<?php include('banner.php') ?>



<section class="login bg-page position-relative">
    <img src="images/inner_target.png" class="target inner-target" alt="" srcset="">
    <img src="images/membership-man.png" class="member-ship-man inner" alt="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="form__wrapper sub_form">
                    <div class="reg-header text-left">
                        <h4>card details</h4>
                    </div>

                    <form action="">

                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="cardholderName" class="active">Cardholder name*</label>
                                    <input type="text" class="form-control" id="cardholderName" placeholder="Enter cardholder name">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="cardNumber" class="active">card number*</label>
                                    <input type="number" class="form-control" id="cardNumber" placeholder="Enter card number">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="cvv" class="active">CVV Code*</label>
                                    <input type="number" class="form-control" id="cvv" placeholder="Enter CVV Code">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="expiry" class="active">Expiry Month/Year*</label>
                                    <input type="text" class="form-control" id="expiry" placeholder="Enter Expiry Month/Year">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-12">
                                <label class="container-chk">Save my card details
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark-chk"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-row mt-4">
                            <div class="col-12">
                                <a href="" class="login__button w-50 mx-auto d-table">Pay</a>
                            </div>
                        </div>
                        <div class="form-row mt-4 mb-4">
                            <div class="col-12 text-center">
                                <a href="user-home.php" class="back"><i class="fas fa-arrow-left"></i> Back to home</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
<?php include('footer.php') ?>