/* Script to add .current to active nav elements */
$(function () {
    $('#navDesktop a').each(function () {
        if ($(this).prop('href') == window.location.href) {
            $(this).addClass('current');
        }
    });
});


/* Initializing Slicknav menu for mobile */
$(function () {
    $('#navMobile').slicknav();
});

$(function () {
    $('.slicknav_menu').prepend('<a href="index.php"><img id="siteLogoMobile" src="img/logo-mobile.svg" alt="Bo Gjerløw"/></a>');
});