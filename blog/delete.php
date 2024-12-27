<?php
require "../db/config/config.php";
try{
$title = $_POST['title'];
$sql = "DELETE FROM blog WHERE title = :title";



$tmt = $pdo -> prepare($sql);
$tmt -> bindParam(':title', $title);

$tmt -> execute();

$tmt = null;
$pdo = null;
}
catch(PDOException $e)
{
 echo "<br>". $e -> getMessage(). "<br>";
}
?>
