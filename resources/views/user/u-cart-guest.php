<?php
include('header.php');
$title = "Cart";
$activeNav = 'user-dash';
?>

<?php include('banner.php') ?>



<section class="login bg-page position-relative">
    <img src="images/inner_target.png" class="target inner-target" alt="" srcset="">

    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h5 class="i_t mb-0">Your Shopping Cart</h5>
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
                                <th></th>
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
                                <td class=""><small class="text-muted">$175</small></td>
                                <td>
                                    <div class="plus-minus-div mb-0">
                                        <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </div>
                                        <input type="number" id="number" value="1">
                                        <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class=""><small class="text-muted">$175</small></td>
                                <td class="cart-btns">
                                    <a href="">
                                        <i class="fas fa-redo"></i>
                                    </a> 
                                    <a href=""> 
                                        <i class="fas fa-times-circle"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xl-3 ml-auto col-lg-4 col-12">
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
        <div class="row">
            <div class="col-lg-6 ml-auto mr-lg-5">
                <div class="row mt-4">
                    <div class="col-md-6">
                        <a href="#_" class="btn-cc-1 text-center px-0 w-100">continue shopping</a>
                    </div>
                    <div class="col-md-6">
                        <a href="#_" class="btn-cc-2 text-center px-0 w-100" data-toggle="modal" data-target="#checkOut">checkout</a>
                    </div>
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
                    <h4 class="modal_h4">Guest Checkout</h4>
                    <p class="modal_p">Proceed to checkout without an account</p>
                </div>
                <div class="form-group">
                    <label for="login_email text-left" class="active">email address*</label>
                    <input type="email" class="form-control" id="login_email" placeholder="Enter Email Address">
                </div>
                <div class="text-center">
                    <a href="#" data-dismiss="modal" class="btn-cc-1">proceed as guest</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php') ?>