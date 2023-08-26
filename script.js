//scroll 
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
//scroll end

//slides
var currentSlide = 0;
var slides = document.querySelectorAll('.slide-opinions');
var slideContainer = document.querySelector('.slide-container');
const buttonRight = document.querySelector('.opinions-right');
const buttonLeft = document.querySelector('.opinions-left');

function showSlide(n) {
slideContainer.style.left = `-${n *380}px`;
currentSlide = n;
}

function scrollToPreviousSlide() {
currentSlide = (currentSlide - 1 + slides.length) % slides.length;
showSlide(currentSlide);
}

function scrollToNextSlide() {
currentSlide = (currentSlide + 1) % slides.length;
showSlide(currentSlide);
}

showSlide(currentSlide);

// The setInterval code for automatic sliding remains the same
// Stop automatic slideAdvance function
function automaticSlideAdvance()
{
setIntervalId = setInterval(() => {
scrollToNextSlide();
}, 6000);
}

function stopAutomaticSlideAdvance()
{
clearInterval(setIntervalId);
}

automaticSlideAdvance()

buttonRight.addEventListener('click', () => {

stopAutomaticSlideAdvance();
});
buttonLeft.addEventListener('click', () => {

stopAutomaticSlideAdvance();
});
//slides end

//loader animation
var loader = document.getElementById('loader');
      window.addEventListener("load", function(event) {
          loader.classList.remove('loading');
          loader.classList.add('loaded');
          document.body.classList.add('imgloaded');
      });
      //animation end

     
