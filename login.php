<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from lineartheme.com/themes/becharity/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:14:11 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Login | beCharity HTML5 responsive charity theme</title>

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
    <!-- header -->
  <?php require 'header.php';?>

    <!-- page title -->
    <div class="page-title-section">
        <div class="page-title-wrap">
            <div class="page-title-overlay"></div>
            <div class="page-title-info">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Login</li>
                </ol>
                <h1 class="page-title">Login Page</h1>
            </div>
        </div>
    </div>

    <!-- registar -->
    <div class="registar-section pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 contact-main col-sm-offset-3">
                    <h3 class="form-title">User Login</h3>
                    <form class="registar-form" action="checklogin.php" method="POST">
                        <label for="email">Email address</label>
                        <input id="email" class="input" type="text" name="email" placeholder="Enter Email " />
                        <label for="Password">Password</label>
                        <input id="Password" class="input" type="text" name="password" placeholder="Password" />
                        <div class="registar-check">
                            <input id="remember-check" class="checkbox" type="checkbox" />
                            <label for="remember-check">Remember me</label>
                        </div>
                        <input class="btn" type="submit" value="LOGIN" name="parent_login" />
                        <!-- <span class="rbtn-title">Need help? go to <a href="faq.php">FAQ</a></span> -->
                    </form>
                    <p class="rform-title">You are not a member! <a href="register.php">Register</a> here.</p>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- footer -->
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

<!-- Mirrored from lineartheme.com/themes/becharity/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:14:11 GMT -->
</html>
