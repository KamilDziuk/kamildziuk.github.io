let galleryItem = document.querySelectorAll('.portfolioImage');

let numbers = 0;

function  gallery(index)
{
    galleryItem.forEach((item, i) => {
        item.style.transform = `translateY(${(i - index)* 110}%)`;
        item.style.opacity = i  === index ? 1: 0.3;
    });

    
};






setInterval( () =>
{
    numbers = (numbers < galleryItem.length -3) ?  numbers +1:0;
    gallery(numbers);

},5000)


document.querySelector('.top').addEventListener('click', () => {
numbers = (numbers < galleryItem.length - 1)? numbers + 1: 0;
gallery(numbers);
});

document.querySelector('.buttom').addEventListener('click', () => {
numbers = (numbers > 0) ? numbers -1: galleryItem.length -1;
gallery(numbers);
});

gallery(numbers);


















let property = document.querySelectorAll('.property');


let propertyNumbers = 0;

function  propertyText(index)
{
    property.forEach((item, i) => {
        item.style.transform = `translateY(${(i - index)* 110}%)`;
        item.style.opacity = i  === index ? 1: 0.3;
    });

    
};

setInterval( () =>
{
    propertyNumbers = (propertyNumbers < property.length -1) ?  propertyNumbers +1:0;
    propertyText(propertyNumbers);

},5000)



propertyText(propertyNumbers);