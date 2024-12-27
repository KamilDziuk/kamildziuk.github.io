<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/displaying_post.css">
    <title>Post</title>
</head>
<body>
    <div id="printPostBox">
    <div id="printPost"></div>
    </div>
   
<?php require "../blog/get_post.php"; ?>
<script>
 let blog = <?php echo json_encode($blog); ?>


let getblog = blog.map( blogContent => {
   return `<br>${blogContent.title }<br>
   ${blogContent.post }<br>
   ${blogContent.date }<br>`;
}
)
document.querySelector("#printPost").innerHTML = getblog;
</script>
</body>
</html>