<?php
require "../db/config/config.php";

$sql = "SELECT * FROM  blog";

$tmt = $pdo -> prepare($sql);


$tmt -> execute();
$blog = $tmt -> fetchAll(PDO::FETCH_ASSOC);
$tmt = null;
$pdo = null;
?>


