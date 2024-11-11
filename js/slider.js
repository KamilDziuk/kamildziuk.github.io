let galleryItem = document.querySelectorAll('.portfolioImage');
function  gallery(index)
{
    galleryItem.forEach((item, i) => {
        item.style.transform = `translateY(${(i - index)* 105}%)`;
      
    });

    
};
slideStretch = () =>
{
    numbers = (numbers < galleryItem.length -1) ?  numbers +1:0;
    gallery(numbers);
}
let numbers = 0;
let moveGallery;
slideStretch();
goSlider = () => {
 moveGallery = setInterval( () =>
    {
        slideStretch();
     
    },3000);
    
}
goSlider();
galleryItem.forEach(element => {
    element.style.transition = "transform 5.5s ease";
});

// galleryItem.forEach(element2 => {
//     element2.addEventListener("mouseleave", ()=> {
       
//         goSlider();
//      })
// });
// normalMove = () => 

//     {
//         galleryItem.forEach(element1 => {
//             element1.style.transition = "transform 4.5s ease";
//         });
//     }










galleryItem.forEach(element => {
    

    element.addEventListener("mousemove", ()=> {
        
   clearTimeout(moveGallery);
})
});
document.querySelector('.top').addEventListener('click', () => {
numbers = (numbers < galleryItem.length - 1)? numbers + 1: 0;

// normalMove();
gallery(numbers);
clearTimeout(moveGallery);
});

document.querySelector('.buttom').addEventListener('click', () => {
numbers = (numbers > 0) ? numbers -1: galleryItem.length -1;
// normalMove();
clearTimeout(moveGallery);
gallery(numbers);
});

document.querySelector('.top').addEventListener('mouseleave', () => {
    clearTimeout(moveGallery);

});


document.querySelector('.buttom').addEventListener('mouseleave', () => {
    clearTimeout(moveGallery);
    
});






let property = document.querySelectorAll('.property');


let propertyNumbers = 0;

function  propertyText(index)
{
    property.forEach((item, i) => {
        item.style.transform = `translateY(${(i - index)* 110}%)`;
        
    });

    
};
let moveGalleryBar;
propertyNumbers = (propertyNumbers < property.length -1) ?  propertyNumbers +1:0;
propertyText(propertyNumbers);
goSliderBar = () => {
 moveGalleryBar = setInterval( () =>
{
    propertyNumbers = (propertyNumbers < property.length -1) ?  propertyNumbers +1:0;
    propertyText(propertyNumbers);

},3500)
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
