<?php
session_start();
if (isset($_POST['login'])) {$login = $_POST['login']; if ($login == '') {unset($login);}}
if (isset($_POST['password'])) {$password = $_POST['password']; if ($password == ''){unset($password);}}
if (empty($login) or  empty($password))
{
    exit("Вы ввели не всю информацию вернитесь назад и заполните все поля!");
}
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes('$password');
$password = htmlspecialchars('$password');
$login = trim($login);
$password = trim($password);
include ("bd.php");

$res = $mysqli->query("SELECT'id'
                       FROM'users'
                       WHERE'login'='".$mysqli->real_escape_string($login)."'");
                  if (mysqli_num_rows($res)>0)
                      $error[] = 'Пользователь с таким логином уже существует';
                  if ('$myrow'['password']==$password) {
                      $_SESSION['login']='$myrow'['login'];
                      $_SESSION['id']='$myrow'['id'];
                      echo "Вы успешно вошли на сайт!<a href='index.php'>Главная страница</a>";
                  }
                  else {
                      exit("Извините введеный вами логин или пароль неверны.!");
                  }
