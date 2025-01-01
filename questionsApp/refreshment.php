
<!-- Sending variables to the database start -->
<?php
require '../db/config/config.php';

$id = $_POST['id'];
$questionsEN = $_POST['questionsEN'];
$answerTheQuestionEN = $_POST['answerTheQuestionEN'];
$sql = "INSERT INTO questionsApp (id, answerTheQuestionEN, questionsEN ) 
VALUES ( :id, :answerTheQuestionEN, :questionsEN)";
$tmt = $pdo  -> prepare($sql);
$tmt -> bindParam(':id', $id);
$tmt -> bindParam(':answerTheQuestionEN', $answerTheQuestionEN);
$tmt -> bindParam(':questionsEN', $questionsEN);
$tmt -> execute();
?>
<!-- Sending variables to the database end -->
