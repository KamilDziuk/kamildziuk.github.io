<?php
require "../db/config/config.php";
header('Location: delete_post.php'); 
try{
$title = $_POST['title'];
$sql_js= "DELETE FROM js WHERE title = :title";
$sql_php = "DELETE FROM php WHERE title = :title";
$sql_fd = "DELETE FROM fd WHERE title = :title";
$sql_bd = "DELETE FROM bd WHERE title = :title";
$sql_ti = "DELETE FROM ti WHERE title = :title";
$sql_wdt = "DELETE FROM wdt  WHERE title = :title";

$stmt_php = $pdo -> prepare($sql_php);
$stmt_js = $pdo -> prepare($sql_js);
$stmt_fd = $pdo -> prepare($sql_fd);
$stmt_bd = $pdo -> prepare($sql_bd);
$stmt_ti = $pdo -> prepare($sql_ti);
$stmt_wdt = $pdo -> prepare($sql_wdt);

$stmt_js -> bindParam(':title', $title);
$stmt_php-> bindParam(':title', $title);
$stmt_fd-> bindParam(':title', $title);
$stmt_bd-> bindParam(':title', $title);
$stmt_wdt-> bindParam(':title', $title);
$stmt_ti-> bindParam(':title', $title);

$stmt_js -> execute();
$stmt_php -> execute();
$stmt_fd -> execute();
$stmt_bd -> execute();
$stmt_wdt -> execute();
$stmt_ti -> execute();


$stmt_php = null;
$stmt_js = null;
$stmt_fd = null;
$stmt_bd = null;
$stmt_wdt = null;
$stmt_ti = null;
$pdo = null;
}
catch(PDOException $e)
{
 echo "<br>". $e -> getMessage(). "<br>";
}
?>
