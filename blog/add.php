<?php
require "../db/config/config.php";
try{
$first_name = $_POST['first_name'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];


$sql = "INSERT INTO users (first_name,pwd,email) VALUES ( :first_name,  :pwd,  :email)";
$tmt = $pdo -> prepare($sql);
$tmt -> bindParam(':first_name', $first_name);
$tmt -> bindParam(':pwd', $pwd);
$tmt -> bindParam(':email', $email);



$tmt -> execute();

}
catch(PDOException $e)
{
 echo "<br>". $e -> getMessage(). "<br>";
}
?>




