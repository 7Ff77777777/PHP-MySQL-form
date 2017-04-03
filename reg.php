<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
<h2>Регистрация</h2>
<form action="save_user.php" method="post">
    <p>
        <label>Login:<br></label>
        <input name="login" type="text" size="15" maxlength="15">
    </p>
    <p>
        <label>Password:<br></label>
        <input name="password" type="password" size="15" maxlength="15">
    </p>
    <p>
        <input type="submit" name="submit" value="Зарегистрироваться">
    </p>
</form>

</body>
</html>