<?php
session_start();
$index = $_SERVER ['SCRIPT_NAME'];
$index = explode('/', $index );
$index = $index['3'];
$_SESSION['index_2'] = $index;
?>


<a href="index_1.php">index_1.php</a><br />
<a href="index_3.php">index_3.php</a><br />
<a href="result.php">Result</a><br />

