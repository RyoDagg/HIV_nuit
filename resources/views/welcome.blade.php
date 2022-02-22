<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Four Elements</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/flaticon-6.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/odometer-theme-default.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/education.css">
    <link rel="icon" type="image/x-icon" href="greenlogo.png">

</head>

<body class="app-edu" data-spy="scroll" data-target=".app-edu-main-navigation" data-offset="80">
    <!-- preloader - start -->
    <div id="app-edu-preloader"></div>
    <div class="up">
        <a href="#" class="app-edu-scrollup text-center"><i class="fas fa-angle-up"></i></a>
    </div>
    <!-- Start of header section
        ============================================= -->
    <header id="app-edu-main-header" class="app-edu-header-main">
        <div class="container">
            <div class="app-edu-logo float-left">
                <a href="#"><img src="logowhite.png" alt="" style="height: 100px; width: 150px;"></a>
            </div>
            <div class="app-edu-main-header-menu clearfix">
                <div class="header-dia-cta-btn text-center float-right">

                    @if (Route::has('login'))
                    @auth
                    <a href="{{ route('quiz') }}" class="show-modal">Take Quizz</a>
                    @else
                    <a href="#" class="show-modal" data-toggle="modal" data-target="#myModal">Take Quizz</a>
                    @endauth
                    </li>
                    @endif
                </div>
                <nav class="app-edu-main-navigation float-right clearfix ul-li">
                    <ul id="app-edu-main-nav" class="nav navbar-nav clearfix">
                        <li><a class="nav-link" href="#app-edu-banner">Home</a></li>
                        <li><a class="nav-link" href="#app-edu-about">About</a></li>
                        <li><a class="nav-link" href="#app-edu-testimonial">4 Elements</a></li>
                        <li><a class="nav-link" href="#app-edu-blog">Blog</a></li>

                        @if (Route::has('login'))
                        <li class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                            <a href="{{ url('/myresults') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">My Results</a>
                            @endauth
                        </li>
                        @endif

                        @guest
                        @if (Route::has('login'))

                        <li class="dropdown">🔒</a>
                            <ul class="dropdown-menu clearfix">
                                <li> <a class="nav-link show-modal" data-toggle="modal" data-target="#authModal" href="#">{{ __('Login') }}</a></li>
                                @endif

                                @if (Route::has('register'))

                                <li><a  class="nav-link show-modal" data-toggle="modal" data-target="#regModal" href="#">{{ __('Register') }}</a></li>
                            </ul>
                        </li>

                        @endif
                        @else
                        <li class="dropdown">
                            <a href="#">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu clearfix">
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                                <li><a target="_blank" href="{{ url('/myresults') }}">My Results</a></li>
                            </ul>

            </div>
            @endguest

            </ul>
            </nav>
        </div>
        <div class="app-edu-mobile_menu position-relative">
            <div class="app-edu-mobile_menu_button app-edu-open_mobile_menu">
                <i class="fas fa-bars"></i>
            </div>
            <div class="app-edu-mobile_menu_wrap">
                <div class="mobile_menu_overlay app-edu-open_mobile_menu"></div>
                <div class="app-edu-mobile_menu_content">
                    <div class="app-edu-mobile_menu_close app-edu-open_mobile_menu">
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="m-brand-logo text-center">
                        <a href="!#"><img src="logo.png" alt=""></a>
                    </div>
                    <nav class="app-edu-mobile-main-navigation  clearfix ul-li">
                        <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                            <li class="dropdown">
                                <a href="#">Home</a>

                            </li>

                            <li><a class="nav-link" href="#app-edu-about">About</a></li>
                            <li><a class="nav-link" href="#app-edu-testimonial">4 Elements</a></li>
                            <li><a class="nav-link" href="#app-edu-blog">Blog</a></li>

                            <li><a href="{{ route('login') }}">Login</a> </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /Mobile-Menu -->
        </div>
    </header>
    <!-- End of header section
        ============================================= -->

    <!-- Start of banner section
        ============================================= -->
    <section id="app-edu-banner" class="app-edu-banner-section" data-background="img/education/banner.png">
        <div class="container">
            <div class="app-edu-banner-content position-relative">
                <div class="app-edu-banner-text app-edu-headline pera-content wow fadeFromLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <h1>Build your skill on Anything Today</h1>
                    <p>Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen</p>
                    <a class="banner-btn text-center" href="#">Learn More</a>
                </div>
                <div class="app-edu-banner-img">
                    <img src="yoga.png" alt="" width="669" height="651">
                </div>
            </div>
        </div>
    </section>
    <!-- End of banner section
        ============================================= -->

    <!-- Start of intro section
        ============================================= -->
    <section id="app-edu-intro" class="app-edu-intro-section">
        <div class="container">
            <div class="app-edu-intro-content">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 wow fadeFromUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="app-edu-intro-innerbox text-center">
                            <div class="app-edu-intro-icon">
                                <img src="wind.png" alt="">
                            </div>
                            <div class="app-edu-intro-text app-edu-headline pera-content">
                                <h3><a href="#">Awesome Interface</a></h3>
                                <p>Aliquip ex ea commo ute irure dolor in repre henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="app-edu-intro-innerbox text-center">
                            <div class="app-edu-intro-icon">
                                <img src="fire.png" alt="">
                            </div>
                            <div class="app-edu-intro-text app-edu-headline pera-content">
                                <h3><a href="#">Easy Customization</a></h3>
                                <p>Aliquip ex ea commo ute irure dolor in repre henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeFromUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="app-edu-intro-innerbox text-center">
                            <div class="app-edu-intro-icon">
                                <img src="earth.png" alt="">
                            </div>
                            <div class="app-edu-intro-text app-edu-headline pera-content">
                                <h3><a href="#">Moduler Codebase</a></h3>
                                <p>Aliquip ex ea commo ute irure dolor in repre henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeFromUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="app-edu-intro-innerbox text-center">
                            <div class="app-edu-intro-icon">
                                <img src="water.png" alt="">
                            </div>
                            <div class="app-edu-intro-text app-edu-headline pera-content">
                                <h3><a href="#">Moduler Codebase</a></h3>
                                <p>Aliquip ex ea commo ute irure dolor in repre henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of intro section
        ============================================= -->

    <!-- Start of about section
        ============================================= -->
    <section id="app-edu-about" class="app-edu-about-section position-relative">
        <span class="app-edu-about-shape position-absolute"><img src="img/education/ab-shape1.png" alt=""></span>
        <span class="app-edu-about-shape2 position-absolute"><img src="img/education/ab-shape2.png" alt=""></span>
        <div class="container">
            <div class="app-edu-about-content">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="app-edu-about-img">
                            <img src="Healthy.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="app-edu-about-text">
                            <div class="app-edu-section-title app-edu-headline pera-content wow fadeFromUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <span>Learn anything you want</span>
                                <h2>Learn your desired skill now anytime from anywhere</h2>
                                <p>Aliquip ex ea commo ute irure dolor in repre henderit in velit esse cillumdatat non proident, sunt in culpa qui officia dolore eu fugiat nulla pariatur.</p>
                            </div>
                            <div class="app-edu-about-list ul-li-block wow fadeFromUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <ul>
                                    <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </li>
                                    <li>Excepteur sint occaecat cupidatat non proident</li>
                                    <li>Sed ut perspiciatis unde omnis iste natus sit</li>
                                    <li>Luptatem accusantium dolore quasi architecto</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of about section
        ============================================= -->

    <!-- Start of course section
        ============================================= 
    <section id="app-edu-course" class="app-edu-course-section">
        <div class="container">
            <div class="app-edu-section-title app-edu-headline text-center center-align pera-content">
                <span>Learn anything you want</span>
                <h2>Popular Course</h2>
                <p>Aliquip ex ea commo ute irure dolor in repre henderit in velit esse cillumdatat non proident</p>
            </div>
            <div class="app-edu-course-content">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeFromUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="app-edu-course-innerbox">
                            <div class="app-edu-course-img">
                                <img src="img/education/course/crs1.png" alt="">
                            </div>
                            <div class="app-edu-course-text text-center app-edu-headline position-relative">
                                <span class="course-cat text-uppercase"><a href="#">Graphic Design</a></span>
                                <h3><a href="#">Didunt ut labore et dolore magna aliqua strud</a></h3>
                                <div class="app-edu-course-rate-price  clearfix">
                                    <div class="app-edu-course-rate float-left d-flex ul-li pera-content">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <p>5.0 <span>(100 Review)</span></p>
                                    </div>
                                    <div class="app-edu-course-price float-right">
                                        <span>$20</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeFromUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="app-edu-course-innerbox">
                            <div class="app-edu-course-img">
                                <img src="img/education/course/crs2.png" alt="">
                            </div>
                            <div class="app-edu-course-text text-center app-edu-headline position-relative">
                                <span class="course-cat text-uppercase"><a href="#">Graphic Design</a></span>
                                <h3><a href="#">Didunt ut labore et dolore magna aliqua strud</a></h3>
                                <div class="app-edu-course-rate-price  clearfix">
                                    <div class="app-edu-course-rate float-left d-flex ul-li pera-content">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <p>5.0 <span>(100 Review)</span></p>
                                    </div>
                                    <div class="app-edu-course-price float-right">
                                        <span>$20</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeFromUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="app-edu-course-innerbox">
                            <div class="app-edu-course-img">
                                <img src="img/education/course/crs3.png" alt="">
                            </div>
                            <div class="app-edu-course-text text-center app-edu-headline position-relative">
                                <span class="course-cat text-uppercase"><a href="#">Graphic Design</a></span>
                                <h3><a href="#">Didunt ut labore et dolore magna aliqua strud</a></h3>
                                <div class="app-edu-course-rate-price  clearfix">
                                    <div class="app-edu-course-rate float-left d-flex ul-li pera-content">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <p>5.0 <span>(100 Review)</span></p>
                                    </div>
                                    <div class="app-edu-course-price float-right">
                                        <span>$20</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeFromUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="app-edu-course-innerbox">
                            <div class="app-edu-course-img">
                                <img src="img/education/course/crs4.png" alt="">
                            </div>
                            <div class="app-edu-course-text text-center app-edu-headline position-relative">
                                <span class="course-cat text-uppercase"><a href="#">Graphic Design</a></span>
                                <h3><a href="#">Didunt ut labore et dolore magna aliqua strud</a></h3>
                                <div class="app-edu-course-rate-price  clearfix">
                                    <div class="app-edu-course-rate float-left d-flex ul-li pera-content">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <p>5.0 <span>(100 Review)</span></p>
                                    </div>
                                    <div class="app-edu-course-price float-right">
                                        <span>$20</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeFromUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                        <div class="app-edu-course-innerbox">
                            <div class="app-edu-course-img">
                                <img src="img/education/course/crs5.png" alt="">
                            </div>
                            <div class="app-edu-course-text text-center app-edu-headline position-relative">
                                <span class="course-cat text-uppercase"><a href="#">Graphic Design</a></span>
                                <h3><a href="#">Didunt ut labore et dolore magna aliqua strud</a></h3>
                                <div class="app-edu-course-rate-price  clearfix">
                                    <div class="app-edu-course-rate float-left d-flex ul-li pera-content">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <p>5.0 <span>(100 Review)</span></p>
                                    </div>
                                    <div class="app-edu-course-price float-right">
                                        <span>$20</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeFromUp" data-wow-delay="1000ms" data-wow-duration="1500ms">
                        <div class="app-edu-course-innerbox">
                            <div class="app-edu-course-img">
                                <img src="img/education/course/crs6.png" alt="">
                            </div>
                            <div class="app-edu-course-text text-center app-edu-headline position-relative">
                                <span class="course-cat text-uppercase"><a href="#">Graphic Design</a></span>
                                <h3><a href="#">Didunt ut labore et dolore magna aliqua strud</a></h3>
                                <div class="app-edu-course-rate-price  clearfix">
                                    <div class="app-edu-course-rate float-left d-flex ul-li pera-content">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <p>5.0 <span>(100 Review)</span></p>
                                    </div>
                                    <div class="app-edu-course-price float-right">
                                        <span>$20</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- End of course section
        ============================================= -->

    <!-- Start of category section
        ============================================= 
    <section id="app-edu-category" class="app-edu-category-section" data-background="img/education/ct-bg.jpg">
        <div class="container">
            <div class="app-edu-section-title app-edu-headline text-center center-align pera-content">
                <span>Learn anything you want</span>
                <h2>Browse By Category</h2>
                <p>Aliquip ex ea commo ute irure dolor in repre henderit in velit esse cillumdatat non proident</p>
            </div>
            <div class="app-edu-category-content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 wow fadeFromLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="app-edu-category-innerbox position-relative text-center">
                            <div class="app-edu-category-icon">
                                <i class="flaticon-143-physics"></i>
                            </div>
                            <div class="app-edu-category-text app-edu-headline">
                                <h3><a href="#">Science</a></h3>
                                <span>48 Courses</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeFromLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="app-edu-category-innerbox position-relative text-center">
                            <div class="app-edu-category-icon">
                                <i class="flaticon-223-video-camera"></i>
                            </div>
                            <div class="app-edu-category-text app-edu-headline">
                                <h3><a href="#">Arts & Media</a></h3>
                                <span>48 Courses</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeFromLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="app-edu-category-innerbox position-relative text-center">
                            <div class="app-edu-category-icon">
                                <i class="flaticon-163-monitor-2"></i>
                            </div>
                            <div class="app-edu-category-text app-edu-headline">
                                <h3><a href="#">Programming</a></h3>
                                <span>48 Courses</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeFromLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="app-edu-category-innerbox position-relative text-center">
                            <div class="app-edu-category-icon">
                                <i class="flaticon-101-gym"></i>
                            </div>
                            <div class="app-edu-category-text app-edu-headline">
                                <h3><a href="#">Health & Fitness</a></h3>
                                <span>48 Courses</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeFromLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="app-edu-category-innerbox position-relative text-center">
                            <div class="app-edu-category-icon">
                                <i class="flaticon-232-web"></i>
                            </div>
                            <div class="app-edu-category-text app-edu-headline">
                                <h3><a href="#">Web Design</a></h3>
                                <span>48 Courses</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeFromLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="app-edu-category-innerbox position-relative text-center">
                            <div class="app-edu-category-icon">
                                <i class="flaticon-025-briefcase"></i>
                            </div>
                            <div class="app-edu-category-text app-edu-headline">
                                <h3><a href="#">Business</a></h3>
                                <span>48 Courses</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeFromLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="app-edu-category-innerbox position-relative text-center">
                            <div class="app-edu-category-icon">
                                <i class="flaticon-136-organization"></i>
                            </div>
                            <div class="app-edu-category-text app-edu-headline">
                                <h3><a href="#">Graphics</a></h3>
                                <span>48 Courses</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeFromLeft" data-wow-delay="700ms" data-wow-duration="1500ms">
                        <div class="app-edu-category-innerbox position-relative text-center">
                            <div class="app-edu-category-icon">
                                <i class="flaticon-165-rulers"></i>
                            </div>
                            <div class="app-edu-category-text app-edu-headline">
                                <h3><a href="#">Mathematics</a></h3>
                                <span>48 Courses</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- End of category section
        ============================================= -->

    <!-- Start of testimonial section
        ============================================= -->
    <section id="app-edu-testimonial" class="app-edu-testimonial-section position-relative">
        <span class="app-edu-testimonial-shape position-absolute"><img src="img/education/ts1.png" alt=""></span>
        <div class="container">
            <div class="app-edu-section-title app-edu-headline text-center center-align pera-content">
                <span>Your Body is A Univerce</span>
                <h2>Four Elments</h2>
                <p>Aliquip ex ea commo ute irure dolor in repre henderit in velit esse cillumdatat non proident</p>
            </div>
            <div class="app-edu-testimonial-content">
                <div class="row">
                    <div class="col-lg-6 wow fadeFromUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="app-edu-testimonial-innerbox">
                            <div class="app-edu-testimonial-author clearfix">
                                <div class="app-edu-testimonial-img float-left">
                                    <img src="heart.png" alt="">
                                </div>
                                <div class="app-edu-testimonial-author-text app-edu-headline">
                                    <h3><a href="#">HEART</a></h3>
                                    <span>Water</span>
                                </div>
                            </div>
                            <div class="app-edu-testimonial-text pera-content">
                                <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo do con sequat. Duis aute irure dolor in repr ehenderit in volu veniam.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="app-edu-testimonial-innerbox">
                            <div class="app-edu-testimonial-author clearfix">
                                <div class="app-edu-testimonial-img float-left">
                                    <img src="idea.png" alt="">
                                </div>
                                <div class="app-edu-testimonial-author-text app-edu-headline">
                                    <h3><a href="#">Mind</a></h3>
                                    <span>Air</span>
                                </div>
                            </div>
                            <div class="app-edu-testimonial-text pera-content">
                                <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo do con sequat. Duis aute irure dolor in repr ehenderit in volu veniam.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeFromUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="app-edu-testimonial-innerbox">
                            <div class="app-edu-testimonial-author clearfix">
                                <div class="app-edu-testimonial-img float-left">
                                    <img src="lotus-position.png" alt="">
                                </div>
                                <div class="app-edu-testimonial-author-text app-edu-headline">
                                    <h3><a href="#">Soul</a></h3>
                                    <span>Fire</span>
                                </div>
                            </div>
                            <div class="app-edu-testimonial-text pera-content">
                                <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo do con sequat. Duis aute irure dolor in repr ehenderit in volu veniam.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeFromUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="app-edu-testimonial-innerbox">
                            <div class="app-edu-testimonial-author clearfix">
                                <div class="app-edu-testimonial-img float-left">
                                    <img src="squats.png" alt="">
                                </div>
                                <div class="app-edu-testimonial-author-text app-edu-headline">
                                    <h3><a href="#">Body</a></h3>
                                    <span>Earth</span>
                                </div>
                            </div>
                            <div class="app-edu-testimonial-text pera-content">
                                <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo do con sequat. Duis aute irure dolor in repr ehenderit in volu veniam.</p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End of testimonial section
        ============================================= -->
    <!-- Start of counter section
        ============================================= -->
    <section id="app-edu-counter" class="app-edu-counter-section">
        <div class="app-edu-counter-content">
            <div class="row">
                <div class="col-lg-4">
                    <div class="app-edu-counter-innerbox d-flex justify-content-center position-relative">
                        <div class="app-edu-counter-icon">
                            <i class="flaticon-213-user-12"></i>
                        </div>
                        <div class="app-edu-counter-text align-items-center d-flex app-edu-headline">
                            <h3 class="odometer" data-count="15"></h3>
                            <h4>Total
                                questions</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="app-edu-counter-innerbox d-flex justify-content-center position-relative">
                        <div class="app-edu-counter-icon">
                            <img src="elementsIcon.png" alt="" style="width: 70px; height:70px;">

                        </div>
                        <div class="app-edu-counter-text align-items-center d-flex app-edu-headline">
                            <h3 class="odometer" data-count="4"></h3>
                            <h4>Elements</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="app-edu-counter-innerbox d-flex justify-content-center position-relative">
                        <div class="app-edu-counter-icon">
                            <i class="flaticon-210-contact-information"></i>
                        </div>
                        <div class="app-edu-counter-text align-items-center d-flex app-edu-headline">
                            <h3 class="odometer" data-count="500"></h3>
                            <h4>Total
                                Posts</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of counter section
        ============================================= -->


    <!-- Start of blog section
        ============================================= -->
    <section id="app-edu-blog" class="app-edu-blog-section position-relative">
        <span class="app-edu-blog-vector position-absolute"><img src="blog.png" alt="" style="margin-bottom: 400px;"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="app-edu-section-title app-edu-headline pera-content">
                        <span>Learn anything you want</span>
                        <h2>Latest News</h2>
                        <p>Aliquip ex ea commo ute irure dolor in repre henderit in velit esse cillumdatat non proident, sunt in culpa qui officia.</p>
                    </div>
                    <?php $i = 0; ?>
                    @foreach ($post as $posts)
                    <div class="app-edu-blog-content">
                        <div class="app-edu-blog-innerbox position-relative wow fadeFromUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="app-edu-blog-img position-absolute">
                                <img src="{{ asset('storage/' . $post[$i]->image) }}" alt="">
                            </div>
                            <div class="app-edu-blog-text app-edu-headline">
                                <div class="app-edu-blog-meta">
                                    <span class="blog-ath text-uppercase"><a href="{{ route('blog.show', $post[$i]->slug) }}">{{$post[$i]->title}} </a></span>
                                    <span class="blog-date"><a href="{{ route('blog.show', $post[$i]->slug) }}">{{$post[$i]->created_at}}</a></span>
                                </div>
                                <h3><a href="{{ route('blog.show', $post[$i]->slug) }}">{{$post[$i]->excerpt }}</a></h3>
                            </div>
                        </div>
                        <?php $i++; ?>
                        @endforeach
                    </div>
                    <div class="app-edu-blog-btn">
                        <a href="{{route('blog.index')}}">Go To Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of blog section
        ============================================= -->

    <!-- Start of footer section
        ============================================= -->
    <section id="app-edu-footer" class="app-edu-footer-section" data-background="img/education/f-bg.png">
        <div class="container">
            <div class="app-edu-footer-newslatter">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="app-edu-section-title app-edu-headline pera-content">
                            <span>Subscribe Now</span>
                            <h2>Get Our Newsletter</h2>
                            <p>Aliquip ex ea commo ute irure dolor in repre henderit in velit esse cillumdatat non proident, sunt in culpa qui officia.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="app-edu-newslatter-form position-relative">
                            <input type="text" placeholder="Your email address">
                            <button>Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-edu-footer-widget-area">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="app-edu-footer-widget  app-edu-headline pera-content ul-li-block">
                            <div class="app-edu-logo-widget">
                                <div class="app-edu-footer-logo">
                                    <a href="#"><img src="logowhite.png" alt=""></a>
                                </div>
                                <p>Hedatat non proident, sunt in culpa qui offic ia dolore eu fugiat nul lamco laboris nisi ut aliq uip ex ea commodo consequat. Duis aute irure dolor in reprehe fugiat </p>
                                <div class="app-edu-footer-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="app-edu-footer-widget app-edu-headline pera-content ul-li-block">
                            <div class="app-edu-footer-menu">
                                <h3 class="widget-title">Company</h3>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Our Story</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Special Offers</a></li>
                                    <li><a href="#">Team Members</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="app-edu-footer-widget app-edu-headline pera-content ul-li-block">
                            <div class="app-edu-footer-menu">
                                <h3 class="widget-title">Useful Links</h3>
                                <ul>
                                    <li><a href="#">Popular Courses</a></li>
                                    <li><a href="#">Discounts</a></li>
                                    <li><a href="#">Legal Advice</a></li>
                                    <li><a href="#">Refunds</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="app-edu-footer-widget app-edu-headline pera-content ul-li-block">
                            <div class="app-edu-twitter">
                                <h3 class="widget-title">Recent Tweets</h3>
                                <div class="app-edu-twitter-area">
                                    <div class="app-edu-twitter-content">
                                        <div class="app-edu-twitter-icon float-left">
                                            <i class="fab fa-twitter"></i>
                                        </div>
                                        <div class="app-edu-twitter-text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit <a href="#">bit.ly/43Esd</a></p>
                                        </div>
                                    </div>
                                    <div class="app-edu-twitter-content">
                                        <div class="app-edu-twitter-icon float-left">
                                            <i class="fab fa-twitter"></i>
                                        </div>
                                        <div class="app-edu-twitter-text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit <a href="#">bit.ly/43Esd</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-edu-footer-copyright clearfix">
                <div class="copyright-text float-left">
                    <p>Developped By © 2022 <a href="https://www.mih.tn" target="_blank">MAKE IT HAPPEN</a></p>
                </div>
                <div class="copyright-menu float-right ul-li">
                    <ul>
                        <li><a href="#">Terms & Condition </a></li>
                        <li><a href="#">Privacy Policy </a></li>
                        <li><a href="#">Affiliated </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of footer section
        ============================================= -->

    <!-- JS library -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/typer-new.js"></script>
    <script src="js/odometer.js"></script>
    <script src="js/parallax-scroll.js"></script>
    <script src="js/education.js"></script>
</body>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="padding: 10px 50px 20px;">

    <div class="modal-dialog" role="document">
        <div class="modal-content clearfix">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            @if (Route::has('login'))
            <div class="modal-body">
                @auth

                <div class="LuciferWasHere">





                    <div class="containerDegla">

                        <form class="quiz" action="{{ route('answer.store') }}" method="post">
                            {{csrf_field()}}
                            <div class="quiz__inner">
                                <?php
                                $i = 0;
                                ?>
                                <input type="hidden" name="uid" value="{{$user}}" />
                                {{--<input name="favorableAnswer" value="{{$question->favorableAnswer}}" type="hidden" />
                                <input name="secondPossibility" value="{{$question->secondPossibility}}" type="hidden" />--}}

                                @foreach ($question as $question)

                                <?php
                                $i++;
                                ?>
                                <div data-question="{{$i}}" class="quiz__step--{{$i}} {{$i == 1 ? 'quiz__step--current': ''}} quiz__step">
                                    <input name="favorableAnswer[]" value="{{$question->favorableAnswer}}" type="hidden" />
                                    <input name="secondPossibility[]" value="{{$question->secondPossibility}}" type="hidden" />
                                    <div class="question__emoji">{{ $question->Emoji }} </div>
                                    <h1 class="quiz__question">{{ $question->question }}</h1>
                                    <div class="answer">
                                        <input data-char="65" class="answer__input" type="radio" id="question{{$i}}_first" name="{{$question->id}}" value="{{ $question->firstPossibility }}">
                                        <label class="answer__label" for="question{{$i}}_first">{{ $question->firstPossibility }}</label>
                                    </div>
                                    <div class="answer">
                                        <input data-char="66" class="answer__input" type="radio" id="question{{$i}}_second" name="{{$question->id}}" value="{{ $question->secondPossibility }}">
                                        <label class="answer__label" for="question{{$i}}_second">{{ $question->secondPossibility }}</label>
                                    </div>
                                    <div class="answer">
                                        <input data-char="66" class="answer__input" type="radio" id="question{{$i}}_third" name="{{$question->id}}" value="{{ $question->thirdPossibility }}">
                                        <label class="answer__label" for="question{{$i}}_third">{{ $question->thirdPossibility }}</label>
                                    </div>
                                </div>

                                @endforeach

                                <div data-question="{{$i+1}}" class="quiz__step--{{$i+1}} quiz__step quiz__summary">

                                    <h1 class="quiz__question">Summary</h1>
                                    <div id="summary"></div>
                                    <div class="submit__container">
                                        <input type="submit" value="Submit" class="pichpich" />

                                    </div>
                                </div>
                        </form>
                    </div>

                    <footer class="bottom">
                        <section class="bottom__container">
                            <div class="progress">
                                <div class="progress__inner"></div>
                            </div>
                            <div class="navigation">
                                <div class="navigation__btn navigation__btn--left"><svg width="20" height="20" viewBox="0 0 24 24">
                                        <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
                                    </svg></div>
                                <div class="navigation__btn navigation__btn--right"><svg width="20" height="20" viewBox="0 0 24 24">
                                        <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                                    </svg></div>
                            </div>
                        </section>
                    </footer>



                </div>
                @else

                <div class="LuciferWasHere">





                    <div class="container">
                        <div class="app-edu-banner-text app-edu-headline pera-content wow fadeFromLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <center>
                                <h3 style="color: black; font-family:Arial, Helvetica, sans-serif"> You have to <a style="color: blue;" href="{{ route('login') }}">login 👤</a> in order to take the quizz </h3>
                            </center>
                        </div>

                        <img src="sad.gif" alt="">


                    </div>





                </div>

                @endauth

                @endif




            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="authModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="padding: 10px 50px 20px;">

    <div class="modal-dialog" role="document">
        <div class="modal-content clearfix">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <div class="modal-body">


                <div class="LuciferWasHere">





                    <div class="container">

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>



                    </div>





                </div>






            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="padding: 10px 50px 20px;">

    <div class="modal-dialog" role="document">
        <div class="modal-content clearfix">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <div class="modal-body">


                <div class="LuciferWasHere">





                    <div class="container">

                    <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>



                    </div>





                </div>






            </div>
        </div>
    </div>
</div>

<script>

</script>

</html>