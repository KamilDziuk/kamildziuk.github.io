<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <div class="displayUseres"></div>
<?php require "../blog/get_post.php"; ?>
<script>
 let users = <?php echo json_encode($users); ?>


let getUsers = users.map( users1 => {
   return `<br>${users1.first_name }<br>
   ${users1.pwd }<br>
   ${users1.email }<br>
   ${users1.auto_date }<br>`;
}
)
document.querySelector(".displayUseres").innerHTML = getUsers;




</script>

</body>
</html>