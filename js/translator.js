

let cooperation = document.querySelector('#cooperation');

let offer = document.querySelector('#offer');


let aboutMeText = document.querySelector('.aboutMeText');
let projectsText = document.querySelector('.projectsText');
let offerText = document.querySelector('.offerText');
let cooperationText = document.querySelector('.cooperationText');
let certificatesText = document.querySelector('.certificatesText');
let baseText = document.querySelector('.baseText');
let optionsMenu = document.querySelector('#optionsMenu');
let aboutMeTextHead = document.querySelector('.aboutMeTextHead');


let aboutMePosition = document.querySelector('.aboutMePosition');
let portfolioPosition = document.querySelector('.portfolioPosition');
let offerPosition = document.querySelector('.offerPosition');
let cooperationPosition = document.querySelector('.cooperationPosition');
let certificatesMenu = document.querySelector('.certificatesMenu');
let baseTextMenu = document.querySelector('.baseTextMenu');
 let consoleLogText = document.querySelector(".consoleLog");
let polishLanguage =  document.querySelector('.polishLanguage');



polishLanguage.innerHTML = 'Polish';


aboutMePosition.innerHTML =`About me`;
portfolioPosition.innerHTML =`Projects`;
offerPosition.innerHTML =`Offer`;
cooperationPosition.innerHTML =`Cooperation`;
certificatesMenu.innerHTML =`Certificates`;
baseTextMenu.innerHTML =`My knowledge base`;







aboutMeText.innerHTML = `About me -`;
projectsText.innerHTML = `Projects --`;
offerText.innerHTML = `Offer ---`;
cooperationText.innerHTML = `Cooperation ----`;
certificatesText.innerHTML = `Certificates`;
baseText.innerHTML = `My knowledge base`;

aboutMeTextHead.innerHTML = 'Every day, I am a Web Developer, I have several years of professional experience in designing websites and creating applications. I have the skills necessary to further develop in my industry to be able to implement better solutions for your company. Outside of work, I am mainly interested in personal development, business and news in the field of cybersecurity. I am highly motivated to deepen my knowledge and achieve my goals.';









offer.innerHTML = `<h3 class="offerText" id="offerTextMenu">WWW PAGES<br><br>I design each website in such a way as to maintain harmony between aesthetics and simplicity. It strives to create websites that are not only eye-catching, but also easy to use for users. I emphasize minimalist design, eliminating unnecessary elements and focusing on key aspects, which makes the pages clear and intuitive.<br><br><br><br>
    APPS<br><br>Do you need tailored functionality for your website? I will design an application or functionality for you that meets the individual needs of your business. Discover the potential of non-standard solutions and stand out from the competition!.<br><br><br><br>
    TECHNICAL SUPPORT<br><br>Do you need tailored functionality for your website? I will design an application or functionality for you that meets the individual needs of your business. Discover the potential of non-standard solutions and stand out from the competition</h3>`;


cooperation.innerHTML =`<h3 class="cooperationText" id="cooperationTextMenu">WHAT DOES COOPERATION LOOK LIKE?<br><br>
    Introductory conversation - I need a few minutes of your time to initially discuss the offer and get to know yours
    needs.
    <br>
    <br>
    Order valuation – After the initial conversation, I price the services. You will receive everything in a more convenient form. PDF you would
    could easily read the offer.
    <br>
    <br>
    We sign the contract. Once the terms of cooperation are agreed, we sign a contract, which I will send by e-mail.
    <br>
    <br>
    IM going to work. I create your website based on all guidelines and scope of work.
    <br>
    <br>
    Effects presentation. When the website is ready, I send you a link so you can check if everything is OK.
    <br>
    <br>
    Amendments. If you think something can be done better/improved, I make changes to the website. This is a service
    included in the price. Customers don't always use it, but it's worth having "protection".
    <br>
    <br>
    I do not issue VAT invoices.
    <br>
    <br>
    Cooperation. We can also establish long-term cooperation. Here, the scope of such website care is:
    an individual matter. I can maintain your Newsletter or fix errors
    which may appear over time.</h3>`;

  
    
  
    
    
   polishLanguage.addEventListener('click', () =>
{
 
if(polishLanguage.textContent == 'Polish')
{
    consoleLogText.innerHTML = "Koduję Twoje pomysły na sukces w Internecie.";
        polishLanguage.innerHTML = 'English';

     aboutMePosition.innerHTML =`O mnie`;
    portfolioPosition.innerHTML =`Projekty`;
    offerPosition.innerHTML =`Oferta`;
    cooperationPosition.innerHTML =`Współpraca`;
    certificatesMenu.innerHTML =`Certyfikaty`;
    baseTextMenu.innerHTML =`Moja baza wiedzy`;
    
    
    
    
    
    
    
    aboutMeText.innerHTML = `O mnie -`;
    projectsText.innerHTML = `Projekty --`;
    offerText.innerHTML = `Oferta ---`;
    cooperationText.innerHTML = `Współpraca ----`;
    certificatesText.innerHTML = `Certyfikaty`;
    baseText.innerHTML = `Moja baza wiedzy`;
    
    aboutMeTextHead.innerHTML = 'Na co dzień jestem Web Developerem, posiadam kilkuletnie doświadczenie zawodowe w projektowaniu stron internetowych i tworzeniu aplikacji. Posiadam umiejętności niezbędne do dalszego rozwoju w swojej branży, aby móc wdrażać lepsze rozwiązania dla Twojej firmy. Poza pracą interesuję się głównie rozwojem osobistym, biznesem oraz nowościami z zakresu cyberbezpieczeństwa. Mam dużą motywację do pogłębiania wiedzy i osiągania postawionych sobie celów.';
    
    
    
    
    
    
    

    offer.innerHTML = `<h3 class="offerText" id="offerTextMenu">STRONY WWW<br><br>Każdą stronę internetową projektuję tak, aby zachować harmonię pomiędzy estetyką i prostotą. Stara się tworzyć strony internetowe, które nie tylko przyciągają wzrok, ale są również łatwe w obsłudze dla użytkowników. Stawiam na minimalistyczny design, eliminując niepotrzebne elementy i skupiając się na kluczowych aspektach, dzięki czemu strony są przejrzyste i intuicyjne.<br><br><br><br>
 APLIKACJE<br><br>Potrzebujesz funkcjonalności dostosowanej do Twojej witryny? Zaprojektuję dla Ciebie aplikację lub funkcjonalność dostosowaną do indywidualnych potrzeb Twojego biznesu. Odkryj potencjał niestandardowych rozwiązań i wyróżnij się na tle konkurencji!.<br><br><br><br>
 WSPARCIE TECHNICZNE<br><br>Potrzebujesz funkcjonalności dostosowanej do Twojej witryny? Zaprojektuję dla Ciebie aplikację lub funkcjonalność dostosowaną do indywidualnych potrzeb Twojego biznesu. Odkryj potencjał niestandardowych rozwiązań i wyróżnij się na tle konkurencji</h3>`;
    
    
    cooperation.innerHTML =`<h3 class="cooperationText" id="cooperationTextMenu">JAK WYGLĄDA WSPÓŁPRACA?<br><br>
   Rozmowa wprowadzająca - potrzebuję kilku minut Twojego czasu, aby wstępnie omówić ofertę i poznać Twoją
 wymagania.
 <br>
 <br>
 Wycena zamówienia – Po wstępnej rozmowie wyceniam usługę. Wszystko otrzymasz w wygodniejszej formie. PDF, tak
 mógł z łatwością zapoznać się z ofertą.
 <br>
 <br>
 Podpisujemy umowę. Po ustaleniu warunków współpracy podpisujemy umowę, którą przesyłam e-mailem.
 <br>
 <br>
 Idę do pracy. Tworzę Twoją stronę internetową w oparciu o wszystkie wytyczne i zakres prac.
 <br>
 <br>
 Prezentacja efektów. Gdy strona będzie już gotowa, przesyłam link, dzięki któremu możesz sprawdzić, czy wszystko jest w porządku.
 <br>
 <br>
 Poprawki. Jeśli uważasz, że można coś zrobić lepiej/ulepszyć, wprowadzam zmiany na stronie. To jest usługa
 wliczone w cenę. Klienci nie zawsze z tego korzystają, ale warto mieć „ochronę”.
 <br>
 <br>
 Nie wystawiam faktur VAT.
 <br>
 <br>
 Współpraca. Możemy nawiązać również długoterminową współpracę. Tutaj zakres takiej opieki nad stroną internetową wynosi:
 sprawa indywidualna. Mogę zarządzać Twoim biuletynem lub naprawiać błędy
 które mogą pojawić się z czasem.</h3>`;
}

 else if(polishLanguage.textContent == 'English')
    {
    
    consoleLogText.innerHTML = "I'm coding your ideas for online success.";
        polishLanguage.innerHTML = 'Polish';
    
    
        aboutMePosition.innerHTML =`About me`;
        portfolioPosition.innerHTML =`Projects`;
        offerPosition.innerHTML =`Offer`;
        cooperationPosition.innerHTML =`Cooperation`;
        certificatesMenu.innerHTML =`Certificates`;
        baseTextMenu.innerHTML =`My knowledge base`;
        
        
        
        
        
        
        
        aboutMeText.innerHTML = `About me -`;
        projectsText.innerHTML = `Projects --`;
        offerText.innerHTML = `Offer ---`;
        cooperationText.innerHTML = `Cooperation ----`;
        certificatesText.innerHTML = `Certificates`;
        baseText.innerHTML = `My knowledge base`;
        
        aboutMeTextHead.innerHTML = 'Every day, I am a Web Developer, I have several years of professional experience in designing websites and creating applications. I have the skills necessary to further develop in my industry to be able to implement better solutions for your company. Outside of work, I am mainly interested in personal development, business and news in the field of cybersecurity. I am highly motivated to deepen my knowledge and achieve my goals.';
        
        
        
        
        
        
        
        
        
        offer.innerHTML = `<h3 class="offerText" id="offerTextMenu">WWW PAGES<br><br>I design each website in such a way as to maintain harmony between aesthetics and simplicity. It strives to create websites that are not only eye-catching, but also easy to use for users. I emphasize minimalist design, eliminating unnecessary elements and focusing on key aspects, which makes the pages clear and intuitive.<br><br><br><br>
            APPS<br><br>Do you need tailored functionality for your website? I will design an application or functionality for you that meets the individual needs of your business. Discover the potential of non-standard solutions and stand out from the competition!.<br><br><br><br>
            TECHNICAL SUPPORT<br><br>Do you need tailored functionality for your website? I will design an application or functionality for you that meets the individual needs of your business. Discover the potential of non-standard solutions and stand out from the competition</h3>`;
        
        
        cooperation.innerHTML =`<h3 class="cooperationText" id="cooperationTextMenu">WHAT DOES COOPERATION LOOK LIKE?<br><br>
            Introductory conversation - I need a few minutes of your time to initially discuss the offer and get to know yours
            needs.
            <br>
            <br>
            Order valuation – After the initial conversation, I price the services. You will receive everything in a more convenient form. PDF you would
            could easily read the offer.
            <br>
            <br>
            We sign the contract. Once the terms of cooperation are agreed, we sign a contract, which I will send by e-mail.
            <br>
            <br>
            IM going to work. I create your website based on all guidelines and scope of work.
            <br>
            <br>
            Effects presentation. When the website is ready, I send you a link so you can check if everything is OK.
            <br>
            <br>
            Amendments. If you think something can be done better/improved, I make changes to the website. This is a service
            included in the price. Customers don't always use it, but it's worth having "protection".
            <br>
            <br>
            I do not issue VAT invoices.
            <br>
            <br>
            Cooperation. We can also establish long-term cooperation. Here, the scope of such website care is:
            an individual matter. I can maintain your Newsletter or fix errors
            which may appear over time.</h3>`;
        
    }


});

