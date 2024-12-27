<?php
require "../db/config/config.php";
$title = $_POST['title'];
$sql = "DELETE FROM blog WHERE =':title';";



$tmt = $pdo -> prepare($sql);
$tmt -> bindParam(':title', $title);

$tmt -> execute();
$blog = $tmt -> fetchAll(PDO::FETCH_ASSOC);
$tmt = null;
$pdo = null;
?>
