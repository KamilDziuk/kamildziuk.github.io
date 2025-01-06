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


<h3>PHP</h3>
<div id="printPostPHP">
  </div>


</div>

<?php
 require_once "get_post.php";


?>
<script>
   let php = <?php echo json_encode($php); ?>






let printPostPHP = document.querySelector("#printPostPHP")
let getPHP= php.map( phpContent => {
   return `${phpContent.title }<br>
   ${phpContent.post }<br>
   ${phpContent.date }<br>`;
}
)
printPostPHP.innerHTML = getPHP;








</script>




</body>
</html>