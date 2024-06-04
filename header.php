<div id="header--fixed" class="header">
        <div class="nav-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-5 col-lg-4">
                       
                    </div>
                    <div class="hidden-xs hidden-sm col-md-3 col-lg-4 ">
                        
                    </div>
                    <div class="hidden-xs col-sm-6 col-md-4 col-lg-4">
                       
                        <?php
                        if(isset($_SESSION['id']))
                        {
                        ?>
                        <a class="join-top" href="logout.php"><i class="fa fa-user-circle"></i>SIGN OUT</a>
                        <?php   
                        }
                        else
                        {
                         ?> 
                         <a class="join-top" href="login.php"><i class="fa fa-user-circle"></i>SIGNIN</a>  
                       <?php
                        }
                        ?>
                        
                        <a class="join-top" href="appointment.html"><i class="fa fa-user-circle"></i>APPOINTMENT</a>
                        
                        <div class="dropdown language-switchr">
                            
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
                        <a class="navbar-brand" href="index.html"><img class="retina" src="images/logo.png" alt="logo"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="main-navbar">
                        <ul class="nav navbar-nav navbar-left">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="child_profile.php">List Of Child</a></li>
                            <li><a href="index.html">About Us</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Event <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="event.html">Event</a></li>
                                    <li><a href="event-details.html">Event Details</a></li>
                                </ul>
                            </li>
                            <li><a href="become-volunteer.html">Become Volunteers</a></li>
                            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="product.html">Product</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                </ul>
                            </li> -->
                             <li><a href="contact.html">Contact</a></li>
                            <li><a href="feedback.html">Feedback</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right hidden-xs">
                            <li class="top-cart">
                               
                                <a href="cart.html" class="top-amount">Donation</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>