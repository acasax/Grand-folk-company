$(document).ready(function() {

    /*--------------------------
 preloader
 ---------------------------- */
    $(window).on('load', function() {
        var pre_loader = $('#preloader')
        pre_loader.fadeOut('slow', function() { $(this).remove(); });
    });

    const $contactForm = $('#contactForm');
    let validator = void(0);

    if ($contactForm.length) {
        validator = $contactForm.validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                },
                phone: {
                    required: true,
                },
                space: {
                    required: true,
                },
                p_number: {
                    required: true,
                    minlength: 12,
                    maxlength: 12,
                }
            },
            messages: {
                name: {
                    required: 'Please enter your name',
                },
                email: {
                    required: 'Please enter your email',
                },
                phone: {
                    required: 'Please enter your Phone number',
                },
                space: {
                    required: 'Please enter your space for cleaning (m2)',
                },
                p_number: {
                    required: 'Please enter your personal number',
                    minlength: 'Please enter valid personal number,',
                    maxlength: 'Please enter valid personal number',
                }
            },
            submitHandler: function submitHandler(form) {
                event.preventDefault();
                $.ajax({
                    url: "php_vendor/functions/reservate.php",
                    method: 'POST',
                    data: new FormData(form),
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        let objResp = JSON.parse(data);
                        let str = objResp.type;
                        if (str === 'ERROR') {
                            str = objResp.data;
                            swal({
                                title: str1,
                                text: str,
                                timer: 3000,
                                showCancelButton: false,
                                showConfirmButton: false,
                                type: "error"
                            });
                            return;
                        }

                        if (str === 'OK') {
                            str = objResp.data;
                            swal({
                                title: str,
                                text: objResp.params,
                                showCancelButton: false,
                                showConfirmButton: true,
                                type: "success",

                            });
                            $('#contactForm')[0].reset();
                        }

                    }
                })
            }
        })
    }

    $(document).on('click', '#dismiss-modal, button[data-dismiss="modal"]', function() {
        validator.resetForm();
    });

});