grecaptcha.ready(() => {
    grecaptcha.execute('6LdgWqQaAAAAAM8ESrER94XkfeRnJoNusfF_gXRo')
        .then((token) => {
            recaptchaResponse = document.getElementById('recaptchaResponse');
            recaptchaResponse.value = token;
        });
});