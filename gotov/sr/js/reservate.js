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
                time: {
                    required: true,
                },
                message: {
                    required: true,
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
                time: {
                    required: 'Please enter your time for cleaning (h)',
                },
                message: {
                    required: 'Write your message',
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
                                title: "Greška",
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
                                    title: "Uspešno",
                                    text: str,
                                    showCancelButton: false,
                                    showConfirmButton: true,
                                    type: "success",

                                }
                            );
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