<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Education - Onepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/flaticon-6.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/odometer-theme-default.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/education.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,500,700,800');

.LuciferWasHere{
  margin:0;
  padding:0;
  height:100%;
  color:#14152C;
  font-family: 'Raleway', sans-serif;
  background-color:#f7f8fc;
  box-sizing: border-box
 
}


.bottom {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: #fff;
    padding: 15px 10px;
    box-shadow: 0px -2px 12px rgba(0,0,0,0.1);
}

.bottom__container {
    max-width: 1200px;
    margin: auto;
    display: flex;
      justify-content: space-between;
    align-items: center;
}

.progress {
    width: 40%;
    height: 10px;
    position: relative;
    border-radius: 5px;
  overflow:hidden;
    background-color: #ecedf5;
}
.progress__inner {
    position: absolute;
    top: 0;
    border-radius: 5px;
    height: 100%;
    left: 0;
    width: 0%;
    background-color: #5861af;
  transition:.4s width linear
}

.navigation__btn path{
  fill:#A7AACB
}
.navigation {
    display: flex;
    align-items: center;
}

.navigation__btn {
    display: flex;
    align-items: center;
    width: 44px;
    border: 1px solid #A7AACB;
    justify-content: center;
    height: 44px;
}

.navigation__btn--left{
  border-top-left-radius:6px;
    border-bottom-left-radius:6px
}

.navigation__btn--right{
  border-top-right-radius:6px;
    border-bottom-right-radius:6px
}

.quiz__question{
  font-weight:900;
  letter-spacing:1px;
    margin-top: 0;
    font-size: 34px;
    margin-bottom: 50px;
}

.containerDegla {
    display: flex;
    height: calc(100% - 74px);
    width: 100%;
    align-items: center;
    justify-content: center;
    padding: 15px 10px;
    margin-bottom: 50px;
}
.answer:first-of-type{
  margin-right:15px;
}
.answer__input {
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    width: 1px;
    height: 1px;
    position: absolute;
  outline:none !important;
}

.answer__label {
    width: 140px;
    border: 1px solid #A7AACB;
    display: inline-block;
    border-radius: 6px;
    padding: 0px 15px;
  padding-left:55px;
  line-height: 56px;
    font-size: 15px;
  color: #A7AACB;
  text-align:left;
    font-weight: 600;
}

.answer {
    display: inline-block;
  margin-right:10px;
}



.quiz__step {
    text-align: center;
}

.answer__input:checked + .answer__label{
  border-color:#5861af;
  color:#14152C;
  box-shadow: 0px 0px 1px 4px rgba(88,97,175, 0.2)
}

.answer__input:checked + .answer__label .answer__tick{
  opacity:1;
  visibility:visible;
}

.answer__char {
    line-height: 24px;
    display: inline-block;
    width: 26px;
    text-align: center;
    font-size: 13px;
    border-radius: 4px;
    color: #c8cae0;
    border: 1px solid #c8cae0;
    font-weight: 600;
    vertical-align: middle;
    margin-right: 15px;
}
.answer__tick {
    display: inline-block;
    vertical-align: middle;
    background-color: #5861af;
    margin-left: 20px;
    line-height: 14px;
    border-radius: 50%;
    padding: 4px;
  opacity:0;
  visible:hidden;
}

.answer__tick path{
  fill:#fff
}
.quiz__inner {
    max-width: 800px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.quiz__step:not(.quiz__step--current){
  visibility:hidden;
  opacity:0;
  display:none;
}
.question__emoji{
  font-size:45px;
  margin-bottom:15px;
      display: inline-block;
    margin-right: 15px;
}
.navigation__btn--disabled {
    opacity: 0.4;
}
.submit__container {
    margin-top: 25px;
}
.submit {
    background-color: #5861af;
    line-height: 50px;
    display: inline-block;
    border-radius: 25px;
    padding: 0 15px;
    font-size: 13px;
    text-decoration: none;
    color: #fff;
    letter-spacing: 1px;
    box-shadow: 0px 6px 11px rgba(88,97,175, 0.6);
    min-width: 130px;
    font-weight: 700;
    text-transform: uppercase;
}

.thanks__tick {
    line-height: 50px;
    width: 50px;
    font-size: 25px;
    color: #fff;
    background-color: #5861af;
    border-radius: 50%;
    display: inline-block;
    text-align: center;
}
.thanks__title {
    font-weight: 900;
    letter-spacing: 1px;
    margin-top: 15px;
    text-align: center;
    font-size: 40px;
}
.thanks{
  text-align:center;
}
    </style>


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
                    <a href="#"><img src="img/education/logo/logo1.png" alt=""></a>
                </div>
                <div class="app-edu-main-header-menu clearfix">
                    <div class="header-dia-cta-btn text-center float-right">
                        <a href="#" class="show-modal"  data-toggle="modal" data-target="#myModal">Take Quizz</a>
                      
                    </div>
                    <nav class="app-edu-main-navigation float-right clearfix ul-li">
                        <ul id="app-edu-main-nav" class="nav navbar-nav clearfix">
                            <li><a class="nav-link" href="#app-edu-banner">Home</a></li>
                            <li><a class="nav-link" href="#app-edu-about">About</a></li>
                            <li><a class="nav-link" href="#app-edu-course">Course</a></li>
                            <li><a class="nav-link" href="#app-edu-category">Category</a></li>
                            <li><a class="nav-link" href="#app-edu-testimonial">Testimonial</a></li>
                            <li><a class="nav-link" href="#app-edu-blog">Blog</a></li>
                           
            @if (Route::has('login'))
                <li class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/myresults') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">My Results</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                    @endauth
</li>
            @endif
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
                                <a href="!#"><img src="img/education/logo/logo1.png" alt=""></a>
                            </div>
                            <nav class="app-edu-mobile-main-navigation  clearfix ul-li">
                             <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                                <li class="dropdown">
                                    <a href="#">Home</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li><a href="#">DropDown 1</a></li>
                                        <li><a href="#">DropDown 2</a></li>
                                        <li><a href="#">DropDown 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Features</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li><a href="#">DropDown 1</a></li>
                                        <li><a href="#">DropDown 2</a></li>
                                        <li><a href="#">DropDown 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a></li>
                                <li><a href="#">Pricing </a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Login</a> </li>
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
                        </div>  <div class="col-lg-3 col-md-6 wow fadeFromUp" data-wow-delay="600ms" data-wow-duration="1500ms">
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
                                    <h2>Learn your desired skill now  anytime from anywhere</h2>
                                    <p>Aliquip ex ea commo ute irure dolor in repre henderit in velit esse cillumdatat non proident, sunt in culpa qui officia  dolore eu fugiat nulla pariatur.</p>
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
        ============================================= -->        
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
        </section>
    <!-- End of course section
        ============================================= -->

    <!-- Start of category section
        ============================================= -->      
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
        </section>
    <!-- End of category section
        ============================================= -->

    <!-- Start of testimonial section
        ============================================= --> 
        <section id="app-edu-testimonial" class="app-edu-testimonial-section position-relative">
            <span class="app-edu-testimonial-shape position-absolute"><img src="img/education/ts1.png" alt=""></span>
            <div class="container">
                <div class="app-edu-section-title app-edu-headline text-center center-align pera-content">
                    <span>Learn anything you want</span>
                    <h2>Popular Course</h2>
                    <p>Aliquip ex ea commo ute irure dolor in repre henderit in velit esse cillumdatat non proident</p>
                </div>
                <div class="app-edu-testimonial-content">
                    <div class="row">
                        <div class="col-lg-6 wow fadeFromUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="app-edu-testimonial-innerbox">
                                <div class="app-edu-testimonial-author clearfix">
                                    <div class="app-edu-testimonial-img float-left">
                                        <img src="img/education/tst2.jpg" alt="">
                                    </div>
                                    <div class="app-edu-testimonial-author-text app-edu-headline">
                                        <h3><a href="#">Robert Williums</a></h3>
                                        <span>Web Developer</span>
                                    </div>
                                </div>
                                <div class="app-edu-testimonial-text pera-content">
                                    <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo do con sequat. Duis aute irure dolor in repr ehenderit in volu veniam.</p>
                                    <div class="app-edu-testimonial-rate d-flex ul-li ">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span>5.0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="app-edu-testimonial-innerbox">
                                <div class="app-edu-testimonial-author clearfix">
                                    <div class="app-edu-testimonial-img float-left">
                                        <img src="img/education/tst3.jpg" alt="">
                                    </div>
                                    <div class="app-edu-testimonial-author-text app-edu-headline">
                                        <h3><a href="#">Paul Harrion</a></h3>
                                        <span>Web Developer</span>
                                    </div>
                                </div>
                                <div class="app-edu-testimonial-text pera-content">
                                    <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo do con sequat. Duis aute irure dolor in repr ehenderit in volu veniam.</p>
                                    <div class="app-edu-testimonial-rate d-flex ul-li ">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span>5.0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeFromUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="app-edu-testimonial-innerbox">
                                <div class="app-edu-testimonial-author clearfix">
                                    <div class="app-edu-testimonial-img float-left">
                                        <img src="img/education/tst4.jpg" alt="">
                                    </div>
                                    <div class="app-edu-testimonial-author-text app-edu-headline">
                                        <h3><a href="#">Rebecca Palmar</a></h3>
                                        <span>Web Developer</span>
                                    </div>
                                </div>
                                <div class="app-edu-testimonial-text pera-content">
                                    <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo do con sequat. Duis aute irure dolor in repr ehenderit in volu veniam.</p>
                                    <div class="app-edu-testimonial-rate d-flex ul-li ">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span>5.0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeFromUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="app-edu-testimonial-innerbox">
                                <div class="app-edu-testimonial-author clearfix">
                                    <div class="app-edu-testimonial-img float-left">
                                        <img src="img/education/tst1.jpg" alt="">
                                    </div>
                                    <div class="app-edu-testimonial-author-text app-edu-headline">
                                        <h3><a href="#">Sarah Jessica</a></h3>
                                        <span>Web Developer</span>
                                    </div>
                                </div>
                                <div class="app-edu-testimonial-text pera-content">
                                    <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo do con sequat. Duis aute irure dolor in repr ehenderit in volu veniam.</p>
                                    <div class="app-edu-testimonial-rate d-flex ul-li ">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span>5.0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-edu-testimonial-btn text-center">
                        <a href="#">View All</a>
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
                                <h3 class="odometer" data-count="30"></h3>
                                <h4>Total 
                                Instructors</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="app-edu-counter-innerbox d-flex justify-content-center position-relative">
                            <div class="app-edu-counter-icon">
                                <i class="flaticon-210-contact-information"></i>
                            </div>
                            <div class="app-edu-counter-text align-items-center d-flex app-edu-headline">
                                <h3 class="odometer" data-count="200"></h3>
                                <h4>Awesome
                                Courses</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="app-edu-counter-innerbox d-flex justify-content-center position-relative">
                            <div class="app-edu-counter-icon">
                                <i class="flaticon-218-user-16"></i>
                            </div>
                            <div class="app-edu-counter-text align-items-center d-flex app-edu-headline">
                                <h3 class="odometer" data-count="500"></h3>
                                <h4>Total 
                                Studetns</h4>
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
            <span class="app-edu-blog-vector position-absolute"><img src="img/education/blg-v.png" alt=""></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="app-edu-section-title app-edu-headline pera-content">
                            <span>Learn anything you want</span>
                            <h2>Latest News</h2>
                            <p>Aliquip ex ea commo ute irure dolor in repre henderit in velit esse cillumdatat non proident, sunt in culpa qui officia.</p>
                        </div>
                        <div class="app-edu-blog-content">
                            <div class="app-edu-blog-innerbox position-relative wow fadeFromUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="app-edu-blog-img position-absolute">
                                    <img src="img/education/blg1.jpg" alt="">
                                </div>
                                <div class="app-edu-blog-text app-edu-headline">
                                    <div class="app-edu-blog-meta">
                                        <span class="blog-ath text-uppercase"><a href="#">Johnson Doe  </a></span>
                                        <span class="blog-date"><a href="#">Feb 24, 2021</a></span>
                                    </div>
                                    <h3><a href="#">Didunt ut labore et dolore magna aliqua strud when the music</a></h3>
                                </div>
                            </div>
                            <div class="app-edu-blog-innerbox position-relative wow fadeFromUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="app-edu-blog-img position-absolute">
                                    <img src="img/education/blg1.jpg" alt="">
                                </div>
                                <div class="app-edu-blog-text app-edu-headline">
                                    <div class="app-edu-blog-meta">
                                        <span class="blog-ath text-uppercase"><a href="#">Johnson Doe  </a></span>
                                        <span class="blog-date"><a href="#">Feb 24, 2021</a></span>
                                    </div>
                                    <h3><a href="#">Didunt ut labore et dolore magna aliqua strud when the music</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="app-edu-blog-btn">
                            <a href="#">Go To Blog</a>
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
                                        <a href="#"><img src="img/education/logo/logo1.png" alt=""></a>
                                    </div>
                                    <p>Hedatat non proident, sunt in culpa qui offic ia  dolore eu fugiat nul lamco laboris nisi ut aliq uip ex ea commodo consequat. Duis aute irure dolor in reprehe  fugiat </p>
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
                        <p>Developped By © 2022  <a href="https://www.mih.tn" target="_blank">MAKE IT HAPPEN</a></p>
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
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>             <div class="modal-body">
<div class="LuciferWasHere">                                

  



<div class="containerDegla" >
  
  <form class="quiz">
    <div class="quiz__inner">
    <div data-question="1" class="quiz__step--1 quiz__step--current quiz__step">
      <div class="question__emoji">🚬 </div>
      <h1 class="quiz__question">Do you smoke cigarettes?</h1>
      <div class="answer">
        <input data-char="65" class="answer__input" type="radio" id="smoke_yes" name="smoke" value="Yes">
        <label  class="answer__label" for="smoke_yes">Yes</label>
      </div>
      <div class="answer">
        <input data-char="66" class="answer__input" type="radio" id="smoke_no" name="smoke" value="No">
        <label class="answer__label" for="smoke_no">No</label>
      </div>       
    </div>
<div data-question="2" class="quiz__step--2 quiz__step">
  <div class="question__emoji"><p> &#x231A;</p></div>
      <h1 class="quiz__question">Do you like pizza?</h1>
      <div class="answer">
        <input  class="answer__input" type="radio" id="pizza_yes" name="pizza" value="Yes">
        <label  class="answer__label" for="pizza_yes">Yes</label>
      </div>
      <div class="answer">
        <input class="answer__input" type="radio" id="pizza_no" name="pizza" value="No">
        <label class="answer__label" for="pizza_no">No<div class="answer__tick">
    <svg width="14" height="14" viewBox="0 0 24 24">
        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
    </svg>
</div></label>
      </div>       
    </div>
<div data-question="3" class="quiz__step--3 quiz__step">
  <div class="question__emoji">👽</div>
      <h1 class="quiz__question">Do you believe in aliens?</h1>
      <div class="answer">
        <input  class="answer__input" type="radio" id="aliens_yes" name="aliens" value="Yes">
        <label  class="answer__label" for="aliens_yes">Yes</label>
      </div>
      <div class="answer">
        <input class="answer__input" type="radio" id="aliens_no" name="aliens" value="No">
        <label class="answer__label" for="aliens_no">No<div class="answer__tick">
    <svg width="14" height="14" viewBox="0 0 24 24">
        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
    </svg>
</div></label>
      </div> 
     
    </div>
<div data-question="4" class="quiz__step--4 quiz__step quiz__summary">
  
      <h1 class="quiz__question">Summary</h1>
  <div id="summary"></div>
              <div class="submit__container">
      <a href="#" class="submit">Submit</a>
    </div> 
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
          
  </div>
        </div>
      </div>
</div>

<script>
    const numberSteps = $('.quiz__step').length - 1;
let disableButtons = false;
const tick = '<div class="answer__tick"><svg width="14" height="14" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path></svg></div>'; 
let thanks = '<div class="thanks"><div class="thanks__tick">✔ </div><h1 class="thanks__title">Thank you!</h1></div>';

$('.answer__input').on('change', function(e) { 
 
    if($(this).next().children('.answer__tick').length>0){
      return false
    }
  $(this).next().append(tick)
});


$('.navigation__btn--right').click(function(e){
let currentIndex = Number($('.quiz__step--current').attr('data-question'));
  if($('.quiz__step--current input:checked').length == 0){
     //console.log('input empty');
     return false;
 }
  //console.log({'currentIndex': currentIndex, 'numberSteps': numberSteps-1})
  if(currentIndex == numberSteps + 1 || disableButtons==true){
    //console.log('last')
    return false;
  }
  if(currentIndex + 1 == numberSteps + 1 ){
    $(this).addClass('navigation__btn--disabled');
  }
  if(currentIndex == numberSteps){
  $('.summary__item').remove();
    $('.quiz__step:not(.quiz__summary)').each(function(index, item){
      console.log(item)
      let icon = $(item).children('.question__emoji').text()
      let answer = $(item).children('.answer').find('input:checked').val();
      let node = '<div class="summary__item"><div class="question__emoji">'+icon+'</div>'+answer+'</div>'
      $('#summary').append(node)
    })
  }
  const percentage = (currentIndex * 100)/ numberSteps;
  $('.progress__inner').width(percentage+ '%');
  console.log('input ok')
  $('.quiz__step--current').hide('300');
  $('.quiz__step--current').removeClass('quiz__step--current');
  $('.quiz__step--'+(currentIndex+1)).show('300').addClass('quiz__step--current');
  currentIndex = Number($('.quiz__step--current').attr('data-question'));
   if(currentIndex > 1 ){
    $('.navigation__btn--left').removeClass('navigation__btn--disabled');
  }
});
/*
function keypressEvent(e){
    let key = e.which || e.keyCode;

  if(key==65 || key==66){
    $('.quiz__step--current input[data-char="'+key+'"]').prop('checked', true).change();
    console.log($('.quiz__step--current input[data-char="'+key+'"]'))
   // $('.quiz__step--current input[data-char="'+key+'"] + .answer__label').change();
  }
}
*/



$('.navigation__btn--left').click(function(e){
let currentIndex = Number($('.quiz__step--current').attr('data-question'));
 
  console.log({'currentIndex': currentIndex, 'numberSteps': numberSteps-1})
  if(currentIndex == 1 || disableButtons==true){
    console.log('first')
    $(this).addClass('navigation__btn--disabled');
    return false;
  }
 

  $('.navigation__btn--right').removeClass('navigation__btn--disabled')

  console.log('input ok')
  $('.quiz__step--current').hide('300');
  $('.quiz__step--current').removeClass('quiz__step--current');
  $('.quiz__step--'+(currentIndex-1)).show('300').addClass('quiz__step--current');
  currentIndex = Number($('.quiz__step--current').attr('data-question'));
  if(currentIndex == 1 ){
    $(this).addClass('navigation__btn--disabled');
  }
    const percentage = ((currentIndex-1)  * 100)/ numberSteps+1;
  $('.progress__inner').width(percentage+ '%');
$('.quiz__step--current').keyup(keypressEvent);
});
$('.submit').click(function(e){
  e.preventDefault();
  $('.quiz').remove();
  $(thanks).appendTo('.containerDegla');
  disableButtons=true;
  $('.navigation__btn').addClass('navigation__btn--disabled')
})
</script>
    </html>                    


