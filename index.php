<?php
session_start();

if($_SESSION['user']){
  header('Location: profile.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>
        <form class="form" action="/vendor/signin.php" method="POST">
            <label for="login">Логин</label>
            <input type="text" name="login" id="login" placeholder="Введите свой логин">
            <label for="password">Пароль</label>
            <input type="password" name="password" id="password" placeholder="Введите пароль">
            <input type="submit">
            <p>
                У вас нет аккаунта? - <a href="register.php">Зарегистрируйтесь</a>
            </p>
            <?php
            if(isset($_SESSION['message'])){
            echo '<p class="msg">' . $_SESSION['message'] . '</p>';
            }
            unset($_SESSION['message']);
            ?>
        </form>
</body>
</html>
