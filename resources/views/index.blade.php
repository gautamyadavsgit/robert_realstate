<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Responsive bootstrap 5 landing template">
        <meta name="author" content="Themesbrand">

        <link rel="shortcut icon" href="images/favicon.ico">

         <title>Montia - Responsive Bootstrap 5 Landing Page </title>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="{{asset('front/css/materialdesignicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('front/css/mobiriseicons.css')}}" rel="stylesheet">

        <!--Magnific popup -->
        <link rel="stylesheet" type="text/css" href="{{asset('front/css/magnific-popup.css')}}" />

        <!--Slider-->
        <link rel="stylesheet" href="{{asset('front/css/owl.carousel.css')}}" />
        <link rel="stylesheet" href="{{asset('front/css/owl.theme.css')}}" />
        <link rel="stylesheet" href="{{asset('front/css/owl.transitions.css')}}" />

        <!-- Custom styles for this template -->
        <link href="{{asset('front/css/menu.css')}}" rel="stylesheet">
        <link href="{{asset('front/css/style.css')}}" rel="stylesheet">

        <!--Template Color-->
        <link href="{{asset('front/css/colors/default.css')}}" rel="stylesheet">

    </head>

    <body>
        <a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-end">
            <i class="mdi mdi-weather-sunny mode-light"></i>
            <i class="mdi mdi-weather-night mode-dark"></i>
        </a>
        <!-- Navigation Bar-->
        <header id="topnav" class="defaultscroll fixed-top sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a href="index.html" class="logo text-uppercase">
                        <img src="images/logo-light.png" alt="" class="logo-light" height="38" />
                        <img src="images/logo-dark.png" alt="" class="logo-dark" height="38" />
                    </a>
                </div>
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu">
                            <a href="#home">Home</a>
                            <span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li>
                                    <a href="index.html">Home Default </a>
                                </li>
                                <li>
                                    <a href="index-1.html"> Home Style - 1 </a>
                                </li>
                                <li class="has-submenu">
                                    <a href="index-2.html"> Home Style - 2 </a>
                                </li>
                                <li class="has-submenu">
                                    <a href="index-3.html"> Home Style - 3 </a>
                                </li>
                                <li class="has-submenu">
                                    <a href="index-4.html"> Home Style - 4 </a>
                                </li>
                                <li class="has-submenu">
                                    <a href="index-5.html"> Home Style - 5 </a>
                                </li>
                                <li class="has-submenu">
                                    <a href="index-6.html"> Home Style - 6 </a>
                                </li>
                                <li class="has-submenu">
                                    <a href="index-7.html"> Home Style - 7 </a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#features">features</a>
                        </li>
                        <li class="">
                            <a href="#pricing">Pricing</a>
                        </li>
                        <li class="has-submenu">
                            <a href="#">Pages</a>
                            <span class="menu-arrow"></span>

                            <ul class="submenu">
                                <li>
                                    <a href="about.html">About Us </a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="services.html">Services</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="login.html">Log In</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="signup.html">Sign Up</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="faq.html">FAQ</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="job.html">Jobs</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Sub Menu</a>
                                    <span class="menu-arrow submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="#">Sub Menu Item 1</a></li>
                                        <li><a href="#">Sub Menu Item 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="contact.html">Contact</a>
                        </li>

                        <li class="">
                            <a href="signup.html" class="btn-custom btn-rounded">Try it free</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <!-- Home -->
        <section class="home-height-half bg-home" id="home">
            <!-- <div class="bg-overlay-gredient"></div> -->
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 text-center">
                                <h6 class="home-title text-white">Montia -  A Beautiful Responsive Bootstrap 5 Landing Page Template </h6>
                                <p class="pt-4 home-sub-title text-white mx-auto">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo eget dolor Cum sociis natoque penatibus.</p>
                                <div class="pt-4">
                                    <a href="contact.html" class="btn btn-custom btn-rounded"><span>Contact Us</span></a>
                                    <a href="http://vimeo.com/99025203" class="video-play-icon-trigger text-white ml-2"><i class="mdi mdi-play"></i> <span> WATCH VIDEO</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Home end -->

        <!-- How do work -->
        <section class="section services-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="title">How it work ?</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="service-boxed">
                            <img src="images/icons/svg/Chart.svg" alt="service-icon-img" class="service-icon" />
                            <div class="service-body">
                                <h5>Pre-Planning</h5>
                                <p>
                                    Lorem ipsum dolor sit amet consectetuer adipiscing elit, Aenean commodo ligula eget dolor Aenean elight massa.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-boxed">
                            <img src="images/icons/svg/Rainumbrella.svg" alt="service-icon-img" class="service-icon" />
                            <div class="service-body">
                                <h5>Perfect Design</h5>
                                <p>
                                    Lorem ipsum dolor sit amet consectetuer adipiscing elit, Aenean commodo ligula eget dolor Aenean elight massa.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-boxed">
                            <img src="images/icons/svg/Dollarbag.svg" alt="service-icon-img" class="service-icon" />
                            <div class="service-body">
                                <h5>Communication</h5>
                                <p>
                                    Lorem ipsum dolor sit amet consectetuer adipiscing elit, Aenean/ commodo ligula eget dolor Aenean elight massa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- How do work end  -->

        <!-- More Features -->
        <section class="section bg-light" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="title">Awsome New Features</h3>
                    </div>
                </div>
                <div class="row vertical-content justify-content-center pb-4">
                    <div class="col-lg-6">
                        <div>
                            <img src="images/icons/svg/Moviecam.svg" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="more-features">
                            <i class="mbri-idea"></i>
                            <h4 class="pt-4">Fully Responsive Bootstrap</h4>
                            <p class="text-muted preference-subtitle mt-3 mb-0">Lorem ipsum dolor sit amet consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa Lorem ipsum dolor sit amet.</p>

                            <p class="text-muted preference-subtitle mt-3 mb-0">Lorem ipsum dolor sit amet consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa Lorem ipsum dolor sit amet.</p>

                            <a href="#" class="text-custom preference-more">Learn More.....</a>
                        </div>
                    </div>
                </div>
                <div class="row vertical-content mt-4 justify-content-center">
                    <div class="col-lg-6">
                        <div class="more-features">
                            <i class="mbri-like"></i >
                            <h4 class="pt-4">Works on all platforms</h4>
                            <p class="text-muted preference-subtitle mt-3 mb-0">Lorem ipsum dolor sit amet consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa Lorem ipsum dolor sit amet.</p>

                            <p class="text-muted preference-subtitle mt-3 mb-0">Lorem ipsum dolor sit amet consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa Lorem ipsum dolor sit amet.</p>

                            <a href="#" class="text-custom preference-more">Learn More.....</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img src="images/icons/svg/Paperdesk.svg" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div>    
            </div>
        </section>
        <!-- More Features end -->

        <!-- video -->
        <section class="section">
            <div class="container">
                <div class="row vertical-content ">
                    <div class="col-lg-6 col-md-6 mr-auto">
                        <div class="video-intro">
                            <article>
                                <h2 class="">Video For Landing Page</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies  pellentesque pretium</p>
                                <a href="signup.html" class="btn btn-custom btn-rounded mt-3 mb-4">Try it free</a>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="video-play-bar">
                            <a href="https://vimeo.com/109054393" class="video-play-icon-trigger"><i class="play-video-btn mdi mdi-play play-position"></i> </a>
                            <img src="images/Mac-Display-Mockup.jpg" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- video end -->

        <!--cta -->
        <section class="section bg-cta">
            <div class="program-bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center" id="counter">
                    <div class="col-md-3 text-white text-center pt-3 pb-3">
                        <div class="counter-icon">
                            <i class="mbri-timer"></i>
                        </div>
                        <h1 class="counter-value" data-count="1200">0</h1>
                        <h4 class="counter-name">Working Hours</h4>
                    </div>

                    <div class="col-md-3 text-white text-center pt-3 pb-3">
                        <div class="counter-icon">
                            <i class="mbri-bookmark"></i>
                        </div>
                        <h1 class="counter-value" data-count="5000">10</h1>
                        <h4 class="counter-name">Reviewers</h4>
                    </div>

                    <div class="col-md-3 text-white text-center pt-3 pb-3">
                        <div class="counter-icon">
                            <i class="mbri-hot-cup"></i>
                        </div>
                        <h1 class="counter-value" data-count="5645">608</h1>
                        <h4 class="counter-name">Cups Of Coffee</h4>
                    </div>
                    <div class="col-md-3 text-white text-center pt-3 pb-3">
                        <div class="counter-icon">
                            <i class="mbri-database"></i>
                        </div>
                        <h1 class="counter-value" data-count="800">2</h1>
                        <h4 class="counter-name">App Download</h4>
                    </div>
                </div>
            </div>
        </section>
        <!--funfact end-->

        <!-- team -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-center">We Are The Best Team</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="team">
                            <div class="item">
                                <div class="team-box">
                                    <img src="images/team/team-1.jpg" alt="" class="img-fluid team-img">
                                    <div class="team-info">
                                        <div class="text-center">
                                            <h5 class="pt-3">James Nemeth</h5>
                                            <p class="text-uppercase text-muted"><small> Designer </small></p>
                                            <p class="team-desc">Lorem ipsum dolor sit amet rawt ut consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="team-box">
                                    <img src="images/team/team-3.jpg" alt="" class="img-fluid team-img">
                                    <div class="team-info">
                                        <div class="text-center">
                                            <h5 class="pt-3">Terry Smith</h5>
                                            <p class="text-uppercase text-muted"><small>CEO / Founder </small></p>
                                            <p class="team-desc">Lorem ipsum dolor sit amet rawt ut consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="team-box">
                                    <img src="images/team/team-5.jpg" alt="" class="img-fluid team-img">
                                    <div class="team-info">
                                        <div class="text-center">
                                            <h5 class="pt-3">Juliana Waddell</h5>
                                            <p class="text-uppercase text-muted"><small>Product </small></p>
                                            <p class="team-desc">Lorem ipsum dolor sit amet rawt ut consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="team-box">
                                    <img src="images/team/team-2.jpg" alt="" class="img-fluid team-img">
                                    <div class="team-info">
                                        <div class="text-center">
                                            <h5 class="pt-3">Andrew Sparks</h5>
                                            <p class="text-uppercase text-muted"><small> Founder</small></p>
                                            <p class="team-desc">Lorem ipsum dolor sit amet rawt ut consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="team-box">
                                    <img src="images/team/team-4.jpg" alt="" class="img-fluid team-img">
                                    <div class="team-info">
                                        <div class="text-center">
                                            <h5 class="pt-3">Jennifer Lawson</h5>
                                            <p class="text-uppercase text-muted"><small>Designer </small></p>
                                            <p class="team-desc">Lorem ipsum dolor sit amet rawt ut consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team end -->

        <!-- Subscribe form -->
        <section class="section bg-subscriber">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-center text-white">SUBSCRIBE & GET AWSOME UPDATE</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center search-form">
                            <form action="#">
                                <input type="text" placeholder="Enter Email Address">
                                <button type="submit" class="btn btn-custom">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Subscribe form end  -->

        <!-- More features -->
        <section class="section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-center">Amazing Features</h3>
                    </div>
                </div>
                <div class="row vertical-content">
                    <div class="col-lg-6 col-md-12 mr-auto">
                        <div>
                            <div class="text-left feauters-box feauters-box-right mt-2">
                                <i class="mbri-wifi"></i>
                                <div class="feauters-content">
                                    <h5 class="feauters-title">Easy & secure access</h5>
                                    <p class="feauters-subtitle text-muted pt-2">Nam auctor porta metus ultricies pretium. Cras lacus erat, commodo nec finibus in, pulvinar sit amet nisi.</p>
                                </div>
                            </div>
                            <div class="text-left feauters-box feauters-box-right mt-2">
                                <i class="mbri-music"></i>
                                <div class="feauters-content">
                                    <h5 class="feauters-title">Easy and free to paid</h5>
                                    <p class="feauters-subtitle text-muted pt-2"> Nam auctor porta metus ultricies pretium. Cras lacus erat, commodo nec finibus in, pulvinar sit amet nisi. </p>
                                </div>
                            </div>
                            <div class="text-left feauters-box feauters-box-right mt-2">
                                <i class="mbri-share"></i>
                                <div class="feauters-content">
                                    <h5 class="feauters-title"> Fast Easy and Secure</h5>
                                    <p class="feauters-subtitle text-muted pt-2">Nam auctor porta metus ultricies pretium. Cras lacus erat, commodo nec finibus in, pulvinar sit amet nisi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 pl-0 pr-0">
                        <img src="images/macbook.png" alt="" class="img-fluid m-l-auto">
                    </div>
                </div>
            </div>
        </section>
        <!-- More features end -->

        <!-- Testimonial -->
        <section class="section bg-gradient">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="title text-white mb-5">What Users Say </h3>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8 owl-carousel owl-theme" id="owl-demo">
                        <div class="item">
                            <div class="p-3 text-center testimonial-box">
                                <div class="testi-img">
                                    <img src="images/users/user-1.jpg" alt="" class="img-fluid mx-auto d-block rounded-circle">
                                </div>
                                <p class="testi-rate mt-2 mb-1">
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                </p>
                                <div class="testi-desc text-white">
                                    <h5 class="font-weight-bold">Steven Dugas</h5>
                                    <p class="text-white mt-3">"Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet."</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="p-3 text-center testimonial-box">
                                <div class="testi-img">
                                    <img src="images/users/user-2.jpg" alt="" class="img-fluid mx-auto d-block rounded-circle">
                                </div>
                                <p class="testi-rate mt-2 mb-1">
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                </p>
                                <div class="testi-desc">
                                    <h5 class="font-weight-bold text-white">Lioyd Brewer</h5>
                                    <p class="text-white mt-3">"Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet."</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="p-3 text-center testimonial-box">
                                <div class="testi-img">
                                    <img src="images/users/user-3.jpg" alt="" class="img-fluid mx-auto d-block rounded-circle">
                                </div>
                                <p class="testi-rate mt-2 mb-1">
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                </p>
                                <div class="testi-desc">
                                    <h5 class="font-weight-bold text-white">Johnie Reveles</h5>
                                    <p class="text-white mt-3">"Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial -->

        <!-- Pricing -->
        <section class="section" id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="title">Plan We Offer</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="program-box mt-3">
                            <div class="program-image">
                                <div class="program-bg-overlay program-bgoverlay-1"></div>
                                <h4 class="text-white text-center heading-price">ECONOMY</h4>
                            </div>
                            <div class="process-icon text-center">
                                <p class="price-tag-size"><sup>$</sup>29<span>/mo </span></p>
                            </div>
                            <div class="p-3 text-center">
                                <!-- <h5 class="text-uppercase font-weight-bold pt-3">Ios Swift</h5> -->
                                <ul class="mb-0 list-inline mt-4 program-list">
                                    <li class="">50GB Disk Space</li>
                                    <li class="">50 Email Accounts</li>
                                    <li class="">High Speed Internet</li>
                                    <li class="">50GB Monthly Bandwidth</li>
                                    <li class="">10 subdomains</li>
                                    <li class="">15 Domains</li>
                                </ul>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn btn-custom btn-rounded text-uppercase mt-4">Join Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="program-box mt-3">
                            <div class="program-image">
                                <div class="program-bg-overlay program-bgoverlay-2"></div>
                                <h4 class="text-white text-center heading-price">DELUXE</h4>
                            </div>
                            <div class="process-icon text-center">
                                <p class="price-tag-size"><sup>$</sup>89<span>/mo </span></p>
                            </div>
                            <div class="p-3 text-center">
                                <!-- <h5 class="text-uppercase font-weight-bold pt-3">Ruby on rails</h5> -->
                                <ul class="mb-0 list-inline mt-4 program-list">
                                    <li class="">100GB Disk Space</li>
                                    <li class="">100 Email Accounts</li>
                                    <li class="">High Speed Internet</li>
                                    <li class="">100GB Monthly Bandwidth</li>
                                    <li class="">20 subdomains</li>
                                    <li class="">30 Domains</li>
                                </ul>
                            </div>
                            <div class="text-center pt-4">
                                <a href="#" class="btn btn-custom btn-rounded text-uppercase">Join Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="program-box mt-3">
                            <div class="program-image">
                                <div class="program-bg-overlay program-bgoverlay-3"></div>
                                <h4 class="text-white text-center heading-price">ULTIMATE</h4>
                            </div>
                            <div class="process-icon text-center">
                                <p class="price-tag-size"><sup>$</sup>99<span>/mo </span></p>
                            </div>
                            <div class="p-3 text-center">
                                <!-- <h5 class="text-uppercase font-weight-bold pt-3">Python</h5> -->
                                <ul class="mb-0 list-inline mt-4 program-list">
                                    <li class="">1500GB Disk Space</li>
                                    <li class="">150 Email Accounts</li>
                                    <li class="">High Speed Internet</li>
                                    <li class="">150GB Monthly Bandwidth</li>
                                    <li class="">50 subdomains</li>
                                    <li class="">50 Domains</li>
                                </ul>
                            </div>
                            <div class="text-center pt-4">
                                <a href="#" class="btn btn-custom btn-rounded text-uppercase">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing end -->

        <!-- Client Slider -->
        <section class="section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="title">Trusted by Thousands</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="client-images">
                            <img src="images/clients/1.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <!-- slider item -->
                    <div class="col-lg-2">
                        <div class="client-images">
                            <img src="images/clients/2.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <!-- slider item -->
                    <div class="col-lg-2">
                        <div class="client-images">
                            <img src="images/clients/3.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <!-- slider item -->
                    <div class="col-lg-2">
                        <div class="client-images">
                            <img src="images/clients/4.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <!-- slider item -->
                    <div class="col-lg-2">
                        <div class="client-images">
                            <img src="images/clients/5.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <!-- slider item -->
                    <div class="col-lg-2">
                        <div class="client-images">
                            <img src="images/clients/6.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <!-- slider item -->
                </div>
            </div>
        </section>
        <!-- Client Slider end-->

        <!-- Footer -->
        <section class="bg-dark footer" id="contact">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-lg-4">
                        <h5 class="text-white footer-title ">About Montia</h5>
                        <div class="mt-4">
                            <p class="footer-desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                        <div class="mt-4">
                            <ul class="list-unstyled text-white footer-social list-inline">
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-instagram instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-linkedin linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h5 class="text-white footer-title">Support</h5>
                        <div class="mt-4">
                            <ul class="list-unstyled text-white footer-list">
                                <li><a href="#">Help & Support</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h5 class="text-white footer-title">Social links</h5>
                        <div class="mt-4">
                            <ul class="list-unstyled footer-list">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Behance</a></li>
                                <li><a href="#">Dribbble</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <h5 class="text-white footer-title">Get in touch</h5>
                        <div class="mt-4">
                            <p>Europe: +1 00 12 34 5</p>
                            <p>US: +1 67 89 01 23 4</p>
                            <p>Canada: +1 00 12 34 5</p>
                            <p>support@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="footer-border"></div>
                <div class="row pb-4">
                    <div class="col-lg-12">
                        <div class="float-end">
                            <p class="mb-0">© Montia <script>document.write(new Date().getFullYear())</script>.</p>
                        </div>
                        <div class="float-start">
                            <p class="footer-terms"><a href="#">Terms</a> & <a href="#">Privacy Policy </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer end -->

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{asset('front/js/jquery.min.js')}}"></script>
        <script src="{{asset('front/js/popper.min.js')}}"></script>
        <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('front/js/jquery.easing.min.js')}}"></script>
        <script src="{{asset('front/js/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('front/js/owl.carousel.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('front/js/waypoints.min.js')}}"></script>
        <script src="{{asset('front/js/jquery.counterup.min.js')}}"></script>
        <!--common script for all pages-->
        <script src="{{asset('front/js/jquery.app.js')}}"></script>
        <script type="text/javascript">
            var a = 0;
            $(window).scroll(function() {
                var oTop = $('#counter').offset().top - window.innerHeight;
                if (a == 0 && $(window).scrollTop() > oTop) {
                    $('.counter-value').each(function() {
                        var $this = $(this),
                            countTo = $this.attr('data-count');
                        $({
                            countNum: $this.text()
                        }).animate({
                                countNum: countTo
                            },

                            {
                                duration: 2000,
                                easing: 'swing',
                                step: function() {
                                    $this.text(Math.floor(this.countNum));
                                },
                                complete: function() {
                                    $this.text(this.countNum);
                                    //alert('finished');
                                }

                            });
                    });
                    a = 1;
                }
            });
        </script>
    </body>
</html>