
function ScrollMenu()
{
  
    this.aboutMeText =  () =>
    {
        this.cooperationText();
        this.offerText();
        this.projectsText();
      
        setTimeout(()=>
            {
           
                
                document.querySelector(".meImage").classList.add("meImage--scrolling");
              
                document.querySelector(".aboutMeTextHead").addEventListener("mouseover", () =>
                    {
                
                        document.querySelector(".meImage").classList.remove("meImage--scrolling");
                    })
          
            },3000)

         

window.addEventListener("scroll", () => {
    let scroll = window.pageYOffset;
    if (scroll >= document.querySelector("#aboutMePosition").offsetTop) {
    document.querySelector(".aboutMeText").classList.add("aboutMeText--scrolling");
    document.querySelector(".aboutMe").classList.add("aboutMe--scrolling");
  
   
    setTimeout(()=>
    {
   

        document.querySelector(".meImage").classList.add("meImage--scrolling");
  
    },3000)
  
    }
    
    else {
    document.querySelector(".aboutMeText").classList.remove("aboutMeText--scrolling");
    document.querySelector(".meImage").classList.remove("meImage--scrolling");
    document.querySelector(".aboutMe").classList.remove("aboutMe--scrolling");
    }  
    if(scroll >= document.querySelector("#portfolioPosition").offsetTop - 100)
        {
            document.querySelector(".aboutMeText").classList.remove("aboutMeText--scrolling");
            document.querySelector(".aboutMe").classList.remove("aboutMe--scrolling");
        }
    });
    }
    this.projectsText=  () =>
    {
       
        window.addEventListener("scroll", () => {
             scroll = window.pageYOffset;

     if(scroll >= document.querySelector("#portfolioPosition").offsetTop)
        {
            document.querySelector(".projectsText").classList.add("projectsText--scrolling");
           
        } 
        else
        {
            document.querySelector(".projectsText").classList.remove("projectsText--scrolling");
            
        }

        if(scroll >= document.querySelector("#offerPosition").offsetTop)   {
  
    document.querySelector(".projectsText").classList.remove("projectsText--scrolling");
    }
   
    })

    }

    this.offerText=  () =>
    {
     window.addEventListener("scroll", () => {
         scroll = window.pageYOffset;

     if(scroll >=document.querySelector("#offerPosition").offsetTop)
        {
            document.querySelector(".offerText").classList.add("offerText--scrolling");
            document.querySelector(".offer").classList.add("offer--scrolling");
            
        } 
        else
        {
        document.querySelector(".offerText").classList.remove("offerText--scrolling");
        document.querySelector(".offer").classList.remove("offer--scrolling");
        }
        if(scroll >=  document.querySelector("#cooperationPosition").offsetTop) {
  
    document.querySelector(".offerText").classList.remove("offerText--scrolling");
    document.querySelector(".offer").classList.remove("offer--scrolling");

    }
  
    });   
    }

    this.cooperationText=  () =>
        {
         window.addEventListener("scroll", () => {
             scroll = window.pageYOffset;
    
         if(scroll >= document.querySelector("#cooperationPosition").offsetTop + -100) 
            {
                document.querySelector(".cooperationText").classList.add("cooperationText--scrolling");
                document.querySelector(".cooperation").classList.add("cooperation--scrolling");
            } 
            else
            {
            document.querySelector(".cooperationText").classList.remove("cooperationText--scrolling");
            document.querySelector(".cooperation").classList.remove("cooperation--scrolling");
            }
            if(scroll >= document.querySelector("#cooperationPosition").offsetTop + 150) {
      
        document.querySelector(".cooperationText").classList.remove("cooperationText--scrolling");
        document.querySelector(".cooperation").classList.remove("cooperation--scrolling");
        }
      
        });   
        }

    
}

let scrollMenuResult = new ScrollMenu();
scrollMenuResult.aboutMeText();



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
this.landingTextContener = document.querySelector(".landingTextContener");
this.landing.style.display = "block";
this.landingTextContener.style.display = "block";

this.startLanding = () =>
    {
       setTimeout(()=>{

        this.landing.style.display = "none";
        this.landingTextContener.style.display = "none";

       },2000)

    }

}

let landingResult = new landing();

landingResult.startLanding();


// landing end 


//random slogan start
let randomTable = [
    "D",
    "z",
    "i",
    "u",
    "k",
    "s",
    "a",
    "v",
    "1",
    ":-)",
    "$",
    "%",
    "!",
    "/",
    "-",
    "`",
    "&",
    "*",
    "@",
    "x",
    ";",
    "`",
    "=",
    "_"

 ]
let landingText0 = document.querySelector(".landingText0");
let landingText1 = document.querySelector(".landingText1");
let landingText2 = document.querySelector(".landingText2");
let landingText3 = document.querySelector(".landingText3");
let landingText4 = document.querySelector(".landingText4");
let interval0 = setInterval(()=>{

    let showText = randomTable[Math.floor(Math.random() * randomTable.length)];

    if(showText == "D")
        {
            clearInterval(interval0)
        }
    landingText0.innerHTML = showText;

},40)


let interval1 = setInterval(()=>{


    let showText1   = randomTable[Math.floor(Math.random() * randomTable.length)];
    if(showText1 == "z")
        {
            clearInterval(interval1)
        }
    
  
    landingText1.innerHTML = showText1;

},40)




let interval2 =  setInterval(()=>{

  
    let showText2= randomTable[Math.floor(Math.random() * randomTable.length)];

 
    if(showText2 == "i")
        {
            clearInterval(interval2)
        }
    landingText2.innerHTML = showText2;


},90)

let interval3 = setInterval(()=>{

   
    let showText3= randomTable[Math.floor(Math.random() * randomTable.length)];
       
    if(showText3 == "u")
        {
            clearInterval(interval3)
        }
        

  
    landingText3.innerHTML = showText3;

},80)




let interval4 =  setInterval(()=>{

  
    let showText4= randomTable[Math.floor(Math.random() * randomTable.length)];

    if(showText4 == "k")
        {
            clearInterval(interval4)
        }
        
    landingText4.innerHTML = showText4;
},10)

//random slogan end