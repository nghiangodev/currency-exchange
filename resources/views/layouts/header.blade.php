
<header class="top-header">
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="logo_section">
                    <a class="navbar-brand" href="/"><img src="{{asset('/assets/images/logo.png')}}" alt="image"></a>
                </div>
                <div class="site_information">
                    <ul>
                        <li><a href="mailto:nghia.nvt291@gmail.com"><img src="{{asset('/assets/images/mail_icon.png')}}" alt="#" />nghia.nvt291@gmail.com</a></li>
                        <li><a href="tel:0938863878"><img src="{{asset('/assets/images/phone_icon.png')}}" alt="#" />+84938863878</a></li>
                        <li><a class="join_bt" href="#">Join us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header_bottom">
        <div class="container">
            <div class="col-sm-12">
                <div class="menu_orange_section" style="background: #ff880e;">
                    <nav class="navbar header-nav navbar-expand-lg">
                        <div class="menu_section">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                                <ul class="navbar-nav">
                                    <li><a class="nav-link {{ \App\helpers\checkActiveLink('/') }}" href="/">Home</a></li>
                                    <li><a class="nav-link {{ \App\helpers\checkActiveLink('/about-us') }}" href="/about-us">About</a></li>
                                    <li><a class="nav-link {{ \App\helpers\checkActiveLink('/exchange') }}" href="/exchange">Exchange</a></li>
{{--                                    <li><a class="nav-link {{ \App\helpers\checkActiveLink('/services') }}" href="/services">Services</a></li>--}}
                                    <li><a class="nav-link {{ \App\helpers\checkActiveLink('/news') }}" href="/news">News</a></li>
{{--                                    <li><a class="nav-link {{ \App\helpers\checkActiveLink('/contact-us') }}" href="/contact-us">Contact</a></li>--}}
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="search-box">
                        <input type="text" class="search-txt" placeholder="Search">
                        <a class="search-btn">
                            <img src="{{asset('/assets/images/search_icon.png')}}" alt="#" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

