let acceptBtn = document.querySelector("#acceptBtn");
let cookieBox = document.querySelector(".containerCookie");
let saveBtn = document.querySelector("#saveBtn");
let popup = document.querySelector(".popupCookie");

// Set Cookie function 
function setCookie(cName, cValue, exDays) {
  let date = new Date();
  date.setTime(date.getTime() + (exDays * 24 * 60 * 60 * 1000));
  
  // Expiration date
  let expires = "expires=" + date.toUTCString();
  
  // Set the cookie
  document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
}
  
// Get Cookie function
// Check if the cookie exists
function getCookie(cName) {
  let name = cName + "=";
  let cDecoded = decodeURIComponent(document.cookie);
  let cArr = cDecoded.split("; ");
  for (let i = 0; i < cArr.length; i++) {
    let c = cArr[i];
    if (c.indexOf(name) === 0) return c.substring(name.length);
  }
  return "";
}

// Display cookie message
function cookieMessage() {
  if (!getCookie("PrivacyPolicy")) {
    cookieBox.classList.add("show");
    popup.classList.add("show2");

    let textCookie = document.querySelector(".textCookie");
    let advancedSettings = document.querySelector("#advancedSettings");

    let buttonsCookie = document.querySelector(".buttonsCookie");

    buttonsCookie.style.width = "93%";
    acceptBtn.style.left = "50%";
    advancedSettings.style.left = "50%";
    saveBtn.style.display = "none";

    textCookie.innerHTML = `
      <p>
W celu zapewnienia użytkownikom jak najlepszych doświadczeń podczas korzystania z naszej witryny, używamy plików cookie oraz funkcji konwersji rozszerzonych Google, w tym zewnętrznych plików cookie. Dzięki nim możemy dostosowywać witrynę do indywidualnych potrzeb użytkowników, a także stale ją ulepszać i optymalizować na podstawie danych dotyczących sposobu korzystania z niej.<br><br>

Wykorzystujemy również pliki cookie do celów analitycznych i statystycznych. W ramach działań reklamowych stosujemy pliki cookie umożliwiające personalizację reklam wyświetlanych przez Google i naszych partnerów. Jeśli pliki cookie wykorzystywane w celach reklamowych są niedostępne, używamy konwersji rozszerzonych dostarczanych przez Google, co pozwala na dokładniejszą analizę działań marketingowych i ich lepsze zarządzanie.<br><br>

Zalecamy zaakceptowanie wszystkich plików cookie oraz korzystanie z funkcji konwersji rozszerzonych. Twoja zgoda jest dobrowolna i możesz ją w dowolnym momencie wycofać w ustawieniach przeglądarki. Administratorem Twoich danych jest Diamond Hill Development Sp. z o.o. Więcej informacji na temat przetwarzania danych osobowych znajdziesz w naszej  <a href="cookiesPolitics">Polityce prywatności.</a>
      </p>`;

    advancedSettings.addEventListener('click', () => {
      saveBtn.style.display = "block";
      advancedSettings.style.display = "none";
      buttonsCookie.style.width = "75%";
      acceptBtn.style.left = "40%";
      advancedSettings.style.left = "40%";
      buttonsCookie.style.display = "flex";
      textCookie.innerHTML = `
        <p>
        Wybierz, jakie kategorie ciasteczek akceptujesz. Twój wybór będzie zapamietany przez rok. <a href="cookiesPolitics">Polityce prywatności.</a><br><br>
        <b>Wymagane</b>
        Te pliki cookie nie są opcjonalne. Są one potrzebne do działania witryny.  <br><input class="box1" type="checkbox" checked><br>
        <b>Wydajnościowe/analityczne</b><br>
      Pliki te pozwalają nam rozwijać i optymalizować witrynę, uwzględniając potrzeby użytkowników, dzięki wykorzystaniu narzędzi analitycznych. Dzięki nim rozumiemy zachowania użytkowników - pozwalają nam one monitorować, jak użytkownicy wchodzą w interakcję z witryną oraz zliczać wizyty i źródła ruchu. Jeżeli wyślesz dodatkowo zapytanie na stronie o dowolną nieruchomość i wyrazisz zgodę na przetwarzanie Twoich danych osobowych w celach reklamowych będą wykorzystywane w tym celu pliki cookie wydajnościowe i analityczne, w efekcie połączymy dane pochodzące z plików cookie z Tobą. <br><input class="box2" type="checkbox"><br>
        <b>Reklama i marketing</b><br>
        Dzieląc się swoimi zainteresowaniami i zachowaniami podczas odwiedzania naszej witryny, zwiększasz szansę na zobaczenie spersonalizowanych treści i ofert. <br><input class="box3" type="checkbox">
      
        </p>`;
    });

    // Consent to cookies
    acceptBtn.addEventListener("click", () => {
      popup.style.display = "none";
      cookieBox.style.display = "none";
      setCookie("PrivacyPolicy", true, 30);
    });

    saveBtn.addEventListener("click", () => {
      popup.style.display = "none";
      cookieBox.style.display = "none";
      setCookie("PrivacyPolicy", true, 30);
    });
  }
}

// Initialize cookie message on window load
window.addEventListener("load", cookieMessage);