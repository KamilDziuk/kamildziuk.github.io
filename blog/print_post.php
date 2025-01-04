<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/displaying_post.css">

    <title>Post</title>
</head>
<body>
    
  <!-- light Reflections start-->
<div class="lightReflectionsContainer">
  <div class="lightReflections"></div>
  <div class="lightReflections" style="--delay:-12s;--size:0.35;--speed:20s;"></div>
  <div class="lightReflections" style="--delay:-10s;--size:0.3;--speed:10s;"></div>
</div>
<!-- light Reflections end-->

<!-- <form  method="POST">
<input type="text" class="search" name="search">
<input type="submit" value="Search">
</form> -->
<div class="categories_box">
<div class="categories">
        <h1>JS</h1>
      </div>
        <div class="categories">
        <h1>PHP</h1>
        </div>
        <div class="categories">
        <h1>Backend Development</h1>
        </div>
        <div class="categories">
        <h1>Frontend Development</h1>
        </div>
        <div class="categories">
        <h1>Web Development Tools</h1>
        </div>
        <div class="categories">
        <h1>Trends and Inspirations</h1>
        </div>
      </div>
      </div>
    <div id="printPostBox">

<h3>JavaScript</h3>
<div id="printPostJS">
  
  </div>
<h3>PHP</h3>
<div id="printPostPHP">
  </div>


  <h3>Backend Development</h3>
<div id="printPostBD">
</div>

<h3>Frontend Development</h3>
<div id="printPostFD">
</div>



<h3>Web Development Tools</h3>
<div id="printPostWDT">
</div>


<h3>Trends and Inspirations</h3>
<div id="printPostTS">
  
  </div>
</div>

<?php
 require "../blog/get_post.php";


?>
<script>
   let js = <?php echo json_encode($js); ?>
   let php = <?php echo json_encode($php); ?>
   let bd = <?php echo json_encode($bd); ?>
   let fd = <?php echo json_encode($fd); ?>
   let wd = <?php echo json_encode($wd); ?>
   let ti = <?php echo json_encode($ti); ?>





let printPostJS = document.querySelector("#printPostJS")
let getJS= js.map( jsContent => {
   return `${jsContent.title }<br>
   ${jsContent.post }<br>
   ${jsContent.date }<br>`;
}
)
printPostJS.innerHTML = getJS;




let printPostPHP = document.querySelector("#printPostPHP")
let getPHP= php.map( phpContent => {
   return `${phpContent.title }<br>
   ${phpContent.post }<br>
   ${phpContent.date }<br>`;
}
)
printPostPHP.innerHTML = getPHP;





let printPostBD = document.querySelector("#printPostBD")
let getBD= bd.map( dbContent => {
   return `${dbContent.title }<br>
   ${dbContent.post }<br>
   ${dbContent.date }<br>`;
}
)
printPostBD.innerHTML = getBD;


let printPostFD = document.querySelector("#printPostFD")
let getFD= fd.map( fdContent => {
   return `${fdContent.title }<br>
   ${fdContent.post }<br>
   ${fdContent.date }<br>`;
}
)
printPostFD.innerHTML = getFD;


let printPostWDT = document.querySelector("#printPostWDT")
let getWDT= wdt.map( wdtContent => {
   return `${wdtContent.title }<br>
   ${wdtContent.post }<br>
   ${wdtContent.date }<br>`;
}
)
printPostWDT.innerHTML = getWDT;


let printPostTI = document.querySelector("#printPostTI")
let getTI= ti.map( tiContent => {
   return `${tiContent.title }<br>
   ${tiContent.post }<br>
   ${tiContent.date }<br>`;
}
)
printPostTI.innerHTML = getTI;





</script>




</body>
</html>