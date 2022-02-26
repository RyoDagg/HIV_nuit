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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>


    <style>
        .s2-copyright {
            color: #fff;
            padding: 18px 0px;
            font-size: 14px;
            font-family: "Poppins";
            background-color: #000000;
        }

        .s2-copyright a {
            color: #d772fe;
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
                <a href="#"><img src="logowhite.png" alt="" style="height: 100px; width: 150px;"></a>
            </div>
            <div class="app-edu-main-header-menu clearfix">
                <div class="header-dia-cta-btn text-center float-right">
                    @if (Route::has('login'))
                    @auth
                    <a href="{{ route('welcome') }}" class="show-modal">Home</a>
                   
                    @endauth
                    </li>
                    @endif
                </div>
                <nav class="app-edu-main-navigation float-right clearfix ul-li" style="display: hidden;">
                    <ul id="app-edu-main-nav" class="nav navbar-nav clearfix">
                        <li><a class="nav-link" href="{{ route('welcome') }}#app-edu-banner">Home</a></li>
                        <li><a class="nav-link" href="{{ route('welcome') }}#app-edu-about">About</a></li>
                        <li><a class="nav-link" href="{{ route('welcome') }}#app-edu-testimonial">4 Elements</a></li>
                        <li><a class="nav-link" href="{{ route('blog.index') }}">Blog</a></li>
                        @if (Route::has('login'))
                        <li class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                        <li class="dropdown">
                            <a href="#">My Results</a>
                            <ul class="dropdown-menu clearfix">
                                <li><a href="#app-edu-course">Detailed Results</a></li>
                                <li><a href="#app-edu-category">Global Results</a></li>
                            </ul>
                        </li>
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
                            <a href="!#"><img src="logo.png" alt=""></a>
                        </div>

                    </div>
                </div>
                <!-- /Mobile-Menu -->
            </div>
    </header>
    <!-- End of header section
        ============================================= -->

    <!-- Start of banner section
        ============================================= -->
    <section style="background: rgb(95,190,193);
background: linear-gradient(53deg, rgba(95,190,193,1) 0%, rgba(106,197,189,1) 27%, rgba(108,198,189,1) 66%, rgba(124,212,178,1) 100%); height: 150px; margin-bottom: 50px;  ">
        <div class="app-edu-logo float-left">
            <div class="container">
                <div class="app-edu-banner-content position-relative">

                </div>
            </div>
    </section>
    <!-- End of banner section
        ============================================= -->

    <section>
    <center>  <div>
            <h2> Privacy Policy</h2> <br> <br> 

            @foreach ($privacy as $privacys)
            
            <article class="card" style="margin-left: 15%; margin-right: 15%; margin-bottom: 15%; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;">
            {!!$privacy[0]->body!!}
            </article>

            @endforeach
        </div></center>  
    </section>







    <!-- Start of footer section
        ============================================= -->

    <div class="s2-copyright text-center">2021 © All rights reserved by <a href="#">Make IT HAPPEN</a></div>


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




</html>