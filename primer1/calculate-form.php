<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>clenix | Calculation Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- MeanMenu CSS -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- Font Awesome CSS -->
    <script src="https://kit.fontawesome.com/42e48cdd3e.js" crossorigin="anonymous"></script>
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- FlatIcon CSS -->
    <link rel="stylesheet" href="font/flaticon.css">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Datetime Picker CSS -->
    <link rel="stylesheet" href="css/jquery.datetimepicker.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.7.1.min.js"></script>
</head>

<body class="sticky-header">
    <?php 
    include "php_vendor/navbar.php";
    ?>
        <!-- Header Area End Here -->
        <!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common" data-bg-image="img/figure/breadcumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Online Booking Form</h1>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Form</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Booking Form Area Start Here -->
        <section class="section-padding-12-9">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6 col-12">
                        <div class="about-box-layout1">
                            <h2 class="item-title">Quick Calculate &amp; Book Your Desire Service</h2>
                            <div class="item-subtitle">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. some form, by injected
                                humour, some form, by injected humour.</p>
                            <div class="list-item">
                                <ul>
                                    <li>
                                        <h3>Customer Focused Reviews</h3>
                                        <p>Aorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                    </li>
                                    <li>
                                        <h3>We Are Committed</h3>
                                        <p>Aorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                    </li>
                                    <li>
                                        <h3>Regular &amp; Monthly Cleaning</h3>
                                        <p>Aorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-12">
                        <div class="about-box-layout2">
                            <h3 class="item-title">Request An Estimate</h3>
                            <form class="contact-form-box" id="contact-form">
                                <div class="row gutters-10">
                                    <div class="col-12 form-group">
                                        <select class="select2">
                                            <option value="0">Residential</option>
                                            <option value="1">Residential</option>
                                            <option value="2">Commercial</option>
                                            <option value="3">Plot</option>
                                            <option value="4">Apartment</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="select2">
                                            <option value="0">Property Type</option>
                                            <option value="1">Residential</option>
                                            <option value="2">Commercial</option>
                                            <option value="3">Plot</option>
                                            <option value="4">Apartment</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="select2">
                                            <option value="0">-- Approx SF --</option>
                                            <option value="1">400</option>
                                            <option value="2">200</option>
                                            <option value="3">600</option>
                                            <option value="4">300</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="select2">
                                            <option value="0">-- Bedrooms --</option>
                                            <option value="1">Residential</option>
                                            <option value="2">Commercial</option>
                                            <option value="3">Plot</option>
                                            <option value="4">Apartment</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="select2">
                                            <option value="0">-- Bathrooms --</option>
                                            <option value="1">Residential</option>
                                            <option value="2">Commercial</option>
                                            <option value="3">Plot</option>
                                            <option value="4">Apartment</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="select2">
                                            <option value="0">-- Frequency --</option>
                                            <option value="1">Residential</option>
                                            <option value="2">Commercial</option>
                                            <option value="3">Plot</option>
                                            <option value="4">Apartment</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-12 form-group">
                                        <input type="text" placeholder="ZIP Code" class="form-control" name="name" data-error="zip code field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 form-group datetime-picker">
                                        <i class="far fa-calendar-alt"></i>
                                        <input type="text" class="form-control rt-date" placeholder="dd/mm/yy" name="date" id="form-date" data-error="Subject field is required" required/>
                                    </div>
                                    <div class="col-md-6 form-group datetime-picker">
                                        <i class="far fa-clock"></i>
                                        <input type="text" class="form-control rt-time" placeholder="Time" name="time" id="form-time" data-error="Subject field is required" required/>
                                    </div>
                                    <div class="col-md-6 col-12 form-group">
                                        <input type="text" placeholder="Name" class="form-control" name="name" data-error="Name field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-12 form-group">
                                        <input type="text" placeholder="Phone" class="form-control" name="phone" data-error="Phone field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <input type="email" placeholder="E-mail Address" class="form-control" name="email" data-error="email field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group mg-b-20">
                                        <textarea placeholder="Address" class="textarea form-control" name="message" id="form-message" rows="2" cols="20" data-error="Message field is required" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <button type="submit" class="fw-btn-fill bg-accent text-primarytext">Book Now<i class="fas fa-angle-right"></i></button>
                                    </div>
                                </div>
                                <div class="form-response"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Booking Form Area End Here -->
        <!-- Footer Area Start Here -->
        <footer class="footer-wrap-layout1 section-shape1">
            <div class="container">
                <div class="footer-top-box">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="footer-box-layout1">
                                <div class="footer-title">
                                    <h4>FEATURES</h4>
                                </div>
                                <div class="footer-menu-box">
                                    <ul class="footer-menu-list">
                                        <li>
                                            <a href="#">Residential Services</a>
                                        </li>
                                        <li>
                                            <a href="#">Commercial Services</a>
                                        </li>
                                        <li>
                                            <a href="#">Vechile Wash</a>
                                        </li>
                                        <li>
                                            <a href="#">Londry Facilities</a>
                                        </li>
                                        <li>
                                            <a href="#">Carpet Removal</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="footer-box-layout1">
                                <div class="footer-title">
                                    <h4>COMPANY</h4>
                                </div>
                                <div class="footer-menu-box">
                                    <ul class="footer-menu-list">
                                        <li>
                                            <a href="about1.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="#">Testimonials</a>
                                        </li>
                                        <li>
                                            <a href="#">Terms</a>
                                        </li>
                                        <li>
                                            <a href="#">Media Kit</a>
                                        </li>
                                        <li>
                                            <a href="#">Sitemap</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="footer-box-layout1">
                                <div class="footer-title">
                                    <h4>QUICK LINKS</h4>
                                </div>
                                <div class="footer-menu-box">
                                    <ul class="footer-menu-list">
                                        <li>
                                            <a href="#">Features</a>
                                        </li>
                                        <li>
                                            <a href="#">Pricing</a>
                                        </li>
                                        <li>
                                            <a href="#">Partners</a>
                                        </li>
                                        <li>
                                            <a href="#">Cloud Affiliate Program</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="footer-box-layout1">
                                <div class="footer-title">
                                    <h4>SIGN UP!</h4>
                                </div>
                                <div class="footer-newsletter">
                                    <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    <div class="input-group stylish-input-group">
                                        <input type="text" class="form-control" placeholder="E-mail Address">
                                        <span class="input-group-addon">
                                            <button type="submit">Submit</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="footer-social">
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom-box">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright">Copyright 2019 clenix. All Rights Reserved.</div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-bottom-menu">
                                <ul>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- MeanMenu js -->
    <script src="js/jquery.meanmenu.min.js"></script>
    <!-- Validator js -->
    <script src="js/validator.min.js"></script>
    <!-- Select 2 js -->
    <script src="js/select2.min.js"></script>
    <!-- Datetime Picker js -->
    <script src="js/jquery.datetimepicker.full.min.js"></script>
    <!-- Main js -->
    <script src="js/main.js"></script>

</body>

</html>