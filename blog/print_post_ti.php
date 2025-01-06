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

    <div id="printPostBox">


<h3>Trends and Inspirations</h3>
<div id="printPostTI">
  
  </div>
</div>

<?php
 require_once "get_post.php";


?>
<script>

   let ti = <?php echo json_encode($ti); ?>



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