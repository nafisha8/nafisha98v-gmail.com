<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from lineartheme.com/themes/becharity/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:14:11 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>beCharity HTML5 responsive charity theme</title>

    <!--Fav and touch icons-->
    <link rel="icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">

    <!--Common Styles Plugins-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <!--Custom Style-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="space.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>    
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader-inner">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>

    <!-- header -->
    <div id="header--fixed" class="header">
        <div class="nav-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-5 col-lg-4">
                        <div class="phone">
                            <i class="fa fa-volume-control-phone"></i>+ 215 1256 845
                        </div>
                        <div class="email">
                            <i class="fa fa-envelope"></i>info@becharity.com
                        </div>
                        <a href="donation.php" class="btn btn-red">Donate</a>
                    </div>
                    <div class="hidden-xs hidden-sm col-md-3 col-lg-4 ">
                        <form class="top-search" action="#">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-addon">
                                        <input type="submit" value="Search">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="hidden-xs col-sm-6 col-md-4 col-lg-4">
                        <div class="social">
                            <a class="icon-facebook" href="#"><i class="fa fa-facebook-square"></i></a>
                            <a class="icon-twitter" href="#"><i class="fa fa-twitter-square"></i></a>
                            <a class="icon-pinterest" href="#"><i class="fa fa-pinterest-square"></i></a>
                            <a class="icon-google-plus" href="#"><i class="fa fa-google-plus-square"></i></a>
                        </div>
                        <a class="join-top" href="login.php"><i class="fa fa-user-circle"></i>JOIN</a>
                        <div class="dropdown currency-switchr">
                            <button class="currency-btn" id="currency" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-globe"></i>URO
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="currency">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">AUD</a></li>
                            </ul>
                        </div>
                        <div class="dropdown language-switchr">
                            <button class="language-btn" id="language" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-globe"></i>ENG
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="language">
                                <li><a href="#">SPN</a></li>
                                <li><a href="#">GER</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="main-nav" class="main-nav">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index-2.php"><img class="retina" src="images/logo.png" alt="logo"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="main-navbar">
                        <ul class="nav navbar-nav navbar-left">
                            <li><a href="index-2.php">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Page <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown dropdown-submenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cause</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="cause.php">Cause</a></li>
                                            <li><a href="cause-details.php">Cause Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-submenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="our-team.php">Our Team</a></li>
                                            <li><a href="our-partner.php">Our Pertnar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="faq.php">FAQ</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="404.php">404 Page</a></li>
                                    <li><a href="element.php">Element</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Event <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="event.php">Event</a></li>
                                    <li><a href="event-details.php">Event Details</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="blog-2.php">Blog 2</a></li>
                                    <li><a href="single-blog.php">Single Blog</a></li>
                                    <li><a href="search-archive.php">Search Archive</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="shop.php">Shop</a></li>
                                    <li><a href="product.php">Product</a></li>
                                    <li><a href="cart.php">Cart</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="register.php">Register</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right hidden-xs">
                            <li class="top-cart">
                                <i class="fa fa-shopping-bag"></i>
                                <a href="cart.php" class="top-amount">$0.00</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    
    <!-- Home Slider -->
    <div class="home-slider">
        <div class="item">
            <div class="slider-image">
                <img alt="slide" src="images/slider/slider-1.jpg">
            </div>
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Contrary to popular rorem is simply</h2>
                            <p>Contrary to popular belief, rorem is not simply random text. Contrary to popular belief, rorem is not simply random text.</p>
                            <a class="btn btn-red" href="#">Donet NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-image">
                <img alt="slide" src="images/slider/slider-2.jpg">
            </div>
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Contrary to popular rorem is simply</h2>
                            <p>Contrary to popular belief, rorem is not simply random text. Contrary to popular belief, rorem is not simply random text.</p>
                            <a class="btn btn-red" href="#">Donet NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-image">
                <img alt="slide" src="images/slider/slider-4.jpg">
            </div>
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Contrary to popular rorem is simply</h2>
                            <p>Contrary to popular belief, rorem is not simply random text. Contrary to popular belief, rorem is not simply random text.</p>
                            <a class="btn btn-red" href="#">Donet NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fun Fact -->
    <div class="fun-fact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 single-fact">
                    <div class="facet-overlay"></div>
                    <div class="fact-wrap">
                        <div class="fact-icon"><i class="fa fa-plug" aria-hidden="true"></i></div>
                        <div class="fact-details">
                            <div class="fact-count">78,520</div>
                            <div class="fact-info">Volunteer with us</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 single-fact">
                    <div class="facet-overlay"></div>
                    <div class="fact-wrap">
                        <div class="fact-icon"><i class="fa fa-yelp" aria-hidden="true"></i></div>
                        <div class="fact-details">
                            <div class="fact-count">9,821</div>
                            <div class="fact-info">Donors trust us</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 single-fact">
                    <div class="facet-overlay"></div>
                    <div class="fact-wrap">
                        <div class="fact-icon"><i class="fa fa-forumbee" aria-hidden="true"></i></div>
                        <div class="fact-details">
                            <div class="fact-count">25,003</div>
                            <div class="fact-info">Causes are completed</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 single-fact">
                    <div class="facet-overlay"></div>
                    <div class="fact-wrap">
                        <div class="fact-icon"><i class="fa fa-heartbeat" aria-hidden="true"></i></div>
                        <div class="fact-details">
                            <div class="fact-count">103,210</div>
                            <div class="fact-info">Peoples are helped</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Intro -->
    <div class="intro pd-top-100 pd-bottom-100 text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h1 class="intro-title">Welcome to <span>beCharity</span></h1>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Cause -->
    <div class="recent-cause pd-top-80 pd-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">Recent cause <i class="fa fa-flag"></i></h2>
                </div>
                <div class="col-sm-4 recent-cause-list">
                    <img alt="cause" src="images/causes/9.jpg">
                    <div class="recent-cause-summary">
                        <div class="recent-cause-content">
                            <h3 class="recent-cause-title"><a href="#">Help Children to make a better life</a></h3>
                            <div class="cause-location"><i class="fa fa-globe" aria-hidden="true"></i> <a href="#">Nagasaki,</a> <a href="#">Japan</a></div>
                            <div class="cause-tags"><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">Children,</a> <a href="#">Sports,</a> <a href="#">Education</a></div>
                            <a class="btn mg-top-40">Donate</a>
                        </div>
                        <div class="recent-cause-funding">
                            <div class="fund-line">
                                <div class="fill" style="height: 56%;"></div>
                            </div>
                            <div class="fund-percent">56%</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 recent-cause-list">
                    <img alt="cause" src="images/causes/8.jpg">
                    <div class="recent-cause-summary">
                        <div class="recent-cause-content">
                            <h3 class="recent-cause-title"><a href="#">Children Needs More Foods and Water</a></h3>
                            <div class="cause-location"><i class="fa fa-globe" aria-hidden="true"></i> <a href="#">Nagasaki,</a> <a href="#">Japan</a></div>
                            <div class="cause-tags"><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">Children,</a> <a href="#">Sports,</a> <a href="#">Education</a></div>
                            <a class="btn mg-top-40">Donate</a>
                        </div>
                        <div class="recent-cause-funding">
                            <div class="fund-line">
                                <div class="fill" style="height: 56%;"></div>
                            </div>
                            <div class="fund-percent">56%</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 recent-cause-list">
                    <img alt="cause" src="images/causes/7.jpg">
                    <div class="recent-cause-summary">
                        <div class="recent-cause-content">
                            <h3 class="recent-cause-title"><a href="#"> Nation to engage in the fight against hunger</a></h3>
                            <div class="cause-location"><i class="fa fa-globe" aria-hidden="true"></i> <a href="#">Nagasaki,</a> <a href="#">Japan</a></div>
                            <div class="cause-tags"><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">Children,</a> <a href="#">Sports,</a> <a href="#">Education</a></div>
                            <a class="btn mg-top-40">Donate</a>
                        </div>
                        <div class="recent-cause-funding">
                            <div class="fund-line">
                                <div class="fill" style="height: 56%;"></div>
                            </div>
                            <div class="fund-percent">56%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Event -->
    <div class="event-section pd-top-80">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">Upcoming Events <i class="fa fa-star"></i></h2>
                </div>
                <div id="event-carousel" class="event-carousel owl-carousel" style="clear: left;">
                    <div class="item equal-height-wrap">
                        <div class="col-sm-6 no-pad equal-height-inner">
                            <img src="images/event/event-1.jpg" alt="carousel">
                        </div>
                        <div class="col-sm-6 no-pad bg equal-height-inner">
                            <div class="slide-detels">
                                <div class="eventcount" id="count1"></div>
                                <h3 class="slide-title">Supporting childhood nutrition programs </h3>
                                <p class="sort-content">Diam graeco . Sed et mutat splendide, cum te labore virtute urbanitas. Duo at aeque exerci philosophia.Diam graeco sententiae cu vel, ad esse purto ubique vim. Mea in semper patrioque interesset. Sed et mutat splendide, cum te labore virtute urbanitas. Duo at aeque exerci philosophia.</p>
                                <div class="slide-meta">
                                    <span><i class="fa fa-calendar-o"></i>21 November, 2016</span>
                                    <span><i class="fa fa-clock-o"></i>10 : 30am</span>
                                </div>
                                <div class="slide-meta">
                                    <span><i class="fa fa-font-awesome"></i>Convetion Hall, Las vegus, USA</span>
                                </div>
                                <div class="speaker">
                                    <div class="speaker-text">
                                        <i class="fa fa-bullhorn"></i>Speakers
                                    </div>
                                    <div class="speaker-thumb">
                                        <img src="images/event/speaker/1.jpg" alt="speaker">
                                        <img src="images/event/speaker/2.jpg" alt="speaker">
                                        <img src="images/event/speaker/3.jpg" alt="speaker">
                                    </div>
                                </div>
                                <div class="join-list">
                                    <a class="btn" href="#">JOIN NOW</a>
                                    <div class="social-icon">
                                        <a href="#"><i class="fa fa-facebook-official"></i></a>
                                        <a href="#"><i class="fa fa-twitter-square"></i></a>
                                        <a href="#"><i class="fa fa-google-plus-square"></i></a>
                                        <a href="#"><i class="fa fa-share-square"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item equal-height-wrap">
                        <div class="col-sm-6 no-pad equal-height-inner">
                            <img src="images/event/event-2.jpg" alt="carousel">
                        </div>
                        <div class="col-sm-6 no-pad bg equal-height-inner">
                            <div class="slide-detels">
                                <div class="eventcount" id="count2"></div>
                                <h3 class="slide-title">Nusquam adipisci hendrerit adcum dicea.</h3>
                                <p class="sort-content">Diam graeco . Sed et mutat splendide, cum te labore virtute urbanitas. Duo at aeque exerci philosophia.Diam graeco sententiae cu vel, ad esse purto ubique vim. Mea in semper patrioque interesset. Sed et mutat splendide, cum te labore virtute urbanitas. Duo at aeque exerci philosophia.</p>
                                <div class="slide-meta">
                                    <span><i class="fa fa-calendar-o"></i>21 November, 2016</span>
                                    <span><i class="fa fa-clock-o"></i>10 : 30am</span>
                                </div>
                                <div class="slide-meta">
                                    <span><i class="fa fa-font-awesome"></i>Convetion Hall, Las vegus, USA</span>
                                </div>
                                <div class="speaker">
                                    <div class="speaker-text">
                                        <i class="fa fa-bullhorn"></i>Speakers
                                    </div>
                                    <div class="speaker-thumb">
                                        <img src="images/event/speaker/4.jpg" alt="speaker">
                                        <img src="images/event/speaker/5.jpg" alt="speaker">
                                        <img src="images/event/speaker/6.jpg" alt="speaker">
                                    </div>
                                </div>
                                <div class="join-list">
                                    <a class="btn" href="#">JOIN NOW</a>
                                    <div class="social-icon">
                                        <a href="#"><i class="fa fa-facebook-official"></i></a>
                                        <a href="#"><i class="fa fa-twitter-square"></i></a>
                                        <a href="#"><i class="fa fa-google-plus-square"></i></a>
                                        <a href="#"><i class="fa fa-share-square"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog -->
    <div id="blog" class="blog-section pd-top-80 pd-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">Latest Blogs <i class="fa fa-file-text-o"></i></h2>
                </div>
                <div class="col-sm-4">
                    <div class="blog-single">
                        <div class="thumb">
                            <img alt="blog" src="images/blog/1.jpg">
                        </div>
                        <div class="post-desk">
                            <div class="post-meta">
                                <span class="meta-left"><i class="fa fa-tags"></i><a href="#">Children</a>, <a href="#">Sports</a>, <a href="#">Education</a></span>
                                <span class="meta-right"><i class="fa fa-comments-o"></i>16</span>
                            </div>
                            <h3 class="title"><a href="#">Get doctor idea festival of the 2017</a></h3>
                            <p class="category-meta"><i class="fa fa-folder-open" aria-hidden="true"></i><a href="#">Sports</a>, <a href="#">education</a>, <a href="#">Freedom</a></p>
                        </div>
                        <div class="post-author">
                            <div class="thumb">
                                <img src="images/author/1.jpg" alt="author">
                            </div>
                            <div class="name">
                                Johan Doe
                            </div>
                        </div>
                    </div>
                    <!-- /.end blog single -->
                </div>
                <div class="col-sm-4">
                    <div class="blog-single">
                        <div class="thumb">
                            <img alt="blog" src="images/blog/2.jpg">
                        </div>
                        <div class="post-desk">
                            <div class="post-meta">
                                <span class="meta-left"><i class="fa fa-tags"></i><a href="#">Children</a>, <a href="#">Sports</a>, <a href="#">Education</a></span>
                                <span class="meta-right"><i class="fa fa-comments-o"></i>16</span>
                            </div>
                            <h3 class="title"><a href="#">Build school for poor child rens life</a></h3>
                            <p class="category-meta"><i class="fa fa-folder-open" aria-hidden="true"></i><a href="#">Sports</a>, <a href="#">education</a>, <a href="#">Freedom</a></p>
                        </div>
                        <div class="post-author">
                            <div class="thumb">
                                <img src="images/author/2.jpg" alt="author">
                            </div>
                            <div class="name">
                                Adam Milne
                            </div>
                        </div>
                    </div>
                    <!-- /.end blog single -->
                </div>
                <div class="col-sm-4">
                    <div class="blog-single">
                        <div class="thumb">
                            <img alt="blog" src="images/blog/3.jpg">
                        </div>
                        <div class="post-desk">
                            <div class="post-meta">
                                <span class="meta-left"><i class="fa fa-tags"></i><a href="#">Children</a>, <a href="#">Sports</a>, <a href="#">Education</a></span>
                                <span class="meta-right"><i class="fa fa-comments-o"></i>16</span>
                            </div>
                            <h3 class="title"><a href="#">Help promote education in the world</a></h3>
                            <p class="category-meta"><i class="fa fa-folder-open" aria-hidden="true"></i><a href="#">Sports</a>, <a href="#">education</a>, <a href="#">Freedom</a></p>
                        </div>
                        <div class="post-author">
                            <div class="thumb">
                                <img src="images/author/3.jpg" alt="author">
                            </div>
                            <div class="name">Jim Carry</div>
                        </div>
                    </div>
                    <!-- /.end blog single -->
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery -->
    <div class="home-gallery pd-top-80">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">Photos</h2>
                </div>
                <div class="col-sm-12 total-photo">
                    <div class="photo-carousel">
                        <div class="item">
                            <img alt="gallery" src="images/gallery/index-gellary-1%402x.jpg">
                        </div>
                        <div class="item">
                            <img alt="gallery" src="images/gallery/index-gellary-2%402x.jpg">
                        </div>
                        <div class="item">
                            <img alt="gallery" src="images/gallery/index-gellary-3%402x.jpg">
                        </div>
                        <div class="item">
                            <img alt="gallery" src="images/gallery/index-gellary-4%402x.jpg">
                        </div>
                        <div class="item">
                            <img alt="gallery" src="images/gallery/index-gellary-5%402x.jpg">
                        </div>
                        <div class="item">
                            <img alt="gallery" src="images/gallery/index-gellary-6%402x.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Clients -->
    <div class="clients pd-top-80 pd-bottom-85" data-animation="fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">Our Client <i class="fa fa-user"></i></h2>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                    <img src="images/partner/1.png" alt="client">
                </div>
                <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                    <img src="images/partner/2.png" alt="client">
                    </div>
                <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                    <img src="images/partner/3.png" alt="client">
                    </div>
                <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                    <img src="images/partner/4.png" alt="client">
                    </div>
                <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                    <img src="images/partner/5.png" alt="client">
                    </div>
                <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                    <img src="images/partner/1.png" alt="client">
                </div>
            </div>
        </div>
    </div>

    <!-- Call to action -->
    <div class="call-to-action pd-top-80 pd-bottom-100">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Want to be a Volentaree?</h2>
                    <p>Join With us fo Have any followers yet</p>
                    <a class="btn btn-red mg-top-30" href="#">Join Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial -->
    <div id="testimonials" class="testimonial-section pd-top-80 pd-bottom-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">Testimonials <i class="fa fa-heart"></i></h2>
                </div>
                <div class="col-sm-12 testimonial-carousel owl-carousel">
                    <div class="item">
                        <h3 class="tm-title">Great job I've ever had</h3>
                        <p>
                            Contrary to popular belief, rorem ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                        </p>
                        <img src="images/reviewer/1.jpg" alt="client">
                        <div class="testimonial-client">John Doe <span>Assistant Manager, GSM Group</span></div>
                    </div>
                    <div class="item">
                        <h3 class="tm-title">First true generator on the Interne</h3>
                        <p>
                            Standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                        </p>
                        <img src="images/reviewer/2.jpg" alt="client">
                        <div class="testimonial-client">John Doe <span>Assistant Manager, GSM Group</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newletter -->
    <div class="newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-3">
                            <h2 class="title">Newsletter</h2>
                            <p>Submit email to subscribe for newsletter</p>
                        </div>
                        <div class="col-sm-9">
                            <form class="newsletter-form">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="exampleInputAmount">
                                        <div class="input-group-addon search-button">
                                            <button class="btn btn-red" type="submit">SUBSCRIBE</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer-section">
        <div class="footer-top pd-top-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 footer-widget">
                        <div class="footer-logo">
                            <img class="retina" src="images/logo-footer.png" alt="logo">
                            <p>Lorem ipsum dolor sit amet, his ferri probatus neglegentur te, eum affert legere nominavi ad, eu enim semper dictas ius. Legimus delicata an sit. Sea ex nonumes molestie. Cu salutandi scribentur.</p>
                            <div class="footer-social">
                                <a href="#"><i class="fa fa-twitter-square"></i></a>
                                <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                <a href="#"><i class="fa fa-vimeo-square"></i></a>
                                <a href="#"><i class="fa fa-facebook-square"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-widget">
                        <div class="footer-address">
                            <h3 class="footer-title">Office address</h3>
                            <p>123 Imaginary Drive Danbury,
                                <br> Connecticut, USA</p>
                            <p>
                                <i class="fa fa-phone"></i>555.555.1234
                                <br>
                                <i class="fa fa-envelope-o"></i>hello@example.com
                            </p>
                            <div class="footer-map">
                                <a href="contact.php"><i class="fa fa-map-marker"></i>See in map</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-widget">
                        <h3 class="footer-title">Quick link</h3>
                        <ul>
                            <li><a href="#">Dolor sit amet, his ferri</a></li>
                            <li><a href="#">probatus neglegentur te,</a></li>
                            <li><a href="#">Affert legere nomina,</a></li>
                            <li><a href="#">Enim semper dictas</a></li>
                            <li><a href="#">Legimus delicata</a></li>
                            <li><a href="#">Nonumes molestie.</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-widget">
                        <h3 class="footer-title">Anual reports</h3>
                        <ul>
                            <li><a href="#">Reports 2016</a></li>
                            <li><a href="#">Commercial reports 2015,</a></li>
                            <li><a href="#">Sales report November, 2016</a></li>
                            <li><a href="#">Half yearly report Jan-Jun 2016</a></li>
                            <li><a href="#">Financial report 2014</a></li>
                            <li><a href="#">Technical report 2015</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span><a href="#">Tarms & Condition</a></span>
                        <span>&copy; 2017 beCharity</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Common JS Plugin-->
    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/retina.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/jquery.scrollUp.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/headroom.min.js"></script>
    <script type="text/javascript" src="js/jQuery.headroom.min.js"></script>
    <script type="text/javascript" src="js/sticky-kit.min.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/jquery.waypoints.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYMloK_kzsasOQXg-xhGxnwvlAU3HTZWg&amp;callback=initMap" async defer></script>

    <!-- Custom JS -->
    <script type="text/javascript" src="js/custom.js"></script>
</body>

<!-- Mirrored from lineartheme.com/themes/becharity/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:14:11 GMT -->
</html>
