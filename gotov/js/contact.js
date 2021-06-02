$(document).ready(function() {

    /*--------------------------
 preloader
 ---------------------------- */
    $(window).on('load', function() {
        var pre_loader = $('#preloader')
        pre_loader.fadeOut('fast', function() { $(this).remove(); });
    });

    const $contactForm = $('#form');
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
                subject: {
                    required: true,
                },
                message: {
                    required: true,
                }
            },
            messages: {
                name: {
                    required: 'Vänligen fyll i ditt namn',
                },
                email: {
                    required: 'Vänligen ange  din e-postadress',
                },
                subject: {
                    required: 'Vänligen ange ämnet för meddelandet',
                },
                message: {
                    required: 'Vänligen ange meddelandet',
                }
            },
            submitHandler: function submitHandler(form) {
                event.preventDefault();
                $.ajax({
                    url: "php_vendor/functions/contact.php",
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
                                title: str,
                                text: objResp.params,
                                showCancelButton: false,
                                showConfirmButton: true,
                                imageUrl: 'img/crvenikrug.png',
                                imageWidth: 500,
                                imageHeight: 500,
                                imageAlt: 'Nije kako treba',
                                animation: false
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
                                //type: "success",
                                imageUrl: 'img/zelenikrug.png',
                                imageWidth: 500,
                                imageHeight: 500,
                                imageAlt: 'Dobro je',
                                animation: false

                            });
                            $('#form')[0].reset();
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