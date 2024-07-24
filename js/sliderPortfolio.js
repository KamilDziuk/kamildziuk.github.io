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
numbers = (numbers < galleryItem.length - 2)? numbers + 1: 0;
gallery(numbers);
});

document.querySelector('.buttom').addEventListener('click', () => {
numbers = (numbers > 0) ? numbers -2: galleryItem.length -1;
gallery(numbers);
});

gallery(numbers);