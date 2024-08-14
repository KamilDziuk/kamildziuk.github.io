const effect3D = document.querySelector("#head");

document.addEventListener("mousemove",(e) =>
{
    rotateElement(e,effect3D);
})

function rotateElement(event, element)
{
    const x =  event.clientX;
    const y =  event.clientY;

    const middleX = window.innerWidth / 2;
    const middleY = window.innerHeight / 2;

    const pozytionX = ((x - middleX)/ middleX) * 5;
    const pozytionY = ((y - middleY)/ middleY) * 10;


    element.style.setProperty('--rotateX', - 1* pozytionX + "deg")

    element.style.setProperty('--rotateY', - 1* pozytionY + "deg")

};

