 
 // navigation bar start
document.querySelector(".hamburger").addEventListener("click", function() {
    document.querySelector(".hamburger").classList.toggle("is-active");
    document.querySelector(".navbar__menu").classList.toggle("navbar__menu--active");
    document.querySelector(".top").classList.toggle("top--open");
    });
    window.addEventListener("scroll", function() {
    let scroll = window.pageYOffset || document.documentElement.scrollTop;
    if (scroll >= 60) {
    document.querySelector(".top").classList.add("top--scrolling");
    } else {
    document.querySelector(".top").classList.remove("top--scrolling");
    }
    });
    // navigation bar end
    
    // popup start
    document.addEventListener("DOMContentLoaded", function () {
    let showPopupButton = document.getElementById('showPopup');
    let popup = document.getElementById('popup');
    let closePopupButton = document.getElementById('closePopup');
    showPopupButton.addEventListener('click', () => {
    popup.style.display = 'block';
    });
    closePopupButton.addEventListener('click', () => {
    popup.style.display = 'none';
    });
    window.addEventListener('click', (event) => {
    if (event.target === popup) {
    popup.style.display = 'none';
    }
    });
    let form = document.getElementById('form');
    let btn = document.getElementById('button');  
    });
    // popup end
 
 
 // Map start


 let mapOpp = L.map('map').setView([50.47837212922883, 19.45183168289603], 17);

 L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
  
 }).addTo(mapOpp);
 
 L.marker([50.478224952788814, 19.451750127726374]).addTo(mapOpp)
     .bindPopup('Biuro sprzedaży - Osiedle Park Paderewskiego')
     .openPopup();
  // Map end
 
 
 
 