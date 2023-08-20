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

// animation
var loader = document.getElementById('loader');
        window.addEventListener("load", function(event) {
            loader.classList.remove('loading');
            loader.classList.add('loaded');
            document.body.classList.add('imgloaded');
        });
        //animation end

// Portfolio
        (function() {
  
          var autoUpdate = false,
              timeTrans = 4000;
          
          var cdSlider = document.querySelector('.cd-slider'),
            item = cdSlider.querySelectorAll("li"),
            nav = cdSlider.querySelector("nav");
        
          item[0].className = "current_slide";
        
          for (var i = 0, len = item.length; i < len; i++) {
            var color = item[i].getAttribute("data-color");
            item[i].style.backgroundColor=color;
          }
        
          // Detect IE
          // hide ripple effect on IE9
          var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE");
            if ( msie > 0 ) {
              var version = parseInt(ua.substring(msie+ 5, ua.indexOf(".", msie)));
              if (version === 9) { cdSlider.className = "cd-slider ie9";}
          }
        
          if (item.length <= 1) {
            nav.style.display = "none";
          }
        
          function prevSlide() {
            var currentSlide = cdSlider.querySelector("li.current_slide"),
              prevElement = currentSlide.previousElementSibling,
              prevSlide = ( prevElement !== null) ? prevElement : item[item.length-1],
              prevColor = prevSlide.getAttribute("data-color"),
              el = document.createElement('span');
        
            currentSlide.className = "";
            prevSlide.className = "current_slide";
        
            nav.children[0].appendChild(el);
        
            var size = ( cdSlider.clientWidth >= cdSlider.clientHeight ) ? cdSlider.clientWidth*2 : cdSlider.clientHeight*2,
                ripple = nav.children[0].querySelector("span");
        
            ripple.style.height = size + 'px';
            ripple.style.width = size + 'px';
            ripple.style.backgroundColor = prevColor;
        
            ripple.addEventListener("webkitTransitionEnd", function() {
              if (this.parentNode) {
                this.parentNode.removeChild(this);
              }
            });
        
            ripple.addEventListener("transitionend", function() {
              if (this.parentNode) {
                this.parentNode.removeChild(this);
              }
            });
        
          }
        
          function nextSlide() {
            var currentSlide = cdSlider.querySelector("li.current_slide"),
              nextElement = currentSlide.nextElementSibling,
              nextSlide = ( nextElement !== null ) ? nextElement : item[0],
              nextColor = nextSlide.getAttribute("data-color"),
              el = document.createElement('span');
        
            currentSlide.className = "";
            nextSlide.className = "current_slide";
        
            nav.children[1].appendChild(el);
        
            var size = ( cdSlider.clientWidth >= cdSlider.clientHeight ) ? cdSlider.clientWidth*2 : cdSlider.clientHeight*2,
                ripple = nav.children[1].querySelector("span");
        
            ripple.style.height = size + 'px';
            ripple.style.width = size + 'px';
            ripple.style.backgroundColor = nextColor;
        
            ripple.addEventListener("webkitTransitionEnd", function() {
              if (this.parentNode) {
                this.parentNode.removeChild(this);
              }
            });
        
            ripple.addEventListener("transitionend", function() {
              if (this.parentNode) {
                this.parentNode.removeChild(this);
              }
            });
        
          }
        
          updateNavColor();
        
          function updateNavColor () {
            var currentSlide = cdSlider.querySelector("li.current_slide");
        
            var nextColor = ( currentSlide.nextElementSibling !== null ) ? currentSlide.nextElementSibling.getAttribute("data-color") : item[0].getAttribute("data-color");
            var	prevColor = ( currentSlide.previousElementSibling !== null ) ? currentSlide.previousElementSibling.getAttribute("data-color") : item[item.length-1].getAttribute("data-color");
        
            if (item.length > 2) {
              nav.querySelector(".prev").style.backgroundColor = prevColor;
              nav.querySelector(".next").style.backgroundColor = nextColor;
            }
          }
        
          nav.querySelector(".next").addEventListener('click', function(event) {
            event.preventDefault();
            nextSlide();
            updateNavColor();
          });
        
          nav.querySelector(".prev").addEventListener("click", function(event) {
            event.preventDefault();
            prevSlide();
            updateNavColor();
          });
          
          //autoUpdate
          setInterval(function() {
            if (autoUpdate) {
              nextSlide();
              updateNavColor();
            };
          },timeTrans);
        
        })();

        // Portfolio end