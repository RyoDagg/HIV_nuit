<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>4Elements - Blog Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="greenlogo.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/flaticon-3.css">
    <link rel="stylesheet" href="../css/fontawesome-all.css">
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/side-demo.css">
    <link rel="stylesheet" href="../css/style.css">
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
                            <a href="!#"><img src="../widelogo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="main_menu_list clearfix float-right">
                            <nav class="s2-main-navigation  clearfix ul-li">
                                <ul id="main-nav" class="navbar-nav text-capitalize clearfix">
                                <li><a class="nav-link" href="{{ route('welcome') }}#app-edu-banner">Home</a></li>
                                     <li><a class="nav-link" href="{{ route('welcome') }}#app-edu-about">About</a></li>
                                     <li><a class="nav-link" href="{{ route('welcome') }}#app-edu-testimonial">4 Elements</a></li>
                                     <li><a class="nav-link" href="{{ route('welcome') }}#app-edu-blog">Blog</a></li>
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
                        <a href="{{ route('welcome') }}"><img src="../widelogo.png" alt=""></a>
                         </div>
                         <nav class="s2-mobile-main-navigation  clearfix ul-li">
                             <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                                 <li><a href="{{ route('welcome') }}#app-edu-banner">Home</a></li>
                                 <li><a href="{{ route('welcome') }}#app-edu-about">About</a></li>
                                 <li><a href="{{ route('welcome') }}#app-edu-testimonial">4 Elements</a></li>
                                 <li><a href="{{ route('blog.index') }}">Blog</a></li>
                                
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
    <section id="saasio-breadcurmb" class="saasio-breadcurmb-section" style="background: rgb(95,190,193);
background: linear-gradient(53deg, rgba(95,190,193,1) 0%, rgba(106,197,189,1) 27%, rgba(108,198,189,1) 66%, rgba(124,212,178,1) 100%); height: 150px; margin-bottom: 50px;  ">
        <div class="container">
            <div class="breadcurmb-title text-center">
                <h2>News Feed</h2>
            </div>
            <div class="breadcurmb-item-list text-center ul-li">
                <ul class="saasio-page-breadcurmb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog Feed</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End of breadcurmb section
        ============================================= -->

    <!-- Start of blog page section
        ============================================= -->
    <section id="news-feed" class="news-feed-section">
        <div class="container">
            <div class="blog-feed-content">
                <div class="row">

                    <div class="col-md-8">

                        <div class="saasio-blog-details-content">

                            <div class="blog-details-img">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="">
                            </div>
                            <div class="blog-details-text dia-headline">
                                <h2>{{$post->title}}</h2>
                                <div class="saasio-post-meta">
                                    <a href="#"><i class="fas fa-calendar-alt"></i> {{$post->created_at}}</a>
                                </div>
                                <article>
                                    {!! $post->body !!}
                                </article>

                            </div>

                            <div class="blog-details-tag clearfix">
                                <div class="blog-feed-tag float-left">
                                    <span>Tags:</span>
                                    <?php

                                    $keywords = explode(",", $post->meta_keywords);


                                    for ($i = 0; $i < sizeof($keywords); $i++) {
                                        echo "<a>$keywords[$i]</a>";
                                    }

                                    ?>

                                </div>
                                <div class="blog-feed-share float-right" hidden>
                                    <span>Share:</span>
                                    <a href="#"><i class="fb-bg fab fa-facebook-f "></i></a>
                                    <a href="#"><i class="bh-bg fab fa-behance"></i></a>
                                    <a href="#"><i class="tw-bg fab fa-twitter"></i></a>
                                    <a href="#"><i class="dr-bg fab fa-dribbble"></i></a>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="saasio-blog-sidebar">
                            <div class="side-bar-widget">
                                <div class="search-widget dia-headline">
                                    <h3 class="widget-title-2">Search</h3>
                                    <form action="" class="relative-position">
                                        <input type="text" name="search" placeholder="Search Here">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="side-bar-widget">
                                <div class="category-widget dia-headline ul-li-block">
                                    <h3 class="widget-title-2">Category</h3>
                                    <ul>
                                        <?php $i = 0; ?>
                                        @foreach ($category as $categorys)
                                        <li><a href="#">{{$category[$i]->name }}</a></li>
                                        <?php $i++; ?>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="side-bar-widget">
                                <div class="category-widget dia-headline ul-li-block">
                                    <h3 class="widget-title-2">Recent Post</h3>
                                    <div class="recent-post-area">
                                        <?php $i = 0; ?>
                                        @foreach ($recpost as $recposts)

                                        <div class="recent-post-img-text">
                                            <div class="recent-post-img float-left">
                                                <img src="{{ asset('storage/' . $recpost[$i]->image) }}" alt="">
                                            </div>
                                            <div class="recent-post-text dia-headline">
                                                <h3><a href="#">{{$recpost[$i]->title}}</a></h3>
                                                <span class="rec-post-meta"><a href="../{{ route('blog.show', $recpost[$i]->slug) }}">{{$recpost[$i]->created_at}}</a></span>
                                            </div>
                                        </div>
                                        <?php $i++; ?>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="side-bar-widget">
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of blog section
        ============================================= -->



    <!-- Start of footer section
        ============================================= -->
    <footer id="saas_two_footer" class="saas_two_footer_section relative-position">
        <div class="s2-newslatter_section relative-position">
            <div class="container">
                <div class="s2-newslatter_content relative-position">
                    <div class="s2-newslatter_title  text-center saas2-headline pera-content">
                        <h2>Subscribe now!</h2>
                        <p>Get the latest update.</p>
                    </div>
                    <div class="s2-newslatter-form  relative-position">
                        <form action="#" class="position-relative">
                            <input class="email" name="email" type="email" placeholder="Enter your email address">
                            <div class="nws-button position-absolute text-capitalize">
                                <button class="hover-btn" type="submit" value="Submit"> Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="newsletter_pattern_1"><img src="../img/saas-c/banner/nb.png" alt=""></div>
                <div class="cloud_anim newsletter_pattern_2" style="background-image: url(https://old3.commonsupport.com/emu/wp-content/uploads/2021/02/cloud-2.png);"></div>
                <div class="cloud_anim newsletter_pattern_3" style="background-image: url(https://old3.commonsupport.com/emu/wp-content/uploads/2021/02/cloud-5.png);"></div>
                <div class="newsletter_pattern_4 " style="background-image: url(../img/saas-c/banner/ns.png);"></div>
                <div class="newsletter_pattern_5 " style="background-image: url(../img/saas-c/banner/ns2.png);"></div>
            </div>
        </div>
        <div class="footer_content pera-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="s2_footer_widget clearfix ul-li-block  saas2-headline">
                            <div class="s2_footer_about">
                                <div class="s2-footer_logo">
                                    <img src="../img/saas-c/logo/f-logo.png" alt="">
                                </div>
                                <div class="footer_about">
                                    30 Commercial Road Fratton
                                    PORTSMOUTH Hampshire PO1 1AA
                                    UNITED KINGDOM
                                </div>
                                <span>Open Hours: </span>
                                <p>Mon - Sat: 8 am - 5 pm,
                                    Sunday: CLOSED</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="s2_footer_widget clearfix ul-li-block saas2-headline">
                            <div class="s2_footer_menu">
                                <h3 class="s2_widget_title">
                                    <span>Links</span>
                                    <i></i>
                                </h3>
                                <ul>
                                    <li><a href="#"> Home</a></li>
                                    <li><a href="#"> Team</a></li>
                                    <li><a href="#"> FAQ</a></li>
                                    <li><a href="#"> Services</a></li>
                                    <li><a href="#"> Gallery</a></li>
                                    <li><a href="#"> About us</a></li>
                                    <li><a href="#"> Contact</a></li>
                                    <li><a href="#"> Testimonials</a></li>
                                    <li><a href="#"> News</a></li>
                                    <li><a href="#"> Portfolio</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="s2_footer_widget clearfix ul-li-block saas2-headline">
                            <div class="s2_footer_social">
                                <h3 class="s2_widget_title">
                                    <span>Newsletter</span>
                                    <i></i>
                                </h3>
                                <p>Send us a newsletter to get update</p>
                                <form action="#">
                                    <input name="email" type="email" placeholder="Enter your email address">
                                    <button type="submit" value="Submit"> <i class="fas fa-paper-plane"></i></button>
                                </form>
                                <a href="#"><i class="fb-bg fab fa-facebook-f "></i></a>
                                <a href="#"><i class="bh-bg fab fa-behance"></i></a>
                                <a href="#"><i class="tw-bg fab fa-twitter"></i></a>
                                <a href="#"><i class="dr-bg fab fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="s2-copyright text-center">2021 © All rights reserved by <a href="#">Themexriver</a></div>
    <!-- End of footer section 
        ============================================= -->

    <script src="../js/jquery.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/tilt.jquery.min.js"></script>
    <script src="../js/owl.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/slick.js"></script>
    <script src="../js/jquery.barfiller.js"></script>
    <script src="../js/parallax-scroll.js"></script>
    <script src="../js/jquery.paroller.min.js"></script>
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/side-demo.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>