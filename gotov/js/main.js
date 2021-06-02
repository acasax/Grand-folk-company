(function($) {
    "use strict";

    /*--------------------------
    preloader
    ---------------------------- */
    $(window).on('load', function() {
        var pre_loader = $('#preloader')
        pre_loader.fadeOut('slow', function() { $(this).remove(); });
    });

    /*---------------------
      venobox
    --------------------- */
    var veno_box = $('.venobox');
    veno_box.venobox();

    /*------------------------------------
     search option
    ------------------------------------- */
    $('.search-option').hide();
    $(".main-search").on('click', function() {
        $('.search-option').animate({
            height: 'toggle',
        });
    });
    /*---------------------
     TOP Menu Stick
    --------------------- */
    var s = $("#sticker");
    var d = $("#sadrzaj");
    var pos = s.position();
    $(window).on('scroll', function() {
        var windowpos = $(window).scrollTop();
        if (windowpos > 0) {
            s.addClass("stick");
            if ($(window).width() > 1250) {
                d.addClass("sadrzaj");
            }

        } else {
            s.removeClass("stick");
            if ($(window).width() > 1250) {
                d.removeClass("sadrzaj");
            }
        }
    });


    /*----------------------------
     jQuery MeanMenu
    ------------------------------ */
    var mean_menu = $('nav#dropdown');
    mean_menu.meanmenu();
    /*--------------------------
     scrollUp
    ---------------------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

    /*----------------------------
     Counter js active
    ------------------------------ */
    var count = $('.counter');
    count.counterUp({
        delay: 40,
        time: 3000
    });

    /*--------------------------
     collapse
    ---------------------------- */
    var panel_test = $('.panel-heading a');
    panel_test.on('click', function() {
        panel_test.removeClass('active');
        $(this).addClass('active');
    });
    /*--------------------------
     Parallax
    ---------------------------- */
    var parallaxeffect = $(window);
    parallaxeffect.stellar({
        responsive: true,
        positionProperty: 'position',
        horizontalScrolling: false
    });
    /*--------------------------
     MagnificPopup
    ---------------------------- */
    $('.video-play').magnificPopup({
        type: 'iframe'
    });

    /*----------------------------
     isotope active
    ------------------------------ */
    // project start
    $(window).on("load", function() {
        var $container = $('.project-content');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        $('.project-menu li a').on("click", function() {
            $('.project-menu li a.active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });

    });
    //portfolio end
    /*---------------------
     Testimonial carousel
    ---------------------*/
    var review = $('.testimonial-carousel');
    review.owlCarousel({
        loop: true,
        nav: false,
        margin: 15,
        dots: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    /*----------------------------
      brand-carousel-carousel
    ------------------------------ */
    $('.brand-carousel').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        autoplay: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    });






})(jQuery);