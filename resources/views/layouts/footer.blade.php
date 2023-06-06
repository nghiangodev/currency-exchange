<footer class="footer-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12 white_fonts">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="full">
                            <img class="img-responsive" src="{{asset('/assets/images/footer_logo.png')}}" alt="#" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="full">
                            <h3>Quick Links</h3>
                        </div>
                        <div class="full">
                            <ul class="menu_footer">
                                <li><a href="/">> Home</a></li>
                                <li><a href="/about-us">> About</a></li>
                                <li><a href="/exchange">> Exchange</a></li>
                                <li><a href="/services">> Services</a></li>
                                <li><a href="/news">> News</a></li>
                                <li><a href="/contact-us">> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="full">
                            <div class="footer_blog full white_fonts">
                                <h3>Newsletter</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                <div class="newsletter_form">
                                    <form action="index.html">
                                        <input type="email" placeholder="Your Email" name="#" required="">
                                        <button>Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="full">
                            <div class="footer_blog full white_fonts">
                                <h3>Contact us</h3>
                                <ul class="full">
                                    <li><img src="{{asset('/assets/images/i5.png')}}"><span>Ho Chi Minh City<br>VietNam</span></li>
                                    <li><img src="{{asset('/assets/images/i6.png')}}"><span>nghia.nvt291@gmail.com</span></li>
                                    <li><img src="{{asset('/assets/images/i7.png')}}"><span>+84938863878</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="crp">© Copyrights {{date('Y')}} design by NghiaNgo</p>
            </div>
        </div>
    </div>
</div>

<a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>


<!-- ALL JS FILES -->
<script src="{{asset('/assets/js/plugins/jquery.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins/popper.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins/jquery.pogo-slider.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins/slider-index.js')}}"></script>
<script src="{{asset('/assets/js/plugins/smoothscroll.js')}}"></script>
<script src="{{asset('/assets/js/plugins/form-validator.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins/contact-form-script.js')}}"></script>
<script src="{{asset('/assets/js/plugins/isotope.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins/images-loded.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins/custom.js')}}"></script>
<script src="{{asset('/assets/js/plugins/select2.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins/jquery.alphanum.js')}}"></script>
<script src="{{asset('/assets/js/plugins/axios.min.js')}}"></script>
<!-- ALL PLUGINS -->

@yield('script')


