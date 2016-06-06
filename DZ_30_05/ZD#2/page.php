<?php
if (isset($_COOKIE['name'])){
    $name = $_COOKIE['name'];
}
else{
    $name = 'Гость';
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Страница Page.php</title>
</head>

<body>

<p>Страница 2</p>

<p><?php echo $name; ?></p>
<a href="index.php">Страница 1</a>
</body>
</html>