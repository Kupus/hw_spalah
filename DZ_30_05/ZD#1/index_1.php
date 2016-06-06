<?php
session_start();
$index = $_SERVER ['SCRIPT_NAME'];
$index = explode('/', $index );
$index = $index['3'];
$_SESSION['index_1'] = $index;
?>



<a href="index_2.php">index_2.php</a><br />
<a href="index_3.php">index_3.php</a><br />
<a href="result.php">Result</a><br />

