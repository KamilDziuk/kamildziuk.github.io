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



// slides dwo start
 let tracking,rightTracking,$sliderTwo=$(".slideshowTwo .sliderTwo"),maxItems=$(".itemTwo",$sliderTwo).length,dragging=!1;for($sliderRight=$(".slideshowTwo").clone().addClass("slideshowTwo-right").appendTo($(".split-slideshowTwo")),reverseItems=(rightItems=$(".itemTwo",$sliderRight).toArray()).reverse(),$(".sliderTwo",$sliderRight).html(""),i=0;i<maxItems;i++)$(reverseItems[i]).appendTo($(".sliderTwo",$sliderRight));function changeSlide(){$(".slideshowTwo-left").slick("slickNext")}$sliderTwo.addClass("slideshowTwo-left"),$(".slideshowTwo-left").slick({vertical:!0,verticalSwiping:!0,arrows:!1,infinite:!0,dots:!0,speed:1e3,cssEase:"cubic-bezier(0.7, 0, 0.3, 1)"}).on("beforeChange",function(s,e,l,t){l>t&&0==t&&l==maxItems-1?($(".slideshowTwo-right .sliderTwo").slick("slickGoTo",-1),$(".slideshowTwo-text").slick("slickGoTo",maxItems)):l<t&&0==l&&t==maxItems-1?($(".slideshowTwo-right .sliderTwo").slick("slickGoTo",maxItems),$(".slideshowTwo-text").slick("slickGoTo",-1)):($(".slideshowTwo-right .sliderTwo").slick("slickGoTo",maxItems-1-t),$(".slideshowTwo-text").slick("slickGoTo",t))}).on("onclick",function(s){s.preventDefault(),s.deltaX>0||s.deltaY<0?$(this).slick("slickNext"):(s.deltaX<0||s.deltaY>0)&&$(this).slick("slickPrev")}).on("onclick",function(){dragging=!0,tracking=parseInt((tracking=$(".slick-track",$sliderTwo).css("transform")).split(",")[5]),rightTracking=parseInt((rightTracking=$(".slideshowTwo-right .slick-track").css("transform")).split(",")[5])}).on("onclick",function(){dragging&&(diffTracking=(newTracking=parseInt((newTracking=$(".slideshowTwo-left .slick-track").css("transform")).split(",")[5]))-tracking,$(".slideshowTwo-right .slick-track").css({transform:"matrix(1, 0, 0, 1, 0, "+(rightTracking-diffTracking)+")"}))}).on("onclick",function(){dragging=!1}),$(".slideshowTwo-right .sliderTwo").slick({swipe:!1,vertical:!0,arrows:!1,infinite:!0,speed:950,cssEase:"cubic-bezier(0.7, 0, 0.3, 1)",initialSlide:maxItems-1}),$(".slideshowTwo-text").slick({swipe:!1,vertical:!0,arrows:!1,infinite:!0,speed:900,cssEase:"cubic-bezier(0.7, 0, 0.3, 1)"}),setInterval(changeSlide,2500);
// slides dwo end



