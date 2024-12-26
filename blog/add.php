<?php
require "../db/config/config.php";
try{
$title = $_POST['title'];
$post = $_POST['post'];


$sql = "INSERT INTO blog (title,post) VALUES ( :title, :post)";
$tmt = $pdo -> prepare($sql);
$tmt -> bindParam(':title', $title);
$tmt -> bindParam(':post', $post);
$tmt -> execute();

}
catch(PDOException $e)
{
 echo "<br>". $e -> getMessage(). "<br>";
}
?>




