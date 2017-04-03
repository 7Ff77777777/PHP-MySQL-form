<!doctype html>
<?php
 session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная сраница</title>
</head>
<body>
<h2>Главная страница</h2>
<form action="testreg.php" method="post">
<p>
    <label>Login:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
</p>
<p>
    <label>Password:<br></label>
    <input name="password" type="text" size="15" maxlength="15">
</p>
<p>
    <input type="submit" name="submit" value="Войти">
    <a href="reg.php">Зарегистрироваться</a>
</p></form>
<br>
<?php
if (empty($_SESSION['login'])or empty($_SESSION['id']))
{
    echo "Вы вошли на сайт как гость.";
}
else
{
    echo "Вы вошли на сайт".$_SESSION['login']."<br><a href='https://footbal.ua'>Эта ссылка доступна зарегистрированым пользователям</a> ";
}
?>
</body>
</html>