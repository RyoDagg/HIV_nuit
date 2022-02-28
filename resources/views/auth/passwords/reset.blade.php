<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>4Elements - Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/fv.png" type="image/x-icon">
    <link rel="icon" href="img/fv.png" type="image/x-icon">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/flaticon-3.css">
    <link rel="stylesheet" href="../../css/fontawesome-all.css">
    <link rel="stylesheet" href="../../css/owl.carousel.css">
    <link rel="stylesheet" href="../../css/side-demo.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body class="saas-classic">
    <!-- preloader - start -->
    <div id="preloader" class="saas-classic-preloader"></div>
    <div class="up">
        <a href="#" id="scrollup" class="saas-classic-scrollup text-center"><i class="fas fa-angle-up"></i></a>
    </div>

    <!-- Start of header section
        ============================================= -->
    <header id="header_main" class="saas_two_main_header">
        <div class="container">
            <div class="s_main_menu">
                <div class="row">
                    <div class="col-md-2">
                        <div class="brand_logo">
                            <a href="!#"><img src="widelogo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="main_menu_list clearfix float-right">
                            <nav class="s2-main-navigation  clearfix ul-li">
                                <ul id="main-nav" class="navbar-nav text-capitalize clearfix">
                                    <li><a class="nav-link" href="{{ route('welcome') }}#app-edu-banner">Home</a></li>
                                    <li><a class="nav-link" href="{{ route('welcome') }}#app-edu-about">About</a></li>
                                    <li><a class="nav-link" href="{{ route('welcome') }}#app-edu-testimonial">4 Elements</a></li>
                                    <li><a class="nav-link" href="{{route('blog.index')}}">Blog</a></li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
            <!-- //desktop menu -->
            <div class="s2-mobile_menu relative-position">
                <div class="s2-mobile_menu_button s2-open_mobile_menu">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="s2-mobile_menu_wrap">
                    <div class="mobile_menu_overlay s2-open_mobile_menu"></div>
                    <div class="s2-mobile_menu_content">
                        <div class="s2-mobile_menu_close s2-open_mobile_menu">
                            <i class="far fa-times-circle"></i>
                        </div>
                        <div class="m-brand-logo text-center">
                            <a href="{{ route('welcome') }}"><img src="widelogo.png" alt=""></a>
                        </div>
                        <nav class="s2-mobile-main-navigation  clearfix ul-li">
                            <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                                <li><a href="{{ route('welcome') }}#app-edu-banner">Home</a></li>
                                <li><a href="{{ route('welcome') }}#app-edu-about">About</a></li>
                                <li><a href="{{ route('welcome') }}#app-edu-testimonial">4 Elements</a></li>
                                <li><a href="{{route('blog.index')}}">Blog</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End of header section
        ============================================= -->
    <!-- Start of breadcurmb section
        ============================================= -->
    <section id="saasio-breadcurmb" class="saasio-breadcurmb-section" style="background: rgb(95,190,193);  background: linear-gradient(53deg, rgba(95,190,193,1) 0%, rgba(106,197,189,1) 27%, rgba(108,198,189,1) 66%, rgba(124,212,178,1) 100%); height: 150px; margin-bottom: 50px;  ">
        <div class="container">
            <div class="breadcurmb-title text-center">
                <h2>Authentication</h2>
            </div>
            <div class="breadcurmb-item-list text-center ul-li">
                <ul class="saasio-page-breadcurmb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Rest Password</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End of breadcurmb section
        ============================================= -->
    <div class="container" style="margin-bottom: 50px;">
        <section id="sa-contact-inner" class="sa-contact-inner-section inner-page-padding">
            <div class="container">
                <div class="saas_two_section_title saas2-headline text-center">
                    <span class="title_tag">Choose Wisely</span>
                    <h2>{{ __('Reset Password') }} </h2>
                </div>
                <div class="sa-contact-inner-form">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <divv class="sa-contact-inner-btn text-center">
                                <button type="submit" style="width:auto">
                                    {{ __('Reset Password') }}
                                </button>
                        </div>
                </div>
                </form>
            </div>
    </div>
    </section>








    </div>
    <!-- Start of footer section
        ============================================= -->

    <div class="s2-copyright text-center">2022 © All rights reserved by <a href="#">Make IT HAPPEN</a></div>
    <!-- End of footer section 
        ============================================= -->

    <script src="../../js/jquery.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/wow.min.js"></script>
    <script src="../../js/tilt.jquery.min.js"></script>
    <script src="../../js/owl.js"></script>
    <script src="../../js/aos.js"></script>
    <script src="../../js/slick.js"></script>
    <script src="../../js/jquery.barfiller.js"></script>
    <script src="../../js/parallax-scroll.js"></script>
    <script src="../../js/jquery.paroller.min.js"></script>
    <script src="../../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../../js/side-demo.js"></script>
    <script src="../../js/script.js"></script>
</body>

</html>