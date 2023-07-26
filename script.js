// <!-- scroll -->
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
});
// <!-- scroll end -->

// <!-- slides -->
var slides = document.querySelectorAll('.slide-opinions');
var slideContainer = document.querySelector('.slide-container');
var currentSlide = 0;
function showSlide(n) {
  slideContainer.style.left = `-${n * 17.33}%`;
  currentSlide = n;
}
showSlide(currentSlide);
setInterval(() => {
  showSlide((currentSlide + 1) % slides.length);
}, 3000);

// <!-- slides end -->

// <!-- loader animation  -->

var loader = document.getElementById('loader');
        window.addEventListener("load", function(event) {
            loader.classList.remove('loading');
            loader.classList.add('loaded');
            document.body.classList.add('imgloaded');
        });

        // <!-- animation end -->