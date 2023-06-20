new WOW().init();
$(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $(".fixed-top").addClass("change-fixed-top");
    } else {
        $(".fixed-top").removeClass("change-fixed-top");
    }
});
$(document).on('click', 'a', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 1250);
    $('html, body').animate({ path: new $.path.bezier(bezier_params) });
});
document.addEventListener('DOMContentLoaded', function () {
    var socialIcons = document.getElementById('socialIcons');
    socialIcons.addEventListener('click', function (event) {
        var target = event.target;
        if (target.tagName === 'I') {
            var parentLink = target.parentNode;
            var href = parentLink.getAttribute('href');
            window.open(href, '_blank');
        }
    });
});
