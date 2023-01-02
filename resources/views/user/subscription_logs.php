<?php
include('header-loggedin.php');
$title = "User Dashboard";
$activeNav = 'user-dash';
?>

<?php include('banner.php') ?>



<section class="login bg-page position-relative">
    <img src="images/inner_target.png" class="target inner-target" alt="" srcset="">

    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-md-left">
                <h5 class="i_t">Subscription Logs</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row mb-5">
                    <div class="col-lg-2 col-md-3 col-12">
                        <p class="m-0 up">Package Selected</p>
                        <span class="up">Yearly Package</span>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <p class="m-0 up">Next Renewal Package</p>
                        <span class="up">Yearly Package</span>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12">
                        <label class="container-chk wot">Auto renew subscription
                            <input type="checkbox" checked="checked">
                            <span class="checkmark-chk"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="date_wrapr">
                    <span>Sort By: </span>
                    <div class="b">
                        <p>From</p>
                        <input type="text" class="date-input" id="from-d">
                    </div>
                    <div class="b">
                        <p>To</p>
                        <input type="text" class="date-input" id="to-d">
                    </div>
                    <a href="#" class="apply-btn">Apply Filter</a>
                </div>
            </div>
            <div class="col-12 p-0">
                <div class="maain-tabble table-responsive">
                    <table class="table zero-configuration pay_logs">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Subscription Date</th>
                                <th>Package Type</th>
                                <th>Last Renewal Date</th>
                                <th>Expiry Date</th>
                                <th>Charges</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>May 2, 2020</td>
                                <td>abc package</td>
                                <td>May 2, 2020</td>
                                <td>May 2, 2020</td>
                                <td>$123</td>
                                <td>active</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="rec_enabled" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content national_modal_generic">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body nmg">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="images/check.png" alt="">
                        <h4 class="modal_h4">Confirmation Message</h4>
                        <p class="modal_p">Recurring Payment has been
                            Enabled!</p>
                        <a href="#" data-dismiss="modal" class="modal__btn">Got it</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="rec_disabled" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content national_modal_generic">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body nmg">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="images/check.png" alt="">
                        <h4 class="modal_h4">Confirmation Message</h4>
                        <p class="modal_p">Recurring Payment has been
                            Disabled</p>
                        <a href="#" data-dismiss="modal" class="modal__btn">Got it</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('footer.php') ?>