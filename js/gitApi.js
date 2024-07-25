const api_URL = "https://api.github.com/users/KamilDziuk/repos";

async function gitAPI()
{

let url =  await fetch(`${api_URL}`);
let showRepo = document.querySelector(".showRepo");
let lengthRepo = document.querySelector(".lengthRepo");

let data = await url.json();

 let textElement = "<ul>";
 data.forEach(element => {
  textElement += `<a href="${element.html_url}"><p>${element.name}</p></a>`;
 });
 showRepo.innerHTML = textElement;

 textElement += "</ul>";
 let polishLanguage =  document.querySelector('.polishLanguage');
 lengthRepo.innerHTML =  `<p>My repository List <i class="fa fa-github"></i><br>Total number: ${data.length}</p>`;
  
    polishLanguage.addEventListener('click', () =>{
  if(polishLanguage.textContent == 'English'){
    lengthRepo.innerHTML =  `<p>Moje repozytoria <i class="fa fa-github"></i><br>Łączna liczba: ${data.length}</p>`;
  }
   else if(polishLanguage.textContent == 'Polish'){
        lengthRepo.innerHTML =  `<p>My repository List <i class="fa fa-github"></i><br>Total number: ${data.length}</p>`;
        }
 
})

};
gitAPI();