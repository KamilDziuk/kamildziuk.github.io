<?php
require "../db/config/config.php";
$search = $_POST['search'];
$sql = "SELECT * FROM js";
$sql = "SELECT * FROM php";
$sql = "SELECT * FROM bd";
$sql = "SELECT * FROM fb";
$sql = "SELECT * FROM fi";
$sql = "SELECT * FROM wdt";
$tmt = $pdo -> prepare($sql);


$tmt -> execute();
$js = $tmt -> fetchAll(PDO::FETCH_ASSOC);
$php = $tmt -> fetchAll(PDO::FETCH_ASSOC);
$bd = $tmt -> fetchAll(PDO::FETCH_ASSOC);
$fb = $tmt -> fetchAll(PDO::FETCH_ASSOC);
$fi = $tmt -> fetchAll(PDO::FETCH_ASSOC);
$wdt = $tmt -> fetchAll(PDO::FETCH_ASSOC);

if($search === '2024-12-28')
{
 


$sql = "SELECT * FROM `js` WHERE date=:search";
$sql = "SELECT * FROM `php` WHERE date=:search";
$sql = "SELECT * FROM `bd` WHERE date=:search";
$sql = "SELECT * FROM `fb` WHERE date=:search";
$sql = "SELECT * FROM `fi` WHERE date=:search";
$sql = "SELECT * FROM `wdt` WHERE date=:search";


$tmt = $pdo -> prepare($sql);

$tmt -> bindParam(':search', $search);
$tmt -> execute();
$js = $tmt -> fetchAll(PDO::FETCH_ASSOC);
$php = $tmt -> fetchAll(PDO::FETCH_ASSOC);
$bd = $tmt -> fetchAll(PDO::FETCH_ASSOC);
$fb = $tmt -> fetchAll(PDO::FETCH_ASSOC);
$fi = $tmt -> fetchAll(PDO::FETCH_ASSOC);
$wdt = $tmt -> fetchAll(PDO::FETCH_ASSOC);
}
?>


