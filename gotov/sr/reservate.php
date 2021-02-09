<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Grand folk company</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">

    <!-- all css here -->

    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icon.css">
    <!-- magnific css -->
    <link rel="stylesheet" href="css/magnific.min.css">
    <!-- venobox css -->
    <link rel="stylesheet" href="css/venobox.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

<div id="preloader"></div>

<?php
include "php_vendor/navbar.php";
?>
<div class="quote-area area-padding parallax-bg">
    <div class="container ">
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="row">
                    <div class="quate-details">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="sub-head">
                                <h4>Request a <span class="color">Call back</span></h4>
                                <p>Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="quote-locate">
                                <div class="quote-icon">
                                    <i class="icon icon-map-marker"></i>
                                    <span class="info-first">House-34,22/2 avenue</span>
                                    <span class="info-simple">London, United Kingdom</span>
                                </div>
                                <div class="quote-icon">
                                    <i class="icon icon-phone"></i>
                                    <span class="info-first">+013 654 43245</span>
                                    <span class="info-simple">info@cleaningss.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <form id="contactForm" method="POST" action="contact.php" class="contact-form">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                    <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                    <input type="number" class="form-control" id="phone" placeholder="phone number" required data-error="Please enter your Phone number">
                                    <div class="help-block with-errors"></div>
                                    <select>
                                        <option value="position">Apartment Cleaning</option>
                                        <option value="position">Commercial Cleaning</option>
                                        <option value="position">Residential Cleaning</option>
                                        <option value="position">Carpet Cleaning</option>
                                        <option value="position">Window Cleaning</option>
                                        <option value="position">After Renovation</option>
                                        <option value="position">Maid Services</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                    <button type="submit" id="submit" class="quote-btn">Submit</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Quote -->
<!-- Start Banner Area -->
<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="banner-content">
                    <h4>Are you looking for professional Cleaning Services for your House?</h4>
                    <div class="banner-contact">
                        <span class="call-us"><i class="icon icon-phone-handset"></i>Call us:  +1313-4325432 </span><span>Or</span>
                        <a class="banner-btn" href="#">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner Area -->
<!-- Start Footer bottom Area -->
<?php
include "php_vendor/footer.php";
?>


<!-- all js here -->

<!-- jquery latest version -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="js/owl.carousel.min.js"></script>
<!-- Counter js -->
<script src="js/jquery.counterup.min.js"></script>
<!-- waypoint js -->
<script src="js/waypoints.js"></script>
<!-- isotope js -->
<script src="js/isotope.pkgd.min.js"></script>
<!-- stellar js -->
<script src="js/jquery.stellar.min.js"></script>
<!-- magnific js -->
<script src="js/magnific.min.js"></script>
<!-- venobox js -->
<script src="js/venobox.min.js"></script>
<!-- meanmenu js -->
<script src="js/jquery.meanmenu.js"></script>
<!-- Form validator js -->
<script src="js/form-validator.min.js"></script>
<!-- plugins js -->
<script src="js/plugins.js"></script>
<!-- main js -->
<script src="js/main.js"></script>
</body>

</html>