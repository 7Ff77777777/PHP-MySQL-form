<?php
 if (isset($_POST['login'])) {$login = $_POST['login']; if ($login == ''){unset($login);}}
 if (isset($_POST['password'])) {$password = $_POST['password']; if ($password ==''){unset($password);}}
 if (empty($login) or empty($password)){
     exit("Вы ввели не всю информацию вернитесь назад и заполните все поля");
 }
 $login = stripslashes($login);
 $login = htmlspecialchars($login);
 $password = stripslashes('$password');
 $password = htmlspecialchars('$password');

 $login = trim($login);
 $password = trim($password);

 include ("bd.php");
 $result = $mysqli->query('login','mysqli_store_result');
 if (!$mysqli->query("SET @a:='введённый логин уже занят'")) {
     printf("Error:%s/n", $mysqli->error);
 }
 $result->close();
 $mysqli->close();

 $result2 = $mysqli->query('login,password,email','mysqli_use_result');
 if ($result2=='true'){
     echo "Вы успешно зарегистрированы!Теперь можете зайти на сайт.";
 }
 else{
     echo "Ошибка вы не зарегистрированы.";
 }
 
