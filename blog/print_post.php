<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/displaying_post.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
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
    <div id="printPost"></div>
    </div>
   
<?php require "../blog/get_post.php"; ?>
<script>
 let blog = <?php echo json_encode($blog); ?>


let getblog = blog.map( blogContent => {
   return `${blogContent.title }<br>
   ${blogContent.post }<br>
   ${blogContent.date }<br>`;
}
)
document.querySelector("#printPost").innerHTML = getblog;
</script>
</body>
</html>