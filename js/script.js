
function ScrollMenu()
{
  
    this.aboutMeText =  () =>
    {
        this.cooperationText();
        this.offerText();
        this.projectsText();
      
 

window.addEventListener("scroll", () => {
    let scroll = window.pageYOffset || document.documentElement.scrollaboutMeText;
    if (scroll >= -0) {
    document.querySelector(".aboutMeText").classList.add("aboutMeText--scrolling");
    }
    
    else {
    document.querySelector(".aboutMeText").classList.remove("aboutMeText--scrolling");
  
    }  
    if(scroll >=130)
        {
            document.querySelector(".aboutMeText").classList.remove("aboutMeText--scrolling");
        }
    });
    }
    this.projectsText=  () =>
    {
       
        window.addEventListener("scroll", () => {
             scroll = window.pageYOffset || document.documentElement.scrollprojectsText;

     if(scroll >=140)
        {
            document.querySelector(".projectsText").classList.add("projectsText--scrolling");
        } 
        else
        {
            document.querySelector(".projectsText").classList.remove("projectsText--scrolling");
        }

        if(scroll >=1900)   {
  
    document.querySelector(".projectsText").classList.remove("projectsText--scrolling");
    }
   
    })

    }

    this.offerText=  () =>
    {
     window.addEventListener("scroll", () => {
         scroll = window.pageYOffset || document.documentElement.scrollofferText;

     if(scroll >= 2000)
        {
            document.querySelector(".offerText").classList.add("offerText--scrolling");
        } 
        else
        {
        document.querySelector(".offerText").classList.remove("offerText--scrolling");
        }
        if(scroll >=2600) {
  
    document.querySelector(".offerText").classList.remove("offerText--scrolling");
    }
  
    });   
    }

    this.cooperationText=  () =>
        {
         window.addEventListener("scroll", () => {
             scroll = window.pageYOffset || document.documentElement.scrollcooperationText;
    
         if(scroll >= 2620)
            {
                document.querySelector(".cooperationText").classList.add("cooperationText--scrolling");
            } 
            else
            {
            document.querySelector(".cooperationText").classList.remove("cooperationText--scrolling");
            }
            if(scroll >=4000) {
      
        document.querySelector(".cooperationText").classList.remove("cooperationText--scrolling");
        }
      
        });   
        }

    
}

let scrollMenuResult = new ScrollMenu();
scrollMenuResult.aboutMeText();


// header carousel start
let number = 0;
let consoleLog = document.querySelectorAll('.consoleLog');
function headerCarousel(){


for(let i = 0; i< consoleLog.length; i++)
{
    consoleLog[i].style.display = 'none';
}
    number ++;
if(number > consoleLog.length)
{
    number = +1;
}
consoleLog[number -1].style.display = 'block';
setTimeout(headerCarousel,3000);



};

headerCarousel(number);

    

// header carousel end

// Bar and bar icone start

function Bar()
{

this.barButton = document.querySelector(".barButton");
this.menu = document.querySelector(".menu");
this.optionsMenu = document.querySelector(".optionsMenu");

this.optionsMenu.style.display = "none";
this.menu.style.display = "none";
this.openBar = () =>
    {
       
         return this.barButton.addEventListener("click", () =>
        {
if( this.menu.style.display == "none" || this.optionsMenu.style.display == "none")
    {
        this.menu.style.display = "block";
        this.optionsMenu.style.display = "block";
    }
    else
    {
        this.menu.style.display = "none";
        this.optionsMenu.style.display = "none";
    }
    
            
        })
    }

}

let barResult = new Bar();

    barResult.openBar();






// Bar and bar icone end



// landing start 

function landing()
{

this.landing = document.querySelector("#landing");

this.landing.style.display = "block";


this.startLanding = () =>
    {
       setTimeout(()=>{

     
        this.landing.style.display = "none";

       },1000)

    }

}

let landingResult = new landing();

landingResult.startLanding();


// landing end 


