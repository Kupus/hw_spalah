
<?php
if (!empty($_POST['exit'])){
    setcookie('key', null, 0);
    unset($_COOKIE['key']);
}


if (!empty($_POST['done'])){
    if (
        isset($_POST['login']) && !empty($_POST['login']) &&
        isset($_POST['password']) && !empty($_POST['password']) &&
        isset($_POST['email']) && !empty($_POST['email'])
    ){
        setcookie('key', sha1($_POST['password']));
        header("Location: form.php");
    }

}
if (!empty ($_COOKIE['key'])){
    echo '<br>' . '<form action="" method="post"><input type="submit" value="Выйти" name="exit"></form>' . '<br>';
}else{
    echo '<form action="" method="post">
    <p>Login: <input type="text" name="login" /></p>
    <p>Password: <input type="text" name="password" /></p>
    <p>Email: <input type="text" name="email" /></p>
    <input type="submit" name="done" ><br />
    </form>';

}

