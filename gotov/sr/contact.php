<!doctype html>
<html lang="sv">

<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2GD0DS6VRF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-2GD0DS6VRF');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Glada folk i Sverige</title>
    <meta name="description" content="Vi erbjuder tjänster städning högkvalitativa  och kontinuerlig kundnöjdhet hos våra kunder!">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
      <!-- favicon -->
      <link rel="icon" href="img/logo/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="img/logo/favicon.ico" type="image/x-icon" />

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
    <!-- Swall CSS -->
    <link rel="stylesheet" href="assets/vendor/swall/sweetalert.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!--Meni padajuci-->
    <link rel="stylesheet" href="css/menu.css">
    <!-- Animacije na elemente -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Animacija ulaz -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body>

    <div id="preloader"></div>
    <?php
    include "php_vendor/navbar.php";
    ?>
    <!-- header end -->
    <!-- Start Bottom Header -->
    <div class="page-area parallax-bg" data-stellar-background-ratio="0.6" style="background: url(img/background/2.jpeg);">
        <div class="breadcumb-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb animate__delay-2s animate__animated animate__zoomIn animate__slower">
                            <div class="section-headline white-headline text-center">
                                <h3>Glada folk i Sverige</h3>
                            </div>
                            <!--<ul>
                            <li>Kontakt</li>
                        </ul>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END Header -->
    <!-- Start contact Area -->
    <div class="contact-page area-padding" style="margin: 60px 0; display: flex;
    justify-content: center;
    align-items: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-head">
                        <h3>Begär en <span class="color">Kontakta oss</span></h3>
                        <p>Vår målsättning är att du som kund alltid ska känna dig helt nöjd efter att vi har varit hos dig. Som ett led i detta har vi nöjd-kund-garanti för utförda uppdrag.
                            Det innebär att om du inte är nöjd med det vi utfört hos dig meddelar du oss senast 1 dag efter avslutat arbete. Vi kommer ut till dig kostnadsfritt och åtgärdar bristerna.
                        </p>
                        <div class="project-share">
                            <h5>Vår sociala länk:</h5>
                            <ul class="project-social">
                                <li>
                                    <a href="https://www.instagram.com/glada_folk_i_sverige/">
                                        <img src="img/ikonice/iconfinder_25_social_2609558.png" width="40px">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/i_glada">
                                        <img src="img/ikonice/iconfinder_1_Twitter3_colored_svg_5296516.png" width="40px">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/Glada-Folk-i-Sverige-101605962040303">
                                        <img src="img/ikonice/iconfinder_facebook_386622.png" width="40px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/ikonice/output-onlinepngtools(1).png" style="height: 40px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End contact icon -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-form">
                        <div class="row">
                            <form id="form" method="post" enctype="multipart/form-data" class="contact-form">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" onblur="$(this).valid()">
                                    <label for="name" class=""></label>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" class="email form-control" id="email" name="email" placeholder="Email" onblur="$(this).valid()">
                                    <label for="email" class=""></label>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" id="subject"  name="subject" class="form-control" placeholder="Ämne:" onblur="$(this).valid()">
                                    <label for="subject" class=""></label>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea id="message" name="message" rows="7" placeholder="Meddelande:" class="form-control" onblur="$(this).valid()"></textarea>
                                    <label for="message" class=""></label>
                                    <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" id="submit" class="contact-btn">Skicka in</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End contact Form -->
            </div>
        </div>
    </div>

    <div class="modal mt-5 " id="myModal ">
        <div class="modal-dialog ">
            <div class="modal-content " style="margin-top: 150px !important; ">
                <!-- Modal body -->
                <div class="modal-body ">
                </div>

                <!-- Modal footer -->
                <div class="modal-footer ">
                    <button type="button " class="btn btn-primary " data-dismiss="modal ">U redu</button>
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact Area -->
    <!-- Start Footer bottom Area -->

    <?php
    include "php_vendor/footer.php";
    ?>


    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>

    <script type="text/javascript" language="javascript" src="js/contact.js"></script>
    <script type="text/javascript" language="javascript" src="assets/vendor/swall/sweetalert.js"></script>

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
    <!-- main js -->
    <script src="js/main.js"></script>
    <script src="js/custom.js"></script>
   
    <!-- Ja nisam robot -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LdgWqQaAAAAAM8ESrER94XkfeRnJoNusfF_gXRo"></script>
    <script src="js/recapture.js"></script>
    <!-- all js here -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>