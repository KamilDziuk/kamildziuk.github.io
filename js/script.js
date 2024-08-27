
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
    
         if(scroll >= document.querySelector("#cooperationPosition").offsetTop)
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


