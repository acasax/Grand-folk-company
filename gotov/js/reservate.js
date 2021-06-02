$(document).ready(function() {

    /*--------------------------
 preloader
 ---------------------------- */
    $(window).on('load', function() {
        var pre_loader = $('#preloader')
        pre_loader.fadeOut('fast', function() { $(this).remove(); });
    });

    $('#service').on('change', function() {
        console.log(this.value);
        if (this.value == 4 || this.value == 5 || this.value == 6 || this.value == 7) {
            $('#space').attr('disabled', 'disabled');
        }
        if (this.value == 1 || this.value == 2 || this.value == 3) {
            $('#space').removeAttr('disabled');
        }
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
                adress: {
                    required: true,
                },
                p_number: {
                    required: true,
                }
            },
            messages: {
                name: {
                    required: 'Vänligen fyll i ditt namn och efternamn',
                },
                email: {
                    required: 'Vänligen ange  din e-postadress',
                },
                phone: {
                    required: 'Vänligen skriv in ditt telefonnummer',
                },
                space: {
                    required: 'Vänligen skriv in Antal Kvm',
                },
                adress: {
                    required: 'Vänligen ange din adress',
                },
                p_number: {
                    required: 'Vänligen ange din personnummer',
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