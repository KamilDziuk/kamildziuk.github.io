<?php
require "../db/config/config.php";



$sql = "SELECT * FROM `questionsApp`";


$tmt = $pdo -> prepare($sql);


$tmt -> execute();
$questionsApp = $tmt -> fetchAll(PDO::FETCH_ASSOC);

?>


