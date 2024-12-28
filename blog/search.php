<?php
require "../db/config/config.php";
try{

$search = $_POST['search'];


$sql = "SELECT * FROM `blog` WHERE date=:search";
$tmt = $pdo -> prepare($sql);

$tmt -> bindParam(':search', $search);
$tmt -> execute();
$search = $tmt -> fetchAll(PDO::FETCH_ASSOC);


}
catch(PDOException $e)
{
 echo "<br>". $e -> getMessage(). "<br>";
}
?>
<div id="printPost" > </div>
<script>
 let search = <?php echo json_encode($search); ?>


let getblog = search.map( blogContent => {
   return `${blogContent.title }<br>
   ${blogContent.post }<br>
   ${blogContent.date }<br>`;
}
)
document.querySelector("#printPost").innerHTML = getblog;
</script>



