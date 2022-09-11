

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Contact Us</title>

     <!-- Favicon  -->
    <link rel="shortcut icon" href="images/fav.png" type="image/x-icon" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="scss/_mixin.scss">
    <link rel="stylesheet" href="scss/_responsive.scss">
    <link rel="stylesheet" href="scss/_theme_color.scss">
    <link rel="stylesheet" href="scss/_variables.scss">
    <link rel="stylesheet" href="scss/style.scss">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="medilife-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
            <!-- Top Header Area -->
            <div class="top-header-area" style="background:#6AC059">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 h-100">
                            <div class="h-100 d-md-flex justify-content-between align-items-center">
                                <marquee style="width:300px;border-radius:25px;">
                                    <p style="color:#081f3e">Welcome to <span style="color:#081f3e">REN Hospital</span>
                                    </p>
                                </marquee>
                                <p style="color:#081f3e">Opening Hours : 24Hours OPEN Contact : <span
                                        style="color:red">+031-2934439</span></p>
    
                                <a href="hms/admin" class="btn medilife-btn mt-20" data-animation="fadeInUp"
                                    data-delay="700ms">Admin Panel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 h-100">
                        <div class="main-menu h-100">
                            <nav class="navbar h-100 navbar-expand-lg">
                                <!-- Logo Area  -->
                                <a class="navbar-brand" href="index.html"><img style="height: 100px;weight:100%" src="images/ren-hospital-logo.png"
                                    alt="Logo"></a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false"
                                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                                <div class="collapse navbar-collapse" id="medilifeMenu">
                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item ">
                                            <a class="nav-link" href="index.html">Home</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="about-us.html">About Us</a>
                                        </li>

                                        <li class="nav-item active">
                                            <a class="nav-link" href="contact.php">Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="hms/user-login.php">Appointment</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="hms/doctor">Doctor Panel</a>
                                        </li>
                                    </ul>
                                    <!-- Appointment Button -->
                                    <a style="background-color:#D92423" href="https://uralems.com/booknow/" target="_blank" class="btn medilife-appoint-btn ml-30"><span></span>
                                        Ambulance Service</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Contact</h3>
                        <p>Feel Free to contact with us! @24Hours Open contact Service</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Breadcumb Area End ***** -->

    <section class="medilife-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        <h5 class="mb-50">Get in touch</h5>
                   
                        <h5><? =$result; ?></h5>
                        <form action="contact-form-handeler.php" method="post">
                            
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" id="contact-email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea  class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn medilife-btn" name="submit">Send Message </button>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="content-sidebar">


                        <!-- Contact Card -->
                        <div class="medilife-contact-card mb-50">

                            <div class="single-contact d-flex align-items-center">
                                <div class="contact-icon mr-30">
                                    <i class="icon-doctor"></i>
                                </div>
                                <div class="contact-meta">
                                    <p>Address: GC-Circle Road no 2<br></p>
                                </div>
                            </div>

                            <div class="single-contact d-flex align-items-center">
                                <div class="contact-icon mr-30">
                                    <i class="icon-doctor"></i>
                                </div>
                                <div class="contact-meta">
                                    <p>Phone: +031 294499</p>
                                </div>
                            </div>

                            <div class="single-contact d-flex align-items-center">
                                <div class="contact-icon mr-30">
                                    <i class="icon-doctor"></i>
                                </div>
                                <div class="contact-meta">
                                    <p>Email: renhopital@gmail.com</p>
                                </div>
                            </div>


                            <div class="contact-social-area">
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>

                        </div>
                        

                        <!-- medilife Emergency Card -->
                        <div class="medilife-emergency-card bg-img bg-overlay" style="background-image: url(img/bg-img/about1.jpg);">
                            <i class="icon-smartphone"></i>
                            <h2>For Emergency calls</h2>
                            <h3>+12-823-611-8721</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps -->
    <div class="map-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="" class=""><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.8569167712913!2d91.81904731495575!3d22.35903088529315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd8901c1285bd%3A0x7fa786f5b8d965c0!2sGEC+Circle+Bus+Stop!5e0!3m2!1sen!2sbd!4v1564889647054!5m2!1sen!2sbd" width="1100" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area section-padding-100">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12 col-sm-6 col-xl-6">
                        <div class="footer-widget-area">
                            <div class="footer-logo" style="margin-bottom: 5px;border-bottom: 1px dashed #6AC059;">
                                <img src="images/ren-hospital-logo.png" alt="">
                            </div>
                            <p>lkjasdfl asldkjf;oaisjef awlefn;lasjf;o asdn fasdlfj aushdfn asdnfilas dflnhasdnf
                                lkjasdfl asldkjf;oaisjef awlefn;lasjf;o asdn fasdlfj aushdfn asdnfilas dflnhasdnf
                                lkjasdfl asldkjf;oaisjef awlefn;lasjf;o asdn fasdlfj aushdfn asdnfilas dflnhasdnf
                                lkjasdfl asldkjf;oaisjef awlefn;lasjf;o asdn fasdlfj aushdfn asdnfilas dflnhasdnf
                            </p>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>



                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area">
                            <div class="widget-title">
                                <h6>Contact Form</h6>
                            </div>
                            <div class="footer-contact-form">
                                <form action="contact_us.php" method="post">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0"
                                        name="name" id="footer-name" placeholder="Name">
                                    <input type="email" class="form-control border-top-0 border-right-0 border-left-0"
                                        name="email" id="footer-email" placeholder="Email">
                                    <textarea name="message"
                                        class="form-control border-top-0 border-right-0 border-left-0"
                                        id="footerMessage" placeholder="Message"></textarea>
                                    <button type="submit" class="btn medilife-btn">Contact Us <span>+</span></button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area">
                            <div class="widget-title">
                                <h6>News Letter</h6>
                            </div>

                            <div class="footer-newsletter-area">
                                <form action="#">
                                    <input type="email" class="form-control border-0 mb-0" name="newsletterEmail"
                                        id="newsletterEmail" placeholder="Your Email Here">
                                    <button type="submit">Subscribe</button>
                                </form>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor
                                    sit amet, consectetuer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="bottom-footer-content">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text" style="text-align: center;margin-top:50px">
                                <p>
                                    Copyright &copy;
                                    <script>document.write(new Date().getFullYear());</script> All rights reserved |
                                    This template is Design By <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                        href="#" target="_blank">REN HOSPITAL</a>

                                </p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/map-active.js"></script>

</body>

</html>