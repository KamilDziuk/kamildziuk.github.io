let galleryItem = document.querySelectorAll('.portfolioImage');

let numbers = 0;

function  gallery(index)
{
    galleryItem.forEach((item, i) => {
        item.style.transform = `translateY(${(i - index)* 110}%)`;
        item.style.opacity = i  === index ? 1: 0.5;
    });

    
};






setInterval( () =>
{
    numbers = (numbers < galleryItem.length -2) ?  numbers +1:0;
    gallery(numbers);
    
  
},3000)

gallery(numbers);