
// behavior of buttons and assistant window after click
function clickBehavior() {
const closeWindowPopup = document.querySelector(".closeWindowPopup");;
const assistantButton = document.querySelector(".assistantButton");
const assistantWindow = document.querySelector(".assistantWindow");

[assistantWindow, closeWindowPopup ].forEach( el => el.style.display="none");

assistantButton.addEventListener("click", ()=>
{
closeWindowPopup.style.display= "block";
assistantButton.style.display= "none";
assistantWindow.style.display= "block";
});

closeWindowPopup.addEventListener("click", ()=>
{
closeWindowPopup.style.display= "none";
assistantWindow.style.display= "none";
assistantButton.style.display= "block";
})
};

clickBehavior();






