<?php
require "../db/config/config.php";
$search = $_POST['search'];
$sql = "SELECT * FROM  blog";

$tmt = $pdo -> prepare($sql);


$tmt -> execute();
$blog = $tmt -> fetchAll(PDO::FETCH_ASSOC);
if($search === '2024-12-28')
{
 


$sql = "SELECT * FROM `blog` WHERE date=:search";
$tmt = $pdo -> prepare($sql);

$tmt -> bindParam(':search', $search);
$tmt -> execute();
$blog = $tmt -> fetchAll(PDO::FETCH_ASSOC);
}
?>


