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
<div id="printPostBD">
</div>

</div>

<?php
 require_once "get_post.php";


?>
<script>

   let bd = <?php echo json_encode($bd); ?>






let printPostBD = document.querySelector("#printPostBD")
let getBD= bd.map( dbContent => {
   return `${dbContent.title }<br>
   ${dbContent.post }<br>
   ${dbContent.date }<br>`;
}
)
printPostBD.innerHTML = getBD;






</script>




</body>
</html>