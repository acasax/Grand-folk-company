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
    <!-- font-awesome css -->
    <script src="https://kit.fontawesome.com/42e48cdd3e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icon.css">
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

    <link rel="stylesheet" href="assets/vendor/swall/sweetalert.css">

    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="css/menu.css">
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
                                <h4>Zahtev za<span class="color"> konsultacije</span></h4>
                                <p>Ovde bih isao tekst gde sve pruzate usluge i ono u vezi sa placanjem od strane drzave</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="quote-locate">
                                <div class="quote-icon">
                                    <i class="icon icon-map-marker"></i>
                                    <span class="info-first">Pilängsrundeln 16 B</span>
                                    <span class="info-simple">26142 Landskrona</span>
                                </div>
                                <div class="quote-icon">
                                    <i class="icon icon-phone"></i>
                                    <span class="info-first">+013 654 43245</span>
                                    <span class="info-simple">info@gladafolkcompany.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <form id="contactForm" method="post" enctype="multipart/form-data"  class="contact-form">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label for="name" class="boja">Please enter your name</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" onblur="$(this).valid()">
                                    <label for="email" class="boja">Please enter your email</label>
                                    <input type="email" class="email form-control" id="email" name="email" placeholder="Email" onblur="$(this).valid()">
                                    <label for="phone" class="boja">Please enter your Phone number</label>
                                    <input type="number" class="form-control" id="phone" name="phone" placeholder="phone number" onblur="$(this).valid()">
                                    <label for="service" class="boja">Please chose service</label>
                                    <select id="service" name="service">
                                        <option value="1">Hemstädning</option>
                                        <option value="2">Storstädning</option>
                                        <option value="3">Flyttstädning</option>
                                        <option value="4">Fönsterputs</option>
                                        <option value="5">Fastighetsskötsel</option>
                                        <option value="6">Kontorsstädning</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label for="city" class="boja">Please chose location</label>
                                    <select id="city" name="city">
                                        <option value="1">Landskrona</option>
                                        <option value="2">Helsingborg</option>
                                        <option value="3">Ängelholm</option>
                                        <option value="4">Löddeköpinge</option>
                                        <option value="5">Lund</option>
                                        <option value="6">Malmö</option>
                                        <option value="7">Omgivande platser</option>
                                    </select>
                                    <label for="space" class="boja">Please enter your space for cleaning (m2)</label>
                                    <input type="number" class="form-control" id="space" name="space" placeholder="" onblur="$(this).valid()">
                                    <label for="time" class="boja">Please enter your time for cleaning (h)</label>
                                    <input type="number" class="form-control" id="time" name="time" placeholder="" onblur="$(this).valid()">
                                    <label for="message" class="boja">Write your message</label>
                                    <textarea id="message" rows="5" placeholder="Massage" class="form-control" onblur="$(this).valid()" name="message" ></textarea>
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
<!-- End Banner Area -->
<!-- Start Footer bottom Area -->
<?php
include "php_vendor/footer.php";
?>


<!-- jquery latest version -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript" language="javascript" src="js/reservate.js"></script>
<script type="text/javascript" language="javascript" src="assets/vendor/swall/sweetalert.js" ></script>

<script src="assets/vendor/form-validation/jquery.form.js"></script>
<script src="assets/vendor/form-validation/jquery.validate.min.js"></script>

<script src="assets/vendor/swall/sweetalert.js"></script>
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

</body>

</html>