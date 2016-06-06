
<?php
session_start();

?>

<a href="index_1.php">index_1.php</a><br />
<a href="index_2.php">index_2.php</a><br />
<a href="index_3.php">index_3.php</a><br />

<p>Вы посешяли такие страницы:</p>
<?php
foreach ($_SESSION as $value){
   echo '<br>'. $value;
}
?>


