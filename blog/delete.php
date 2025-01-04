<?php
require "../db/config/config.php";
try{
$title = $_POST['title'];
$sql = "DELETE FROM js WHERE title = :title";
$sql = "DELETE FROM php WHERE title = :title";
$sql = "DELETE FROM bd WHERE title = :title";
$sql = "DELETE FROM fb WHERE title = :title";
$sql = "DELETE FROM wdt WHERE title = :title";
$sql = "DELETE FROM ti WHERE title = :title";



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
