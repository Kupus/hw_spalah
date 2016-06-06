<?php
if ((isset($_POST['name'])) && (!empty($_POST['name']))){
    $name = $_POST['name'];
    setcookie('name', $name);
} elseif (isset($_COOKIE['name'])){
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
    <title>Страница Index.php</title>
</head>
<body>
<p>Страница 1</p>
<a href="page.php">Страница 2</a>
<br>
<br>
<br>
<p><?php echo $name; ?></p>
<form action="" method="post">
    <input type="text" name="name" />
    <input type="submit" />
</form>
</body>
</html>