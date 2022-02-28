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
}</style>

</head>





<body class="app-edu" data-spy="scroll" data-target=".app-edu-main-navigation" data-offset="80">
    <!-- preloader - start -->
    <div id="app-edu-preloader"></div>
    <div class="up">
        <a href="#" class="app-edu-scrollup text-center"><i class="fas fa-angle-up"></i></a>
    </div>

          



    <!-- Start of header section
        ============================================= -->
    <header id="app-edu-main-header" class="app-edu-header-main" >
        <div class="container"  >
            <div class="app-edu-logo float-left">
                <a href="#"><img src="logowhite.png" alt="" style="height: 100px; width: 150px;"></a>
            </div>
            <div class="app-edu-main-header-menu clearfix">
                <div class="header-dia-cta-btn text-center float-right">
                @if (Route::has('login'))
                            @auth
                            <a href="{{ route('welcome') }}" class="show-modal">Home</a>
                            @else
                            <a href="#" class="show-modal" data-toggle="modal" data-target="#myModal">Take Quizz</a>
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
                                        <li><a  href="#app-edu-course">Detailed Results</a></li>
                                        <li><a href="#app-edu-category">Global Results</a></li>
                                    </ul>
                                </li>                            @else
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
background: linear-gradient(53deg, rgba(95,190,193,1) 0%, rgba(106,197,189,1) 27%, rgba(108,198,189,1) 66%, rgba(124,212,178,1) 100%); height: 150px; margin-bottom: 50px;  " >
            <div class="app-edu-logo float-left">
        <div class="container">
            <div class="app-edu-banner-content position-relative">
             
            </div>
        </div>
    </section>
    <!-- End of banner section
        ============================================= -->





        @foreach ($result as $result)

        <?php 
        
        $hProgress =  ($result->hearts) / ($result->hTotal) * 100 ; 
        $mProgress =  ($result->minds) / ($result->mTotal) * 100 ; 
        $sProgress =  ($result->souls) / ($result->sTotal) * 100 ; 
        $bProgress =  ($result->bodies) / ($result->bTotal) * 100 ; 
        $bProgress = round( $bProgress);
        $hProgress = round( $hProgress);
        $mProgress = round( $mProgress);
        $sProgress = round( $sProgress);

        $bgProgHeart = 'bg-info';
        $bgProgBody = 'bg-info';
        $bgProgMind = 'bg-info';
        $bgProgSoul = 'bg-info';

        //progress bar color for body
        
            if($bProgress>= 0 && $bProgress< 25)
                $bgProgBody = 'bg-danger';
            elseif($bProgress>= 25 && $bProgress< 50)
            $bgProgBody = 'bg-warning';
            elseif($bProgress>= 50 && $bProgress< 75)
            $bgProgBody = 'bg-success';
            elseif($bProgress>= 75 )
            $bgProgBody = 'bg-primary';

            //progress bar color for heart

            if($hProgress>= 0 && $hProgress< 25)
                $bgProgHeart = 'bg-danger';
            elseif($hProgress>= 25 && $hProgress< 50)
            $bgProgHeart = 'bg-warning';
            elseif($hProgress>= 50 && $hProgress< 75)
            $bgProgHeart = 'bg-success';
            elseif($hProgress>= 75 )
            $bgProgHeart = 'bg-primary';

                        //progress bar color for Soul

            
            if($sProgress>= 0 && $sProgress< 25)
                $bgProgSoul = 'bg-danger';
            elseif($sProgress>= 25 && $sProgress< 50)
            $bgProgSoul = 'bg-warning';
            elseif($sProgress>= 50 && $sProgress< 75)
            $bgProgSoul = 'bg-success';
            elseif($sProgress>= 75 )
            $bgProgSoul = 'bg-primary';

                        //progress bar color for Mind

            
            if($mProgress>= 0 && $mProgress< 25)
                $bgProgMind = 'bg-danger';
            elseif($mProgress>= 25 && $mProgress< 50)
            $bgProgMind = 'bg-warning';
            elseif($mProgress>= 50 && $mProgress< 75)
            $bgProgMind = 'bg-success';
            elseif($mProgress>= 75 )
            $bgProgMind = 'bg-primary';
            
        
        ?>



    <section id="app-edu-course" class="app-edu-course-section">
        <div class="container">
            <div class="app-edu-section-title app-edu-headline text-center center-align pera-content">
                <span>Results Are Here</span>
                <h2>Detailed Results</h2>
                <p>A goal is not always meant to be reached, it often serves simply as something to aim at.</p>
            </div>
            <div class="app-edu-course-content">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeFromUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="app-edu-course-innerbox">
                            <div class="app-edu-course-img">
                                <center><img src="water.png" alt="" style="width: 200px; height: 234px"></center>
                            </div>
                            <div class="app-edu-course-text text-center app-edu-headline position-relative">
                                <span class="course-cat text-uppercase"><a href="#">Heart</a></span>
                                <h3><a href="#"> Your Heart Result is  {{ $hProgress }}%</a></h3>
                                <div class="app-edu-course-rate-price  clearfix">
                                    <div class="progress" style="margin-top: 10%;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated {{ $bgProgHeart }}" role="progressbar" aria-valuenow="{{$result->hearts}}" aria-valuemin="0" aria-valuemax="{{$result->hTotal}}" style="width: {{ $hProgress }}%"></div>
                                    </div>
                                    <div class="app-edu-course-price float-right">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeFromUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="app-edu-course-innerbox">
                            <div class="app-edu-course-img">
                                <center><img src="wind.png" alt="" style="width: 200px; height: 234px"></center>
                            </div>
                            <div class="app-edu-course-text text-center app-edu-headline position-relative">
                                <span class="course-cat text-uppercase"><a href="#">Mind</a></span>
                                <h3><a href="#"> Your Mind Result is  {{ $mProgress }}%</a></h3>
                                <div class="app-edu-course-rate-price  clearfix">
                                    <div class="progress" style="margin-top: 10%;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated {{ $bgProgMind }}" role="progressbar" aria-valuenow="{{$result->minds}}" aria-valuemin="0" aria-valuemax="{{$result->mTotal}}" style="width: {{ $mProgress }}%"></div>
                                    </div>
                                    <div class="app-edu-course-price float-right">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeFromUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="app-edu-course-innerbox">
                            <div class="app-edu-course-img">
                                <center><img src="earth.png" alt="" style="width: 200px; height: 234px"></center>
                            </div>
                            <div class="app-edu-course-text text-center app-edu-headline position-relative">
                                <span class="course-cat text-uppercase"><a href="#">Body</a></span>
                                <h3><a href="#"> Your Body Result is  {{ $bProgress }}%</a></h3>
                                <div class="app-edu-course-rate-price  clearfix">
                                    <div class="progress" style="margin-top: 10%;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated {{ $bgProgBody }}" role="progressbar" aria-valuenow="{{$result->bodies}}" aria-valuemin="0" aria-valuemax="{{$result->bTotal}}" style="width: {{ $bProgress }}%"></div>
                                    </div>
                                    <div class="app-edu-course-price float-right">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeFromUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="app-edu-course-innerbox">
                            <div class="app-edu-course-img">
                                <center><img src="fire.png" alt="" style="width: 200px; height: 234px"></center>
                            </div>
                            <div class="app-edu-course-text text-center app-edu-headline position-relative">
                                <span class="course-cat text-uppercase"><a href="#">Soul</a></span>
                                <h3><a href="#"> Your Soul Result is  {{ $sProgress }}%</a></h3>
                                <div class="app-edu-course-rate-price  clearfix">
                                    <div class="progress" style="margin-top: 10%;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated {{ $bgProgSoul }}" role="progressbar" aria-valuenow="{{$result->souls}}" aria-valuemin="0" aria-valuemax="{{$result->sTotal}}" style="width: {{ $sProgress }}%"></div>
                                    </div>
                                    <div class="app-edu-course-price float-right">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


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
                <div style="width: 500px; height:500px;">
                    <div>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
                
                <div style="width: 500px; height:500px; position:relative; margin-left: 65%; margin-top: -40%">
                <div class="ei-app-mockup-img  wow fadeFromRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <img src="4elogo.png" alt="">
                    </div>
                </div>

                <script>
                    var data = {
                        labels: [
                            'Heart',
                            'Body',
                            'Mind',
                            'Soul'
                        ],
                        datasets: [{
                            label: 'My First Dataset',
                            data: [{{ $hProgress }}, {{ $bProgress }},{{ $mProgress }}, {{ $sProgress }}],
                            backgroundColor: [
                                'rgb(255, 99, 132)',
                                'rgb(54, 162, 235)',
                                'rgb(255, 205, 86)',
                                'green'
                            ],
                            hoverOffset: 4
                        }]
                    };
                    var config = {
                        type: 'pie',
                        data: data,
                    };
                    window.onload = () => {
                        var myChart = new Chart(
                            document.getElementById('myChart'),
                            config
                        );
                    };
                </script>


            </div>
        </div>
    </section>
    <!-- End of category section
        ============================================= -->



        @endforeach

        @if($result->count() == 0)


        <center> 
        <div class="app-edu-banner-content position-relative">
                <div class="app-edu-banner-text app-edu-headline pera-content wow fadeFromLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
               <img src="takequiz.gif" href="{{ route('quiz') }}" alt=""> <br> 
            <a class="banner-btn text-center" href="{{ route('quiz') }}">Take the Quiz First</a> 
                </div>
                </center>


        @endif



    <!-- Start of footer section
        ============================================= -->
   
        <div class="s2-copyright text-center">2022 © All rights reserved by <a href="#">Make IT HAPPEN</a></div>


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