

let cooperation = document.querySelector('.cooperation');

let offer = document.querySelector('.offer');

let textContributions = document.querySelector('.textContributions');
let aboutMeText = document.querySelector('.aboutMeText');
let projectsText = document.querySelector('.projectsText');
let offerText = document.querySelector('.offerText');
let cooperationText = document.querySelector('.cooperationText');
let optionsMenu = document.querySelector('#optionsMenu');
let aboutMeTextHead = document.querySelector('.aboutMeTextHead');
let textHead = document.querySelector('.textHead');


let aboutMePosition = document.querySelector('.aboutMePosition');
let portfolioPosition = document.querySelector('.portfolioPosition');
let offerPosition = document.querySelector('.offerPosition');
let cooperationPosition = document.querySelector('.cooperationPosition');


let polishLanguage =  document.querySelector('.polishLanguage');



polishLanguage.innerHTML = 'Polish';


aboutMePosition.innerHTML =`About me`;
portfolioPosition.innerHTML =`Projects`;
offerPosition.innerHTML =`Offer`;
cooperationPosition.innerHTML =`Cooperation`;


aboutMePosition.innerHTML =`About me`;


textContributions.innerHTML =`Contributions in the last year`;


aboutMeText.innerHTML = `About me`;
projectsText.innerHTML = `Projects`;
offerText.innerHTML = `Offer`;
cooperationText.innerHTML = `Cooperation`;

textHead.innerHTML ="Websites & Web Applications";

aboutMeTextHead.innerHTML = 'I am a Web Developer, I create websites and web applications on a daily basis. I work mainly with JavaScript and MySQL databases. In my projects, I focus on clarity and simplicity of code. In my free time, I develop my own projects and visit interesting places.';









offer.innerHTML = `<h3 class="offerText" id="offerTextMenu"> <div class ="offerTitleText ">WWW PAGES </div> <i class="fa fa-desktop" style ="font-size: 30px;"></i><br><br>I design each website in such a way as to maintain harmony between aesthetics and simplicity. It strives to create websites that are not only eye-catching, but also easy to use for users. I emphasize minimalist design, eliminating unnecessary elements and focusing on key aspects, which makes the pages clear and intuitive. Mainly using JavaScript and PHP programming languages<br><br><br><br>
    <div class ="offerTitleText">WEB APP </div> <i  class="fa fa-code" style ="font-size: 30px;"></i><br><br>Do you need tailored functionality for your website? I will design an application or functionality for you that meets the individual needs of your business. Discover the potential of non-standard solutions and stand out from the competition!<br><br><br><br>
    <div class ="offerTitleText">TECHNICAL SUPPORT </div>  <i class="fa fa-bug" style ="font-size: 30px;" ></i><br><br>If you want to maintain full control over the health of your website and application, I will be happy to cooperate with you in the field of cybersecurity and technical support.</h3>`;


cooperation.innerHTML =`<h3 class="cooperationText" id="cooperationTextMenu"> <div class ="offerTitleText">WHAT DOES COOPERATION LOOK LIKE?</div><br><br>
   1. Introductory conversation - I need a few minutes of your time to initially discuss the offer and get to know yours
 needs.
 <br>
 <br>
 2. Quotation of the order - After the initial conversation, I price the services. You will receive everything in a more convenient form. PDF you would
 could easily read the offer.
 <br>
 <br>
 3. We sign the contract. Once the terms of cooperation are agreed, we sign a contract, which I will send by e-mail.
 <br>
 <br>
 4. I'm getting down to work. I create your website based on all guidelines and scope of work.
 <br>
 <br>
 5. Presentation of effects. When the website is ready, I send you a link so you can check if everything is OK.
 <br>
 <br>
 6. Amendments. If you think something can be done better/improved, I make changes to the website. This is a service
 paid additionally. Customers don't always use it, but it's worth having "protection".
 <br>
 <br>
 7. I do not issue VAT invoices.
 <br>
 <br>
 8. Cooperation. We can also establish long-term cooperation. Here the scope of such website care is:
 an individual matter. I can monitor the operation of the application or fix errors
 which may appear over time.</h3>`;

  
    
  
    
    
   polishLanguage.addEventListener('click', () =>
{
 
if(polishLanguage.textContent == 'Polish')
{
   
        polishLanguage.innerHTML = 'English';

     aboutMePosition.innerHTML =`O mnie`;
    portfolioPosition.innerHTML =`Projekty`;
    offerPosition.innerHTML =`Oferta`;
    cooperationPosition.innerHTML =`Współpraca`;
    
    
    textHead.innerHTML ="Strony Internetowe <br>& Aplikacje Webowe";
    
    
    
textContributions.innerHTML =`Wkłady w ostatnim roku`;
    
    aboutMeText.innerHTML = `O mnie`;
    projectsText.innerHTML = `Projekty`;
    offerText.innerHTML = `Oferta`;
    cooperationText.innerHTML = `Współpraca`;
    
    aboutMeTextHead.innerHTML = 'Jestem Web Deweloperem, na co dzień tworze strony internetowe oraz aplikację webowe. Pracuję głównie z JavaScript oraz bazami danych MySQL. W projektach stawiam na przejrzystość i prostotę kodu. W wolnym czasie rozwijam własne projekty i zwiedzam ciekawe miejsca.';
    
    
    
    
    
    
    

    offer.innerHTML = `<h3 class="offerText" id="offerTextMenu"> <div class ="offerTitleText">STRONY WWW </div> <i class="fa fa-desktop" style ="font-size: 30px;"></i><br><br>Każdą stronę internetową projektuję tak, aby zachować harmonię pomiędzy estetyką i prostotą. Stara się tworzyć strony internetowe, które nie tylko przyciągają wzrok, ale są również łatwe w obsłudze dla użytkowników. Stawiam na minimalistyczny design, eliminując niepotrzebne elementy i skupiając się na kluczowych aspektach, dzięki czemu strony są przejrzyste i intuicyjne. Głównie przy użyciu języków programowania JavaScript oraz PHP<br><br><br><br>
 <div class ="offerTitleText">APLIKACJE </div> <i  class="fa fa-code" style ="font-size: 30px;"></i><br><br>Potrzebujesz funkcjonalności dostosowanej do Twojej witryny? Zaprojektuję dla Ciebie aplikację lub funkcjonalność dostosowaną do indywidualnych potrzeb Twojego biznesu. Odkryj potencjał niestandardowych rozwiązań i wyróżnij się na tle konkurencji!<br><br><br><br>
     <div class ="offerTitleText">WSPARCIE TECHNICZNE </div>  <i class="fa fa-bug" style ="font-size: 30px;" ></i><br><br>Jeśli pragniesz utrzymać pełną kontrolę nad stanem swojej strony internetowej i aplikacji, z przyjemnością nawiążę z Tobą współpracę w zakresie cyberbezpieczeństwa oraz wsparcia technicznego.</h3>`;
    
    
    cooperation.innerHTML =` <h3 class="cooperationText" id="cooperationTextMenu"> <div class ="offerTitleText">JAK WYGLĄDA WSPÓŁPRACA?</div><br><br>
    <p>1. Rozmowa wstępna – Potrzebuję kilku minut Twojego czasu, by wstępnie omówić ofertę oraz poznać Twoje
        potrzeby.
        <br>
        <br>
        2. Wycena zlecenia – Po rozmowie wstępnej wyceniam usługi. Wszystko otrzymasz w wygodniej formie. PDF byś
        mógł/mogła spokojnie zapoznać się z ofertą.
        <br>
        <br>
        3. Podpisujemy umowę. Gdy warunki współpracy są już dogadane, podpisujemy umowę, którą wyślę na maila.
        <br>
        <br>
        4. Zabieram się do pracy. Tworzę Twoją witrynę w oparciu o wszystkie wytyczne oraz zakres pracy.
        <br>
        <br>
        5. Prezentacja efektów. Gdy witryna jest gotowa wysyłam link byś mógł sprawdzi, czy wszystko jest w porządku.
        <br>
        <br>
        6. Poprawki. Jeśli uważasz, że coś można zrobić lepiej/poprawić, dokonuję zmian na stronie. Jest to usługa
        dodatkowo płatna. Klienci nie zawsze z niej korzystają, jednak warto mieć „zabezpieczenie”.
        <br>
        <br>
        7. Nie wystawiam faktury VAT.
        <br>
        <br>
        8. Współpraca. Możemy również nawiązać współpracę długoterminową. Tutaj zakres takiej opieki nad stroną to
        kwestia indywidualna. Mogę monotorwać działanie aplikacji, czy też naprawić błędy
        które mogą pojawić się z czasem.</h3>`;
}

 else if(polishLanguage.textContent == 'English')
    {
    
  
        polishLanguage.innerHTML = 'Polish';
    
        textHead.innerHTML ="Websites & Web Applications";
        aboutMePosition.innerHTML =`About me`;
        portfolioPosition.innerHTML =`Projects`;
        offerPosition.innerHTML =`Offer`;
        cooperationPosition.innerHTML =`Cooperation`;
        
        textContributions.innerHTML =`Contributions in the last year`;
        
        
        
        
        
        aboutMeText.innerHTML = `About me`;
        projectsText.innerHTML = `Projects`;
        offerText.innerHTML = `Offer`;
        cooperationText.innerHTML = `Cooperation`;
        
        aboutMeTextHead.innerHTML = 'I am a Web Developer, I create websites and web applications on a daily basis. I work mainly with JavaScript and MySQL databases. In my projects, I focus on clarity and simplicity of code. In my free time, I develop my own projects and visit interesting places.';
        
        
        
        
        
        
        
        
   

offer.innerHTML = `<h3 class="offerText" id="offerTextMenu"> <div class ="offerTitleText">WWW PAGES </div> <i class="fa fa-desktop" style ="font-size: 30px;"></i><br><br>I design each website in such a way as to maintain harmony between aesthetics and simplicity. It strives to create websites that are not only eye-catching, but also easy to use for users. I emphasize minimalist design, eliminating unnecessary elements and focusing on key aspects, which makes the pages clear and intuitive. Mainly using JavaScript and PHP programming languages<br><br><br><br>
<div class ="offerTitleText">WEB APP </div> <i  class="fa fa-code" style ="font-size: 30px;"></i><br><br>Do you need tailored functionality for your website? I will design an application or functionality for you that meets the individual needs of your business. Discover the potential of non-standard solutions and stand out from the competition!<br><br><br><br>
<div class ="offerTitleText">TECHNICAL SUPPORT </div>  <i class="fa fa-bug" style ="font-size: 30px;" ></i><br><br>If you want to maintain full control over the health of your website and application, I will be happy to cooperate with you in the field of cybersecurity and technical support.</h3>`;


cooperation.innerHTML =`<h3 class="cooperationText" id="cooperationTextMenu"> <div class ="offerTitleText">WHAT DOES COOPERATION LOOK LIKE?</div><br><br>
1. Introductory conversation - I need a few minutes of your time to initially discuss the offer and get to know yours
needs.
<br>
<br>
2. Quotation of the order - After the initial conversation, I price the services. You will receive everything in a more convenient form. PDF you would
could easily read the offer.
<br>
<br>
3. We sign the contract. Once the terms of cooperation are agreed, we sign a contract, which I will send by e-mail.
<br>
<br>
4. I'm getting down to work. I create your website based on all guidelines and scope of work.
<br>
<br>
5. Presentation of effects. When the website is ready, I send you a link so you can check if everything is OK.
<br>
<br>
6. Amendments. If you think something can be done better/improved, I make changes to the website. This is a service
paid additionally. Customers don't always use it, but it's worth having "protection".
<br>
<br>
7. I do not issue VAT invoices.
<br>
<br>
8. Cooperation. We can also establish long-term cooperation. Here the scope of such website care is:
an individual matter. I can monitor the operation of the application or fix errors
which may appear over time.</h3>`;
        
    }


});

