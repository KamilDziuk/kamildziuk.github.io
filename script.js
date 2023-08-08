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



        const text1_options = [
          "Why art is so important",
          "Why you shouldn't buy the new iPhone",
          "Is life actually real?",
          "How to learn JS in 2 months"
        ];
        const text2_options = [
          "69 min. read",
          "7 min. read",
          "8 min. read",
          "87,658.1277 min. read"
        ];
        const color_options = ["#EBB9D2"];
        const image_options = [
          "https://images.unsplash.com/photo-1524721696987-b9527df9e512?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1190&q=80",
          "https://images.unsplash.com/photo-1556656793-08538906a9f8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80",
          "https://images.unsplash.com/photo-1506073828772-2f85239b6d2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1189&q=80",
          "https://images.unsplash.com/photo-1523800503107-5bc3ba2a6f81?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
        ];
        var i = 0;
        const currentOptionText1 = document.getElementById("current-option-text1");
        const currentOptionText2 = document.getElementById("current-option-text2");
        const currentOptionImage = document.getElementById("image");
        const carousel = document.getElementById("carousel-wrapper");
        const mainMenu = document.getElementById("menu");
        const optionPrevious = document.getElementById("previous-option");
        const optionNext = document.getElementById("next-option");
        
        currentOptionText1.innerText = text1_options[i];
        currentOptionText2.innerText = text2_options[i];
        currentOptionImage.style.backgroundImage = "url(" + image_options[i] + ")";
        mainMenu.style.background = color_options[i];
        
        optionNext.onclick = function () {
          i = i + 1;
          i = i % text1_options.length;
          currentOptionText1.dataset.nextText = text1_options[i];
        
          currentOptionText2.dataset.nextText = text2_options[i];
        
          mainMenu.style.background = color_options[i];
          carousel.classList.add("anim-next");
          
          setTimeout(() => {
            currentOptionImage.style.backgroundImage = "url(" + image_options[i] + ")";
          }, 455);
          
          setTimeout(() => {
            currentOptionText1.innerText = text1_options[i];
            currentOptionText2.innerText = text2_options[i];
            carousel.classList.remove("anim-next");
          }, 650);
        };
        
        optionPrevious.onclick = function () {
          if (i === 0) {
            i = text1_options.length;
          }
          i = i - 1;
          currentOptionText1.dataset.previousText = text1_options[i];
        
          currentOptionText2.dataset.previousText = text2_options[i];
        
          mainMenu.style.background = color_options[i];
          carousel.classList.add("anim-previous");
        
          setTimeout(() => {
            currentOptionImage.style.backgroundImage = "url(" + image_options[i] + ")";
          }, 455);
          
          setTimeout(() => {
            currentOptionText1.innerText = text1_options[i];
            currentOptionText2.innerText = text2_options[i];
            carousel.classList.remove("anim-previous");
          }, 650);
        };