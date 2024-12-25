<?php
require "../db/config/config.php";

$sql = "SELECT * FROM  users";

$tmt = $pdo -> prepare($sql);


$tmt -> execute();
$users = $tmt -> fetchAll(PDO::FETCH_ASSOC);
$tmt = null;
$pdo = null;
?>


