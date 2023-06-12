// Inicjalizacja biblioteki WOW.js
new WOW().init();

// Obsługa zdarzenia scrolla na oknie
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $(".fixed-top").addClass("change-fixed-top"); // Dodaj klasę "change-fixed-top" do elementu o klasie "fixed-top"
    } else {
        $(".fixed-top").removeClass("change-fixed-top"); // Usuń klasę "change-fixed-top" z elementu o klasie "fixed-top"
    }
});

// Obsługa kliknięcia na link
$(document).on('click', 'a', function(event){
    event.preventDefault(); // Zablokuj domyślne działanie linka

    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top // Animuj przewijanie do elementu o ID podanym w atrybucie "href" klikniętego linka
    }, 1250); // Animacja trwa 1250ms
    $('html, body').animate({path : new $.path.bezier(bezier_params)}); // Animuj ścieżkę
});

// Obsługa zdarzenia załadowania DOM
document.addEventListener('DOMContentLoaded', function() {
    var slides = document.querySelectorAll('.slide');
    var currentSlide = 0;
    var slideInterval = setInterval(nextSlide, 3000); // Przesuwa slajd co 3 sekundy
  
    function nextSlide() {
      slides[currentSlide].classList.remove('active'); // Usuń klasę "active" z aktualnego slajdu
      currentSlide = (currentSlide + 1) % slides.length; // Przejdź do następnego slajdu
      slides[currentSlide].classList.add('active'); // Dodaj klasę "active" do nowego aktualnego slajdu
    }
});
