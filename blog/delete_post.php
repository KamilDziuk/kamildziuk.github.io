<?php
require "../db/config/config.php";
$first_name = $_POST['first_name'];
$sql = "DELETE FROM users WHERE =':first_name';";



$tmt = $pdo -> prepare($sql);
$tmt -> bindParam(':first_name', $first_name);

$tmt -> execute();
$users = $tmt -> fetchAll(PDO::FETCH_ASSOC);
$tmt = null;
$pdo = null;
?>


