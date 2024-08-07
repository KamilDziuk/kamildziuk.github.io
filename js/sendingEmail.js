


    // email  start 
    
    let send = document.querySelector('.send');
    let text = document.querySelector('.text');
    let text1 = document.querySelector('.text1');
    let textValue = document.querySelector('.textValue');
    let email = document.querySelector('.email');
    let firstName = document.querySelector('.firstName');
    let message = document.querySelector('.message');
    let phone = document.querySelector('.phone');
    let checkbox0 = document.querySelector('.checkbox0');
    let checkbox1 = document.querySelector('.checkbox1');
    let checkbox2 = document.querySelector('.checkbox2');
    
    // conditions for marking checkboxes start
    checkbox0.addEventListener('click', () => {
    
        text1.innerHTML ="Accepted";
    
    
    if(text1.textContent =="Accepted")
    {
        checkbox0.value = "ZGODA_MARKETING Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu i zakresie koniecznym do realizacji zgłoszenia.";
    }
    else 
    {
        checkbox0.value= "Not accepted";
    }
    });
    
    
    
    checkbox1.addEventListener('click', () => {
    
        text1.innerHTML ="Accepted";
    
    
    if(text1.textContent =="Accepted")
    {
        checkbox1.value= "ZGODA_MAIL Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu przesyłania mi ofert handlowych na produkty własne spółki drogą elektroniczną.";
    }
    else 
    {
        checkbox1.value= "Not accepted";
    }
    });
    
    checkbox2.addEventListener('click', () => {
    
        text1.innerHTML ="Accepted";
    
    
    if(text1.textContent =="Accepted")
    {
        checkbox2.value = "ZGODA_TEL Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu kontaktu telefonicznego ze strony przedstawicieli spółki w sprawach związanych z ofertą handlową na produkty własne.";
    }
    else 
    {
        checkbox2.value= "Not accepted";
    }
    });
    
    checkbox0.value= "Not accepted";
    checkbox1.value= "Not accepted";
    checkbox2.value= "Not accepted";
    // conditions for marking checkboxes end
    
    
    send.addEventListener('click', () => {
    
      // form submission method start
    sendEamil = () => {
    
    
    // conditions for filling out the form fields and sending a request to submit the contact form start
    if(firstName.value == '' || firstName.value == null || email.value == '' || email.value == null ||phone.value == '' || phone.value == null || email.value == '' || email.value == null ||message.value == '' || message.value == null)
    {
        firstName.placeholder = " pole Imie";
    }
    
    else
    {
    
    
        
    Email.send({
      SecureToken : '',
To : ' ',
From : '',
    
    Subject : `strona www - ${firstName.value}`,
    Body :` INWESTYCJA: inwestycji Park Paderewskiego <br><br> IMIE: ${firstName.value} <br><br>  
    EMAIL: ${email.value}<br><br>
    TELEFON: ${phone.value}<br><br> 
    OPIS: ${message.value} <br><br>
    ZGODY: <br>${checkbox0.value} <br><br>
    ${checkbox1.value} <br><br>
    ${checkbox2.value}`
    }).then(
      // form submission method end
    message =>  
    {
    text.innerHTML = message
    if(text.textContent === "OK")
    {
    
      setTimeout(() =>
    {
      formPopup.style.display = "block";
        textValue.style.display = "none";
    }, 3000)
        formPopup.style.display = "none";
        textValue.style.color = "#ffff";
    textValue.innerHTML = "<br><br>Twoja wiadomość została wysłana <br><br>";
    }
    else 
    {
      formPopup.style.display = "none";
      textValue.style.color = "red"
    textValue.innerHTML =  `<br><br>Nieudało się wysłać wiadomość.<br> Może to być spowodowane zbyt liczną wysyłką wiadomość na raz.<br> Proszę wysłąć wiadomość po przez zakładkę <a href="https://parkpaderewskiego.pl/mieszkania/"> mieszkania</a><br><br>`;
      setTimeout(() => {
        formPopup.style.display = "block";
        textValue.style.display = "none";
       
    }, 5000);
     
    }
    
    
    }); 
    
    };
    };
    sendEamil();
    
    });
    // conditions for filling out the form fields and sending a request to submit the contact form start
    // email  end 