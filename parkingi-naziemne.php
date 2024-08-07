
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Parkingi Naziemne - Nowoczesne Osiedle w Zawierciu</title>
<link rel="icon" type="image/jpg" href="image/icone.jpg">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<!-- <link rel="stylesheet" type="text/css" href="css/popupCookie.css"> -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/above-ground-parking-lotABC.css">
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="js/popupMenu.js" async></script>
<script src="js/sendingEmail.js" defer></script>
<!-- <script src="js/popupCookie.js" defer></script> -->

<!-- Google Tag Manager -->
<!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','');</script> -->
  <!-- End Google Tag Manager -->
  
<!-- Google tag (gtag.js) -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-');
</script> -->



</head>
<body>
<!-- Google Tag Manager (noscript) -->
<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
  <!-- End Google Tag Manager (noscript) -->
<!-- navbar start -->
<div class="top">
<div class="navbar">
<a class="navbar__item logo" href="./">  <img class="navbar__item logo" href="./"><img class="navbar__item logo"  src="image/lpp.webp"></a>
<div class="navbar__menu">
<a class="navbar__item navbar__link white-border" href="mieszkania">Mieszkania</a>
<div class="navbar__item navbar__link dropdown">Parkingi
<div class="dropdown-content">
<a href="parkingi-naziemne.php">Parkingi Naziemne</a><br>
<a href="budynek-b-garaze-podziemne.php">Garaże podziemne B</a>
<br>
<a href="budynek-c-garaze-podziemne.php">Garaże podziemne C</a>
<br>
<a href="budynek-a-garaze-podziemne.php">Garaże podziemne A</a>
</div>
</div>
<a class="navbar__item navbar__link" href="galeria">Galeria</a>
<a class="navbar__item navbar__link" href="oferta-inwestycyjna">Oferta inwestycyjna</a>
<a class="navbar__item navbar__link" href="lifestyle">Lifestyle</a>
<a class="navbar__item navbar__link" href="kontakt">Kontakt</a>
<a class="navbar__item navbar__link" href="https://diamond-hill.com.pl/">Deweloper</a>
</div>
<!-- Popup start -->
<button id="showPopup">Zapytaj o mieszkania</button>
<!-- Popup end -->
<span class="hamburger hamburger--collapse navbar__item" id="js-navbar-toggle">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</span>
</div>
</div>
<div id="popup" class="popup">
<div class="popup-content">
  <!-- email  start -->
    <!-- View information about the sending status start -->
    <div class="textValue"></div>

       <!-- View information about the sending status end -->
    <form id="formPopup" class="topBefore" method="post">
        <input id="text1" class="firstName" type="text" placeholder="Imie" >
        <input class="email" type="email" placeholder="Emial">
        <input class="phone" type="number" placeholder="Telefon">
        <textarea class="message" type="text" placeholder="Dotyczy mieszkania"></textarea>
        <!-- send request start -->
        <input class="send" id="submit" type="button" value="Wyślij zapytanie"> 
          <!-- send request end -->
          <!-- checkbox start   -->
          <div class="checkbox-wrapper-32">
            <input type="checkbox" name="checkbox-32" id="checkbox-32"  class="checkbox0">
            <label for="checkbox-32">
            Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu i zakresie koniecznym do realizacji zgłoszenia.
            </label>
     
            <svg viewBox="0 0 100 100">
              <path class="parking"class="parking" class="parking" d="M 10 10 L 90 90" stroke="#000" stroke-dasharray="113" stroke-dashoffset="113"></path>
              <path class="parking"class="parking" class="parking" d="M 90 10 L 10 90" stroke="#000" stroke-dasharray="113" stroke-dashoffset="113"></path>
            </svg>
          </div>
    
          <div class="checkbox-wrapper-33">
            <input type="checkbox" name="checkbox-33" id="checkbox-33"  class="checkbox1">
            <label for="checkbox-33">
            Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu przesyłania mi ofert handlowych na produkty własne spółki drogą elektroniczną.
            </label>
     
            <svg viewBox="0 0 100 100">
              <path class="parking"class="parking" class="parking" d="M 10 10 L 90 90" stroke="#000" stroke-dasharray="113" stroke-dashoffset="113"></path>
              <path class="parking"class="parking" class="parking" d="M 90 10 L 10 90" stroke="#000" stroke-dasharray="113" stroke-dashoffset="113"></path>
            </svg>
          </div>
    
    
    
          <div class="checkbox-wrapper-34">
            <input type="checkbox" name="checkbox-34" id="checkbox-34"  class="checkbox2">
            <label for="checkbox-34">
            Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu kontaktu telefonicznego ze strony przedstawicieli spółki w sprawach związanych z ofertą handlową na produkty własne.
            </label>
     
            <svg viewBox="0 0 100 100">
              <path class="parking"class="parking" class="parking" d="M 10 10 L 90 90" stroke="#000" stroke-dasharray="113" stroke-dashoffset="113"></path>
              <path class="parking"class="parking" class="parking" d="M 90 10 L 10 90" stroke="#000" stroke-dasharray="113" stroke-dashoffset="113"></path>
            </svg>
          </div>
          <!-- checkbox end   -->
        
          <div class="text"></div>
          <div class="text1"></div>
          </form>
            <!-- email  end -->
   
  <div class="allAvailableApartmentsAvailable"></div>
  <span class="close" id="closePopup">X</span>
  
  </div>
  </div>
<!-- navbar end -->

<header class="contact">
    <!-- top and middle of the page start -->
    <div class="centerLifestyle">
      <p class="titleTextGallery">Parkingi naziemne</p>
     
      <div  id="myDropdown35" class="description35" ></div>
      <div  id="myDropdown40" class="description40" ></div>
      <div  id="myDropdown41" class="description41" ></div>
      <div  id="myDropdown43" class="description43" ></div>
      <div  id="myDropdown44" class="description44" ></div>
      <div  id="myDropdown49" class="description49" ></div>
      <div  id="myDropdown50" class="description50" ></div>
      <div  id="myDropdown51" class="description51" ></div>
      <div  id="myDropdown52" class="description52" ></div>
      <div  id="myDropdown53" class="description53" ></div>
      <div  id="myDropdown54" class="description54" ></div>
      <div  id="myDropdown55" class="description55" ></div>
      <div  id="myDropdown56" class="description56" ></div>
      <div  id="myDropdown57" class="description57" ></div>
      <div  id="myDropdown58" class="description58" ></div>
      <div  id="myDropdown59" class="description59" ></div>
      <div  id="myDropdown60" class="description60" ></div>
      <div  id="myDropdown62" class="description62" ></div>
      <div  id="myDropdown63" class="description63" ></div>
      <div  id="myDropdown64" class="description64" ></div>
      <div  id="myDropdown65" class="description65" ></div>
      <div  id="myDropdown66" class="description66" ></div>
      <div  id="myDropdown67" class="description67" ></div>
      <div  id="myDropdown68" class="description68" ></div>
      <div  id="myDropdown69" class="description69" ></div>
      <!-- <div  id="myDropdown70" class="description70" ></div> -->
      <!-- <div  id="myDropdown71" class="description71" ></div>
      <div  id="myDropdown72" class="description72" ></div>
      <div  id="myDropdown73" class="description73" ></div> -->
      <div  id="myDropdown74" class="description74" ></div>
      <div  id="myDropdown76" class="description76" ></div>
      <div  id="myDropdown79" class="description79" ></div>
      <div  id="myDropdown80" class="description80" ></div>
      <div  id="myDropdown81" class="description81" ></div>
      <div  id="myDropdown82" class="description82" ></div>
      <div  id="myDropdown83" class="description83" ></div>
      <div  id="myDropdown84" class="description84" ></div>
      <div  id="myDropdown85" class="description85" ></div>
      <div  id="myDropdown86" class="description86" ></div>
      <div  id="myDropdown87" class="description87" ></div>
      <div  id="myDropdown88" class="description88" ></div>
      <div  id="myDropdown89" class="description89" ></div>
      <div  id="myDropdown90" class="description90" ></div>
      <div  id="myDropdown91" class="description91" ></div>
      <div  id="myDropdown92" class="description92" ></div>
      <div  id="myDropdown93" class="description93" ></div>
      <div  id="myDropdown94" class="description94" ></div>
      <div  id="myDropdown95" class="description95" ></div>
      <div  id="myDropdown96" class="description96" ></div>
      <div  id="myDropdown99" class="description99" ></div>
      <div  id="myDropdown100" class="description100" ></div>
      <div  id="myDropdown101" class="description101" ></div>
       <div  id="myDropdown102" class="description102" ></div>
       <div  id="myDropdown103" class="description103" ></div>
       <div  id="myDropdown104" class="description104" ></div>
       <div  id="myDropdown105" class="description105" ></div>
       <div  id="myDropdown106" class="description106" ></div>
      

      <div  id="myDropdown" class="description" ></div>
    </header>
    <div class="mapContener" >
  <img class = "map" src             = "image/above-ground-parking-lot-map.webp">
  <svg  class = "map"  version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="830.000000pt" height="828.000000pt" viewBox="0 0 832.000000 831.000000"
 preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,829.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path  class="parking79"  d="M3790 8237 c-10 -23 -32 -73 -49 -112 l-30 -70 47 -22 c26 -12 50
-19 54 -15 4 4 27 55 51 114 l45 106 -50 21 -49 20 -19 -42z"/> 


<path class="parking80" d="M3879 8123 c-24 -59 -45 -110 -47 -113 -3 -8 98 -54 103 -48 5 5 95
215 95 221 0 3 -8 7 -17 10 -10 3 -34 12 -54 20 l-36 16 -44 -106z"/>

<path class="parking81"d="M4001 8078 c-24 -57 -45 -108 -48 -114 -3 -10 95 -61 101 -52 7 10
96 222 94 223 -3 3 -100 45 -102 45 -1 0 -21 -46 -45 -102z"/>
<path class="parking82"d="M4115 8020 c-26 -61 -46 -112 -44 -113 16 -11 90 -39 94 -35 7 6 95
209 95 218 0 7 -77 40 -92 40 -3 0 -27 -50 -53 -110z"/>
<path class="parking83"d="M4277 8072 c-14 -21 -87 -197 -87 -207 0 -7 23 -22 50 -33 l51 -21 8
22 c5 12 25 60 45 105 20 46 36 88 36 93 0 18 -95 56 -103 41z"/>
<path class="parking84"d="M4348 7920 l-46 -110 46 -20 c25 -11 49 -17 53 -13 9 9 89 202 89
213 0 7 -72 40 -88 40 -4 0 -28 -50 -54 -110z"/>
<path class="parking85"d="M4490 7948 c-10 -24 -32 -74 -49 -113 l-30 -70 47 -21 c26 -12 50
-19 54 -15 4 3 27 54 51 113 30 71 41 108 34 111 -7 3 -29 12 -50 21 l-38 17
-19 -43z"/>
<path class="parking86"d="M4611 7909 c-5 -13 -25 -62 -45 -107 -20 -46 -34 -87 -31 -91 6 -10
95 -44 100 -39 3 2 25 52 49 110 l45 106 -42 17 c-23 10 -48 19 -54 22 -7 3
-17 -6 -22 -18z"/>
<path class="parking87"d="M4719 7833 c-61 -141 -72 -175 -59 -183 19 -11 90 -34 93 -29 7 9 87
204 87 211 0 8 -43 32 -78 42 -19 7 -25 1 -43 -41z"/>
<path class="parking88"d="M4843 7793 c-8 -21 -28 -69 -44 -107 -16 -37 -29 -72 -29 -76 0 -13
90 -44 99 -34 11 13 94 214 90 217 -15 10 -82 37 -90 37 -5 0 -17 -17 -26 -37z"/>
<path class="parking89"d="M4930 7673 c-25 -58 -46 -109 -48 -113 -2 -6 99 -52 104 -47 5 4 94
215 94 221 0 5 -88 46 -99 46 -3 0 -26 -48 -51 -107z"/>
<path class="parking90"d="M5082 7703 c-5 -16 -26 -65 -46 -111 l-36 -83 46 -19 c25 -11 49 -20
52 -20 8 0 92 199 92 216 0 10 -73 44 -92 44 -3 0 -11 -12 -16 -27z"/>
<path class="parking91"d="M5162 7577 c-23 -56 -42 -107 -42 -113 0 -11 62 -44 84 -44 7 0 28
35 46 78 18 42 39 92 47 110 l14 33 -43 19 c-24 11 -47 20 -53 20 -5 0 -29
-46 -53 -103z"/>
<path class="parking8" d="M3250 4378 c-30 -57 -56 -106 -58 -109 -3 -7 108 -73 112 -67 8 10
116 207 116 211 0 4 -105 67 -112 67 -2 0 -28 -46 -58 -102z"/>
<!-- <path class="parkingII"d="M3560 7526 c-4 -11 -63 -149 -129 -304 -67 -156 -121 -289 -121 -295
0 -7 126 -61 280 -121 l280 -109 0 -51 c0 -28 -20 -509 -45 -1070 -37 -825
-43 -1021 -33 -1028 7 -4 38 -8 68 -8 30 0 106 -3 169 -7 l114 -6 -6 -93 -5
-92 101 -6 c352 -21 389 -22 397 -6 4 8 10 74 14 145 4 72 10 151 13 178 5 45
5 47 -20 47 -28 0 -31 -13 -43 -218 l-7 -114 -171 7 c-247 9 -225 -1 -228 108
l-3 92 -175 9 c-96 4 -176 9 -177 10 -3 3 85 1996 90 2056 3 25 6 51 8 58 5
19 8 18 -291 133 -146 56 -267 103 -269 105 -3 2 216 524 224 532 4 4 1098
-438 1108 -447 4 -4 -49 -131 -118 -281 -69 -151 -125 -279 -125 -287 0 -7 12
-15 28 -19 15 -3 64 -20 109 -37 73 -28 83 -35 83 -57 0 -14 -16 -344 -35
-735 -19 -390 -35 -720 -35 -733 0 -21 -4 -23 -41 -21 -50 4 -54 -3 -62 -103
-6 -63 -4 -77 9 -82 29 -11 33 -6 40 64 l7 70 44 0 c26 0 45 5 48 13 4 12 76
1505 75 1562 0 28 -5 31 -58 48 -31 10 -78 28 -103 40 l-46 22 123 269 c68
148 125 275 126 282 2 9 -139 71 -417 183 -231 93 -502 203 -603 244 -179 73
-183 74 -192 53z"/> -->
<path class="parking103"d="M5841 7388 c-5 -13 -25 -61 -45 -106 -20 -46 -36 -87 -36 -90 0 -12
91 -45 99 -36 9 11 91 202 91 213 0 8 -76 41 -93 41 -4 0 -11 -10 -16 -22z"/>
<path class="parking104"d="M5918 7248 l-46 -112 31 -14 c82 -35 71 -42 121 77 25 60 46 112 46
115 0 7 -85 46 -98 46 -4 0 -28 -51 -54 -112z"/>
<path class="parking105"d="M6038 7200 l-46 -110 45 -20 c25 -11 48 -20 52 -20 3 0 27 50 53 111
l47 111 -42 19 c-23 10 -47 19 -52 19 -6 0 -32 -50 -57 -110z"/>
<path class="parking106"d="M6153 7157 c-24 -57 -43 -108 -43 -114 0 -10 68 -43 89 -43 8 0 106
220 99 224 -24 13 -82 36 -91 36 -7 0 -31 -47 -54 -103z"/>
<path class="parking60"d="M5438 6626 c-1 -31 -1 -56 2 -57 3 0 58 -4 122 -7 l117 -7 7 49 c8
62 2 66 -102 66 -45 0 -95 3 -112 6 l-30 6 -4 -56z"/>
<path class="parking59"d="M5430 6493 l0 -60 117 -7 c64 -3 118 -4 121 -1 3 3 7 30 10 60 l4 55
-64 0 c-36 0 -93 3 -127 6 l-61 7 0 -60z"/>
<path class="parking102"d="M2860 6434 c-11 -25 -20 -49 -20 -52 1 -12 212 -104 219 -95 12 13
44 93 40 97 -9 8 -202 96 -211 96 -5 0 -18 -21 -28 -46z"/>
<path class="parking58"d="M5427 6369 c-5 -37 -3 -55 6 -61 6 -4 49 -8 93 -8 45 0 96 -3 113 -6
l31 -6 0 61 0 61 -43 0 c-24 0 -78 3 -119 6 l-75 7 -6 -54z"/>
<path class="parking62"  d="M5938 6366 c-2 -28 -3 -53 -1 -55 1 -2 57 -7 123 -10 118 -6 120 -6
120 15 0 12 3 35 6 52 6 29 4 31 -27 36 -19 3 -75 7 -126 9 l-91 3 -4 -50z"/>
<path class="parking101"d="M2802 6314 c-13 -26 -21 -48 -20 -50 7 -6 221 -104 223 -102 1 2 12
24 23 50 l21 47 -94 45 c-136 64 -127 63 -153 10z"/>
<path class="parking57"d="M5426 6274 c-11 -28 -6 -84 7 -88 6 -3 63 -7 125 -9 l112 -6 0 53 0
53 -82 6 c-129 10 -155 9 -162 -9z"/>
<path class="parking63"d="M5930 6233 l0 -60 116 -7 c64 -4 118 -5 121 -3 2 3 7 30 10 61 l6 56
-65 0 c-36 0 -93 3 -127 6 l-61 7 0 -60z"/>
<path class="parking56"d="M5415 6112 c-4 -29 -5 -55 -3 -57 2 -3 59 -7 126 -11 l122 -7 0 41
c0 22 3 47 6 56 7 18 -23 24 -153 29 l-91 3 -7 -54z"/>
<path class="parking64"d="M5926 6110 c-4 -29 -3 -56 1 -60 4 -5 61 -10 126 -12 l117 -4 0 58 0
58 -52 0 c-29 0 -83 3 -119 6 l-66 7 -7 -53z"/>
<path class="parking100"d="M2750 6060 l0 -60 120 0 120 0 0 60 0 60 -120 0 -120 0 0 -60z"/>
<path class="parking55"d="M5418 6034 c-5 -4 -8 -29 -8 -56 l0 -48 43 0 c23 0 79 -3 125 -7 l82
-6 0 57 0 56 -82 0 c-46 0 -99 3 -118 6 -19 3 -38 2 -42 -2z"/>
<path class="parking65"d="M5927 6023 c-4 -3 -7 -28 -7 -55 l0 -48 79 0 c43 0 99 -3 125 -6 l46
-7 0 55 0 55 -82 6 c-106 9 -153 9 -161 0z"/>
<path class="parking99"d="M2748 5984 c-5 -4 -8 -28 -8 -54 l0 -47 83 -6 c45 -4 101 -7 125 -7
l42 0 0 55 0 55 -59 0 c-32 0 -85 3 -117 6 -32 3 -62 3 -66 -2z"/>
<path class="parking54"d="M5406 5869 c-4 -28 -6 -53 -4 -54 2 -2 58 -7 124 -11 l122 -7 4 49
c3 27 2 52 -1 55 -3 4 -58 9 -122 13 l-116 7 -7 -52z"/>
<path class="parking66"d="M5916 5877 c-3 -16 -6 -42 -6 -57 0 -27 1 -27 77 -34 42 -3 98 -6
125 -6 l48 0 0 55 c0 64 4 62 -142 67 l-96 4 -6 -29z"/>
<path class="parking53"d="M5395 5739 c-4 -27 -4 -53 0 -57 11 -12 229 -18 237 -7 4 5 8 31 8
56 l0 46 -67 6 c-38 4 -91 7 -120 7 l-51 0 -7 -51z"/>
<path class="parking67"d="M5915 5772 c-3 -3 -5 -26 -5 -52 l0 -47 115 -7 c63 -4 119 -5 125 -1
15 9 13 95 -2 100 -20 6 -227 12 -233 7z"/>
<path class="parking52"d="M5387 5608 c-2 -29 -4 -54 -3 -55 1 -1 57 -5 124 -9 l122 -7 0 55 0
55 -52 7 c-29 3 -83 6 -119 6 l-66 0 -6 -52z"/>
<path class="parking68"d="M5905 5610 c-4 -28 -5 -53 -3 -55 2 -2 58 -7 125 -11 l121 -7 3 53
c2 30 0 54 -6 55 -5 2 -60 6 -121 10 l-112 6 -7 -51z"/>
<path class="parking51"d="M5380 5476 l0 -53 117 -6 c132 -6 133 -6 133 59 l0 41 -61 7 c-34 3
-91 6 -125 6 l-64 0 0 -54z"/>
<path class="parking69"d="M5904 5484 c-3 -25 -3 -49 2 -54 5 -4 61 -10 126 -13 l116 -5 4 53 3
53 -59 6 c-32 3 -87 6 -122 6 l-63 0 -7 -46z"/>
<path class="parking50"d="M5370 5351 l0 -61 33 0 c19 0 75 -3 125 -6 l92 -7 0 62 0 61 -79 0
c-43 0 -99 3 -125 6 l-46 7 0 -62z"/>
<path class="parking49"d="M5370 5227 l0 -54 61 -7 c34 -3 88 -6 120 -6 l57 0 4 51 c1 29 -1 53
-7 54 -5 2 -61 6 -122 9 l-113 6 0 -53z"/>
<path class="parking44"d="M5357 5106 c-3 -28 -3 -53 0 -56 4 -4 236 -20 239 -16 1 0 4 25 8 53
8 62 13 60 -140 66 l-102 4 -5 -51z"/>
<path class="parking43"d="M5356 5008 c-3 -13 -6 -37 -6 -54 l0 -31 83 -6 c45 -4 101 -7 125 -7
l42 0 0 54 0 53 -92 7 c-140 9 -145 9 -152 -16z"/>
<path class="parking41"d="M5357 4889 c-4 -13 -7 -41 -7 -61 l0 -38 73 0 c39 0 96 -3 125 -6
l52 -7 0 62 0 61 -74 0 c-40 0 -93 3 -118 6 -41 6 -46 4 -51 -17z"/>
<path class="parking40"d="M5340 4726 l0 -53 83 -6 c45 -4 101 -7 125 -7 l42 0 0 54 0 53 -82 6
c-46 4 -102 7 -125 7 l-43 0 0 -54z"/>
<path class="parking2"d="M2796 4621 c-31 -54 -56 -104 -56 -110 0 -13 78 -54 89 -46 5 3 34
50 64 105 l55 100 -42 25 c-24 14 -45 25 -49 25 -3 0 -31 -45 -61 -99z"/>
<path class="parking3"d="M2906 4556 c-31 -56 -56 -106 -56 -109 0 -4 22 -18 49 -32 l49 -24
56 101 c31 56 56 105 56 110 0 4 -22 19 -49 32 l-48 25 -57 -103z"/>
<path class="parking35"d="M5340 4600 l0 -57 77 -7 c42 -3 95 -6 118 -6 41 0 43 1 49 38 13 80
16 78 -151 85 l-93 3 0 -56z"/>
<path class="parking4"d="M3018 4493 c-29 -54 -54 -101 -56 -105 -2 -4 19 -18 47 -32 l50 -26
55 99 c31 54 56 104 56 110 0 11 -70 51 -89 51 -5 0 -34 -44 -63 -97z"/>
<path class="parking46"d="M3162 4488 c-16 -29 -43 -78 -60 -109 l-31 -55 45 -22 c24 -12 46
-22 49 -22 6 0 115 196 115 206 0 8 -72 54 -84 54 -2 0 -18 -24 -34 -52z"/>
<path class="parking96"d="M2267 4448 c-20 -31 -107 -189 -107 -193 0 -5 93 -56 95 -53 23 30
114 213 108 218 -4 4 -25 17 -45 29 l-37 22 -14 -23z"/>
<path class="parking95"d="M2369 4372 c-8 -15 -34 -61 -57 -104 l-42 -76 46 -26 c26 -14 50 -26
53 -26 4 0 15 15 24 33 9 17 34 64 57 104 l40 72 -43 26 c-54 31 -58 31 -78
-3z"/>
<path class="parking94"d="M1936 4292 l-25 -49 109 -57 109 -57 27 46 c14 25 25 48 23 50 -5 4
-212 115 -216 115 -1 0 -14 -22 -27 -48z"/>
<path class="parking93"d="M1875 4180 c-15 -29 -25 -53 -23 -54 2 -2 50 -28 108 -59 l105 -56
28 52 c14 28 26 51 24 53 -1 1 -50 27 -109 58 l-107 57 -26 -51z"/>
<path class="parking92"d="M1820 4070 c-11 -21 -20 -43 -20 -47 0 -9 191 -113 207 -113 5 0 19
20 31 44 l21 45 -42 24 c-49 29 -164 87 -172 87 -2 0 -14 -18 -25 -40z"/>
<path class="parking74"d="M1756 3961 l-26 -50 104 -55 c57 -31 108 -56 113 -56 9 0 57 90 51
95 -2 1 -51 27 -110 59 l-107 57 -25 -50z"/>
<!-- <path class="parkingI"d="M2756 3858 c-59 -103 -266 -490 -266 -498 0 -4 52 -36 115 -71 63
-34 122 -67 130 -73 13 -9 4 -28 -55 -119 -39 -60 -70 -114 -70 -120 1 -7 132
-85 293 -174 286 -158 292 -161 308 -141 15 20 17 19 120 -32 57 -29 105 -54
107 -55 2 -2 -4 -17 -12 -34 -9 -16 -16 -32 -16 -35 0 -3 28 -19 63 -36 108
-55 491 -262 505 -273 7 -5 14 -8 16 -6 2 2 97 177 211 389 114 212 212 391
218 398 12 15 7 20 -48 49 -16 9 -204 114 -416 234 -213 121 -390 219 -393
219 -3 0 -15 -18 -26 -40 l-20 -40 -90 45 c-50 25 -90 49 -90 53 0 4 9 18 20
32 11 14 20 30 20 36 0 6 -24 24 -52 39 -29 16 -160 88 -291 162 -131 73 -242
133 -247 133 -5 0 -20 -19 -34 -42z m339 -180 c110 -61 204 -114 208 -118 4
-4 0 -24 -9 -44 -23 -46 -24 -45 129 -124 l117 -61 21 40 c14 29 25 39 36 35
19 -8 745 -416 756 -426 6 -5 -358 -698 -378 -718 -2 -3 -484 254 -493 262 -2
2 4 18 13 36 9 18 15 33 13 34 -2 2 -69 37 -150 79 -145 75 -148 76 -166 57
-19 -21 -7 -27 -424 206 l-97 55 69 108 c39 59 70 114 70 122 0 8 -56 45 -125
82 -69 38 -125 73 -125 79 0 6 55 111 121 234 l121 224 47 -26 c25 -14 136
-76 246 -136z"/> -->
<path class="parking75"d="M1703 3850 c-13 -21 -23 -43 -23 -48 0 -9 190 -112 206 -112 11 0 61
87 54 93 -13 11 -199 107 -206 107 -5 0 -19 -18 -31 -40z"/>
<path class="parking76"d="M1642 3735 c-12 -25 -22 -47 -22 -49 0 -4 206 -116 213 -116 6 0 51
100 46 103 -12 10 -201 107 -207 107 -5 0 -18 -20 -30 -45z"/>
<path class="parking77"d="M1578 3624 c-26 -53 -39 -39 104 -116 94 -50 92 -50 123 11 17 33 17
35 -1 49 -20 14 -190 102 -199 102 -3 0 -15 -21 -27 -46z"/>
<path class="parking78"d="M1542 3547 c-5 -6 -17 -27 -27 -46 -14 -28 -15 -36 -3 -46 18 -17
197 -110 201 -104 2 2 15 25 29 51 l26 46 -108 56 c-83 43 -110 53 -118 43z"/>
<!-- <path class="parkingI"d="M1415 2673 c-10 -21 -94 -176 -186 -345 -93 -169 -169 -309 -169
-312 0 -2 58 -35 129 -72 l128 -67 -23 -41 c-13 -23 -24 -44 -24 -48 0 -7 544
-308 558 -308 5 0 17 11 26 25 l17 25 119 -62 c66 -35 120 -67 120 -73 0 -5
-9 -21 -20 -35 -11 -14 -20 -31 -20 -37 0 -15 431 -233 460 -233 12 0 190 -36
396 -81 207 -44 376 -79 377 -77 29 56 163 322 165 327 1 3 -20 20 -48 36 -27
16 -50 33 -50 38 0 4 29 58 65 118 36 61 65 114 65 119 0 4 -228 133 -507 285
-491 267 -508 276 -523 257 -8 -11 -19 -27 -25 -36 -9 -13 -22 -9 -100 36 -49
28 -92 52 -94 54 -1 1 7 21 20 43 12 23 21 43 18 45 -6 5 -849 456 -853 456
-2 0 -12 -17 -21 -37z m435 -240 c201 -107 367 -197 369 -199 3 -2 -5 -22 -18
-44 l-22 -39 23 -14 c89 -56 244 -137 255 -133 7 3 18 17 25 31 6 14 16 25 21
25 8 0 482 -256 884 -477 l51 -29 -65 -109 c-36 -61 -67 -115 -70 -121 -2 -6
19 -26 46 -44 28 -17 51 -34 51 -37 0 -19 -127 -253 -137 -253 -7 0 -180 36
-385 80 l-373 80 -182 90 c-101 49 -183 93 -183 97 0 5 9 21 19 37 11 16 17
35 14 42 -3 7 -62 43 -131 80 -70 37 -140 77 -155 88 -24 18 -30 19 -37 6 -33
-57 -16 -62 -277 82 l-241 133 25 43 c15 25 22 47 17 52 -5 4 -62 36 -127 70
-93 49 -117 66 -112 79 3 9 77 145 163 303 117 215 161 286 172 282 8 -3 179
-93 380 -201z"/> -->
<path class="parking48"d="M5730 2275 c0 -52 1 -53 33 -59 17 -3 73 -6 122 -7 l90 -2 3 51 c4
61 8 59 -145 65 l-103 4 0 -52z"/>
<path class="parking12"d="M5726 2170 c-3 -18 -6 -45 -6 -61 0 -27 2 -29 43 -29 23 0 79 -3 125
-7 l82 -6 0 62 0 61 -67 0 c-38 0 -91 3 -119 6 l-51 6 -7 -32z"/>
<path class="parking11"d="M5720 2015 c0 -36 4 -57 13 -60 6 -2 60 -5 118 -8 l107 -4 5 56 c3
30 5 56 4 57 -1 1 -57 4 -124 8 l-123 7 0 -56z"/>
<path class="parking36"d="M4407 1918 c-63 -101 -104 -188 -94 -196 14 -11 74 -42 81 -42 7 0
116 195 116 207 0 9 -70 53 -84 53 -3 0 -12 -10 -19 -22z"/>
<path class="parking10"d="M5717 1894 c-3 -27 -2 -52 1 -55 4 -4 59 -9 123 -12 l116 -5 6 51 c4
28 5 52 4 53 -1 1 -56 5 -123 9 l-121 7 -6 -48z"/>
<path class="parking97"d="M5087 1807 c-32 -57 -57 -106 -57 -109 0 -7 99 -52 104 -47 1 2 20
36 41 74 21 39 46 84 57 101 l18 32 -44 26 c-25 14 -49 26 -54 26 -5 0 -34
-47 -65 -103z"/>
<path class="parking61"d="M4476 1780 c-31 -55 -56 -105 -56 -110 0 -5 22 -21 48 -34 l48 -24
57 102 c31 57 57 106 57 109 0 4 -22 18 -49 32 l-49 25 -56 -100z"/>
<path class="parking98"d="M5253 1838 c-16 -21 -103 -185 -103 -195 0 -9 88 -58 94 -52 4 4 86
150 105 186 10 20 7 24 -32 48 -50 29 -51 29 -64 13z"/>
<path class="parking24"d="M4587 1715 c-31 -57 -57 -106 -57 -109 0 -3 22 -17 49 -30 l48 -25
57 103 c31 56 56 106 56 109 0 4 -21 18 -48 31 l-47 24 -58 -103z"/>
<path class="parking42"d="M5708 1761 c-2 -31 -4 -57 -3 -58 0 -1 55 -5 121 -9 l121 -7 6 39
c14 82 17 80 -150 87 l-91 3 -4 -55z"/>
<path class="parking34"d="M4700 1658 c-30 -57 -56 -105 -58 -108 -2 -6 89 -53 93 -48 10 11
117 210 114 212 -18 13 -78 46 -85 46 -5 0 -34 -46 -64 -102z"/>
<path class="parking33"d="M4806 1594 c-63 -116 -64 -108 6 -144 l36 -19 14 22 c8 12 36 61 61
108 l47 86 -49 26 c-27 15 -50 27 -52 27 -2 0 -30 -48 -63 -106z"/>
<path class="parking39"d="M5705 1640 c-4 -28 -5 -53 -4 -54 2 -2 59 -7 127 -11 l122 -7 0 56 0
56 -82 0 c-46 0 -99 3 -119 6 l-37 6 -7 -52z"/>
<path class="parking31"d="M4944 1572 c-20 -37 -45 -81 -56 -98 -10 -17 -18 -36 -18 -42 0 -11
70 -52 89 -52 7 0 97 153 119 202 2 4 -19 18 -47 32 l-50 26 -37 -68z"/>
<path class="parking30"d="M5700 1518 l0 -55 68 -6 c37 -4 90 -7 118 -7 57 0 64 8 64 78 l0 32
-57 0 c-32 0 -88 3 -125 7 l-68 6 0 -55z"/>
<path class="parking14"d="M4116 1400 c-31 -55 -56 -104 -56 -109 0 -5 20 -21 45 -34 l44 -25
47 86 c26 48 53 97 61 108 13 20 11 23 -31 48 -24 14 -47 26 -49 26 -3 0 -30
-45 -61 -100z"/>
<path class="parking20"d="M4227 1336 c-31 -57 -57 -106 -57 -109 0 -6 82 -57 92 -57 8 0 118
197 118 210 0 5 -22 21 -48 34 l-48 24 -57 -102z"/>
<path class="parking29"d="M5688 1385 c-4 -65 -8 -62 137 -66 l100 -3 3 55 3 56 -68 6 c-37 4
-91 7 -120 7 l-51 0 -4 -55z"/>
<path class="parking17"d="M552 1398 c-41 -69 -92 -165 -92 -174 0 -11 87 -61 93 -54 11 14 118
213 115 215 -6 5 -87 45 -92 45 -2 0 -13 -15 -24 -32z"/>
<path  class="parking21" d="M627 1266 c-31 -57 -57 -106 -57 -109 0 -8 90 -61 94 -56 8 11 116
210 116 214 0 3 -22 16 -48 29 l-48 24 -57 -102z"/>
<path class="parking13"  d="M740 1198 c-30 -57 -56 -105 -58 -108 -2 -5 18 -17 80 -48 7 -3 118
190 118 205 0 8 -70 53 -81 53 -2 0 -29 -46 -59 -102z"/>
<path class="parking47"d="M4384 1353 c-6 -10 -32 -57 -58 -105 l-47 -87 50 -25 50 -26 19 33
c44 73 92 165 92 175 0 11 -69 52 -87 52 -5 0 -13 -8 -19 -17z"/>
<path class="parking9"d="M5680 1258 l0 -55 68 -6 c37 -4 90 -7 118 -7 l51 0 6 52 c4 28 5 53
3 55 -2 2 -58 7 -125 10 l-121 6 0 -55z"/>
<path class="parking25" d="M852 1163 c-27 -48 -54 -98 -61 -110 -11 -21 -8 -24 40 -48 28 -15
52 -25 53 -23 13 15 117 210 114 212 -1 2 -24 15 -50 30 l-46 27 -50 -88z"/>
<path class="parking26"d="M955 1074 c-55 -100 -56 -106 -39 -119 23 -17 73 -39 78 -34 17 18
114 205 110 211 -5 8 -78 48 -87 48 -2 0 -30 -47 -62 -106z"/>
<path class="parking18"d="M5670 1125 l0 -55 64 0 c34 0 91 -3 125 -6 l61 -7 0 55 0 55 -61 7
c-34 3 -91 6 -125 6 l-64 0 0 -55z"/>
<path class="parking27"d="M1115 1024 c-22 -95 -25 -118 -14 -125 18 -11 89 -22 96 -15 7 7 52
194 53 217 0 12 -12 19 -37 23 -21 4 -45 9 -54 12 -14 4 -22 -15 -44 -112z"/>
<path class="parking28"d="M1261 1073 c-18 -68 -41 -174 -41 -187 0 -14 88 -41 99 -31 3 4 18
57 32 118 l26 112 -36 12 c-60 19 -69 17 -80 -24z"/>
<path class="parking32"d="M1381 1043 c-18 -68 -41 -174 -41 -188 0 -12 96 -43 104 -34 2 2 13
46 25 97 11 52 24 104 27 116 5 20 1 24 -24 29 -16 3 -41 9 -55 12 -23 6 -27
3 -36 -32z"/>
<path class="parking7"d="M5665 1042 c-3 -8 -5 -33 -5 -56 l0 -43 61 -7 c34 -3 91 -6 125 -6
l64 0 0 55 c0 30 -1 55 -2 56 -2 0 -56 4 -120 7 -94 6 -119 4 -123 -6z"/>
<path class="parking45"d="M1491 953 c-13 -54 -25 -107 -27 -119 -5 -17 2 -22 47 -32 29 -7 54
-10 57 -7 6 6 51 195 52 217 0 17 -11 23 -71 33 l-36 7 -22 -99z"/>
<path class="parking6"d="M5664 921 c-2 -2 -4 -25 -4 -51 l0 -47 53 -7 c28 -3 82 -6 118 -6 66
0 67 0 73 31 11 59 8 68 -26 73 -43 7 -208 12 -214 7z"/>
<path class="parking19"d="M4875 829 c-28 -121 -42 -215 -33 -220 15 -10 90 -21 96 -15 3 3 15
57 27 121 24 128 28 117 -47 130 -33 6 -38 5 -43 -16z"/>
<path class="parking15"d="M4982 705 c-13 -65 -21 -119 -19 -121 7 -7 102 -23 107 -18 9 10 48
229 42 236 -4 4 -30 10 -57 13 l-50 7 -23 -117z"/>
<path class="parking5"d="M5650 750 l0 -57 118 -5 c78 -3 119 -1 124 6 4 6 8 30 8 53 0 51 1
50 -147 56 l-103 4 0 -57z"/>
<path class="parking16"d="M5126 773 c-32 -161 -38 -205 -30 -212 5 -5 30 -12 55 -15 l46 -7 22
108 c11 59 21 113 21 120 0 13 -14 18 -72 28 -34 6 -36 5 -42 -22z"/>
<path class="parking1"d="M5647 628 c-3 -29 -2 -56 1 -59 4 -4 60 -9 125 -12 l117 -4 0 57 0
57 -92 7 c-155 11 -145 14 -151 -46z"/>
<path class="parking22"d="M4725 348 c-14 -45 -44 -223 -38 -229 5 -4 31 -11 59 -14 l50 -7 17
99 c10 54 20 108 23 120 5 18 0 22 -46 32 -63 14 -60 14 -65 -1z"/>
<path class="parking23"d="M4831 220 c-13 -67 -22 -122 -20 -124 2 -2 26 -8 52 -14 35 -7 50 -7
53 2 6 17 44 207 44 221 0 7 -17 16 -37 19 -21 4 -45 9 -54 12 -12 3 -19 -19
-38 -116z"/>
<path class="parking37"d="M4980 306 c0 -2 -9 -48 -20 -101 -29 -143 -30 -141 31 -149 28 -4 53
-5 55 -3 5 5 44 196 44 217 0 14 -12 21 -50 29 -57 12 -60 13 -60 7z"/>
<path class="parking38"d="M5106 271 c-3 -9 -12 -54 -21 -101 -9 -47 -18 -94 -20 -106 -4 -18 2
-22 49 -30 l54 -10 21 105 c12 58 21 113 21 122 0 12 -15 19 -50 26 -42 9 -50
8 -54 -6z"/>
</g>
</svg>
   </div>
   <a target="_blank"  href="image/above-ground-parking-lot-map.pdf" class="buttomPPB" >POBIERZ RZUT W PDF</a>

<div id = "columns">

<!-- <div class="parkingTable"> -->
  <!-- <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber1">1</div>
    <div class = "premiseStatus1  "></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber2" >2</div>
    <div class = "premiseStatus2  "></div>
    </div>
    </div>

    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber3">3</div>
    <div class = "premiseStatus3  "></div>
    </div>
    </div>

    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber4">4</div>
    <div class = "premiseStatus4  "></div>
    </div>
    </div>

    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber5">5</div>
    <div class = "premiseStatus5  "></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber6">6</div>
    <div class = "premiseStatus6  "></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber7">7</div>
    <div class = "premiseStatus7  "></div>
    </div>
    </div>




    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber8">8</div>
    <div class = "premiseStatus8  "></div>
    </div>
    </div>




    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber9">9</div>
    <div class = "premiseStatus9  "></div>
    </div>
    </div>




    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber10">10</div>
    <div class = "premiseStatus10"></div>
    </div>
    </div>




    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber11">11</div>
    <div class = "premiseStatus11  "></div>
    </div>
    </div>




    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber12">12</div>
    <div class = "premiseStatus12  "></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber13">13</div>
    <div class = "premiseStatus13  "></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber14">14</div>
    <div class = "premiseStatus14  "></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber15">15</div>
    <div class = "premiseStatus15  "></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber16">16</div>
    <div class = "premiseStatus16  "></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber17">17</div>
    <div class = "premiseStatus17  "></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber18">18</div>
    <div class = "premiseStatus18  "></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber19">19</div>
    <div class = "premiseStatus19  "></div>
    </div>
    </div>




    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber20">20</div>
    <div class = "premiseStatus20  "></div>
    </div>
    </div>




    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber21">21</div>
    <div class = "premiseStatus21  "></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber22">22</div>
    <div class = "premiseStatus22  "></div>
    </div>
    </div>




    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber23">23</div>
    <div class = "premiseStatus23  "></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber24">24</div>
    <div class = "premiseStatus24  "></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber25">25</div>
    <div class = "premiseStatus25  "></div>
    </div>
    </div>

    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber26">26</div>
    <div class = "premiseStatus26  "></div>
    </div>
    </div>
    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber27">27</div>
    <div class = "premiseStatus27  "></div>
    </div>
    </div>

    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber28">28</div>
    <div class = "premiseStatus28  "></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber29">29</div>
    <div class = "premiseStatus29  "></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber30">30</div>
    <div class = "premiseStatus30  "></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber31">31</div>
    <div class = "premiseStatus31  "></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber32">32</div>
    <div class = "premiseStatus32  "></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber33">33</div>
    <div class = "premiseStatus33  "></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber34">34</div>
    <div class = "premiseStatus34  "></div>
    </div>
    </div>




    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber35">35</div>
    <div class = "premiseStatus35 "></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber36">36</div>
    <div class = "premiseStatus36  "></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber37">37</div>
    <div class = "premiseStatus37  "></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber38">38</div>
    <div class = "premiseStatus38  "></div>
    </div>
    </div>
    

    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber39">39</div>
    <div class = "premiseStatus39  "></div>
    </div>
    </div>

    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber40">40</div>
    <div class = "premiseStatus40 "></div>
    </div>
    </div>

    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber41">41</div>
    <div class = "premiseStatus41 "></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber42">42</div>
    <div class = "premiseStatus42  "></div>
    </div>
    </div>

    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber43">43</div>
    <div class = "premiseStatus43 "></div>
    </div>
    </div>




    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber44">44</div>
    <div class = "premiseStatus44 "></div>
    </div>
    </div>





    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber45">45</div>
    <div class = "premiseStatus45  "></div>
    </div>
    </div>




    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber46">46</div>
    <div class = "premiseStatus46  "></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber47">47</div>
    <div class = "premiseStatus47  "></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber48">48</div>
    <div class = "premiseStatus48  "></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber49">49</div>
    <div class = "premiseStatus49 "></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber50">50</div>
    <div class = "premiseStatus50 "></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber51">51</div>
    <div class = "premiseStatus51 "></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber52">52</div>
    <div class = "premiseStatus52 "></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber53">53</div>
    <div class = "premiseStatus53 "></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber54">54</div>
    <div class = "premiseStatus54"></div>
    </div>
    </div>

    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber55">55</div>
    <div class = "premiseStatus55"></div>
    </div>
    </div>

    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber56">56</div>
    <div class = "premiseStatus56"></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber57">57</div>
    <div class = "premiseStatus57"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber58">58</div>
    <div class = "premiseStatus58"></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber59">59</div>
    <div class = "premiseStatus59"></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber60">60</div>
    <div class = "premiseStatus60"></div>
    </div>
    </div>











    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber61">61</div>
    <div class = "premiseStatus61  "></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber62">62</div>
    <div class = "premiseStatus62"></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber63">63</div>
    <div class = "premiseStatus63"></div>
    </div>
    </div>

    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber64">64</div>
    <div class = "premiseStatus64"></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber65">65</div>
    <div class = "premiseStatus65"></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber66">66</div>
    <div class = "premiseStatus66"></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber67">67</div>
    <div class = "premiseStatus67"></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber68">68</div>
    <div class = "premiseStatus68"></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber69">69</div>
    <div class = "premiseStatus69"></div>
    </div>
    </div>


<!-- 
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber70">70</div>
    <div class = "premiseStatus70"></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber71">71</div>
    <div class = "premiseStatus71"></div>
    </div>
    </div>

    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber72">72</div>
    <div class = "premiseStatus72"></div>
    </div>
    </div>

    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber73">73</div>
    <div class = "premiseStatus73"></div>
    </div>
    </div> -->


    <!-- <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber74">74</div>
    <div class = "premiseStatus74"></div>
    </div>
    </div>

    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber75">75</div>
    <div class = "premiseStatus75  "></div>
    </div>
    </div>


    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber76">76</div>
    <div class = "premiseStatus76"></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber77">77</div>
    <div class = "premiseStatus77  "></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber78">78</div>
    <div class = "premiseStatus78  "></div>
    </div>
    </div>



    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber79">79</div>
    <div class = "premiseStatus79"></div>
    
    </div>
    </div>
   

    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber80">80</div>
    <div class = "premiseStatus80"></div>
    </div>
    </div>


    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber81">81</div>
    <div class = "premiseStatus81"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber82">82</div>
    <div class = "premiseStatus82"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber83">83</div>
    <div class = "premiseStatus83"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber84">84</div>
    <div class = "premiseStatus84"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber85">85</div>
    <div class = "premiseStatus85"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber86">86</div>
    <div class = "premiseStatus86"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber87">87</div>
    <div class = "premiseStatus87"></div>
    </div>
    </div>




    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber88">88</div>
    <div class = "premiseStatus88"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber89">89</div>
    <div class = "premiseStatus89"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber90">90</div>
    <div class = "premiseStatus90"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber91">91</div>
    <div class = "premiseStatus91"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber92">92</div>
    <div class = "premiseStatus92"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber93">93</div>
    <div class = "premiseStatus93"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber94">94</div>
    <div class = "premiseStatus94"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber95">95</div>
    <div class = "premiseStatus95"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber96">96</div>
    <div class = "premiseStatus96"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber97">97</div>
    <div class = "premiseStatus97"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber98">98</div>
    <div class = "premiseStatus98"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber99">99</div>
    <div class = "premiseStatus99"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber100">100</div>
    <div class = "premiseStatus100"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber101">101</div>
    <div class = "premiseStatus101"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber102">102</div>
    <div class = "premiseStatus102"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber103">103</div>
    <div class = "premiseStatus103"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber104">104</div>
    <div class = "premiseStatus104"></div>
    </div>
    </div>



    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber105">105</div>
    <div class = "premiseStatus105"></div>
    </div>
    </div>




    
    <div class="parkingTable">
  <div class="parkingBody">
    <div id="parkingNumber" class="parkingNumber106">106</div>
    <div class = "premiseStatus106"></div>
    </div>
    </div>


 -->



</div>
</div>

    <!-- popup cookie  start -->
    <!-- <div class="containerCookie">
      <div class="headerCookie">
        <i class="bx bx-cookie"></i>
        <h2>Cenimy Twoją prywatność</h2>
      </div>

      <div class="textCookie">
        <p>Używamy plików cookie, aby poprawić komfort przeglądania, wyświetlać spersonalizowane reklamy lub treści oraz analizować nasz ruch. Klikając „Akceptuj wszystko”, wyrażasz zgodę na używanie przez nas plików cookie. <a href="cookiesPolitics"> Czytaj więcej...</a></p>
      </div>

      <div class="buttonsCookie">
        <button class="button" id="acceptBtn">Akceptuj wszystkie</button>
        <button class="button" id="declineBtn">Odrzuć wszystko</button>
      </div>
    </div> -->
   <!-- popup cookie  start -->
  <?php
  $url1         = "https://diamondhill.voxdeveloper.com/webservice/realestatestatuslist/api_key/fff5a835cf5eb07c7190db32f0b79605bafcfa50/investment_id/2";
  $response1    = file_get_contents($url1);
   $xml1         = simplexml_load_string($response1);
  $realestates1 = $xml1->xpath("//realestate");

  foreach ($realestates1 as $realestates1) {
    $idValue         = (string)$realestates1->id;
    $statusNameValue = (string)$realestates1->status_name;
    if ($idValue === "2217"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText1  =  "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 1</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor1 = "red";  
          $parkingColor1= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2217"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText1  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 1</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor1 = "#e6b800";
        $parkingColor1= '#ffcc006a';
    } else if ($idValue === "2217"  && $statusNameValue === "Dostępne") {
      $premiseStatusText1  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 1</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor1 = "darkgreen"; 
        $parkingColor1 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2218"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText2  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 2</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor2 = "red";      $parkingColor2= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2218"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText2  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 2</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor2 = "#e6b800";   $parkingColor2= '#ffcc006a';
    } else if ($idValue === "2218"  && $statusNameValue === "Dostępne") {
      $premiseStatusText2  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 2</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor2 = "darkgreen";   $parkingColor2 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2219"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText3  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 3</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor3 = "red";      $parkingColor3= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2219"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText3  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 3</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor3 = "#e6b800";   $parkingColor3= '#ffcc006a';
    } else if ($idValue === "2219"  && $statusNameValue === "Dostępne") {
      $premiseStatusText3  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 3</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor3 = "darkgreen";   $parkingColor3 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2220"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText4  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 4</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor4 = "red";      $parkingColor4= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2220"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText4  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 4</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor4 = "#e6b800";   $parkingColor4= '#ffcc006a';
    } else if ($idValue === "2220"  && $statusNameValue === "Dostępne") {
      $premiseStatusText4  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 4</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor4 = "darkgreen";   $parkingColor4 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2221"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText5  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 5</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor5 = "red";      $parkingColor5= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2221"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText5  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 5</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor5 = "#e6b800";   $parkingColor5= '#ffcc006a';
    } else if ($idValue === "2221"  && $statusNameValue === "Dostępne") {
      $premiseStatusText5  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 5</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor5 = "darkgreen";   $parkingColor5 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2222"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText6  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 6</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor6 = "red";      $parkingColor6= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2222"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText6  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 6</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor6 = "#e6b800";   $parkingColor6= '#ffcc006a';
    } else if ($idValue === "2222"  && $statusNameValue === "Dostępne") {
      $premiseStatusText6  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 6</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor6 = "darkgreen";   $parkingColor6 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2223"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText7  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 7</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor7 = "red";      $parkingColor7= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2223"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText7  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 7</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor7 = "#e6b800";   $parkingColor7= '#ffcc006a';
    } else if ($idValue === "2223"  && $statusNameValue === "Dostępne") {
      $premiseStatusText7  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 7</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor7 = "darkgreen";   $parkingColor7 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2224"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText8  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 8</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor8 = "red";      $parkingColor8= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2224"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText8  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 8</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor8 = "#e6b800";   $parkingColor8= '#ffcc006a';
    } else if ($idValue === "2224"  && $statusNameValue === "Dostępne") {
      $premiseStatusText8  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 8</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor8 = "darkgreen";   $parkingColor8 = 'rgba(0, 100, 0, 0.424) ';

    } else if ($idValue === "2225"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText9  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 9</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor9 = "red";      $parkingColor9= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2225"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText9  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 9</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor9 = "#e6b800";   $parkingColor9= '#ffcc006a';
    } else if ($idValue === "2225"  && $statusNameValue === "Dostępne") {
      $premiseStatusText9  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 9</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor9 = "darkgreen";   $parkingColor9 = 'rgba(0, 100, 0, 0.424) ';

      
      
    } else if ($idValue === "2226"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText10  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 10</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor10 = "red";      $parkingColor10= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2226"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText10  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 10</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor10 = "#e6b800";   $parkingColor10= '#ffcc006a';
    } else if ($idValue === "2226"  && $statusNameValue === "Dostępne") {
      $premiseStatusText10  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 10</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor10 = "darkgreen";   $parkingColor10 = 'rgba(0, 100, 0, 0.424) ';


    } else if ($idValue === "2227"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText11  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 11</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor11 = "red";      $parkingColor11= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2227"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText11  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 11</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor11 = "#e6b800";   $parkingColor11= '#ffcc006a';
    } else if ($idValue === "2227"  && $statusNameValue === "Dostępne") {
      $premiseStatusText11  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 11</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor11 = "darkgreen";   $parkingColor11 = 'rgba(0, 100, 0, 0.424) ';
    
    } else if ($idValue === "2228"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText12  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 12</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor12 = "red";      $parkingColor12= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2228"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText12  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 12</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor12 = "#e6b800";   $parkingColor12= '#ffcc006a';
    } else if ($idValue === "2228"  && $statusNameValue === "Dostępne") {
      $premiseStatusText12  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 12</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor12 = "darkgreen";   $parkingColor12 = 'rgba(0, 100, 0, 0.424) ';

    } else if ($idValue === "2229"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText13  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 13</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor13 = "red";      $parkingColor13= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2229"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText13  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 13</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor13 = "#e6b800";   $parkingColor13= '#ffcc006a';
    } else if ($idValue === "2229"  && $statusNameValue === "Dostępne") {
      $premiseStatusText13  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 13</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor13 = "darkgreen";   $parkingColor13 = 'rgba(0, 100, 0, 0.424) ';

    } else if ($idValue === "2230"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText14  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 14</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor14 = "red";      $parkingColor14= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2230"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText14  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 14</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor14 = "#e6b800";   $parkingColor14= '#ffcc006a';
    } else if ($idValue === "2230"  && $statusNameValue === "Dostępne") {
      $premiseStatusText14  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 14</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor14 = "darkgreen";   $parkingColor14 = 'rgba(0, 100, 0, 0.424) ';


    } else if ($idValue === "2231"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText15  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 15</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor15 = "red";      $parkingColor15= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2231"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText15  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 15</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor15 = "#e6b800";   $parkingColor15= '#ffcc006a';
    } else if ($idValue === "2231"  && $statusNameValue === "Dostępne") {
      $premiseStatusText15  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 15</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor15 = "darkgreen";   $parkingColor15 = 'rgba(0, 100, 0, 0.424) ';


    } else if ($idValue === "2232"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText16  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 16</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor16 = "red";      $parkingColor16= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2232"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText16  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 16</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor16 = "#e6b800";   $parkingColor16= '#ffcc006a';
    } else if ($idValue === "2232"  && $statusNameValue === "Dostępne") {
      $premiseStatusText16  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 16</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor16 = "darkgreen";   $parkingColor16 = 'rgba(0, 100, 0, 0.424) ';


    } else if ($idValue === "2233"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText17  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 17</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor17 = "red";      $parkingColor17= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2233"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText17  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 17</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor17 = "#e6b800";   $parkingColor17= '#ffcc006a';
    } else if ($idValue === "2233"  && $statusNameValue === "Dostępne") {
      $premiseStatusText17  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 17</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor17 = "darkgreen";   $parkingColor17 = 'rgba(0, 100, 0, 0.424) ';



    } else if ($idValue === "2234"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText18  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 18</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor18 = "red";      $parkingColor18= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2234"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText18  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 18</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor18 = "#e6b800";   $parkingColor18= '#ffcc006a';
    } else if ($idValue === "2234"  && $statusNameValue === "Dostępne") {
      $premiseStatusText18  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 18</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor18 = "darkgreen";   $parkingColor18 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2235"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText19  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 19</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor19 = "red";      $parkingColor19= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2235"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText19  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 19</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor19 = "#e6b800";   $parkingColor19= '#ffcc006a';
    } else if ($idValue === "2235"  && $statusNameValue === "Dostępne") {
      $premiseStatusText19  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 19</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor19 = "darkgreen";   $parkingColor19 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2236"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText20  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 20</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor20 = "red";      $parkingColor20= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2236"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText20  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 20</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor20 = "#e6b800";   $parkingColor20= '#ffcc006a';
    } else if ($idValue === "2236"  && $statusNameValue === "Dostępne") {
      $premiseStatusText20  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 20</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor20 = "darkgreen";   $parkingColor20 = 'rgba(0, 100, 0, 0.424) ';

    } else if ($idValue === "2237"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText21  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 21</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor21 = "red";      $parkingColor21= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2237"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText21  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 21</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor21 = "#e6b800";   $parkingColor21= '#ffcc006a';
    } else if ($idValue === "2237"  && $statusNameValue === "Dostępne") {
      $premiseStatusText21  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 21</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor21 = "darkgreen";   $parkingColor21 = 'rgba(0, 100, 0, 0.424) ';



    } else if ($idValue === "2238"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText22  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 22</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor22 = "red";      $parkingColor22= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2238"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText22  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 22</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor22 = "#e6b800";   $parkingColor22= '#ffcc006a';
    } else if ($idValue === "2238"  && $statusNameValue === "Dostępne") {
      $premiseStatusText22  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 22</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor22 = "darkgreen";   $parkingColor22 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2239"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText23  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 23</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor23 = "red";      $parkingColor23= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2239"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText23  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 23</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor23 = "#e6b800";   $parkingColor23= '#ffcc006a';
    } else if ($idValue === "2239"  && $statusNameValue === "Dostępne") {
      $premiseStatusText23  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 23</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor23 = "darkgreen";   $parkingColor23 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2240"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText24  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 24</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor24 = "red";      $parkingColor24= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2240"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText24  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 24</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor24 = "#e6b800";   $parkingColor24= '#ffcc006a';
    } else if ($idValue === "2240"  && $statusNameValue === "Dostępne") {
      $premiseStatusText24  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 24</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor24 = "darkgreen";   $parkingColor24 = 'rgba(0, 100, 0, 0.424) ';


    } else if ($idValue === "2241"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText25  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 25</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor25 = "red";      $parkingColor25= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2241"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText25  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 25</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor25 = "#e6b800";   $parkingColor25= '#ffcc006a';
    } else if ($idValue === "2241"  && $statusNameValue === "Dostępne") {
      $premiseStatusText25  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 25</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor25 = "darkgreen";   $parkingColor25 = 'rgba(0, 100, 0, 0.424) ';




    } else if ($idValue === "2242"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText26  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 26</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor26 = "red";      $parkingColor26= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2242"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText26  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 26</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor26 = "#e6b800";   $parkingColor26= '#ffcc006a';
    } else if ($idValue === "2242"  && $statusNameValue === "Dostępne") {
      $premiseStatusText26  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 26</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor26 = "darkgreen";   $parkingColor26 = 'rgba(0, 100, 0, 0.424) ';



    } else if ($idValue === "2243"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText27  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 27</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor27 = "red";      $parkingColor27= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2243"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText27  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 27</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor27 = "#e6b800";   $parkingColor27= '#ffcc006a';
    } else if ($idValue === "2243"  && $statusNameValue === "Dostępne") {
      $premiseStatusText27  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 27</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor27 = "darkgreen";   $parkingColor27 = 'rgba(0, 100, 0, 0.424) ';



    } else if ($idValue === "2244"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText28  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 28</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor28 = "red";      $parkingColor28= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2244"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText28  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 28</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor28 = "#e6b800";   $parkingColor28= '#ffcc006a';
    } else if ($idValue === "2244"  && $statusNameValue === "Dostępne") {
      $premiseStatusText28  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 28</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor28 = "darkgreen";   $parkingColor28 = 'rgba(0, 100, 0, 0.424) ';



 
    } else if ($idValue === "2245"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText29  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 29</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor29 = "red";      $parkingColor29= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2245"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText29  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 29</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor29 = "#e6b800";   $parkingColor29= '#ffcc006a';
    } else if ($idValue === "2245"  && $statusNameValue === "Dostępne") {
      $premiseStatusText29  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 29</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor29 = "darkgreen";   $parkingColor29 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2246"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText30  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 30</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor30 = "red";      $parkingColor30= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2246"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText30  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 30</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor30 = "#e6b800";   $parkingColor30= '#ffcc006a';
    } else if ($idValue === "2246"  && $statusNameValue === "Dostępne") {
      $premiseStatusText30  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 30</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor30 = "darkgreen";   $parkingColor30 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2247"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText31  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 31</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor31 = "red";      $parkingColor31= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2247"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText31  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 31</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor31 = "#e6b800";   $parkingColor31= '#ffcc006a';
    } else if ($idValue === "2247"  && $statusNameValue === "Dostępne") {
      $premiseStatusText31  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 31</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor31 = "darkgreen";   $parkingColor31 = 'rgba(0, 100, 0, 0.424) ';


    } else if ($idValue === "2248"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText32  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 32</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor32 = "red";      $parkingColor32= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2248"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText32  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 32</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor32 = "#e6b800";   $parkingColor32= '#ffcc006a';
    } else if ($idValue === "2248"  && $statusNameValue === "Dostępne") {
      $premiseStatusText32  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 32</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor32 = "darkgreen";   $parkingColor32 = 'rgba(0, 100, 0, 0.424) ';

    } else if ($idValue === "2249"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText33  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 33</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor33 = "red";      $parkingColor33= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2249"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText33  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 33</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor33 = "#e6b800";   $parkingColor33= '#ffcc006a';
    } else if ($idValue === "2249"  && $statusNameValue === "Dostępne") {
      $premiseStatusText33  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 33</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor33 = "darkgreen";   $parkingColor33 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2250"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText34  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 34</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor34 = "red";      $parkingColor34= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2250"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText34  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 34</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor34 = "#e6b800";   $parkingColor34= '#ffcc006a';
    } else if ($idValue === "2250"  && $statusNameValue === "Dostępne") {
      $premiseStatusText34  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 34</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor34 = "darkgreen";   $parkingColor34 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2251"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText35  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 35</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor35 = "red";      $parkingColor35= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2251"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText35  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 35</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor35 = "#e6b800";   $parkingColor35= '#ffcc006a';
    } else if ($idValue === "2251"  && $statusNameValue === "Dostępne") {
      $premiseStatusText35  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 35</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor35 = "darkgreen";   $parkingColor35 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2252"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText36  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 36</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor36 = "red";      $parkingColor36= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2252"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText36  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 36</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor36 = "#e6b800";   $parkingColor36= '#ffcc006a';
    } else if ($idValue === "2252"  && $statusNameValue === "Dostępne") {
      $premiseStatusText36  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 36</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor36 = "darkgreen";   $parkingColor36 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2253"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText37  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 37</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor37 = "red";      $parkingColor37= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2253"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText37  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 37</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor37 = "#e6b800";   $parkingColor37= '#ffcc006a';
    } else if ($idValue === "2253"  && $statusNameValue === "Dostępne") {
      $premiseStatusText37  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 37</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor37 = "darkgreen";   $parkingColor37 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2254"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText38  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 38</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor38 = "red";      $parkingColor38= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2254"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText38  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 38</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor38 = "#e6b800";   $parkingColor38= '#ffcc006a';
    } else if ($idValue === "2254"  && $statusNameValue === "Dostępne") {
      $premiseStatusText38  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 38</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor38 = "darkgreen";   $parkingColor38 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2255"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText39  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 39</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor39 = "red";      $parkingColor39= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2255"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText39  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 39</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor39 = "#e6b800";   $parkingColor39= '#ffcc006a';
    } else if ($idValue === "2255"  && $statusNameValue === "Dostępne") {
      $premiseStatusText39  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 39</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor39 = "darkgreen";   $parkingColor39 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2258"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText42  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 42</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor42 = "red";      $parkingColor42= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2258"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText42  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 42</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor42 = "#e6b800";   $parkingColor42= '#ffcc006a';
    } else if ($idValue === "2258"  && $statusNameValue === "Dostępne") {
      $premiseStatusText42  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 42</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor42 = "darkgreen";   $parkingColor42 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2261"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText45  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 45</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor45 = "red";      $parkingColor45= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2261"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText45  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 45</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor45 = "#e6b800";   $parkingColor45= '#ffcc006a';
    } else if ($idValue === "2261"  && $statusNameValue === "Dostępne") {
      $premiseStatusText45  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 45</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor45 = "darkgreen";   $parkingColor45 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2262"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText46  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 46</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor46 = "red";      $parkingColor46= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2262"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText46  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 46</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor46 = "#e6b800";   $parkingColor46= '#ffcc006a';
    } else if ($idValue === "2262"  && $statusNameValue === "Dostępne") {
      $premiseStatusText46  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 46</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor46 = "darkgreen";   $parkingColor46 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2263"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText47  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 47</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor47 = "red";      $parkingColor47= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2263"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText47  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 47</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor47 = "#e6b800";   $parkingColor47= '#ffcc006a';
    } else if ($idValue === "2263"  && $statusNameValue === "Dostępne") {
      $premiseStatusText47  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 47</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor47 = "darkgreen";   $parkingColor47 = 'rgba(0, 100, 0, 0.424) ';
    } else if ($idValue === "2264"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText48  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 48</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor48 = "red";      $parkingColor48= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2264"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText48  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 48</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor48 = "#e6b800";   $parkingColor48= '#ffcc006a';
    } else if ($idValue === "2264"  && $statusNameValue === "Dostępne") {
      $premiseStatusText48  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 48</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor48 = "darkgreen";   $parkingColor48 = 'rgba(0, 100, 0, 0.424) ';

    } else if ($idValue === "2277"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText61  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 61</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor61 = "red";      $parkingColor61= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2277"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText61  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 61</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor61 = "#e6b800";   $parkingColor61= '#ffcc006a';
    } else if ($idValue === "2277"  && $statusNameValue === "Dostępne") {
      $premiseStatusText61  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 61</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor61 = "darkgreen";   $parkingColor61 = 'rgba(0, 100, 0, 0.424) ';
    
  } else if ($idValue === "2291"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
    $premiseStatusText75  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 75</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
    $premiseStatusColor75 = "red";      $parkingColor75= "rgba(255, 0, 0, 0.408)";
  } else if ($idValue === "2291"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
    $premiseStatusText75  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 75</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
    $premiseStatusColor75 = "#e6b800";   $parkingColor75= '#ffcc006a';
  } else if ($idValue === "2291"  && $statusNameValue === "Dostępne") {
    $premiseStatusText75  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 75</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
    $premiseStatusColor75 = "darkgreen";   $parkingColor75 = 'rgba(0, 100, 0, 0.424) ';


  } else if ($idValue === "2293"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
    $premiseStatusText77  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 77</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
    $premiseStatusColor77 = "red";      $parkingColor77= "rgba(255, 0, 0, 0.408)";
  } else if ($idValue === "2293"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
    $premiseStatusText77  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 77</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
    $premiseStatusColor77 = "#e6b800";   $parkingColor77= '#ffcc006a';
  } else if ($idValue === "2293"  && $statusNameValue === "Dostępne") {
    $premiseStatusText77  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 77</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
    $premiseStatusColor77 = "darkgreen";   $parkingColor77 = 'rgba(0, 100, 0, 0.424) ';

  } else if ($idValue === "2294"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
    $premiseStatusText78  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 78</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
    $premiseStatusColor78 = "red";      $parkingColor78= "rgba(255, 0, 0, 0.408)";
  } else if ($idValue === "2294"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
    $premiseStatusText78  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 78</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
    $premiseStatusColor78 = "#e6b800";   $parkingColor78= '#ffcc006a';
  } else if ($idValue === "2294"  && $statusNameValue === "Dostępne") {
    $premiseStatusText78  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 78</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
    $premiseStatusColor78 = "darkgreen";   $parkingColor78 = 'rgba(0, 100, 0, 0.424) ';

  }

else if ($idValue === "2313"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
  $premiseStatusText97  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 97</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
  $premiseStatusColor97 = "red";      $parkingColor97= "rgba(255, 0, 0, 0.408)";
} else if ($idValue === "2313"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
  $premiseStatusText97  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 97</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
  $premiseStatusColor97 = "#e6b800";   $parkingColor97= '#ffcc006a';
} else if ($idValue === "2313"  && $statusNameValue === "Dostępne") {
  $premiseStatusText97  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 97</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
  $premiseStatusColor97 = "darkgreen";   $parkingColor97 = 'rgba(0, 100, 0, 0.424) ';

} else if ($idValue === "2314"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
  $premiseStatusText98  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 98</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
  $premiseStatusColor98 = "red";      $parkingColor98= "rgba(255, 0, 0, 0.408)";
} else if ($idValue === "2314"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
  $premiseStatusText98  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 98</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
  $premiseStatusColor98 = "#e6b800";   $parkingColor98= '#ffcc006a';
} else if ($idValue === "2314"  && $statusNameValue === "Dostępne") {
  $premiseStatusText98  = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 98</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
  $premiseStatusColor98 = "darkgreen";   $parkingColor98 = 'rgba(0, 100, 0, 0.424) ';

}
  
  }

  $url         = "";
  $response    = file_get_contents($url);
  $xml         = simplexml_load_string($response);
  $realestates = $xml->xpath("//realestate");

  foreach ($realestates as $realestate) {
    $idValue         = (string)$realestate->id;
    $statusNameValue = (string)$realestate->status_name;
   
 // Above-ground parking space condition start
    if ($idValue === "2841"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText35 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 35</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor35= "red";      $parkingColor35= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2841"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText35 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 35</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor35= "#e6b800";   $parkingColor35= '#ffcc006a';
    } else if ($idValue === "2841"  && $statusNameValue === "Dostępne") {
      $premiseStatusText35 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 35</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor35= "darkgreen";   $parkingColor35 = 'rgba(0, 100, 0, 0.424) ';
    } 

   else if ($idValue === "2842"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText40 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 40</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor40= "red";      $parkingColor40= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2842"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText40 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 40</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor40= "#e6b800";   $parkingColor40= '#ffcc006a';
    } else if ($idValue === "2842"  && $statusNameValue === "Dostępne") {
      $premiseStatusText40 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 40</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor40= "darkgreen";   $parkingColor40 = 'rgba(0, 100, 0, 0.424) ';
    } 

    else if ($idValue === "2843"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText41 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 41</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor41= "red";      $parkingColor41= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2843"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText41 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 41</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor41= "#e6b800";   $parkingColor41= '#ffcc006a';
    } else if ($idValue === "2843"  && $statusNameValue === "Dostępne") {
      $premiseStatusText41 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 41</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor41= "darkgreen";   $parkingColor41 = 'rgba(0, 100, 0, 0.424) ';
    } 


    else if ($idValue === "2844"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText43 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 43</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor43= "red";      $parkingColor43= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2844"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText43 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 43</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor43= "#e6b800";   $parkingColor43= '#ffcc006a';
    } else if ($idValue === "2844"  && $statusNameValue === "Dostępne") {
      $premiseStatusText43 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 43</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor43= "darkgreen";   $parkingColor43 = 'rgba(0, 100, 0, 0.424) ';
    } 


    else if ($idValue === "2845"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText44 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 44</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor44= "red";      $parkingColor44= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2845"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText44 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 44</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor44= "#e6b800";   $parkingColor44= '#ffcc006a';
    } else if ($idValue === "2845"  && $statusNameValue === "Dostępne") {
      $premiseStatusText44 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 44</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor44= "darkgreen";   $parkingColor44 = 'rgba(0, 100, 0, 0.424) ';
    } 



    else if ($idValue === "2846"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText49 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 49</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor49= "red";      $parkingColor49= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2846"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText49 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 49</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor49= "#e6b800";   $parkingColor49= '#ffcc006a';
    } else if ($idValue === "2846"  && $statusNameValue === "Dostępne") {
      $premiseStatusText49 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 49</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor49= "darkgreen";   $parkingColor49 = 'rgba(0, 100, 0, 0.424) ';
    } 



    else if ($idValue === "2847"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText50 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 50</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor50= "red";      $parkingColor50= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2847"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText50 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 50</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor50= "#e6b800";   $parkingColor50= '#ffcc006a';
    } else if ($idValue === "2847"  && $statusNameValue === "Dostępne") {
      $premiseStatusText50 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 50</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor50= "darkgreen"; 
      $parkingColor50 = 'rgba(0, 100, 0, 0.424) ';
    } 



    else if ($idValue === "2848"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText51 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 51</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor51= "red";      $parkingColor51= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2848"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText51 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 51</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor51= "#e6b800";   $parkingColor51= '#ffcc006a';
    } else if ($idValue === "2848"  && $statusNameValue === "Dostępne") {
      $premiseStatusText51 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 51</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor51= "darkgreen";   $parkingColor51 = 'rgba(0, 100, 0, 0.424) ';
    } 



    else if ($idValue === "2849"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText52 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 52</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor52= "red";      $parkingColor52= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2849"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText52 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 52</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor52= "#e6b800";   $parkingColor52= '#ffcc006a';
    } else if ($idValue === "2849"  && $statusNameValue === "Dostępne") {
      $premiseStatusText52 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 52</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor52= "darkgreen";   $parkingColor52 = 'rgba(0, 100, 0, 0.424) ';
    } 


    else if ($idValue === "2850"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText53 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 53</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor53= "red";      $parkingColor53= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2850"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText53 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 53</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor53= "#e6b800";   $parkingColor53= '#ffcc006a';
    } else if ($idValue === "2850"  && $statusNameValue === "Dostępne") {
      $premiseStatusText53 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 53</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor53= "darkgreen";   $parkingColor53 = 'rgba(0, 100, 0, 0.424) ';
    } 



    else if ($idValue === "2851"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText54 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 54</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor54= "red";      $parkingColor54= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2851"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText54 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 54</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor54= "#e6b800";   $parkingColor54= '#ffcc006a';
    } else if ($idValue === "2851"  && $statusNameValue === "Dostępne") {
      $premiseStatusText54 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 54</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor54= "darkgreen";   $parkingColor54 = 'rgba(0, 100, 0, 0.424) ';
    } 




    else if ($idValue === "2852"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText55 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 55</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor55= "red";      $parkingColor55= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2852"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText55 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 55</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor55= "#e6b800";   $parkingColor55= '#ffcc006a';
    } else if ($idValue === "2852"  && $statusNameValue === "Dostępne") {
      $premiseStatusText55 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 55</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor55= "darkgreen";   $parkingColor55 = 'rgba(0, 100, 0, 0.424) ';
    } 



    else if ($idValue === "2853"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText56 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 56</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor56= "red";      $parkingColor56= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2853"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText56 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 56</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor56= "#e6b800";   $parkingColor56= '#ffcc006a';
    } else if ($idValue === "2853"  && $statusNameValue === "Dostępne") {
      $premiseStatusText56 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 56</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor56= "darkgreen";   $parkingColor56 = 'rgba(0, 100, 0, 0.424) ';
    } 



    else if ($idValue === "2854"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText57 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 57</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor57= "red";      $parkingColor57= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2854"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText57 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 57</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor57= "#e6b800";   $parkingColor57= '#ffcc006a';
    } else if ($idValue === "2854"  && $statusNameValue === "Dostępne") {
      $premiseStatusText57 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 57</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor57= "darkgreen";   $parkingColor57 = 'rgba(0, 100, 0, 0.424) ';
    } 



    else if ($idValue === "2855"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText58 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 58</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor58= "red";      $parkingColor58= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2855"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText58 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 58</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor58= "#e6b800";   $parkingColor58= '#ffcc006a';
    } else if ($idValue === "2855"  && $statusNameValue === "Dostępne") {
      $premiseStatusText58 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 58</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor58= "darkgreen";   $parkingColor58 = 'rgba(0, 100, 0, 0.424) ';
    } 



    else if ($idValue === "2856"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText59 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 59</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor59= "red";      $parkingColor59= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2856"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText59 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 59</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor59= "#e6b800";   $parkingColor59= '#ffcc006a';
    } else if ($idValue === "2856"  && $statusNameValue === "Dostępne") {
      $premiseStatusText59 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 59</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor59= "darkgreen";   $parkingColor59 = 'rgba(0, 100, 0, 0.424) ';
    } 




    else if ($idValue === "2857"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText60 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 60</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor60= "red";      $parkingColor60= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2857"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText60 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 60</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor60= "#e6b800";   $parkingColor60= '#ffcc006a';
    } else if ($idValue === "2857"  && $statusNameValue === "Dostępne") {
      $premiseStatusText60 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 60</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor60= "darkgreen";   $parkingColor60 = 'rgba(0, 100, 0, 0.424) ';
    } 




    else if ($idValue === "2858"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText62 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 62</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor62= "red";      $parkingColor62= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2858"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText62 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 62</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor62= "#e6b800";   $parkingColor62= '#ffcc006a';
    } else if ($idValue === "2858"  && $statusNameValue === "Dostępne") {
      $premiseStatusText62 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 62</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor62= "darkgreen";   $parkingColor62 = 'rgba(0, 100, 0, 0.424) ';
    } 



    else if ($idValue === "2859"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText63 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 63</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor63= "red";      $parkingColor63= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2859"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText63 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 63</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor63= "#e6b800";   $parkingColor63= '#ffcc006a';
    } else if ($idValue === "2859"  && $statusNameValue === "Dostępne") {
      $premiseStatusText63 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 63</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor63= "darkgreen";   $parkingColor63 = 'rgba(0, 100, 0, 0.424) ';
    } 



    else if ($idValue === "2860"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText64 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 64</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor64= "red";      $parkingColor64= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2860"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText64 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 64</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor64= "#e6b800";   $parkingColor64= '#ffcc006a';
    } else if ($idValue === "2860"  && $statusNameValue === "Dostępne") {
      $premiseStatusText64 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 64</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor64= "darkgreen";   $parkingColor64 = 'rgba(0, 100, 0, 0.424) ';
    } 



    else if ($idValue === "2861"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText65 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 65</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor65= "red";      $parkingColor65= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2861"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText65 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 65</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor65= "#e6b800";   $parkingColor65= '#ffcc006a';
    } else if ($idValue === "2861"  && $statusNameValue === "Dostępne") {
      $premiseStatusText65 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 65</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor65= "darkgreen";   $parkingColor65 = 'rgba(0, 100, 0, 0.424) ';
    } 




    else if ($idValue === "2862"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText66 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 66</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor66= "red";      $parkingColor66= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2862"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText66 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 66</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor66= "#e6b800";   $parkingColor66= '#ffcc006a';
    } else if ($idValue === "2862"  && $statusNameValue === "Dostępne") {
      $premiseStatusText66 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 66</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor66= "darkgreen";   $parkingColor66 = 'rgba(0, 100, 0, 0.424) ';
    } 




    else if ($idValue === "2863"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText67 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 67</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor67= "red";      $parkingColor67= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2863"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText67 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 67</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor67= "#e6b800";   $parkingColor67= '#ffcc006a';
    } else if ($idValue === "2863"  && $statusNameValue === "Dostępne") {
      $premiseStatusText67 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 67</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor67= "darkgreen";   $parkingColor67 = 'rgba(0, 100, 0, 0.424) ';
    } 



    else if ($idValue === "2864"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText68 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 68</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor68= "red";      $parkingColor68= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2864"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText68 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 68</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor68= "#e6b800";   $parkingColor68= '#ffcc006a';
    } else if ($idValue === "2864"  && $statusNameValue === "Dostępne") {
      $premiseStatusText68 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 68</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor68= "darkgreen";   $parkingColor68 = 'rgba(0, 100, 0, 0.424) ';
    } 



    else if ($idValue === "2865"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText69 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 69</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor69= "red";      $parkingColor69= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2865"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText69 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 69</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor69= "#e6b800";   $parkingColor69= '#ffcc006a';
    } else if ($idValue === "2865"  && $statusNameValue === "Dostępne") {
      $premiseStatusText69 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 69</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor69= "darkgreen";   $parkingColor69 = 'rgba(0, 100, 0, 0.424) ';
    } 



    // else if ($idValue === "2866"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

    //   $premiseStatusText70 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 70</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
    //   $premiseStatusColor70= "red";      $parkingColor70= "rgba(255, 0, 0, 0.408)";
    // } else if ($idValue === "2866"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
    //   $premiseStatusText70 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 70</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
    //   $premiseStatusColor70= "#e6b800";   $parkingColor70= '#ffcc006a';
    // } else if ($idValue === "2866"  && $statusNameValue === "Dostępne") {
    //   $premiseStatusText70 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 70</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
    //   $premiseStatusColor70= "darkgreen";   $parkingColor70 = 'rgba(0, 100, 0, 0.424) ';
    // } 


    // else if ($idValue === "2867"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

    //   $premiseStatusText71 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 71</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
    //   $premiseStatusColor71= "red";      $parkingColor71= "rgba(255, 0, 0, 0.408)";
    // } else if ($idValue === "2867"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
    //   $premiseStatusText71 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 71</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
    //   $premiseStatusColor71= "#e6b800";   $parkingColor71= '#ffcc006a';
    // } else if ($idValue === "2867"  && $statusNameValue === "Dostępne") {
    //   $premiseStatusText71 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 71</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
    //   $premiseStatusColor71= "darkgreen";   $parkingColor71 = 'rgba(0, 100, 0, 0.424) ';
    // } 



    // else if ($idValue === "2868"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

    //   $premiseStatusText72 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 72</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
    //   $premiseStatusColor72= "red";      $parkingColor72= "rgba(255, 0, 0, 0.408)";
    // } else if ($idValue === "2868"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
    //   $premiseStatusText72 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 72</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
    //   $premiseStatusColor72= "#e6b800";   $parkingColor72= '#ffcc006a';
    // } else if ($idValue === "2868"  && $statusNameValue === "Dostępne") {
    //   $premiseStatusText72 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 72</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
    //   $premiseStatusColor72= "darkgreen";   $parkingColor72 = 'rgba(0, 100, 0, 0.424) ';
    // } 




    // else if ($idValue === "2869"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

    //   $premiseStatusText73 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 73</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
    //   $premiseStatusColor73= "red";      $parkingColor73= "rgba(255, 0, 0, 0.408)";
    // } else if ($idValue === "2869"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
    //   $premiseStatusText73 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 73</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
    //   $premiseStatusColor73= "#e6b800";   $parkingColor73= '#ffcc006a';
    // } else if ($idValue === "2869"  && $statusNameValue === "Dostępne") {
    //   $premiseStatusText73 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 73</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
    //   $premiseStatusColor73= "darkgreen";   $parkingColor73 = 'rgba(0, 100, 0, 0.424) ';
    // } 




    else if ($idValue === "2870"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText74 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 74</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor74= "red";      $parkingColor74= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2870"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText74 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 74</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor74= "#e6b800";   $parkingColor74= '#ffcc006a';
    } else if ($idValue === "2870"  && $statusNameValue === "Dostępne") {
      $premiseStatusText74 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 74</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor74= "darkgreen";   $parkingColor74 = 'rgba(0, 100, 0, 0.424) ';
    } 







    else if ($idValue === "2872"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText76 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 76</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor76= "red";      $parkingColor76= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2872"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText76 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 76</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor76= "#e6b800";   $parkingColor76= '#ffcc006a';
    } else if ($idValue === "2872"  && $statusNameValue === "Dostępne") {
      $premiseStatusText76 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 76</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor76= "darkgreen";   $parkingColor76 = 'rgba(0, 100, 0, 0.424) ';
    } 





    else if ($idValue === "2875"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText79 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 79</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
    
      $premiseStatusColor79= "rgba(255, 0, 0, 0.408)";  $parkingColor79= "rgba(255, 0, 0, 0.408)";

    } else if ($idValue === "2875"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText79 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 79</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor79= "#e6b800";   $parkingColor79= '#ffcc006a';
      $parkingColor79= '#ffcc006a';	
    } else if ($idValue === "2875"  && $statusNameValue === "Dostępne") {
      $premiseStatusText79 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 79</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor79= "darkgreen";  
       $parkingColor79 = 'rgba(0, 100, 0, 0.424) ';
    
    } 




    else if ($idValue === "2876"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText80 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 80</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $parkingColor80= "red";      
      $premiseStatusColor80= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2876"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText80 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 80</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor80= "#e6b800";  
      $parkingColor80= '#ffcc006a';	
    } else if ($idValue === "2876"  && $statusNameValue === "Dostępne") {
      $premiseStatusText80 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 80</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor80= "darkgreen";  
      $parkingColor80= 'rgba(0, 100, 0, 0.424) ';	
    } 




    else if ($idValue === "2877"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText81 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 81</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor81= "red";    
      $parkingColor81= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2877"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText81 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 81</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor81= "#e6b800"; 
      $parkingColor81= '#ffcc006a';	
    } else if ($idValue === "2877"  && $statusNameValue === "Dostępne") {
      $premiseStatusText81 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 81</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor81= "darkgreen";   
      $parkingColor81 = 'rgba(0, 100, 0, 0.424) ';	
    } 




    else if ($idValue === "2878"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText82 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 82</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor82= "red";      $parkingColor82= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2878"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText82 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 82</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor82= "#e6b800";   $parkingColor82= '#ffcc006a';
    } else if ($idValue === "2878"  && $statusNameValue === "Dostępne") {
      $premiseStatusText82 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 82</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor82= "darkgreen";   $parkingColor82 = 'rgba(0, 100, 0, 0.424) ';
    } 




    else if ($idValue === "2879"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText83 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 83</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor83= "red";      $parkingColor83= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2879"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText83 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 83</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor83= "#e6b800";   $parkingColor83= '#ffcc006a';
    } else if ($idValue === "2879"  && $statusNameValue === "Dostępne") {
      $premiseStatusText83 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 83</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor83= "darkgreen";   $parkingColor83 = 'rgba(0, 100, 0, 0.424) ';
    } 





    else if ($idValue === "2880"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText84 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 84</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor84= "red";      $parkingColor84= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2880"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText84 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 84</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor84= "#e6b800";   $parkingColor84= '#ffcc006a';
    } else if ($idValue === "2880"  && $statusNameValue === "Dostępne") {
      $premiseStatusText84 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 84</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor84= "darkgreen";   $parkingColor84 = 'rgba(0, 100, 0, 0.424) ';
    } 




    else if ($idValue === "2881"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText85 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 85</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor85= "red";      $parkingColor85= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2881"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText85 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 85</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor85= "#e6b800";   $parkingColor85= '#ffcc006a';
    } else if ($idValue === "2881"  && $statusNameValue === "Dostępne") {
      $premiseStatusText85 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 85</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor85= "darkgreen";   $parkingColor85 = 'rgba(0, 100, 0, 0.424) ';
    } 




    else if ($idValue === "2882"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText86 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 86</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor86= "red";      $parkingColor86= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2882"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText86 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 86</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor86= "#e6b800";   $parkingColor86= '#ffcc006a';
    } else if ($idValue === "2882"  && $statusNameValue === "Dostępne") {
      $premiseStatusText86 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 86</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor86= "darkgreen";   $parkingColor86= 'rgba(0, 100, 0, 0.424) ';
    } 




    else if ($idValue === "2883"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText87 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 87</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor87= "red";      $parkingColor87= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2883"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText87 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 87</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor87= "#e6b800";   $parkingColor87= '#ffcc006a';
    } else if ($idValue === "2883"  && $statusNameValue === "Dostępne") {
      $premiseStatusText87 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 87</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor87= "darkgreen";   $parkingColor87= 'rgba(0, 100, 0, 0.424) ';
    } 




    else if ($idValue === "2884"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText88 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 88</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor88= "red";      $parkingColor88= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2884"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText88 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 88</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor88= "#e6b800";   $parkingColor88= '#ffcc006a';
    } else if ($idValue === "2884"  && $statusNameValue === "Dostępne") {
      $premiseStatusText88 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 88</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor88= "darkgreen";   $parkingColor88 = 'rgba(0, 100, 0, 0.424) ';
    } 





    else if ($idValue === "2885"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText89 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 89</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor89= "red";      $parkingColor89= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2885"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText89 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 89</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor89= "#e6b800";   $parkingColor89= '#ffcc006a';
    } else if ($idValue === "2885"  && $statusNameValue === "Dostępne") {
      $premiseStatusText89 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 89</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor89= "darkgreen";   $parkingColor89= 'rgba(0, 100, 0, 0.424) ';
    } 




    else if ($idValue === "2886"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText90 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 90</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor90= "red";      $parkingColor90= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2886"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText90 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 90</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor90= "#e6b800";   $parkingColor90= '#ffcc006a';
    } else if ($idValue === "2886"  && $statusNameValue === "Dostępne") {
      $premiseStatusText90 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 90</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor90= "darkgreen";   $parkingColor90 = 'rgba(0, 100, 0, 0.424) ';
    } 





    else if ($idValue === "2887"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText91 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 91</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor91= "red";      $parkingColor91= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2887"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText91 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 91</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor91= "#e6b800";   $parkingColor91= '#ffcc006a';
    } else if ($idValue === "2887"  && $statusNameValue === "Dostępne") {
      $premiseStatusText91 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 91</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor91= "darkgreen";   $parkingColor91 = 'rgba(0, 100, 0, 0.424) ';
    } 




    else if ($idValue === "2888"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText92 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 92</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor92= "red";      $parkingColor92= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2888"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText92 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 92</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor92= "#e6b800";   $parkingColor92= '#ffcc006a';
    } else if ($idValue === "2888"  && $statusNameValue === "Dostępne") {
      $premiseStatusText92 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 92</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor92= "darkgreen";   $parkingColor92 = 'rgba(0, 100, 0, 0.424) ';
    } 





    else if ($idValue === "2889"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText93 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 93</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor93= "red";      $parkingColor93= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2889"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText93 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 93</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor93= "#e6b800";   $parkingColor93= '#ffcc006a';
    } else if ($idValue === "2889"  && $statusNameValue === "Dostępne") {
      $premiseStatusText93 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 93</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor93= "darkgreen";   $parkingColor93 = 'rgba(0, 100, 0, 0.424) ';
    } 





    else if ($idValue === "2890"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText94 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 94</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor94= "red";      $parkingColor94= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2890"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText94 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 94</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor94= "#e6b800";   $parkingColor94= '#ffcc006a';
    } else if ($idValue === "2890"  && $statusNameValue === "Dostępne") {
      $premiseStatusText94 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 94</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor94= "darkgreen";   $parkingColor94= 'rgba(0, 100, 0, 0.424) ';
    } 





    else if ($idValue === "2891"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText95 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 95</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor95= "red";      $parkingColor95= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2891"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText95 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 95</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor95= "#e6b800";   $parkingColor95= '#ffcc006a';
    } else if ($idValue === "2891"  && $statusNameValue === "Dostępne") {
      $premiseStatusText95 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 95</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor95= "darkgreen";   $parkingColor95 = 'rgba(0, 100, 0, 0.424) ';
    } 

    else if ($idValue === "2892"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText96 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 96</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor96= "red";      $parkingColor96= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2892"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText96 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 96</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor96= "#e6b800";   $parkingColor96= '#ffcc006a';
    } else if ($idValue === "2892"  && $statusNameValue === "Dostępne") {
      $premiseStatusText96 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 96</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor96= "darkgreen";   $parkingColor96 = 'rgba(0, 100, 0, 0.424) ';
    } 



    else if ($idValue === "2315"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText99 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 99</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor99= "red";      $parkingColor99= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2315"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText99 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 99</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor99= "#e6b800";   $parkingColor99= '#ffcc006a';
    } else if ($idValue === "2315"  && $statusNameValue === "Dostępne") {
      $premiseStatusText99 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 99</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor99= "darkgreen";   $parkingColor99 = 'rgba(0, 100, 0, 0.424) ';
    } 


    else if ($idValue === "2316"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText100 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 100</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor100= "red";      $parkingColor100= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2316"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText100 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 100</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor100= "#e6b800";   $parkingColor100= '#ffcc006a';
    } else if ($idValue === "2316"  && $statusNameValue === "Dostępne") {
      $premiseStatusText100 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 100</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor100= "darkgreen";   $parkingColor100 = 'rgba(0, 100, 0, 0.424) ';
    } 



    else if ($idValue === "2317"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText101 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 101</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor101= "red";      $parkingColor101= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2317"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText101 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 101</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor101= "#e6b800";   $parkingColor101= '#ffcc006a';
    } else if ($idValue === "2317"  && $statusNameValue === "Dostępne") {
      $premiseStatusText101 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 101</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor101= "darkgreen";   $parkingColor101 = 'rgba(0, 100, 0, 0.424) ';
    } 



    else if ($idValue === "2318"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText102 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 102</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor102= "red";      $parkingColor102= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2318"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText102 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 102</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor102= "#e6b800";   $parkingColor102= '#ffcc006a';
    } else if ($idValue === "2318"  && $statusNameValue === "Dostępne") {
      $premiseStatusText102 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 102</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor102= "darkgreen";   $parkingColor102 = 'rgba(0, 100, 0, 0.424) ';
    } 



    else if ($idValue === "2319"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText103 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 103</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor103= "red";      $parkingColor103= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2319"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText103 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 103</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor103= "#e6b800";   $parkingColor103= '#ffcc006a';
    } else if ($idValue === "2319"  && $statusNameValue === "Dostępne") {
      $premiseStatusText103 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 103</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor103= "darkgreen";   $parkingColor103 = 'rgba(0, 100, 0, 0.424) ';
    } 




    else if ($idValue === "2320"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText104 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 104</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor104= "red";      $parkingColor104= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2320"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText104 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 104</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor104= "#e6b800";   $parkingColor104= '#ffcc006a';
    } else if ($idValue === "2320"  && $statusNameValue === "Dostępne") {
      $premiseStatusText104 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 104</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor104= "darkgreen";   $parkingColor104 = 'rgba(0, 100, 0, 0.424) ';
    } 




    else if ($idValue === "2321"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText105 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 105</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor105= "red";      $parkingColor105= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2321"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText105 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 105</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor105= "#e6b800";   $parkingColor105= '#ffcc006a';
    } else if ($idValue === "2321"  && $statusNameValue === "Dostępne") {
      $premiseStatusText105 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 105</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor105= "darkgreen";   $parkingColor105 = 'rgba(0, 100, 0, 0.424) ';
    } 



    else if ($idValue === "2322"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText106 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 106</span></span> <br><span style='color: black;'>Status:</span> Sprzedane";
      $premiseStatusColor106= "red";      $parkingColor106= "rgba(255, 0, 0, 0.408)";
    } else if ($idValue === "2322"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText106 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 106</span></span> <br><span style='color: black;'>Status:</span> Zarezerwowane";
      $premiseStatusColor106= "#e6b800";   $parkingColor106= '#ffcc006a';
    } else if ($idValue === "2322"  && $statusNameValue === "Dostępne") {
      $premiseStatusText106 = "<span style='color: black;'>Numer:<span style='color: black; font-weight: 700;'  > 106</span></span> <br><span style='color: black;'>Status:</span> Dostępne";
      $premiseStatusColor106= "darkgreen";   $parkingColor106 = 'rgba(0, 100, 0, 0.424) ';
    } 





  // Above-ground parking space condition end
}
  
  ?>
  <script>

 
let description = document.querySelector('.description');

let description35 = document.querySelector('.description35');
let description40 = document.querySelector('.description40');
let description41 = document.querySelector('.description41');
let description43 = document.querySelector('.description43');
let description44 = document.querySelector('.description44');
let description49 = document.querySelector('.description49');
let description50 = document.querySelector('.description50');
let description51 = document.querySelector('.description51');
let description52 = document.querySelector('.description52');
let description53 = document.querySelector('.description53');
let description54 = document.querySelector('.description54');
let description55 = document.querySelector('.description55');
let description56 = document.querySelector('.description56');
let description57 = document.querySelector('.description57');
let description58 = document.querySelector('.description58');
let description59 = document.querySelector('.description59');
let description60 = document.querySelector('.description60');
let description62 = document.querySelector('.description62');
let description63 = document.querySelector('.description63');
let description64 = document.querySelector('.description64');
let description65 = document.querySelector('.description65');
let description66 = document.querySelector('.description66');
let description67 = document.querySelector('.description67');
let description68 = document.querySelector('.description68');
let description69 = document.querySelector('.description69');

let description74 = document.querySelector('.description74');
let description76 = document.querySelector('.description76');
let description79 = document.querySelector('.description79');
let description80 = document.querySelector('.description80');
let description81 = document.querySelector('.description81');
let description82 = document.querySelector('.description82');
let description83 = document.querySelector('.description83');
let description84 = document.querySelector('.description84');
let description85 = document.querySelector('.description85');
let description86 = document.querySelector('.description86');
let description87 = document.querySelector('.description87');
let description88 = document.querySelector('.description88');
let description89 = document.querySelector('.description89');
let description90 = document.querySelector('.description90');
let description91 = document.querySelector('.description91');
let description92 = document.querySelector('.description92');
let description93 = document.querySelector('.description93');
let description94 = document.querySelector('.description94');
let description95 = document.querySelector('.description95');
let description96 = document.querySelector('.description96');
let description99 = document.querySelector('.description99');
let description100 = document.querySelector('.description100');
let description101 = document.querySelector('.description101');
let description102 = document.querySelector('.description102');
let description103 = document.querySelector('.description103');
let description104 = document.querySelector('.description104');
let description105 = document.querySelector('.description105');
let description106 = document.querySelector('.description106');


myFunction = () =>{
  document.querySelector("#myDropdown").classList.toggle("show");


}

myFunction35 = () =>{


document.querySelector("#myDropdown35").classList.toggle("show35");

}
myFunction40 = () =>{


document.querySelector("#myDropdown40").classList.toggle("show40");

}
myFunction41 = () =>{


document.querySelector("#myDropdown41").classList.toggle("show41");

}
myFunction43 = () =>{


document.querySelector("#myDropdown43").classList.toggle("show43");

}
myFunction44 = () =>{


document.querySelector("#myDropdown44").classList.toggle("show44");

}
myFunction49 = () =>{


document.querySelector("#myDropdown49").classList.toggle("show49");

}
myFunction50 = () =>{


document.querySelector("#myDropdown50").classList.toggle("show50");

}
myFunction51 = () =>{


document.querySelector("#myDropdown51").classList.toggle("show51");

}
myFunction52 = () =>{


document.querySelector("#myDropdown52").classList.toggle("show52");

}
myFunction53 = () =>{


document.querySelector("#myDropdown53").classList.toggle("show53");

}
myFunction54 = () =>{


document.querySelector("#myDropdown54").classList.toggle("show54");

}
myFunction55 = () =>{


document.querySelector("#myDropdown55").classList.toggle("show55");

}
myFunction56 = () =>{


document.querySelector("#myDropdown56").classList.toggle("show56");

}
myFunction57 = () =>{


document.querySelector("#myDropdown57").classList.toggle("show57");

}
myFunction58 = () =>{


document.querySelector("#myDropdown58").classList.toggle("show58");

}
myFunction59 = () =>{


document.querySelector("#myDropdown59").classList.toggle("show59");

}
myFunction60 = () =>{


document.querySelector("#myDropdown60").classList.toggle("show60");

}
myFunction62 = () =>{


document.querySelector("#myDropdown62").classList.toggle("show62");

}

myFunction63 = () =>{


document.querySelector("#myDropdown63").classList.toggle("show63");

}
myFunction64 = () =>{


document.querySelector("#myDropdown64").classList.toggle("show64");

}

myFunction65 = () =>{


document.querySelector("#myDropdown65").classList.toggle("show65");

}
myFunction66 = () =>{


document.querySelector("#myDropdown66").classList.toggle("show66");

}
myFunction67 = () =>{


document.querySelector("#myDropdown67").classList.toggle("show67");

}
myFunction68 = () =>{


document.querySelector("#myDropdown68").classList.toggle("show68");

}
myFunction69 = () =>{


document.querySelector("#myDropdown69").classList.toggle("show69");

}

myFunction74 = () =>{


document.querySelector("#myDropdown74").classList.toggle("show74");

}
myFunction76 = () =>{


document.querySelector("#myDropdown76").classList.toggle("show76");

}
myFunction79 = () =>{


document.querySelector("#myDropdown79").classList.toggle("show79");

}
myFunction80 = () =>{


document.querySelector("#myDropdown80").classList.toggle("show80");

}
myFunction81 = () =>{


document.querySelector("#myDropdown81").classList.toggle("show81");

}
myFunction82 = () =>{


document.querySelector("#myDropdown82").classList.toggle("show82");

}
myFunction83 = () =>{


document.querySelector("#myDropdown83").classList.toggle("show83");

}
myFunction84 = () =>{


document.querySelector("#myDropdown84").classList.toggle("show84");

}
myFunction85 = () =>{


document.querySelector("#myDropdown85").classList.toggle("show85");

}
myFunction86 = () =>{


document.querySelector("#myDropdown86").classList.toggle("show86");

}
myFunction87 = () =>{


document.querySelector("#myDropdown87").classList.toggle("show87");

}
myFunction88 = () =>{


document.querySelector("#myDropdown88").classList.toggle("show88");

}
myFunction89 = () =>{


document.querySelector("#myDropdown89").classList.toggle("show89");

}
myFunction90 = () =>{


document.querySelector("#myDropdown90").classList.toggle("show90");

}
myFunction91 = () =>{


document.querySelector("#myDropdown91").classList.toggle("show91");

}
myFunction92 = () =>{


document.querySelector("#myDropdown92").classList.toggle("show92");

}
myFunction93 = () =>{


document.querySelector("#myDropdown93").classList.toggle("show93");

}
myFunction94 = () =>{


document.querySelector("#myDropdown94").classList.toggle("show94");

}
myFunction95 = () =>{


document.querySelector("#myDropdown95").classList.toggle("show95");

}
myFunction96 = () =>{


document.querySelector("#myDropdown96").classList.toggle("show96");

}
myFunction99 = () =>{


document.querySelector("#myDropdown99").classList.toggle("show99");

}
myFunction100 = () =>{


document.querySelector("#myDropdown100").classList.toggle("show100");

}
myFunction101 = () =>{


document.querySelector("#myDropdown101").classList.toggle("show101");

}
myFunction102 = () =>{


document.querySelector("#myDropdown102").classList.toggle("show102");

}
myFunction103 = () =>{


document.querySelector("#myDropdown103").classList.toggle("show103");

}
myFunction104 = () =>{


document.querySelector("#myDropdown104").classList.toggle("show104");

}

myFunction106 = () =>{

document.querySelector("#myDropdown106").classList.toggle("show106");


}
myFunction105 = () =>{


document.querySelector("#myDropdown105").classList.toggle("show105");

}

// let parkingII = document.querySelector(".parkingII");



let parking1 = document.querySelector(".parking1");
 let parkingNumber1 = document.querySelector(".parkingNumber1");
 let premiseStatus1= document.getElementsByClassName("premiseStatus1")[0];
       
 
 parking1.setAttribute("style", "fill:<?php echo $parkingColor1; ?>;");




 parking1.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText1; ?>";
    description.style.color="<?php echo $premiseStatusColor1; ?>";

    description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking1.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText1; ?>";
    description.style.color="<?php echo $premiseStatusColor1; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });










  let parking2 = document.querySelector(".parking2");
 let parkingNumber2 = document.querySelector(".parkingNumber2");
 let premiseStatus2= document.getElementsByClassName("premiseStatus2")[0];
       
 
 parking2.setAttribute("style", "fill:<?php echo $parkingColor2; ?>;");




 parking2.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText2; ?>";
    description.style.color="<?php echo $premiseStatusColor2; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking2.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText2; ?>";
    description.style.color="<?php echo $premiseStatusColor2; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });
























  let parking3 = document.querySelector(".parking3");
 let parkingNumber3 = document.querySelector(".parkingNumber3");
 let premiseStatus3= document.getElementsByClassName("premiseStatus3")[0];
       
 
 parking3.setAttribute("style", "fill:<?php echo $parkingColor3; ?>;");




 parking3.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText3; ?>";
    description.style.color="<?php echo $premiseStatusColor3; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking3.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText3; ?>";
    description.style.color="<?php echo $premiseStatusColor3; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });

























  let parking4 = document.querySelector(".parking4");
 let parkingNumber4 = document.querySelector(".parkingNumber4");
 let premiseStatus4= document.getElementsByClassName("premiseStatus4")[0];
       
 
 parking4.setAttribute("style", "fill:<?php echo $parkingColor4; ?>;");




 parking4.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText4; ?>";
    description.style.color="<?php echo $premiseStatusColor4; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking4.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText4; ?>";
    description.style.color="<?php echo $premiseStatusColor4; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });
































   let parking5 = document.querySelector(".parking5");
 let parkingNumber5 = document.querySelector(".parkingNumber5");
 let premiseStatus5= document.getElementsByClassName("premiseStatus5")[0];
       
 
 parking5.setAttribute("style", "fill:<?php echo $parkingColor5; ?>;");




 parking5.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText5; ?>";
    description.style.color="<?php echo $premiseStatusColor5; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking5.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText5; ?>";
    description.style.color="<?php echo $premiseStatusColor5; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });


































   let parking6 = document.querySelector(".parking6");
 let parkingNumber6 = document.querySelector(".parkingNumber6");
 let premiseStatus6= document.getElementsByClassName("premiseStatus6")[0];
       
 
 parking6.setAttribute("style", "fill:<?php echo $parkingColor6; ?>;");




 parking6.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText6; ?>";
    description.style.color="<?php echo $premiseStatusColor6; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking6.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText6; ?>";
    description.style.color="<?php echo $premiseStatusColor6; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });








































   let parking7 = document.querySelector(".parking7");
 let parkingNumber7 = document.querySelector(".parkingNumber7");
 let premiseStatus7= document.getElementsByClassName("premiseStatus7")[0];
       
 
 parking7.setAttribute("style", "fill:<?php echo $parkingColor7; ?>;");




 parking7.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText7; ?>";
    description.style.color="<?php echo $premiseStatusColor7; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking7.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText7; ?>";
    description.style.color="<?php echo $premiseStatusColor7; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });


































 




  let parking8 = document.querySelector(".parking8");
 let parkingNumber8 = document.querySelector(".parkingNumber8");
 let premiseStatus8= document.getElementsByClassName("premiseStatus8")[0];
       
 
 parking8.setAttribute("style", "fill:<?php echo $parkingColor8; ?>;");




 parking8.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText8; ?>";
    description.style.color="<?php echo $premiseStatusColor8; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking8.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText8; ?>";
    description.style.color="<?php echo $premiseStatusColor8; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });










































  let parking9 = document.querySelector(".parking9");
 let parkingNumber9 = document.querySelector(".parkingNumber9");
 let premiseStatus9= document.getElementsByClassName("premiseStatus9")[0];
       
 
 parking9.setAttribute("style", "fill:<?php echo $parkingColor9; ?>;");




 parking9.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText9; ?>";
    description.style.color="<?php echo $premiseStatusColor9; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking9.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText9; ?>";
    description.style.color="<?php echo $premiseStatusColor9; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });














  






  let parking10 = document.querySelector(".parking10");
 let parkingNumber10 = document.querySelector(".parkingNumber10");
 let premiseStatus10= document.getElementsByClassName("premiseStatus10")[0];
       
 
 parking10.setAttribute("style", "fill:<?php echo $parkingColor10; ?>;");




 parking10.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText10; ?>";
    description.style.color="<?php echo $premiseStatusColor10; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking10.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText10; ?>";
    description.style.color="<?php echo $premiseStatusColor10; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });








































  let parking11 = document.querySelector(".parking11");
 let parkingNumber11 = document.querySelector(".parkingNumber11");
 let premiseStatus11= document.getElementsByClassName("premiseStatus11")[0];
       
 
 parking11.setAttribute("style", "fill:<?php echo $parkingColor11; ?>;");




 parking11.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText11; ?>";
    description.style.color="<?php echo $premiseStatusColor11; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking11.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText11; ?>";
    description.style.color="<?php echo $premiseStatusColor11; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });



































  let parking12 = document.querySelector(".parking12");
 let parkingNumber12 = document.querySelector(".parkingNumber12");
 let premiseStatus12= document.getElementsByClassName("premiseStatus12")[0];
       
 
 parking12.setAttribute("style", "fill:<?php echo $parkingColor12; ?>;");




 parking12.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText12; ?>";
    description.style.color="<?php echo $premiseStatusColor12; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking12.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText12; ?>";
    description.style.color="<?php echo $premiseStatusColor12; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });

































  let parking13 = document.querySelector(".parking13");
 let parkingNumber13 = document.querySelector(".parkingNumber13");
 let premiseStatus13= document.getElementsByClassName("premiseStatus13")[0];
       
 
 parking13.setAttribute("style", "fill:<?php echo $parkingColor13; ?>;");




 parking13.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText13; ?>";
    description.style.color="<?php echo $premiseStatusColor13; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking13.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText13; ?>";
    description.style.color="<?php echo $premiseStatusColor13; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });




































  let parking14 = document.querySelector(".parking14");
 let parkingNumber14 = document.querySelector(".parkingNumber14");
 let premiseStatus14= document.getElementsByClassName("premiseStatus14")[0];
       
 
 parking14.setAttribute("style", "fill:<?php echo $parkingColor14; ?>;");




 parking14.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText14; ?>";
    description.style.color="<?php echo $premiseStatusColor14; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking14.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText14; ?>";
    description.style.color="<?php echo $premiseStatusColor14; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });











































  let parking15 = document.querySelector(".parking15");
 let parkingNumber15 = document.querySelector(".parkingNumber15");
 let premiseStatus15= document.getElementsByClassName("premiseStatus15")[0];
       
 
 parking15.setAttribute("style", "fill:<?php echo $parkingColor15; ?>;");




 parking15.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText15; ?>";
    description.style.color="<?php echo $premiseStatusColor15; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking15.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText15; ?>";
    description.style.color="<?php echo $premiseStatusColor15; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });












































  let parking16 = document.querySelector(".parking16");
 let parkingNumber16 = document.querySelector(".parkingNumber16");
 let premiseStatus16= document.getElementsByClassName("premiseStatus16")[0];
       
 
 parking16.setAttribute("style", "fill:<?php echo $parkingColor16; ?>;");




 parking16.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText16; ?>";
    description.style.color="<?php echo $premiseStatusColor16; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking16.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText16; ?>";
    description.style.color="<?php echo $premiseStatusColor16; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });






























  let parking17 = document.querySelector(".parking17");
 let parkingNumber17 = document.querySelector(".parkingNumber17");
 let premiseStatus17= document.getElementsByClassName("premiseStatus17")[0];
       
 
 parking17.setAttribute("style", "fill:<?php echo $parkingColor17; ?>;");




 parking17.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText17; ?>";
    description.style.color="<?php echo $premiseStatusColor17; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking17.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText17; ?>";
    description.style.color="<?php echo $premiseStatusColor17; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });

































  let parking18 = document.querySelector(".parking18");
 let parkingNumber18 = document.querySelector(".parkingNumber18");
 let premiseStatus18= document.getElementsByClassName("premiseStatus18")[0];
       
 
 parking18.setAttribute("style", "fill:<?php echo $parkingColor18; ?>;");




 parking18.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText18; ?>";
    description.style.color="<?php echo $premiseStatusColor18; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking18.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText18; ?>";
    description.style.color="<?php echo $premiseStatusColor18; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });









































  let parking19 = document.querySelector(".parking19");
 let parkingNumber19 = document.querySelector(".parkingNumber19");
 let premiseStatus19= document.getElementsByClassName("premiseStatus19")[0];
       
 
 parking19.setAttribute("style", "fill:<?php echo $parkingColor19; ?>;");




 parking19.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText19; ?>";
    description.style.color="<?php echo $premiseStatusColor19; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking19.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText19; ?>";
    description.style.color="<?php echo $premiseStatusColor19; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });





































  let parking20 = document.querySelector(".parking20");
 let parkingNumber20 = document.querySelector(".parkingNumber20");
 let premiseStatus20= document.getElementsByClassName("premiseStatus20")[0];
       
 
 parking20.setAttribute("style", "fill:<?php echo $parkingColor20; ?>;");




 parking20.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText20; ?>";
    description.style.color="<?php echo $premiseStatusColor20; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking20.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText20; ?>";
    description.style.color="<?php echo $premiseStatusColor20; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });




































  let parking21 = document.querySelector(".parking21");
 let parkingNumber21 = document.querySelector(".parkingNumber21");
 let premiseStatus21= document.getElementsByClassName("premiseStatus21")[0];
       
 
 parking21.setAttribute("style", "fill:<?php echo $parkingColor21; ?>;");




 parking21.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText21; ?>";
    description.style.color="<?php echo $premiseStatusColor21; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking21.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText21; ?>";
    description.style.color="<?php echo $premiseStatusColor21; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });












































  let parking22 = document.querySelector(".parking22");
 let parkingNumber22 = document.querySelector(".parkingNumber22");
 let premiseStatus22= document.getElementsByClassName("premiseStatus22")[0];
       
 
 parking22.setAttribute("style", "fill:<?php echo $parkingColor22; ?>;");




 parking22.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText22; ?>";
    description.style.color="<?php echo $premiseStatusColor22; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking22.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText22; ?>";
    description.style.color="<?php echo $premiseStatusColor22; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });




































  let parking23 = document.querySelector(".parking23");
 let parkingNumber23 = document.querySelector(".parkingNumber23");
 let premiseStatus23= document.getElementsByClassName("premiseStatus23")[0];
       
 
 parking23.setAttribute("style", "fill:<?php echo $parkingColor23; ?>;");




 parking23.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText23; ?>";
    description.style.color="<?php echo $premiseStatusColor23; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking23.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText23; ?>";
    description.style.color="<?php echo $premiseStatusColor23; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });


































  let parking24 = document.querySelector(".parking24");
 let parkingNumber24 = document.querySelector(".parkingNumber24");
 let premiseStatus24= document.getElementsByClassName("premiseStatus24")[0];
       
 
 parking24.setAttribute("style", "fill:<?php echo $parkingColor24; ?>;");




 parking24.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText24; ?>";
    description.style.color="<?php echo $premiseStatusColor24; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking24.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText24; ?>";
    description.style.color="<?php echo $premiseStatusColor24; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });
































  let parking25 = document.querySelector(".parking25");
 let parkingNumber25 = document.querySelector(".parkingNumber25");
 let premiseStatus25= document.getElementsByClassName("premiseStatus25")[0];
       
 
 parking25.setAttribute("style", "fill:<?php echo $parkingColor25; ?>;");




 parking25.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText25; ?>";
    description.style.color="<?php echo $premiseStatusColor25; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking25.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText25; ?>";
    description.style.color="<?php echo $premiseStatusColor25; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });






































  let parking26 = document.querySelector(".parking26");
 let parkingNumber26 = document.querySelector(".parkingNumber26");
 let premiseStatus26= document.getElementsByClassName("premiseStatus26")[0];
       
 
 parking26.setAttribute("style", "fill:<?php echo $parkingColor26; ?>;");




 parking26.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText26; ?>";
    description.style.color="<?php echo $premiseStatusColor26; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking26.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText26; ?>";
    description.style.color="<?php echo $premiseStatusColor26; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });








































  let parking27 = document.querySelector(".parking27");
 let parkingNumber27 = document.querySelector(".parkingNumber27");
 let premiseStatus27= document.getElementsByClassName("premiseStatus27")[0];
       
 
 parking27.setAttribute("style", "fill:<?php echo $parkingColor27; ?>;");




 parking27.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText27; ?>";
    description.style.color="<?php echo $premiseStatusColor27; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking27.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText27; ?>";
    description.style.color="<?php echo $premiseStatusColor27; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });

























  let parking28 = document.querySelector(".parking28");
 let parkingNumber28 = document.querySelector(".parkingNumber28");
 let premiseStatus28= document.getElementsByClassName("premiseStatus28")[0];
       
 
 parking28.setAttribute("style", "fill:<?php echo $parkingColor28; ?>;");




 parking28.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText28; ?>";
    description.style.color="<?php echo $premiseStatusColor28; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking28.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText28; ?>";
    description.style.color="<?php echo $premiseStatusColor28; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });


























  let parking29 = document.querySelector(".parking29");
 let parkingNumber29 = document.querySelector(".parkingNumber29");
 let premiseStatus29= document.getElementsByClassName("premiseStatus29")[0];
       
 
 parking29.setAttribute("style", "fill:<?php echo $parkingColor29; ?>;");




 parking29.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText29; ?>";
    description.style.color="<?php echo $premiseStatusColor29; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking29.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText29; ?>";
    description.style.color="<?php echo $premiseStatusColor29; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });




































  let parking30 = document.querySelector(".parking30");
 let parkingNumber30 = document.querySelector(".parkingNumber30");
 let premiseStatus30= document.getElementsByClassName("premiseStatus30")[0];
       
 
 parking30.setAttribute("style", "fill:<?php echo $parkingColor30; ?>;");




 parking30.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText30; ?>";
    description.style.color="<?php echo $premiseStatusColor30; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking30.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText30; ?>";
    description.style.color="<?php echo $premiseStatusColor30; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });












  let parking31 = document.querySelector(".parking31");
 let parkingNumber31 = document.querySelector(".parkingNumber31");
 let premiseStatus31= document.getElementsByClassName("premiseStatus31")[0];
       
 
 parking31.setAttribute("style", "fill:<?php echo $parkingColor31; ?>;");




 parking31.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText31; ?>";
    description.style.color="<?php echo $premiseStatusColor31; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking31.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText31; ?>";
    description.style.color="<?php echo $premiseStatusColor31; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });






























  let parking32 = document.querySelector(".parking32");
 let parkingNumber32 = document.querySelector(".parkingNumber32");
 let premiseStatus32= document.getElementsByClassName("premiseStatus32")[0];
       
 
 parking32.setAttribute("style", "fill:<?php echo $parkingColor32; ?>;");




 parking32.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText32; ?>";
    description.style.color="<?php echo $premiseStatusColor32; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking32.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText32; ?>";
    description.style.color="<?php echo $premiseStatusColor32; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });








































  let parking33 = document.querySelector(".parking33");
 let parkingNumber33 = document.querySelector(".parkingNumber33");
 let premiseStatus33= document.getElementsByClassName("premiseStatus33")[0];
       
 
 parking33.setAttribute("style", "fill:<?php echo $parkingColor33; ?>;");




 parking33.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText33; ?>";
    description.style.color="<?php echo $premiseStatusColor33; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking33.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText33; ?>";
    description.style.color="<?php echo $premiseStatusColor33; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });





















  
  let parking34 = document.querySelector(".parking34");
 let parkingNumber34 = document.querySelector(".parkingNumber34");
 let premiseStatus34= document.getElementsByClassName("premiseStatus34")[0];
       
 
 parking34.setAttribute("style", "fill:<?php echo $parkingColor34; ?>;");




 parking34.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText34; ?>";
    description.style.color="<?php echo $premiseStatusColor34; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking34.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText34; ?>";
    description.style.color="<?php echo $premiseStatusColor34; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });
































  let parking35 = document.querySelector(".parking35");
 let parkingNumber35 = document.querySelector(".parkingNumber35");
 let premiseStatus35= document.getElementsByClassName("premiseStatus35")[0];
       
 
 parking35.setAttribute("style", "fill:<?php echo $parkingColor35; ?>;");




 parking35.addEventListener('mouseover', (e)=>
  {
  
    description35.innerHTML = "<?php echo $premiseStatusText35; ?>";
    description35.style.color="<?php echo $premiseStatusColor35; ?>";

    description35.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description35.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description35.style.top = (e.pageY - 55) + 'px';
}
    description35.style.display ="block";
    // parkingII.setAttribute("style", "fill: rgba(255, 255, 255, 0.69); animation: pulsate 1s infinite;");
    setTimeout(() =>{
      description35.style.display ="none";
    
},1000)
    
  })


parking35.addEventListener('click', function(e) {
  
  description35.innerHTML = "<?php echo $premiseStatusText35; ?>";
    description35.style.color="<?php echo $premiseStatusColor35; ?>";
    description35.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description35.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description35.style.top = (e.pageY - 55) + 'px';
}
    description35.style.display ="none";
    // parkingII.setAttribute("style", "fill: rgba(255, 255, 255, 0.69); animation: pulsate 1s infinite;");

       myFunction35();
  });





































  let parking36 = document.querySelector(".parking36");
 let parkingNumber36 = document.querySelector(".parkingNumber36");
 let premiseStatus36= document.getElementsByClassName("premiseStatus36")[0];
       
 
 parking36.setAttribute("style", "fill:<?php echo $parkingColor36; ?>;");




 parking36.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText36; ?>";
    description.style.color="<?php echo $premiseStatusColor36; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking36.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText36; ?>";
    description.style.color="<?php echo $premiseStatusColor36; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });






































  let parking37 = document.querySelector(".parking37");
 let parkingNumber37 = document.querySelector(".parkingNumber37");
 let premiseStatus37= document.getElementsByClassName("premiseStatus37")[0];
       
 
 parking37.setAttribute("style", "fill:<?php echo $parkingColor37; ?>;");




 parking37.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText37; ?>";
    description.style.color="<?php echo $premiseStatusColor37; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking37.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText37; ?>";
    description.style.color="<?php echo $premiseStatusColor37; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });
























  let parking38 = document.querySelector(".parking38");
 let parkingNumber38 = document.querySelector(".parkingNumber38");
 let premiseStatus38= document.getElementsByClassName("premiseStatus38")[0];
       
 
 parking38.setAttribute("style", "fill:<?php echo $parkingColor38; ?>;");




 parking38.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText38; ?>";
    description.style.color="<?php echo $premiseStatusColor38; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking38.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText38; ?>";
    description.style.color="<?php echo $premiseStatusColor38; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });
















































  let parking39 = document.querySelector(".parking39");
 let parkingNumber39 = document.querySelector(".parkingNumber39");
 let premiseStatus39= document.getElementsByClassName("premiseStatus39")[0];
       
 
 parking39.setAttribute("style", "fill:<?php echo $parkingColor39; ?>;");




 parking39.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText39; ?>";
    description.style.color="<?php echo $premiseStatusColor39; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking39.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText39; ?>";
    description.style.color="<?php echo $premiseStatusColor39; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });




















































  let parking40 = document.querySelector(".parking40");
 let parkingNumber40 = document.querySelector(".parkingNumber40");
 let premiseStatus40= document.getElementsByClassName("premiseStatus40")[0];
       
 
 parking40.setAttribute("style", "fill:<?php echo $parkingColor40; ?>;");




 parking40.addEventListener('mouseover', (e)=>
  {
  
    description40.innerHTML = "<?php echo $premiseStatusText40; ?>";
    description40.style.color="<?php echo $premiseStatusColor40; ?>";

    description40.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description40.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description40.style.top = (e.pageY - 55) + 'px';
}
    description40.style.display ="block";
   
    setTimeout(() =>{
      description40.style.display ="none";
    
},1000)
    
  })


parking40.addEventListener('click', function(e) {
  
  description40.innerHTML = "<?php echo $premiseStatusText40; ?>";
    description40.style.color="<?php echo $premiseStatusColor40; ?>";
    description40.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description40.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description40.style.top = (e.pageY - 55) + 'px';
}
    description40.style.display ="none";
 

       myFunction40();
  });




















































  let parking41 = document.querySelector(".parking41");
 let parkingNumber41 = document.querySelector(".parkingNumber41");
 let premiseStatus41= document.getElementsByClassName("premiseStatus41")[0];
       
 
 parking41.setAttribute("style", "fill:<?php echo $parkingColor41; ?>;");




 parking41.addEventListener('mouseover', (e)=>
  {
  
    description41.innerHTML = "<?php echo $premiseStatusText41; ?>";
    description41.style.color="<?php echo $premiseStatusColor41; ?>";

  
    description41.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description41.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description41.style.top = (e.pageY - 55) + 'px';
}
    description41.style.display ="block";
   
    setTimeout(() =>{
      description41.style.display ="none";
    
},1000)
    
  })


parking41.addEventListener('click', function(e) {
  
  description41.innerHTML = "<?php echo $premiseStatusText41; ?>";
    description41.style.color="<?php echo $premiseStatusColor41; ?>";

    description41.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description41.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description41.style.top = (e.pageY - 55) + 'px';
}
    description41.style.display ="none";
 

       myFunction41();
  });




































  let parking42 = document.querySelector(".parking42");
 let parkingNumber42 = document.querySelector(".parkingNumber42");
 let premiseStatus42= document.getElementsByClassName("premiseStatus42")[0];
       
 
 parking42.setAttribute("style", "fill:<?php echo $parkingColor42; ?>;");




 parking42.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText42; ?>";
    description.style.color="<?php echo $premiseStatusColor42; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking42.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText42; ?>";
    description.style.color="<?php echo $premiseStatusColor42; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });













































  




  let parking43 = document.querySelector(".parking43");
 let parkingNumber43 = document.querySelector(".parkingNumber43");
 let premiseStatus43= document.getElementsByClassName("premiseStatus43")[0];
       
 
 parking43.setAttribute("style", "fill:<?php echo $parkingColor43; ?>;");




 parking43.addEventListener('mouseover', (e)=>
  {
  
    description43.innerHTML = "<?php echo $premiseStatusText43; ?>";
    description43.style.color="<?php echo $premiseStatusColor43; ?>";

    description43.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description43.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description43.style.top = (e.pageY - 55) + 'px';
}
    description43.style.display ="block";
   
    setTimeout(() =>{
      description43.style.display ="none";
    
},1000)
    
  })


parking43.addEventListener('click', function(e) {
  
  description43.innerHTML = "<?php echo $premiseStatusText43; ?>";
    description43.style.color="<?php echo $premiseStatusColor43; ?>";
    description43.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description43.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description43.style.top = (e.pageY - 55) + 'px';
}
    description43.style.display ="none";
 

       myFunction43();
  });




























  





























































  let parking44 = document.querySelector(".parking44");
 let parkingNumber44 = document.querySelector(".parkingNumber44");
 let premiseStatus44= document.getElementsByClassName("premiseStatus44")[0];
       
 
 parking44.setAttribute("style", "fill:<?php echo $parkingColor44; ?>;");




 parking44.addEventListener('mouseover', (e)=>
  {
  
    description44.innerHTML = "<?php echo $premiseStatusText44; ?>";
    description44.style.color="<?php echo $premiseStatusColor44; ?>";

    description44.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description44.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description44.style.top = (e.pageY - 55) + 'px';
}
    description44.style.display ="block";
   
    setTimeout(() =>{
      description44.style.display ="none";
    
},1000)
    
  })


parking44.addEventListener('click', function(e) {
  
  description44.innerHTML = "<?php echo $premiseStatusText44; ?>";
    description44.style.color="<?php echo $premiseStatusColor44; ?>";
    description44.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description44.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description44.style.top = (e.pageY - 55) + 'px';
}
    description44.style.display ="none";
 

       myFunction44();
  });



















  let parking45 = document.querySelector(".parking45");
 let parkingNumber45 = document.querySelector(".parkingNumber45");
 let premiseStatus45= document.getElementsByClassName("premiseStatus45")[0];
       
 
 parking45.setAttribute("style", "fill:<?php echo $parkingColor45; ?>;");




 parking45.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText45; ?>";
    description.style.color="<?php echo $premiseStatusColor45; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking45.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText45; ?>";
    description.style.color="<?php echo $premiseStatusColor45; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });


























  let parking46 = document.querySelector(".parking46");
 let parkingNumber46 = document.querySelector(".parkingNumber46");
 let premiseStatus46= document.getElementsByClassName("premiseStatus46")[0];
       
 
 parking46.setAttribute("style", "fill:<?php echo $parkingColor46; ?>;");




 parking46.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText46; ?>";
    description.style.color="<?php echo $premiseStatusColor46; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking46.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText46; ?>";
    description.style.color="<?php echo $premiseStatusColor46; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });































  let parking47 = document.querySelector(".parking47");
 let parkingNumber47 = document.querySelector(".parkingNumber47");
 let premiseStatus47= document.getElementsByClassName("premiseStatus47")[0];
       
 
 parking47.setAttribute("style", "fill:<?php echo $parkingColor47; ?>;");




 parking47.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText47; ?>";
    description.style.color="<?php echo $premiseStatusColor47; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking47.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText47; ?>";
    description.style.color="<?php echo $premiseStatusColor47; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });





























  let parking48 = document.querySelector(".parking48");
 let parkingNumber48 = document.querySelector(".parkingNumber48");
 let premiseStatus48= document.getElementsByClassName("premiseStatus48")[0];
       
 
 parking48.setAttribute("style", "fill:<?php echo $parkingColor48; ?>;");




 parking48.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText48; ?>";
    description.style.color="<?php echo $premiseStatusColor48; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking48.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText48; ?>";
    description.style.color="<?php echo $premiseStatusColor48; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });





































  let parking49 = document.querySelector(".parking49");
 let parkingNumber49 = document.querySelector(".parkingNumber49");
 let premiseStatus49= document.getElementsByClassName("premiseStatus49")[0];
       
 
 parking49.setAttribute("style", "fill:<?php echo $parkingColor49; ?>;");




 parking49.addEventListener('mouseover', (e)=>
  {
  
    description49.innerHTML = "<?php echo $premiseStatusText49; ?>";
    description49.style.color="<?php echo $premiseStatusColor49; ?>";

    description49.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description49.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description49.style.top = (e.pageY - 55) + 'px';
}
    description49.style.display ="block";
   
    setTimeout(() =>{
      description49.style.display ="none";
    
},1000)
    
  })


parking49.addEventListener('click', function(e) {
  
  description49.innerHTML = "<?php echo $premiseStatusText49; ?>";
    description49.style.color="<?php echo $premiseStatusColor49; ?>";
    description49.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description49.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description49.style.top = (e.pageY - 55) + 'px';
}
    description49.style.display ="none";
 

       myFunction49();
  });







































  let parking50 = document.querySelector(".parking50");
 let parkingNumber50 = document.querySelector(".parkingNumber50");
 let premiseStatus50= document.getElementsByClassName("premiseStatus50")[0];
       
 
 parking50.setAttribute("style", "fill:<?php echo $parkingColor50; ?>;");




 parking50.addEventListener('mouseover', (e)=>
  {
  
    description50.innerHTML = "<?php echo $premiseStatusText50; ?>";
    description50.style.color="<?php echo $premiseStatusColor50; ?>";

    description50.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description50.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description50.style.top = (e.pageY - 55) + 'px';
}
    description50.style.display ="block";
   
    setTimeout(() =>{
      description50.style.display ="none";
    
},1000)
    
  })


parking50.addEventListener('click', function(e) {
  
  description50.innerHTML = "<?php echo $premiseStatusText50; ?>";
    description50.style.color="<?php echo $premiseStatusColor50; ?>";
    description50.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description50.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description50.style.top = (e.pageY - 55) + 'px';
}
    description50.style.display ="none";
 

       myFunction50();
  });
















































  let parking51 = document.querySelector(".parking51");
 let parkingNumber51 = document.querySelector(".parkingNumber51");
 let premiseStatus51= document.getElementsByClassName("premiseStatus51")[0];
       
 
 parking51.setAttribute("style", "fill:<?php echo $parkingColor51; ?>;");




 parking51.addEventListener('mouseover', (e)=>
  {
  
    description51.innerHTML = "<?php echo $premiseStatusText51; ?>";
    description51.style.color="<?php echo $premiseStatusColor51; ?>";

    description51.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description51.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description51.style.top = (e.pageY - 55) + 'px';
}
    description51.style.display ="block";
   
    setTimeout(() =>{
      description51.style.display ="none";
    
},1000)
    
  })


parking51.addEventListener('click', function(e) {
  
  description51.innerHTML = "<?php echo $premiseStatusText51; ?>";
    description51.style.color="<?php echo $premiseStatusColor51; ?>";
    description51.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description51.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description51.style.top = (e.pageY - 55) + 'px';
}
    description51.style.display ="none";
 

       myFunction51();
  });







































  let parking52 = document.querySelector(".parking52");
 let parkingNumber52 = document.querySelector(".parkingNumber52");
 let premiseStatus52= document.getElementsByClassName("premiseStatus52")[0];
       
 
 parking52.setAttribute("style", "fill:<?php echo $parkingColor52; ?>;");




 parking52.addEventListener('mouseover', (e)=>
  {
  
    description52.innerHTML = "<?php echo $premiseStatusText52; ?>";
    description52.style.color="<?php echo $premiseStatusColor52; ?>";

    description52.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description52.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description52.style.top = (e.pageY - 55) + 'px';
}
    description52.style.display ="block";
   
    setTimeout(() =>{
      description52.style.display ="none";
    
},1000)
    
  })


parking52.addEventListener('click', function(e) {
  
  description52.innerHTML = "<?php echo $premiseStatusText52; ?>";
    description52.style.color="<?php echo $premiseStatusColor52; ?>";
    description52.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description52.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description52.style.top = (e.pageY - 55) + 'px';
}
    description52.style.display ="none";
 

       myFunction52();
  });





































  let parking53 = document.querySelector(".parking53");
 let parkingNumber53 = document.querySelector(".parkingNumber53");
 let premiseStatus53= document.getElementsByClassName("premiseStatus53")[0];
       
 
 parking53.setAttribute("style", "fill:<?php echo $parkingColor53; ?>;");




 parking53.addEventListener('mouseover', (e)=>
  {
  
    description53.innerHTML = "<?php echo $premiseStatusText53; ?>";
    description53.style.color="<?php echo $premiseStatusColor53; ?>";

    description53.style.left = e.pageX + 'px';
    description53.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description53.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description35.style.top = (e.pageY - 55) + 'px';
}
    description53.style.display ="block";
   
    setTimeout(() =>{
      description53.style.display ="none";
    
},1000)
    
  })


parking53.addEventListener('click', function(e) {
  
  description53.innerHTML = "<?php echo $premiseStatusText53; ?>";
    description53.style.color="<?php echo $premiseStatusColor53; ?>";
    description53.style.left = e.pageX + 'px';
    description53.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description53.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description53.style.top = (e.pageY - 55) + 'px';
}
    description53.style.display ="none";
 

       myFunction53();
  });





































  let parking54 = document.querySelector(".parking54");
 let parkingNumber54 = document.querySelector(".parkingNumber54");
 let premiseStatus54= document.getElementsByClassName("premiseStatus54")[0];
       
 
 parking54.setAttribute("style", "fill:<?php echo $parkingColor54; ?>;");




 parking54.addEventListener('mouseover', (e)=>
  {
  
    description54.innerHTML = "<?php echo $premiseStatusText54; ?>";
    description54.style.color="<?php echo $premiseStatusColor54; ?>";

    description54.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description54.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description54.style.top = (e.pageY - 55) + 'px';
}
    description54.style.display ="block";
   
    setTimeout(() =>{
      description54.style.display ="none";
    
},1000)
    
  })


parking54.addEventListener('click', function(e) {
  
  description54.innerHTML = "<?php echo $premiseStatusText54; ?>";
    description54.style.color="<?php echo $premiseStatusColor54; ?>";
    description54.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description54.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description54.style.top = (e.pageY - 55) + 'px';
};
    description54.style.display ="none";
 

       myFunction54();
  });

















































  let parking55 = document.querySelector(".parking55");
 let parkingNumber55 = document.querySelector(".parkingNumber55");
 let premiseStatus55= document.getElementsByClassName("premiseStatus55")[0];
       
 
 parking55.setAttribute("style", "fill:<?php echo $parkingColor55; ?>;");




 parking55.addEventListener('mouseover', (e)=>
  {
  
    description55.innerHTML = "<?php echo $premiseStatusText55; ?>";
    description55.style.color="<?php echo $premiseStatusColor55; ?>";

    description55.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description55.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description55.style.top = (e.pageY - 55) + 'px';
}
    description55.style.display ="block";
   
    setTimeout(() =>{
      description55.style.display ="none";
    
},1000)
    
  })


parking55.addEventListener('click', function(e) {
  
  description55.innerHTML = "<?php echo $premiseStatusText55; ?>";
    description55.style.color="<?php echo $premiseStatusColor55; ?>";
    description55.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description55.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description55.style.top = (e.pageY - 55) + 'px';
}
    description55.style.display ="none";
 

       myFunction55();
  });















































  let parking56 = document.querySelector(".parking56");
 let parkingNumber56 = document.querySelector(".parkingNumber56");
 let premiseStatus56= document.getElementsByClassName("premiseStatus56")[0];
       
 
 parking56.setAttribute("style", "fill:<?php echo $parkingColor56; ?>;");




 parking56.addEventListener('mouseover', (e)=>
  {
  
    description56.innerHTML = "<?php echo $premiseStatusText56; ?>";
    description56.style.color="<?php echo $premiseStatusColor56; ?>";

    description56.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description56.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description56.style.top = (e.pageY - 55) + 'px';
}
    description56.style.display ="block";
   
    setTimeout(() =>{
      description56.style.display ="none";
    
},1000)
    
  })


parking56.addEventListener('click', function(e) {
  
  description56.innerHTML = "<?php echo $premiseStatusText56; ?>";
    description56.style.color="<?php echo $premiseStatusColor56; ?>";
    description56.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description56.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description56.style.top = (e.pageY - 55) + 'px';
}
    description56.style.display ="none";
 

       myFunction56();
  });






























































  let parking57 = document.querySelector(".parking57");
 let parkingNumber57 = document.querySelector(".parkingNumber57");
 let premiseStatus57= document.getElementsByClassName("premiseStatus57")[0];
       
 
 parking57.setAttribute("style", "fill:<?php echo $parkingColor57; ?>;");




 parking57.addEventListener('mouseover', (e)=>
  {
  
    description57.innerHTML = "<?php echo $premiseStatusText57; ?>";
    description57.style.color="<?php echo $premiseStatusColor57; ?>";

    description57.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description57.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description57.style.top = (e.pageY - 55) + 'px';
}
    description57.style.display ="block";
   
    setTimeout(() =>{
      description57.style.display ="none";
    
},1000)
    
  })


parking57.addEventListener('click', function(e) {
  
  description57.innerHTML = "<?php echo $premiseStatusText57; ?>";
    description57.style.color="<?php echo $premiseStatusColor57; ?>";
    description57.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description57.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description57.style.top = (e.pageY - 55) + 'px';
}
    description57.style.display ="none";
 

       myFunction57();
  });















  let parking58 = document.querySelector(".parking58");
 let parkingNumber58 = document.querySelector(".parkingNumber58");
 let premiseStatus58= document.getElementsByClassName("premiseStatus58")[0];
       
 
 parking58.setAttribute("style", "fill:<?php echo $parkingColor58; ?>;");




 parking58.addEventListener('mouseover', (e)=>
  {
  
    description58.innerHTML = "<?php echo $premiseStatusText58; ?>";
    description58.style.color="<?php echo $premiseStatusColor58; ?>";

    description58.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description58.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description58.style.top = (e.pageY - 55) + 'px';
}
    description58.style.display ="block";
   
    setTimeout(() =>{
      description58.style.display ="none";
    
},1000)
    
  })


parking58.addEventListener('click', function(e) {
  
  description58.innerHTML = "<?php echo $premiseStatusText58; ?>";
    description58.style.color="<?php echo $premiseStatusColor58; ?>";
    description58.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description58.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description58.style.top = (e.pageY - 55) + 'px';
}
    description58.style.display ="none";
 

       myFunction58();
  });















  let parking59 = document.querySelector(".parking59");
 let parkingNumber59 = document.querySelector(".parkingNumber59");
 let premiseStatus59= document.getElementsByClassName("premiseStatus59")[0];
       
 
 parking59.setAttribute("style", "fill:<?php echo $parkingColor59; ?>;");




 parking59.addEventListener('mouseover', (e)=>
  {
  
    description59.innerHTML = "<?php echo $premiseStatusText59; ?>";
    description59.style.color="<?php echo $premiseStatusColor59; ?>";

    description59.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description59.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description59.style.top = (e.pageY - 55) + 'px';
}
    description59.style.display ="block";
   
    setTimeout(() =>{
      description59.style.display ="none";
    
},1000)
    
  })


parking59.addEventListener('click', function(e) {
  
  description59.innerHTML = "<?php echo $premiseStatusText59; ?>";
    description59.style.color="<?php echo $premiseStatusColor59; ?>";
    description59.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description59.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description59.style.top = (e.pageY - 55) + 'px';
}
    description59.style.display ="none";
 

       myFunction59();
  });
























  let parking60 = document.querySelector(".parking60");
 let parkingNumber60 = document.querySelector(".parkingNumber60");
 let premiseStatus60= document.getElementsByClassName("premiseStatus60")[0];
       
 
 parking60.setAttribute("style", "fill:<?php echo $parkingColor60; ?>;");




 parking60.addEventListener('mouseover', (e)=>
  {
  
    description60.innerHTML = "<?php echo $premiseStatusText60; ?>";
    description60.style.color="<?php echo $premiseStatusColor60; ?>";

    description60.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description60.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description60.style.top = (e.pageY - 55) + 'px';
}
    description60.style.display ="block";
   
    setTimeout(() =>{
      description60.style.display ="none";
    
},1000)
    
  })


parking60.addEventListener('click', function(e) {
  
  description60.innerHTML = "<?php echo $premiseStatusText60; ?>";
    description60.style.color="<?php echo $premiseStatusColor60; ?>";
    description60.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description60.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description60.style.top = (e.pageY - 55) + 'px';
}
    description60.style.display ="none";
 

       myFunction60();
  });































  let parking61 = document.querySelector(".parking61");
 let parkingNumber61 = document.querySelector(".parkingNumber61");
 let premiseStatus61= document.getElementsByClassName("premiseStatus61")[0];
       
 
 parking61.setAttribute("style", "fill:<?php echo $parkingColor61; ?>;");




 parking61.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText61; ?>";
    description.style.color="<?php echo $premiseStatusColor61; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking61.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText61; ?>";
    description.style.color="<?php echo $premiseStatusColor61; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

       myFunction61();
  });



























  let parking62 = document.querySelector(".parking62");
 let parkingNumber62 = document.querySelector(".parkingNumber62");
 let premiseStatus62= document.getElementsByClassName("premiseStatus62")[0];
       
 
 parking62.setAttribute("style", "fill:<?php echo $parkingColor62; ?>;");




 parking62.addEventListener('mouseover', (e)=>
  {
  
    description62.innerHTML = "<?php echo $premiseStatusText62; ?>";
    description62.style.color="<?php echo $premiseStatusColor62; ?>";

    description62.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description62.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description62.style.top = (e.pageY - 55) + 'px';
}
    description62.style.display ="block";
   
    setTimeout(() =>{
      description62.style.display ="none";
    
},1000)
    
  })


parking62.addEventListener('click', function(e) {
  
  description62.innerHTML = "<?php echo $premiseStatusText62; ?>";
    description62.style.color="<?php echo $premiseStatusColor62; ?>";
    description62.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description62.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description62.style.top = (e.pageY - 55) + 'px';
}
    description62.style.display ="none";
 

       myFunction62();
  });




















































  
  let parking63 = document.querySelector(".parking63");
 let parkingNumber63 = document.querySelector(".parkingNumber63");
 let premiseStatus63= document.getElementsByClassName("premiseStatus63")[0];
       
 
 parking63.setAttribute("style", "fill:<?php echo $parkingColor63; ?>;");




 parking63.addEventListener('mouseover', (e)=>
  {
  
    description63.innerHTML = "<?php echo $premiseStatusText63; ?>";
    description63.style.color="<?php echo $premiseStatusColor63; ?>";

    description63.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description63.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description63.style.top = (e.pageY - 55) + 'px';
}
    description63.style.display ="block";
   
    setTimeout(() =>{
      description63.style.display ="none";
    
},1000)
    
  })


parking63.addEventListener('click', function(e) {
  
  description63.innerHTML = "<?php echo $premiseStatusText63; ?>";
    description63.style.color="<?php echo $premiseStatusColor63; ?>";
    description63.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description63.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description63.style.top = (e.pageY - 55) + 'px';
}
    description63.style.display ="none";
 

       myFunction63();
  });





































  
  let parking64 = document.querySelector(".parking64");
 let parkingNumber64 = document.querySelector(".parkingNumber64");
 let premiseStatus64= document.getElementsByClassName("premiseStatus64")[0];
       
 
 parking64.setAttribute("style", "fill:<?php echo $parkingColor64; ?>;");




 parking64.addEventListener('mouseover', (e)=>
  {
  
    description64.innerHTML = "<?php echo $premiseStatusText64; ?>";
    description64.style.color="<?php echo $premiseStatusColor64; ?>";

    description64.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description64.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description64.style.top = (e.pageY - 55) + 'px';
}
    description64.style.display ="block";
   
    setTimeout(() =>{
      description64.style.display ="none";
    
},1000)
    
  })


parking64.addEventListener('click', function(e) {
  
  description64.innerHTML = "<?php echo $premiseStatusText64; ?>";
    description64.style.color="<?php echo $premiseStatusColor64; ?>";
    description64.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description64.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description64.style.top = (e.pageY - 55) + 'px';
}
    description64.style.display ="none";
 

       myFunction64();
  });





































  
  let parking65 = document.querySelector(".parking65");
 let parkingNumber65 = document.querySelector(".parkingNumber65");
 let premiseStatus65= document.getElementsByClassName("premiseStatus65")[0];
       
 
 parking65.setAttribute("style", "fill:<?php echo $parkingColor65; ?>;");




 parking65.addEventListener('mouseover', (e)=>
  {
  
    description65.innerHTML = "<?php echo $premiseStatusText65; ?>";
    description65.style.color="<?php echo $premiseStatusColor65; ?>";

    description65.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description65.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description65.style.top = (e.pageY - 55) + 'px';
}
    description65.style.display ="block";
   
    setTimeout(() =>{
      description65.style.display ="none";
    
},1000)
    
  })


parking65.addEventListener('click', function(e) {
  
  description65.innerHTML = "<?php echo $premiseStatusText65; ?>";
    description65.style.color="<?php echo $premiseStatusColor65; ?>";
    description65.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description65.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description65.style.top = (e.pageY - 55) + 'px';
}
    description65.style.display ="none";
 

       myFunction65();
  });



























  
  let parking66 = document.querySelector(".parking66");
 let parkingNumber66 = document.querySelector(".parkingNumber66");
 let premiseStatus66= document.getElementsByClassName("premiseStatus66")[0];
       
 
 parking66.setAttribute("style", "fill:<?php echo $parkingColor66; ?>;");




 parking66.addEventListener('mouseover', (e)=>
  {
  
    description66.innerHTML = "<?php echo $premiseStatusText66; ?>";
    description66.style.color="<?php echo $premiseStatusColor66; ?>";

    description66.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description66.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description66.style.top = (e.pageY - 55) + 'px';
}
    description66.style.display ="block";
   
    setTimeout(() =>{
      description66.style.display ="none";
    
},1000)
    
  })


parking66.addEventListener('click', function(e) {
  
  description66.innerHTML = "<?php echo $premiseStatusText66; ?>";
    description66.style.color="<?php echo $premiseStatusColor66; ?>";
    description66.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description66.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description66.style.top = (e.pageY - 55) + 'px';
}
    description66.style.display ="none";
 

       myFunction66();
  });









  
let parking67 = document.querySelector(".parking67");
 let parkingNumber67 = document.querySelector(".parkingNumber67");
 let premiseStatus67= document.getElementsByClassName("premiseStatus67")[0];
       
 
 parking67.setAttribute("style", "fill:<?php echo $parkingColor67; ?>;");




 parking67.addEventListener('mouseover', (e)=>
  {
  
    description67.innerHTML = "<?php echo $premiseStatusText67; ?>";
    description67.style.color="<?php echo $premiseStatusColor67; ?>";

    description67.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description67.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description67.style.top = (e.pageY - 55) + 'px';
}
    description67.style.display ="block";
   
    setTimeout(() =>{
      description67.style.display ="none";
    
},1000)
    
  })


parking67.addEventListener('click', function(e) {
  
  description67.innerHTML = "<?php echo $premiseStatusText67; ?>";
    description67.style.color="<?php echo $premiseStatusColor67; ?>";
    description67.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description67.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description67.style.top = (e.pageY - 55) + 'px';
}
    description67.style.display ="none";
 

       myFunction67();
  });


































































  
  let parking68 = document.querySelector(".parking68");
 let parkingNumber68 = document.querySelector(".parkingNumber68");
 let premiseStatus68= document.getElementsByClassName("premiseStatus68")[0];
       
 
 parking68.setAttribute("style", "fill:<?php echo $parkingColor68; ?>;");




 parking68.addEventListener('mouseover', (e)=>
  {
  
    description68.innerHTML = "<?php echo $premiseStatusText68; ?>";
    description68.style.color="<?php echo $premiseStatusColor68; ?>";

    description68.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description68.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description68.style.top = (e.pageY - 55) + 'px';
}
    description68.style.display ="block";
   
    setTimeout(() =>{
      description68.style.display ="none";
    
},1000)
    
  })


parking68.addEventListener('click', function(e) {
  
  description68.innerHTML = "<?php echo $premiseStatusText68; ?>";
    description68.style.color="<?php echo $premiseStatusColor68; ?>";
    description68.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description68.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description68.style.top = (e.pageY - 55) + 'px';
}
    description68.style.display ="none";
 

       myFunction68();
  });





































  
  let parking69 = document.querySelector(".parking69");
 let parkingNumber69 = document.querySelector(".parkingNumber69");
 let premiseStatus69= document.getElementsByClassName("premiseStatus69")[0];
       
 
 parking69.setAttribute("style", "fill:<?php echo $parkingColor69; ?>;");




 parking69.addEventListener('mouseover', (e)=>
  {
  
    description69.innerHTML = "<?php echo $premiseStatusText69; ?>";
    description69.style.color="<?php echo $premiseStatusColor69; ?>";

    description69.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description69.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description69.style.top = (e.pageY - 55) + 'px';
}
    description69.style.display ="block";
   
    setTimeout(() =>{
      description69.style.display ="none";
    
},1000)
    
  })


parking69.addEventListener('click', function(e) {
  
  description69.innerHTML = "<?php echo $premiseStatusText69; ?>";
    description69.style.color="<?php echo $premiseStatusColor69; ?>";
    description69.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description69.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description69.style.top = (e.pageY - 55) + 'px';
}
    description69.style.display ="none";
 

       myFunction69();
  });































































































  
  let parking74 = document.querySelector(".parking74");
 let parkingNumber74 = document.querySelector(".parkingNumber74");
 let premiseStatus74= document.getElementsByClassName("premiseStatus74")[0];
       
 
 parking74.setAttribute("style", "fill:<?php echo $parkingColor74; ?>;");




 parking74.addEventListener('mouseover', (e)=>
  {
  
    description74.innerHTML = "<?php echo $premiseStatusText74; ?>";
    description74.style.color="<?php echo $premiseStatusColor74; ?>";

    description74.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description74.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description74.style.top = (e.pageY - 55) + 'px';
}
    description74.style.display ="block";
   
    setTimeout(() =>{
      description74.style.display ="none";
    
},1000)
    
  })


parking74.addEventListener('click', function(e) {
  
  description74.innerHTML = "<?php echo $premiseStatusText74; ?>";
    description74.style.color="<?php echo $premiseStatusColor74; ?>";
    description74.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description74.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description74.style.top = (e.pageY - 55) + 'px';
}
    description74.style.display ="none";
 

       myFunction74();
  });



















































  let parking75 = document.querySelector(".parking75");
 let parkingNumber75 = document.querySelector(".parkingNumber75");
 let premiseStatus75= document.getElementsByClassName("premiseStatus75")[0];
       
 
 parking75.setAttribute("style", "fill:<?php echo $parkingColor75; ?>;");




 parking75.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText75; ?>";
    description.style.color="<?php echo $premiseStatusColor75; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking75.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText75; ?>";
    description.style.color="<?php echo $premiseStatusColor75; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });














































  
  let parking76 = document.querySelector(".parking76");
 let parkingNumber76 = document.querySelector(".parkingNumber76");
 let premiseStatus76= document.getElementsByClassName("premiseStatus76")[0];
       
 
 parking76.setAttribute("style", "fill:<?php echo $parkingColor76; ?>;");




 parking76.addEventListener('mouseover', (e)=>
  {
  
    description76.innerHTML = "<?php echo $premiseStatusText76; ?>";
    description76.style.color="<?php echo $premiseStatusColor76; ?>";

    description76.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description76.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description76.style.top = (e.pageY - 55) + 'px';
}
    description76.style.display ="block";
   
    setTimeout(() =>{
      description76.style.display ="none";
    
},1000)
    
  })


parking76.addEventListener('click', function(e) {
  
  description76.innerHTML = "<?php echo $premiseStatusText76; ?>";
    description76.style.color="<?php echo $premiseStatusColor76; ?>";
    description76.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description76.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description76.style.top = (e.pageY - 55) + 'px';
}
    description76.style.display ="none";
 

       myFunction76();
  });






































  let parking77 = document.querySelector(".parking77");
 let parkingNumber77 = document.querySelector(".parkingNumber77");
 let premiseStatus77= document.getElementsByClassName("premiseStatus77")[0];
       
 
 parking77.setAttribute("style", "fill:<?php echo $parkingColor77; ?>;");




 parking77.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText77; ?>";
    description.style.color="<?php echo $premiseStatusColor77; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking77.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText77; ?>";
    description.style.color="<?php echo $premiseStatusColor77; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });


















































  let parking78 = document.querySelector(".parking78");
 let parkingNumber78 = document.querySelector(".parkingNumber78");
 let premiseStatus78= document.getElementsByClassName("premiseStatus78")[0];
       
 
 parking78.setAttribute("style", "fill:<?php echo $parkingColor78; ?>;");




 parking78.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText78; ?>";
    description.style.color="<?php echo $premiseStatusColor78; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking78.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText78; ?>";
    description.style.color="<?php echo $premiseStatusColor78; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });






















































  let parking79 = document.querySelector(".parking79");
 let parkingNumber79 = document.querySelector(".parkingNumber79");
 let premiseStatus79= document.getElementsByClassName("premiseStatus79")[0];
       
 
 parking79.setAttribute("style", "fill:<?php echo $parkingColor79; ?>;");




 parking79.addEventListener('mouseover', (e)=>
  {
  
    description79.innerHTML = "<?php echo $premiseStatusText79; ?>";
    description79.style.color="<?php echo $premiseStatusColor79; ?>";

    description79.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description79.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description79.style.top = (e.pageY - 55) + 'px';
}
    description79.style.display ="block";
   
    setTimeout(() =>{
      description79.style.display ="none";
    
},1000)
    
  })


parking79.addEventListener('click', function(e) {
  
  description79.innerHTML = "<?php echo $premiseStatusText79; ?>";
    description79.style.color="<?php echo $premiseStatusColor79; ?>";
    description79.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description79.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description79.style.top = (e.pageY - 55) + 'px';
}
    description79.style.display ="none";
 

       myFunction79();
  });
















































  
  let parking80 = document.querySelector(".parking80");
 let parkingNumber80 = document.querySelector(".parkingNumber80");
 let premiseStatus80= document.getElementsByClassName("premiseStatus80")[0];
       
 
 parking80.setAttribute("style", "fill:<?php echo $parkingColor80; ?>;");




 parking80.addEventListener('mouseover', (e)=>
  {
  
    description80.innerHTML = "<?php echo $premiseStatusText80; ?>";
    description80.style.color="<?php echo $premiseStatusColor80; ?>";

    description80.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description80.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description80.style.top = (e.pageY - 55) + 'px';
}
    description80.style.display ="block";
   
    setTimeout(() =>{
      description80.style.display ="none";
    
},1000)
    
  })


parking80.addEventListener('click', function(e) {
  
  description80.innerHTML = "<?php echo $premiseStatusText80; ?>";
    description80.style.color="<?php echo $premiseStatusColor80; ?>";
    description80.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description80.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description80.style.top = (e.pageY - 55) + 'px';
}
    description80.style.display ="none";
 

       myFunction80();
  });





































  
  let parking81 = document.querySelector(".parking81");
 let parkingNumber81 = document.querySelector(".parkingNumber81");
 let premiseStatus81= document.getElementsByClassName("premiseStatus81")[0];
       
 
 parking81.setAttribute("style", "fill:<?php echo $parkingColor81; ?>;");




 parking81.addEventListener('mouseover', (e)=>
  {
  
    description81.innerHTML = "<?php echo $premiseStatusText81; ?>";
    description81.style.color="<?php echo $premiseStatusColor81; ?>";

    description81.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description81.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description81.style.top = (e.pageY - 55) + 'px';
}
    description81.style.display ="block";
   
    setTimeout(() =>{
      description81.style.display ="none";
    
},1000)
    
  })


parking81.addEventListener('click', function(e) {
  
  description81.innerHTML = "<?php echo $premiseStatusText81; ?>";
    description81.style.color="<?php echo $premiseStatusColor81; ?>";
    description81.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description81.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description81.style.top = (e.pageY - 55) + 'px';
}
    description81.style.display ="none";
 

       myFunction81();
  });





































  
  let parking82 = document.querySelector(".parking82");
 let parkingNumber82 = document.querySelector(".parkingNumber82");
 let premiseStatus82= document.getElementsByClassName("premiseStatus82")[0];
       
 
 parking82.setAttribute("style", "fill:<?php echo $parkingColor82; ?>;");




 parking82.addEventListener('mouseover', (e)=>
  {
  
    description82.innerHTML = "<?php echo $premiseStatusText82; ?>";
    description82.style.color="<?php echo $premiseStatusColor82; ?>";

    description82.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description82.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description82.style.top = (e.pageY - 55) + 'px';
}
    description82.style.display ="block";
   
    setTimeout(() =>{
      description82.style.display ="none";
    
},1000)
    
  })


parking82.addEventListener('click', function(e) {
  
  description82.innerHTML = "<?php echo $premiseStatusText82; ?>";
    description82.style.color="<?php echo $premiseStatusColor82; ?>";
    description82.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description82.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description82.style.top = (e.pageY - 55) + 'px';
}
    description82.style.display ="none";
 

       myFunction82();
  });































  
  let parking83 = document.querySelector(".parking83");
 let parkingNumber83 = document.querySelector(".parkingNumber83");
 let premiseStatus83= document.getElementsByClassName("premiseStatus83")[0];
       
 
 parking83.setAttribute("style", "fill:<?php echo $parkingColor83; ?>;");




 parking83.addEventListener('mouseover', (e)=>
  {
  
    description83.innerHTML = "<?php echo $premiseStatusText83; ?>";
    description83.style.color="<?php echo $premiseStatusColor83; ?>";

    description83.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description83.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description83.style.top = (e.pageY - 55) + 'px';
}
    description83.style.display ="block";
   
    setTimeout(() =>{
      description83.style.display ="none";
    
},1000)
    
  })


parking83.addEventListener('click', function(e) {
  
  description83.innerHTML = "<?php echo $premiseStatusText83; ?>";
    description83.style.color="<?php echo $premiseStatusColor83; ?>";
    description83.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description83.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description83.style.top = (e.pageY - 55) + 'px';
}
    description83.style.display ="none";
 

       myFunction83();
  });




  let parking84 = document.querySelector(".parking84");
 let parkingNumber84 = document.querySelector(".parkingNumber84");
 let premiseStatus84= document.getElementsByClassName("premiseStatus84")[0];
       
 
 parking84.setAttribute("style", "fill:<?php echo $parkingColor84; ?>;");




 parking84.addEventListener('mouseover', (e)=>
  {
  
    description84.innerHTML = "<?php echo $premiseStatusText84; ?>";
    description84.style.color="<?php echo $premiseStatusColor84; ?>";

    description84.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description84.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description84.style.top = (e.pageY - 55) + 'px';
}
    description84.style.display ="block";
   
    setTimeout(() =>{
      description84.style.display ="none";
    
},1000)
    
  })


parking84.addEventListener('click', function(e) {
  
  description84.innerHTML = "<?php echo $premiseStatusText84; ?>";
    description84.style.color="<?php echo $premiseStatusColor84; ?>";
    description84.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description84.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description84.style.top = (e.pageY - 55) + 'px';
}
    description84.style.display ="none";
 

       myFunction84();
  });


































































  
  let parking85 = document.querySelector(".parking85");
 let parkingNumber85 = document.querySelector(".parkingNumber85");
 let premiseStatus85= document.getElementsByClassName("premiseStatus85")[0];
       
 
 parking85.setAttribute("style", "fill:<?php echo $parkingColor85; ?>;");




 parking85.addEventListener('mouseover', (e)=>
  {
  
    description85.innerHTML = "<?php echo $premiseStatusText85; ?>";
    description85.style.color="<?php echo $premiseStatusColor85; ?>";

    description85.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description85.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description85.style.top = (e.pageY - 55) + 'px';
}
    description85.style.display ="block";
   
    setTimeout(() =>{
      description85.style.display ="none";
    
},1000)
    
  })


parking85.addEventListener('click', function(e) {
  
  description85.innerHTML = "<?php echo $premiseStatusText85; ?>";
    description85.style.color="<?php echo $premiseStatusColor85; ?>";
    description85.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description85.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description85.style.top = (e.pageY - 55) + 'px';
}
    description85.style.display ="none";
 

       myFunction85();
  });





































  
  let parking86 = document.querySelector(".parking86");
 let parkingNumber86 = document.querySelector(".parkingNumber86");
 let premiseStatus86= document.getElementsByClassName("premiseStatus86")[0];
       
 
 parking86.setAttribute("style", "fill:<?php echo $parkingColor86; ?>;");




 parking86.addEventListener('mouseover', (e)=>
  {
  
    description86.innerHTML = "<?php echo $premiseStatusText86; ?>";
    description86.style.color="<?php echo $premiseStatusColor86; ?>";

    description86.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description86.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description86.style.top = (e.pageY - 55) + 'px';
}
    description86.style.display ="block";
   
    setTimeout(() =>{
      description86.style.display ="none";
    
},1000)
    
  })


parking86.addEventListener('click', function(e) {
  
  description86.innerHTML = "<?php echo $premiseStatusText86; ?>";
    description86.style.color="<?php echo $premiseStatusColor86; ?>";
    description86.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description86.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description86.style.top = (e.pageY - 55) + 'px';
}
    description86.style.display ="none";
 

       myFunction86();
  });





































  
  let parking87 = document.querySelector(".parking87");
 let parkingNumber87 = document.querySelector(".parkingNumber87");
 let premiseStatus87= document.getElementsByClassName("premiseStatus87")[0];
       
 
 parking87.setAttribute("style", "fill:<?php echo $parkingColor87; ?>;");




 parking87.addEventListener('mouseover', (e)=>
  {
  
    description87.innerHTML = "<?php echo $premiseStatusText87; ?>";
    description87.style.color="<?php echo $premiseStatusColor87; ?>";

    description87.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description87.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description87.style.top = (e.pageY - 55) + 'px';
}
    description87.style.display ="block";
   
    setTimeout(() =>{
      description87.style.display ="none";
    
},1000)
    
  })


parking87.addEventListener('click', function(e) {
  
  description87.innerHTML = "<?php echo $premiseStatusText87; ?>";
    description87.style.color="<?php echo $premiseStatusColor87; ?>";
    description87.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description87.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description87.style.top = (e.pageY - 55) + 'px';
}
    description87.style.display ="none";
 

       myFunction87();
  });































  
  let parking88 = document.querySelector(".parking88");
 let parkingNumber88 = document.querySelector(".parkingNumber88");
 let premiseStatus88= document.getElementsByClassName("premiseStatus88")[0];
       
 
 parking88.setAttribute("style", "fill:<?php echo $parkingColor88; ?>;");




 parking88.addEventListener('mouseover', (e)=>
  {
  
    description88.innerHTML = "<?php echo $premiseStatusText88; ?>";
    description88.style.color="<?php echo $premiseStatusColor88; ?>";

    description88.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description88.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description88.style.top = (e.pageY - 55) + 'px';
}
    description88.style.display ="block";
   
    setTimeout(() =>{
      description88.style.display ="none";
    
},1000)
    
  })


parking88.addEventListener('click', function(e) {
  
  description88.innerHTML = "<?php echo $premiseStatusText88; ?>";
    description88.style.color="<?php echo $premiseStatusColor88; ?>";
    description88.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description88.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description88.style.top = (e.pageY - 55) + 'px';
}
    description88.style.display ="none";
 

       myFunction88();
  });




















  
let parking89 = document.querySelector(".parking89");
 let parkingNumber89 = document.querySelector(".parkingNumber89");
 let premiseStatus89= document.getElementsByClassName("premiseStatus89")[0];
       
 
 parking89.setAttribute("style", "fill:<?php echo $parkingColor89; ?>;");




 parking89.addEventListener('mouseover', (e)=>
  {
  
    description89.innerHTML = "<?php echo $premiseStatusText89; ?>";
    description89.style.color="<?php echo $premiseStatusColor89; ?>";

    description89.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description89.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description89.style.top = (e.pageY - 55) + 'px';
}
    description89.style.display ="block";
   
    setTimeout(() =>{
      description89.style.display ="none";
    
},1000)
    
  })


parking89.addEventListener('click', function(e) {
  
  description89.innerHTML = "<?php echo $premiseStatusText89; ?>";
    description89.style.color="<?php echo $premiseStatusColor89; ?>";
    description89.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description89.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description89.style.top = (e.pageY - 55) + 'px';
}
    description89.style.display ="none";
 

       myFunction89();
  });


































































  
  let parking90 = document.querySelector(".parking90");
 let parkingNumber90 = document.querySelector(".parkingNumber90");
 let premiseStatus90= document.getElementsByClassName("premiseStatus90")[0];
       
 
 parking90.setAttribute("style", "fill:<?php echo $parkingColor90; ?>;");




 parking90.addEventListener('mouseover', (e)=>
  {
  
    description90.innerHTML = "<?php echo $premiseStatusText90; ?>";
    description90.style.color="<?php echo $premiseStatusColor90; ?>";

    description90.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description90.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description90.style.top = (e.pageY - 55) + 'px';
}
    description90.style.display ="block";
   
    setTimeout(() =>{
      description90.style.display ="none";
    
},1000)
    
  })


parking90.addEventListener('click', function(e) {
  
  description90.innerHTML = "<?php echo $premiseStatusText90; ?>";
    description90.style.color="<?php echo $premiseStatusColor90; ?>";
    description90.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description90.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description90.style.top = (e.pageY - 55) + 'px';
}
    description90.style.display ="none";
 

       myFunction90();
  });





































  
  let parking91 = document.querySelector(".parking91");
 let parkingNumber91 = document.querySelector(".parkingNumber91");
 let premiseStatus91= document.getElementsByClassName("premiseStatus91")[0];
       
 
 parking91.setAttribute("style", "fill:<?php echo $parkingColor91; ?>;");




 parking91.addEventListener('mouseover', (e)=>
  {
  
    description91.innerHTML = "<?php echo $premiseStatusText91; ?>";
    description91.style.color="<?php echo $premiseStatusColor91; ?>";

    description91.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description91.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description91.style.top = (e.pageY - 55) + 'px';
}
    description91.style.display ="block";
   
    setTimeout(() =>{
      description91.style.display ="none";
    
},1000)
    
  })


parking91.addEventListener('click', function(e) {
  
  description91.innerHTML = "<?php echo $premiseStatusText91; ?>";
    description91.style.color="<?php echo $premiseStatusColor91; ?>";
    description91.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description91.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description91.style.top = (e.pageY - 55) + 'px';
}
    description91.style.display ="none";
 

       myFunction91();
  });





































  
  let parking92 = document.querySelector(".parking92");
 let parkingNumber92 = document.querySelector(".parkingNumber92");
 let premiseStatus92= document.getElementsByClassName("premiseStatus92")[0];
       
 
 parking92.setAttribute("style", "fill:<?php echo $parkingColor92; ?>;");




 parking92.addEventListener('mouseover', (e)=>
  {
  
    description92.innerHTML = "<?php echo $premiseStatusText92; ?>";
    description92.style.color="<?php echo $premiseStatusColor92; ?>";

    description92.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description92.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description92.style.top = (e.pageY - 55) + 'px';
}
    description92.style.display ="block";
   
    setTimeout(() =>{
      description92.style.display ="none";
    
},1000)
    
  })


parking92.addEventListener('click', function(e) {
  
  description92.innerHTML = "<?php echo $premiseStatusText92; ?>";
    description92.style.color="<?php echo $premiseStatusColor92; ?>";
    description92.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description92.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description92.style.top = (e.pageY - 55) + 'px';
}
    description92.style.display ="none";
 

       myFunction92();
  });































  
  let parking93 = document.querySelector(".parking93");
 let parkingNumber93 = document.querySelector(".parkingNumber93");
 let premiseStatus93= document.getElementsByClassName("premiseStatus93")[0];
       
 
 parking93.setAttribute("style", "fill:<?php echo $parkingColor93; ?>;");




 parking93.addEventListener('mouseover', (e)=>
  {
  
    description93.innerHTML = "<?php echo $premiseStatusText93; ?>";
    description93.style.color="<?php echo $premiseStatusColor93; ?>";

    description93.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description93.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description93.style.top = (e.pageY - 55) + 'px';
}
    description93.style.display ="block";
   
    setTimeout(() =>{
      description93.style.display ="none";
    
},1000)
    
  })


parking93.addEventListener('click', function(e) {
  
  description93.innerHTML = "<?php echo $premiseStatusText93; ?>";
    description93.style.color="<?php echo $premiseStatusColor93; ?>";
    description93.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description93.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description93.style.top = (e.pageY - 55) + 'px';
}
    description93.style.display ="none";
 

       myFunction93();
  });















































  
let parking94 = document.querySelector(".parking94");
 let parkingNumber94 = document.querySelector(".parkingNumber94");
 let premiseStatus94= document.getElementsByClassName("premiseStatus94")[0];
       
 
 parking94.setAttribute("style", "fill:<?php echo $parkingColor94; ?>;");




 parking94.addEventListener('mouseover', (e)=>
  {
  
    description94.innerHTML = "<?php echo $premiseStatusText94; ?>";
    description94.style.color="<?php echo $premiseStatusColor94; ?>";

    description94.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description94.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description94.style.top = (e.pageY - 55) + 'px';
}
    description94.style.display ="block";
   
    setTimeout(() =>{
      description94.style.display ="none";
    
},1000)
    
  })


parking94.addEventListener('click', function(e) {
  
  description94.innerHTML = "<?php echo $premiseStatusText94; ?>";
    description94.style.color="<?php echo $premiseStatusColor94; ?>";
    description94.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description94.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description94.style.top = (e.pageY - 55) + 'px';
}
    description94.style.display ="none";
 

       myFunction94();
  });


































































  
  let parking95 = document.querySelector(".parking95");
 let parkingNumber95 = document.querySelector(".parkingNumber95");
 let premiseStatus95= document.getElementsByClassName("premiseStatus95")[0];
       
 
 parking95.setAttribute("style", "fill:<?php echo $parkingColor95; ?>;");




 parking95.addEventListener('mouseover', (e)=>
  {
  
    description95.innerHTML = "<?php echo $premiseStatusText95; ?>";
    description95.style.color="<?php echo $premiseStatusColor95; ?>";

    description95.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description95.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description95.style.top = (e.pageY - 55) + 'px';
}
    description95.style.display ="block";
   
    setTimeout(() =>{
      description95.style.display ="none";
    
},1000)
    
  })


parking95.addEventListener('click', function(e) {
  
  description95.innerHTML = "<?php echo $premiseStatusText95; ?>";
    description95.style.color="<?php echo $premiseStatusColor95; ?>";
    description95.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description95.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description95.style.top = (e.pageY - 55) + 'px';
}
    description95.style.display ="none";
 

       myFunction95();
  });













  
  let parking96 = document.querySelector(".parking96");
 let parkingNumber96 = document.querySelector(".parkingNumber96");
 let premiseStatus96= document.getElementsByClassName("premiseStatus96")[0];
       
 
 parking96.setAttribute("style", "fill:<?php echo $parkingColor96; ?>;");




 parking96.addEventListener('mouseover', (e)=>
  {
  
    description96.innerHTML = "<?php echo $premiseStatusText96; ?>";
    description96.style.color="<?php echo $premiseStatusColor96; ?>";

    description96.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description96.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description96.style.top = (e.pageY - 55) + 'px';
}
    description96.style.display ="block";
   
    setTimeout(() =>{
      description96.style.display ="none";
    
},1000)
    
  })


parking96.addEventListener('click', function(e) {
  
  description96.innerHTML = "<?php echo $premiseStatusText96; ?>";
    description96.style.color="<?php echo $premiseStatusColor96; ?>";
    description96.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description96.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description96.style.top = (e.pageY - 55) + 'px';
}
    description96.style.display ="none";
 

       myFunction96();
  });
























































  let parking97 = document.querySelector(".parking97");
 let parkingNumber97 = document.querySelector(".parkingNumber97");
 let premiseStatus97= document.getElementsByClassName("premiseStatus97")[0];
       
 
 parking97.setAttribute("style", "fill:<?php echo $parkingColor97; ?>;");




 parking97.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText97; ?>";
    description.style.color="<?php echo $premiseStatusColor97; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking97.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText97; ?>";
    description.style.color="<?php echo $premiseStatusColor97; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });























































  let parking98 = document.querySelector(".parking98");
 let parkingNumber98 = document.querySelector(".parkingNumber98");
 let premiseStatus98= document.getElementsByClassName("premiseStatus98")[0];
       
 
 parking98.setAttribute("style", "fill:<?php echo $parkingColor98; ?>;");




 parking98.addEventListener('mouseover', (e)=>
  {
  
    description.innerHTML = "<?php echo $premiseStatusText98; ?>";
    description.style.color="<?php echo $premiseStatusColor98; ?>";
   description.style.left = e.pageX + 'px';
   
    description.style.display ="block";
    if (window.innerWidth <= 500) {
    
        description.style.top = (e.pageY - 25) + 'px';
    } 
    else
{
  description.style.top = (e.pageY - 55) + 'px';
}
   
    setTimeout(() =>{
      description.style.display ="none";
    
},1000)
    
  })


parking98.addEventListener('click', function(e) {
  
  description.innerHTML = "<?php echo $premiseStatusText98; ?>";
    description.style.color="<?php echo $premiseStatusColor98; ?>";
    description.style.left = e.pageX + 'px';

    if (window.innerWidth <= 500) {
    
    description.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description.style.top = (e.pageY - 55) + 'px';
}
    description.style.display ="none";
 

      myFunction();
  });





































































  
  let parking99 = document.querySelector(".parking99");
 let parkingNumber99 = document.querySelector(".parkingNumber99");
 let premiseStatus99= document.getElementsByClassName("premiseStatus99")[0];
       
 
 parking99.setAttribute("style", "fill:<?php echo $parkingColor99; ?>;");




 parking99.addEventListener('mouseover', (e)=>
  {
  
    description99.innerHTML = "<?php echo $premiseStatusText99; ?>";
    description99.style.color="<?php echo $premiseStatusColor99; ?>";

    description99.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description99.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description99.style.top = (e.pageY - 55) + 'px';
}
    description99.style.display ="block";
   
    setTimeout(() =>{
      description99.style.display ="none";
    
},1000)
    
  })


parking99.addEventListener('click', function(e) {
  
  description99.innerHTML = "<?php echo $premiseStatusText99; ?>";
    description99.style.color="<?php echo $premiseStatusColor99; ?>";
    description99.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description99.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description99.style.top = (e.pageY - 55) + 'px';
}
    description99.style.display ="none";
 

       myFunction99();
  });





































  
  let parking100 = document.querySelector(".parking100");
 let parkingNumber100 = document.querySelector(".parkingNumber100");
 let premiseStatus100= document.getElementsByClassName("premiseStatus100")[0];
       
 
 parking100.setAttribute("style", "fill:<?php echo $parkingColor100; ?>;");




 parking100.addEventListener('mouseover', (e)=>
  {
  
    description100.innerHTML = "<?php echo $premiseStatusText100; ?>";
    description100.style.color="<?php echo $premiseStatusColor100; ?>";

    description100.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description100.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description100.style.top = (e.pageY - 55) + 'px';
}
    description100.style.display ="block";
   
    setTimeout(() =>{
      description100.style.display ="none";
    
},1000)
    
  })


parking100.addEventListener('click', function(e) {
  
  description100.innerHTML = "<?php echo $premiseStatusText100; ?>";
    description100.style.color="<?php echo $premiseStatusColor100; ?>";
    description100.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description100.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description100.style.top = (e.pageY - 55) + 'px';
}
    description100.style.display ="none";
 

       myFunction100();
  });































  
  let parking101 = document.querySelector(".parking101");
 let parkingNumber101 = document.querySelector(".parkingNumber101");
 let premiseStatus101= document.getElementsByClassName("premiseStatus101")[0];
       
 
 parking101.setAttribute("style", "fill:<?php echo $parkingColor101; ?>;");




 parking101.addEventListener('mouseover', (e)=>
  {
  
    description101.innerHTML = "<?php echo $premiseStatusText101; ?>";
    description101.style.color="<?php echo $premiseStatusColor101; ?>";

    description101.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description101.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description101.style.top = (e.pageY - 55) + 'px';
}
    description101.style.display ="block";
   
    setTimeout(() =>{
      description101.style.display ="none";
    
},1000)
    
  })


parking101.addEventListener('click', function(e) {
  
  description101.innerHTML = "<?php echo $premiseStatusText101; ?>";
    description101.style.color="<?php echo $premiseStatusColor101; ?>";
    description101.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description101.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description101.style.top = (e.pageY - 55) + 'px';
}
    description101.style.display ="none";
 

       myFunction101();
  });






























































  
let parking102 = document.querySelector(".parking102");
 let parkingNumber102 = document.querySelector(".parkingNumber102");
 let premiseStatus102= document.getElementsByClassName("premiseStatus102")[0];
       
 
 parking102.setAttribute("style", "fill:<?php echo $parkingColor102; ?>;");




 parking102.addEventListener('mouseover', (e)=>
  {
  
    description102.innerHTML = "<?php echo $premiseStatusText102; ?>";
    description102.style.color="<?php echo $premiseStatusColor102; ?>";

    description102.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description102.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description102.style.top = (e.pageY - 55) + 'px';
}
    description102.style.display ="block";
   
    setTimeout(() =>{
      description102.style.display ="none";
    
},1000)
    
  })


parking102.addEventListener('click', function(e) {
  
  description102.innerHTML = "<?php echo $premiseStatusText102; ?>";
    description102.style.color="<?php echo $premiseStatusColor102; ?>";
    description102.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description102.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description102.style.top = (e.pageY - 55) + 'px';
}
    description102.style.display ="none";
 

       myFunction102();
  });


































































  
  let parking103 = document.querySelector(".parking103");
 let parkingNumber103 = document.querySelector(".parkingNumber103");
 let premiseStatus103= document.getElementsByClassName("premiseStatus103")[0];
       
 
 parking103.setAttribute("style", "fill:<?php echo $parkingColor103; ?>;");




 parking103.addEventListener('mouseover', (e)=>
  {
  
    description103.innerHTML = "<?php echo $premiseStatusText103; ?>";
    description103.style.color="<?php echo $premiseStatusColor103; ?>";

    description103.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description103.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description103.style.top = (e.pageY - 55) + 'px';
}
    description103.style.display ="block";
   
    setTimeout(() =>{
      description103.style.display ="none";
    
},1000)
    
  })


parking103.addEventListener('click', function(e) {
  
  description103.innerHTML = "<?php echo $premiseStatusText103; ?>";
    description103.style.color="<?php echo $premiseStatusColor103; ?>";
    description103.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description103.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description103.style.top = (e.pageY - 55) + 'px';
}
    description103.style.display ="none";
 

       myFunction103();
  });





































  
  let parking104 = document.querySelector(".parking104");
 let parkingNumber104 = document.querySelector(".parkingNumber104");
 let premiseStatus104= document.getElementsByClassName("premiseStatus104")[0];
       
 
 parking104.setAttribute("style", "fill:<?php echo $parkingColor104; ?>;");




 parking104.addEventListener('mouseover', (e)=>
  {
  
    description104.innerHTML = "<?php echo $premiseStatusText104; ?>";
    description104.style.color="<?php echo $premiseStatusColor104; ?>";

    description104.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description104.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description104.style.top = (e.pageY - 55) + 'px';
}
    description104.style.display ="block";
   
    setTimeout(() =>{
      description104.style.display ="none";
    
},1000)
    
  })


parking104.addEventListener('click', function(e) {
  
  description104.innerHTML = "<?php echo $premiseStatusText104; ?>";
    description104.style.color="<?php echo $premiseStatusColor104; ?>";
    description104.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description104.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description104.style.top = (e.pageY - 55) + 'px';
}
    description104.style.display ="none";
 

       myFunction104();
  });





































  
  let parking105 = document.querySelector(".parking105");
 let parkingNumber105 = document.querySelector(".parkingNumber105");
 let premiseStatus105= document.getElementsByClassName("premiseStatus105")[0];
       
 
 parking105.setAttribute("style", "fill:<?php echo $parkingColor105; ?>;");




 parking105.addEventListener('mouseover', (e)=>
  {
  
    description105.innerHTML = "<?php echo $premiseStatusText105; ?>";
    description105.style.color="<?php echo $premiseStatusColor105; ?>";

    description105.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description105.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description105.style.top = (e.pageY - 55) + 'px';
}
    description105.style.display ="block";
   
    setTimeout(() =>{
      description105.style.display ="none";
    
},1000)
    
  })


parking105.addEventListener('click', function(e) {
  
  description105.innerHTML = "<?php echo $premiseStatusText105; ?>";
    description105.style.color="<?php echo $premiseStatusColor105; ?>";
    description105.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description105.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description105.style.top = (e.pageY - 55) + 'px';
}
    description105.style.display ="none";
 

       myFunction105();
  });































  
  let parking106 = document.querySelector(".parking106");
 let parkingNumber106 = document.querySelector(".parkingNumber106");
 let premiseStatus106= document.getElementsByClassName("premiseStatus106")[0];
       
 
 parking106.setAttribute("style", "fill:<?php echo $parkingColor106; ?>;");




 parking106.addEventListener('mouseover', (e)=>
  {
  
    description106.innerHTML = "<?php echo $premiseStatusText106; ?>";
    description106.style.color="<?php echo $premiseStatusColor106; ?>";

    description106.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description106.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description106.style.top = (e.pageY - 55) + 'px';
}
    description106.style.display ="block";
   
    setTimeout(() =>{
      description106.style.display ="none";
    
},1000)
    
  })


parking106.addEventListener('click', function(e) {
  
  description106.innerHTML = "<?php echo $premiseStatusText106; ?>";
    description106.style.color="<?php echo $premiseStatusColor106; ?>";
    description106.style.left = e.pageX + 'px';
    if (window.innerWidth <= 500) {
    
      description106.style.top = (e.pageY - 25) + 'px';
} 
else
{
  description106.style.top = (e.pageY - 55) + 'px';
}
    description106.style.display ="none";
 

       myFunction106();
  });










































  </script>
<!-- footer start -->
<footer>
    <div class="locationsAll">
    <div class="locationsLeft"> 
    <img src="image/dhd.webp"
    class="footer_logo">  <h5>DIAMOND HILL DEVELOPMENT jest ogólnopolskim<br>deweloperem segmentu premium. Tworzymy<br>nieruchomości cechujące się najwyższą jakością,<br> innowacyjnymi technologiami, funkcjonalnością i<br>ponadczasowym designem.</h5>
    <img src="image/pzfd.webp" class="footer_logo">
    </div>       
    <div class="locationsRight">  
    <h5>BIURO SPRZEDAŻY<br>ul.Paderewskiego 63a, 42-400 Zawiercie<br><a href="tel:+48 786 337 302 " style="color: #ffffff;">+48 786 337 302 </a><br>e-mail.<a href="mailto:biuro@parkpaderewskiego.pl" style="color:  #ffffff;"> biuro@parkpaderewskiego.pl</a><br>  <a href="mailto:sprzedaz@parkpaderewskiego.pl" style="color:  #ffffff;"> sprzedaz@parkpaderewskiego.pl</a><br>www.diamond-hill.com.pl</h5>                                                                           
    <!-- social media start -->
  <h5 class="smollText">   Bądź na bieżąco </h5>
    <a href="https://www.facebook.com/profile.php?id=100092554970321" class="fa fa-facebook"></a>
    <a href="https://www.linkedin.com/company/diamond-hill-development/" class="fa fa-linkedin"></a>
    <a href="https://www.youtube.com/@ParkPaderewskiegoZawiercie" class="fa fa-youtube"></a>
    <a href="https://www.instagram.com/park_paderewskiego_zawiercie/" class="fa fa-instagram"></a>
  
  </div>
    <!-- social media end -->
    <div class="locationsCenter">    
    <div class="line"></div>
    <h5><a style="color:  #ffffff;" href="cookiesPolitics">Polityka cookies</a><br><a style="color:  #ffffff;" href="privacyPolicy">Polityka prywatności</a><br>Copyright © Diamond Hill Development, All Rights Reserved.</h5>
    </div>
    </div>
    </footer>
    <!-- footer end -->




</body>
</html>

