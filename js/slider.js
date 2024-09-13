let galleryItem = document.querySelectorAll('.portfolioImage');
function  gallery(index)
{
    galleryItem.forEach((item, i) => {
        item.style.transform = `translateY(${(i - index)* 115}%)`;
      
    });

    
};
let numbers = 0;
let moveGallery;
goSlider = () => {
 moveGallery = setInterval( () =>
    {
        numbers = (numbers < galleryItem.length -3) ?  numbers +1:0;
        gallery(numbers);
    
    },4000);
    
}
goSlider();
galleryItem.forEach(element => {
    element.style.transition = "transform 3s ease";
});

galleryItem.forEach(element2 => {
    element2.addEventListener("mouseleave", ()=> {
       
        goSlider();
     })
});
normalMove = () => 

    {
        galleryItem.forEach(element1 => {
            element1.style.transition = "transform 3s ease";
        });
    }










galleryItem.forEach(element => {
    

    element.addEventListener("mousemove", ()=> {
        
   clearTimeout(moveGallery);
})
});
document.querySelector('.top').addEventListener('click', () => {
numbers = (numbers < galleryItem.length - 1)? numbers + 1: 0;
normalMove();
gallery(numbers);
clearTimeout(moveGallery);
});

document.querySelector('.buttom').addEventListener('click', () => {
numbers = (numbers > 0) ? numbers -1: galleryItem.length -1;
normalMove();
clearTimeout(moveGallery);
gallery(numbers);
});

document.querySelector('.top').addEventListener('mouseleave', () => {
    goSlider();
});


document.querySelector('.buttom').addEventListener('mouseleave', () => {
    goSlider();
});

gallery(numbers);




let property = document.querySelectorAll('.property');


let propertyNumbers = 0;

function  propertyText(index)
{
    property.forEach((item, i) => {
        item.style.transform = `translateY(${(i - index)* 110}%)`;
        
    });

    
};
let moveGalleryBar;
goSliderBar = () => {
 moveGalleryBar = setInterval( () =>
{
    propertyNumbers = (propertyNumbers < property.length -1) ?  propertyNumbers +1:0;
    propertyText(propertyNumbers);

},5000)
}
goSliderBar();
property.forEach(element2 => {
    

    element2.addEventListener("mousemove", ()=> {
        
   clearTimeout(moveGalleryBar);
})
})

property.forEach(element3 => {
    

    element3.addEventListener("mouseleave", ()=> {
        
        goSliderBar();
})
})
