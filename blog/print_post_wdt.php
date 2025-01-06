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

<div class="categories_box">

<h3>Web Development Tools</h3>
<div id="printPostWDT">
</div>



</div>

<?php
 require_once "get_post.php";


?>
<script>
   let wdt = <?php echo json_encode($wdt); ?>







let printPostWDT = document.querySelector("#printPostWDT")
let getWDT= wdt.map( wdtContent => {
   return `${wdtContent.title }<br>
   ${wdtContent.post }<br>
   ${wdtContent.date }<br>`;
}
)
printPostWDT.innerHTML = getWDT;






</script>




</body>
</html>