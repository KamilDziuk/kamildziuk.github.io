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
 lengthRepo.innerHTML =  `<p>List of my projects (repositories) from my <a target="_blank"  href="https://github.com/KamilDziuk" style="color: #fff;">github</a> account, where I document progress in current projects. Total number: ${data.length}</p>`;
  
    polishLanguage.addEventListener('click', () =>{
  if(polishLanguage.textContent == 'English'){
    lengthRepo.innerHTML =  `<p>Lista moich projektów (repozytoriów) z mojego konta na platformie <a target="_blank"  href="https://github.com/KamilDziuk" style="color: #fff;"> github </a>, prowadzę tam dokumentację postępów w aktualnych projektach. Łączna liczba: ${data.length}</p>`;
  }
   else if(polishLanguage.textContent == 'Polish'){
        lengthRepo.innerHTML =  `<p>List of my projects (repositories) from my <a target="_blank"  href="https://github.com/KamilDziuk" style="color: #fff;"> github</a> account, where I document progress in current projects. Total number: ${data.length}</p>`;
        }
 
})

};
gitAPI();