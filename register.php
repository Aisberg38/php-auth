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
    <title> Регистрация </title>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>

<!-- Форма регистрации -->

<form class="form" action="vendor/signup.php" method="POST" enctype="multipart/form-data>">
    <label>ФИО</label>
    <input type="text" name="full_name" placeholder="Введите ваше полное имя">
    <label for="login"> Ваш логин</label>
    <input type="text" name="login" id="login" placeholder="Введите ваш логин">
    <label> Почта</label>
    <input type="email" name="email" placeholder="Введите ваш e-mail">
    <label> Аватарка</label>
    <input type="file" name="avatar">
    <label> Ваш пароль </label>
    <input type="password" name="password" id="password" placeholder="Введите ваш пароль">
    <label> Подтверждение пароля</label>
    <input type="password" name="password_confirm" placeholder="Введите пароль еще раз">
    <button type="submit">Отправить</button>
    <p>
        Уже есть аккаунт? <a href="index.php">Войти</a>
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
