$(document).ready(function() {
    $('.phone_number').inputmask('99-999 999 99');
    //$('.personal_number').inputmask('99999999-9999');
    $('.personal_number').inputmask('Regex', {
        regex: "(19[3-9][0-9]|200[0-3])(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|30|31)([0-9]{4})" //1930 - 2003 
    });
});