let showImages = 0;
function carousel() {
let banner = document.querySelectorAll('.banner');
let images = document.querySelectorAll('.images');
for(let i = 0; i < images.length ; i++)
{
    images[i].style.display = 'none';
    banner[i].style.display = 'none';
}
showImages++;

if(showImages > images.length)

{
    showImages = 1;
}

images[showImages - 1].style.display = 'block';
banner[showImages - 1].style.display = 'block';
setTimeout(carousel, 3000);
}

carousel();