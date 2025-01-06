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



<h3>Frontend Development</h3>
<div id="printPostFD">
</div>

</div>

<?php
 require_once "get_post.php";


?>
<script>

   let fd = <?php echo json_encode($fd); ?>




let printPostFD = document.querySelector("#printPostFD")
let getFD= fd.map( fdContent => {
   return `${fdContent.title }<br>
   ${fdContent.post }<br>
   ${fdContent.date }<br>`;
}
)
printPostFD.innerHTML = getFD;





</script>




</body>
</html>