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

//link
const links = [
    { id: "logo-head-link", url: "https://kamildziuk.pl" },
    { id: "logo-footer-link", url: "https://kamildziuk.pl" },
    { id: "github-link", url: "https://github.com/KamilDziuk" },
    { id: "linkedin-link", url: "https://www.linkedin.com/in/kamil-dziuk-1b02201b3/" },
    { id: "sparkpaerewskiego-link", url: "https://parkpaderewskiego.pl/" },
    { id: "diamodhill-link", url: "https://diamond-hill.com.pl" },
    { id: "chaintitans-link", url: "https://chaintitans.org/" },
    { id: "kancelariaprawabuo-link", url: "https://kancelariaprawabudowlanego.com.pl/" },
    { id: "kancelariakrzysztofkot-link", url: "https://kancelariakrzysztofkot.pl/" },
    { id: "sunitedsellers-link", url: "https://unitedsellers.eu/" },
    { id: "privacy-policy", url: "https://kamildziuk.pl/polityka-prywatnosci/" },
    { id: "google-link", url: "https://www.google.pl/maps/place/Kamil+Dziuk.+Strony+internetowe,+aplikacje+i+sklepy+na+WordPress/@50.2541412,19.0112044,18z/data=!4m8!3m7!1s0x4716cff7d21f6e77:0xd1b0c84f69b3558d!8m2!3d50.2536664!4d19.0150903!9m1!1b1!16s%2Fg%2F11tnnqn8z9?entry=ttu" },
  ];
  
  function openLinkInNewTab(url) {
    window.open(url, "_blank");
  }
  
  for (const link of links) {
    document.getElementById(link.id).addEventListener("click", function () {
      openLinkInNewTab(link.url);
    });
  }
//link end

//slides
var slides = document.querySelectorAll('.slide-opinions');
var slideContainer = document.querySelector('.slide-container');
var currentSlide = 0;

function showSlide(n) {
  slideContainer.style.left = `-${n *20}%`;
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
setInterval(() => {
  scrollToNextSlide();
}, 6000);
//slides end

//loader animation
var loader = document.getElementById('loader');
        window.addEventListener("load", function(event) {
            loader.classList.remove('loading');
            loader.classList.add('loaded');
            document.body.classList.add('imgloaded');
        });
        //animation end