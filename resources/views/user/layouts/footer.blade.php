<section class="contact">
    <div class="container">
        <div class="col-12">
            <div class="card_national">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <h3 class="contact_heading">
                            Need Any Kind <br>
                            Of Help?
                        </h3>
                        <p class="address">
                            PO Box 448, Sutersville,<br> PA, 15083
                        </p>
                        <p class="contact_info">Phone: <a href="">412 480 1311</a></p>
                        <p class="contact_info">Email: <a href="">contact@nationalshootingacademy.org</a></p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <span class="alert-danger">{{$error}}</span><br><br>
                            @endforeach
                        @endif
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                        <form method="post" action="{{route('contact-footer')}}">
                            @csrf
                            <div class="form-row">
                                <div class="col-12">
                                    <input value="{{ old('name') }}" name="name" type="text" class="@error('name') is-invalid @enderror contact_input" placeholder="Name">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <input value="{{ old('email') }}" name="email" type="email" class="@error('email') is-invalid @enderror contact_input" placeholder="Email">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <textarea name="message" id="" cols="30" rows="10" class="@error('message') is-invalid @enderror contact_input"
                                              placeholder="Message">{{ old('message') }}</textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <button type="submit" class="btn-contact">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--footer start here-->

<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-12">
                    <img src="images/logo.png" class="img-fluid" alt="">
                    <p>NSA is based in the State Pennsylvania <br>
                        and is aimed at training people to protect themselves better. </p>
                    <div class="social">
                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://plus.google.com" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <h3>quick links</h3>
                    <ul>
                        <li class="link"><a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="link"><a href="{{ url('user_course') }}">Course</a>
                        </li>
                        <li class="link"><a href="{{ url('user_category') }}">Categories</a>
                        </li>
                        <li class="link"><a href="{{ route('web.license') }}">License</a>
                        </li>
                        <li class="link"><a href="{{ url('user_contact') }}">contact us</a>
                        </li>
                        <li class="link"><a href="{{ url('user_about') }}">About</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-sm-6 col-12 ">
                    <h3>Newsletter</h3>
                    <p>Subscribe to our newsletter for all
                        the latest news.</p>
                    <form action="" class="newletter">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control news-input" placeholder="Enter Email Here.."
                                   aria-label="Enter Email Here.." aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary news-btn" type="button">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 text-sm-left text-center">
                    <p>National Shooting Academy 2020. All Rights Reserved.</p>
                </div>
                <div class="col-12 col-sm-6 text-sm-right text-center">
                    <img src="images/footer_cards.png" alt="">
                </div>
            </div>
        </div>
    </div>
</footer>

<!--footer end here-->

<script src="{{ asset('user_asset/js/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="{{ asset('user_asset/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('user_asset/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('user_asset/js/wow.min.js') }}"></script>

<script src="{{ asset('admin_asset/assets/js/dash-chart.js') }}"></script>
<script src="{{ asset('admin_asset/app-assets/vendors/js/charts/echarts/chart/bar.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('admin_asset/app-assets/vendors/js/charts/echarts/chart/line.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('admin_asset/app-assets/vendors/js/charts/echarts/chart/pie.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('admin_asset/app-assets/vendors/js/charts/echarts/chart/funnel.js') }}"
        type="text/javascript"></script>


<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{ asset('user_asset/js/intlTelInput.js') }}"></script>
<script src="{{ asset('user_asset/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('user_asset/js/utils.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/4.1.0/echarts-en.common.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script src="{{ asset('user_asset/js/datatable-basic.js') }}"></script>
<script src="{{ asset('user_asset/js/datatables.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="{{ asset('user_asset/js/function.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"
        integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js"
        integrity="sha512-uE2UhqPZkcKyOjeXjPCmYsW9Sudy5Vbv0XwAVnKBamQeasAVAmH6HR9j5Qpy6Itk1cxk+ypFRPeAZwNnEwNuzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
  $( document ).ready(function() {
    console.log( "ready!" );
    var auth=`{{Auth::user()}}`;
    if(auth==''){
   $('#myModal').modal('show');
    }
   var url=`{{Request::url()}}`;
    $('#div_download').hide();
});

    new WOW().init();

    function openNav() {

        if ($(window).width() > 500) {
            document.getElementById('mySidenav').style.width = '320px';

        } else {

            document.getElementById('mySidenav').style.width = '100%';
        }
    }

    function closeNav() {
        document.getElementById('mySidenav').style.width = '0';
    }
</script>

<script>
    //   $('#myModal').modal('show');
</script>
</body>

</html>
