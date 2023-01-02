<?php
include('header.php');
$title = "Cart";
$activeNav = 'user-dash';
?>

<?php include('banner.php') ?>



<section class="login bg-page position-relative">
    <img src="images/inner_target.png" class="target inner-target" alt="" srcset="">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
            <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">
                            <h3>Address </h3>
                            <img src="images/user-card.png" class="img-fluid">

                        </li>
                        <li>
                            <h3>Payment</h3>
                            <img src="images/cards.png" class="img-fluid">
                        </li>
                        <li>
                            <h3>Confirm</h3>
                            <img src="images/check-tick.png" class="img-fluid">
                        </li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <h5 class="blue-text text-uppercase">Address</h5>
                        <h6 class="mt-2">Personal Information </h6>
                        <div class="row mt-3">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field">
                                    <label for="">Email Address*</label>
                                    <input type="email" name="email" class="bantu-input w-100" placeholder="Enter Email Address">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field">
                                    <label for="">Phone*</label>
                                    <input type="number" name="number" class="bantu-input w-100" placeholder="Enter Phone Number ">
                                </div>
                            </div>
                            <div class="col-12">
                                <h5 class="blue-text my-3 text-uppercase">Billing Address</h5>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field">
                                    <label for="">First Name*</label>
                                    <input type="text" name="name" class="bantu-input w-100" placeholder="Enter First Name ">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field">
                                    <label for="">Last Name*</label>
                                    <input type="text" name="name" class="bantu-input w-100" placeholder="Enter Last Name ">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-field">
                                    <label for="">Address*</label>
                                    <input type="text" name="name" class="bantu-input w-100" placeholder="Enter Address Line 1 ">
                                </div>
                                <div class="form-field">
                                    <input type="text" name="name" class="bantu-input w-100" placeholder="Enter Address Line 2 ">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field">
                                    <label for="">City*</label>
                                    <input type="text" name="name" class="bantu-input w-100" placeholder="Enter City">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field">
                                    <label for="">State*</label>
                                    <input type="text" name="name" class="bantu-input w-100" placeholder="Enter State ">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field">
                                    <label for="">Zip Code*</label>
                                    <input type="text" name="name" class="bantu-input w-100" placeholder="Enter Zip Code ">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field">
                                    <label for="">Country*</label>
                                    <input type="text" name="name" class="bantu-input w-100" placeholder="Enter Country">
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="black-text">
                                    <input type="checkbox" id="shipAd" name="radio-group">
                                    <label for="shipAd" class="bordered">Ship to a different location</label>
                                </p>
                            </div>
                            <div class="shipping-address-div" style="display:none;">
                                <div class="row ml-0 mr-0">
                                    <div class="col-12">
                                        <h5 class="fs-subtitle">Shipping Address </h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-field">
                                            <input type="text" class="bantu-input w-100" name="name" placeholder="Enter First Name ">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-field">
                                            <input type="text" class="bantu-input w-100" name="name" placeholder="Enter Last Name ">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-field">
                                            <input type="text" class="bantu-input w-100" name="name" placeholder="Enter Address Line 1 ">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-field">
                                            <input type="text" class="bantu-input w-100" name="name" placeholder="Enter Address Line 2">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-field">
                                            <input type="text" class="bantu-input w-100" name="name" placeholder="Enter City">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-field">
                                            <input type="text" class="bantu-input w-100" name="name" placeholder="Enter State">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-field">

                                            <input type="number" class="bantu-input w-100" name="name" placeholder="Enter Zip Code">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-field">
                                            <input type="text" class="bantu-input w-100" name="name" placeholder="Enter Country">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="button" name="next" class="next btn-cc-1" value="Continue">
                    </fieldset>
                    <fieldset>
                        <h5 class="blue-text mb-4 text-uppercase">Payment </h5>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field">
                                    <label for="">Card Holder Name*</label>
                                    <input type="text" name="name" class="bantu-input w-100" placeholder="Enter Card Holder's Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field">
                                    <label for="">Card Number*</label>
                                    <input type="number" name="number" class="bantu-input w-100" placeholder="Enter Card Number">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field">
                                    <label for="">CVV Number*</label>
                                    <input type="number" name="number" class="bantu-input w-100" placeholder="Enter CVV Number">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field expiry-field">
                                    <label for="">Expiry Date*</label>
                                    <input type="text" class="bantu-input expiry-date w-100" id="expiry-date" placeholder="Enter Expiry Date" readonly>
                                </div>
                            </div>
                        </div>
                        <input type="button" name="previous" class="previous btn-cc-1" value="Previous">
                        <input type="button" name="next" class="next btn-cc-1" value="Continue">
                    </fieldset>
                    <fieldset>
                        <div class="row">
                            <div class="col-12">
                                <h5 class="blue-text text-uppercase mb-3">Item Number</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive cart-table px-3">
                                    <table class="table shopping-cart-wrap cart m-0">
                                        <thead class="text-muted border-0">
                                            <tr>
                                                <th scope="col">Product</th>
                                                <th scope="col" width="200" class="">Price</th>
                                                <th scope="col" width="120">Quantity</th>
                                                <th scope="col" width="200" class="">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="pt-4 pb-4">
                                                    <div class="img-wrap"> 
                                                            <img src="images/product-1.png" class="img-fluid mr-4" alt=""> 
                                                            <div class="product-description">
                                                                <p class="text-muted mt-0">Product A</p>
                                                            </div>
                                                    </div>
                                                </td>
                                                <td class=""><small class="text-muted">$123</small></td>
                                                <td class=""><small class="text-muted">1</small></td>
                                                <td class=""><small class="text-muted">$123</small></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="ml-auto col-xl-4 col-lg-6 col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="color__black semi-bold">Sub Total</p>
                                        <p class="color__black semi-bold">Total</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="color__black semi-bold">$123</p>
                                        <p class="color__black semi-bold">$123</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input type="button" name="previous" class="previous btn-cc-1" value="Previous">
                        <input type="button" name="submit" class="submit btn-cc-1" data-toggle="modal" data-target="#checkOut" value="Place Order">
                        <!-- Button trigger modal -->
                        <!-- <button type="button" class="btn-cc-1" data-toggle="modal" data-target="#exampleModal">
                            Continue </button> -->
                    </fieldset>
                </form>
            </div>
            <div class="col-lg-4 col-12">
                <div class="cart-wrapper shop-cart">
                    <div class="cart-head">
                        <h5>Cart Summary</h5>
                    </div>
                    <div class="cart-list">
                        <ul>
                            <li>
                                <div class="d-flex justify-content-between">
                                    <div class="sub-total">
                                        <p>Sub Total</p>
                                    </div>
                                    <div class="amount">
                                        <p>$25</p>
                                    </div>
                                </div>
                            </li>
                            <hr>
                            <li>
                                <div class="d-flex justify-content-between mt-3 align-items-center">
                                    <div class="total">
                                        <h6>Total</h6>
                                    </div>
                                    <div class="amount">
                                        <p class="red-text">$30</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>                    
                    <p class="black-text px-2 mb-4">
                        <input type="checkbox" id="term1" name="radio-group">
                        <label for="term1" class="bordered">I agree to the Terms and Conditions</label>
                    </p>
                    <div class="go-to-payment text-center">
                        <button class="btn-cc-1" data-toggle="modal" data-target="#checkOut">Checkout</button>
                    </div>
                    <!-- Cart-list -->
                </div>
        
        
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="checkOut" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content national_modal_generic">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-4 nmg">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <img src="images/check.png" alt="">
                    <h4 class="modal_h4">System Message</h4>
                    <p class="modal_p">Congratulations your order has been placed</p>
                </div>
                <div class="text-center">
                    <a href="#" data-dismiss="modal" class="modal__btn">got it</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php') ?>