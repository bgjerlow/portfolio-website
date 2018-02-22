/* Initializing Slicknav menu for mobile */
$(function () {
    $('#navMobile').slicknav();
});

$(function () {
    $('.slicknav_menu').prepend('<a href="index"><img id="siteLogoMobile" src="img/logo-mobile.svg" alt="Bo Gjerløw"/></a>');
});

/* Add .current to active nav elements */
$(function () {
    $('#navDesktop a').each(function () {
        if ($(this).prop('href') == window.location.href) {
            $(this).addClass('current');
        }
    });
});

/* Changing text on About page - Desktop only */
if ($(window).width() >= 768) {
    $(function () {
        count = 0;
        wordsArray = ["a UI designer", "a front-end developer", "a car enthusiast", "a motorsport fan"];

        setInterval(function () {
            count++;
            $("#aboutDynamicText").fadeOut(400, function () {
                $(this).text(wordsArray[count % wordsArray.length]).fadeIn(400);
            });
        }, 2000);
    });
}