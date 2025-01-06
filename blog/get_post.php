<?php
require "../db/config/config.php";
// header('Location: ../get_post.php'); 
$sql_js = "SELECT * FROM js";
$sql_php = "SELECT * FROM php";
$sql_bd = "SELECT * FROM bd";
$sql_fd = "SELECT * FROM fd";
$sql_ti = "SELECT * FROM ti";
$sql_wdt = "SELECT * FROM wdt";

$stmt_js = $pdo -> prepare($sql_js);
$stmt_php= $pdo -> prepare($sql_php);
$stmt_bd = $pdo -> prepare($sql_bd);
$stmt_fd = $pdo -> prepare($sql_fd);
$stmt_ti = $pdo -> prepare($sql_ti);
$stmt_wdt = $pdo -> prepare($sql_wdt);

$stmt_js -> execute();
$stmt_php -> execute();
$stmt_bd -> execute();
$stmt_fd -> execute();
$stmt_ti -> execute();
$stmt_wdt -> execute();

$js = $stmt_js -> fetchAll(PDO::FETCH_ASSOC);
$php = $stmt_php -> fetchAll(PDO::FETCH_ASSOC);
$bd = $stmt_bd -> fetchAll(PDO::FETCH_ASSOC);
$fd = $stmt_fd -> fetchAll(PDO::FETCH_ASSOC);
$ti = $stmt_ti -> fetchAll(PDO::FETCH_ASSOC);
$wdt = $stmt_wdt -> fetchAll(PDO::FETCH_ASSOC);

$stmt_php = null;
$stmt_js = null;
$stmt_fd = null;
$stmt_bd = null;
$stmt_wdt = null;
$stmt_ti = null;
$pdo = null;
?>


