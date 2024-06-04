<?php
session_start();
require 'common/dbconnect.php';
$qrys="SELECT * FROM state where Isactive=1";
$rss=mysqli_query($conn,$qrys);

$qryc="SELECT * FROM city where isactive=1";
$rsc=mysqli_query($conn,$qryc);

$qrya="SELECT * FROM area where Isactive=1";
$rsa=mysqli_query($conn,$qrya);

$qrysq="SELECT * FROM Security_question where Isactive=1";
$rssq=mysqli_query($conn,$qrysq);


?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from lineartheme.com/themes/becharity/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:18:15 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Register | beCharity HTML5 responsive charity theme</title>

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
                    <li class="active">Register Page</li>
                </ol>
                <h1 class="page-title">Register Page</h1>
            </div>
        </div>
    </div>

    <!-- registar -->

    <div class="registar-section pd-top-100 pd-bottom-100" id="p-register">
        <div class="container">

            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 contact-main">
                    <h3 class="form-title">Parent Registration form</h3>
                    <form class="registar-form" action="regpro.php" method="POST" enctype="multipart/form-data">
                        <label for="name">Name</label>
                        <input id="name" class="input" type="text" name="fn" placeholder="Full name" />
                        <label for="name">Email</label>
                        <input id="name" class="input" type="text" name="email" placeholder="Email" />
                        <label for="name">Contact</label>
                        <input id="name" class="input" type="text" name="contact" placeholder="Contacts" />
                        <label for="name">Gender</label>
                        <input id="" class="" type="radio" name="gender" placeholder="Full name" value="Male" />Male
                        <input id="name" class="" type="radio" name="gender" placeholder="Full name" value="Female" />Female<br>
                        <label for="name">Address</label>
                        <!-- <input id="name" class="input" type="text" placeholder="Full name" /> -->
                        <textarea class="input" name="address"></textarea>
                        <label for="name">Parent Category</label>
                        <select class="input" name="p_category">
                            <option>Couple</option>
                            <option>Single Mother</option>
                            <option>Single Father</option>
                        </select>
                        <label for="name">State Name</label>
                        <!-- <input id="name" class="input" type="text" name="state" placeholder="State name" /> -->
                        <select class="input" name="state">
                            <?php
                            
                            while($rows=mysqli_fetch_assoc($rss))
                            {
                            ?>
                            <option value="<?php echo $rows['Id'];?>"><?php echo $rows['State_name'];?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <label for="name">City Name</label>
                        <!--<input id="name" class="input" type="text" name="city" placeholder="City name" />-->
                       <select class="input" name="city">

                             <?php
                            while($rowc=mysqli_fetch_assoc($rsc))
                            {
                            ?>
                            <option value="<?php echo $rowc['id'];?>"><?php echo $rowc['city_name'];?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <label for="name">Area Name</label>
                       <!--put id="name" class="input" type="text" name="area" placeholder="Area name" />-->
                        <select class="input" name="area">
                            <?php
                            require 'common/dbconnect.php';
                            $qry2="SELECT * FROM area where isactive=1";
                            $rs2=mysqli_query($conn,$qry2);
                            while($row=mysqli_fetch_assoc($rs2))
                            {
                            ?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['area_name'];?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <label for="Password">Security Question</label>
                        <select class="input" name="q_id">
                        <?php
                        while($rowsq=mysqli_fetch_assoc($rssq))
                        {?>
                            <option value="<?php echo $rowsq['Question_id'];?>"><?php echo $rowsq['Security_question'];?></option>
                        <?php
                        }
                        ?>
                        
                        </select>
                        <label for="name">Answer</label>
                        <input id="name" class="input" type="text" name="answer" placeholder="Answer" />
                        
                        <label for="Password">Image</label>
                        <input id="Password" class="input" type="file" name="image" placeholder="Image" />
                        <label for="Password">ID Proof Father</label>
                        <input id="Password" class="input" type="file" name="idprooffather" placeholder="Id Proof Father" />
                        <label for="Password">ID Proof Mother</label>
                        <input id="Password" class="input" type="file" name="idproofmother" placeholder="Id proof Mother" />
                        <label for="Password">Lightbill Proof</label>
                        <input id="Password" class="input" type="file" name="lightbillproof" placeholder="Lightbill Proof" />
                        <label for="Password">Password</label>
                        <input id="Password" class="input" type="text" name="password" placeholder="Password" />
                        <label for="Password">Confirm Password</label>
                        <input id="Password" class="input" type="text" name="conpassword" placeholder="Confirm Password" />
                        <div class="registar-check">
                            <input id="remember-check" class="checkbox" type="checkbox" />
                            <label for="remember-check">Remember me</label>
                        </div>
                        <input class="btn" type="submit" value="SUBMIT" name="btn_parent" />
                        <span class="rbtn-title">Need help? go to <a href="#">FAQ</a></span>
                    </form>
                    <p class="rform-title">You are a member! <a href="#">Login</a> here.</p>
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
                                <a href="contact.html"><i class="fa fa-map-marker"></i>See in map</a>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $("#n-register").hide();
            $(".registration").click(function(){
                var r=$(this).val();
            if(r == 1)
            {
                $("#n-register").hide();
                $("#p-register").show();
            } 
            if(r == 2)
            {
                $("#n-register").show();
                $("#p-register").hide();
            }    
         });
        });
    </script>
</body>

<!-- Mirrored from lineartheme.com/themes/becharity/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:18:15 GMT -->
</html>
