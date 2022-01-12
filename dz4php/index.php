<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Palmo Helloe world</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#fafafa">
</head>

<body style="margin: 0;">
<form name="init" method="get" action="index1.php">
    <input name="registration" type="submit" value="Регистрация">
    <input name="authorization" type="submit" value=" Авторизация">

</form>
<form name="coc" method="post" action="cooce.php">
    <label>Имя:<input type="text" name="log" value="<?php echo isset($_COOKIE['log']) ? $_COOKIE['log'] : '' ?>"></label>
    <label>Телефон:<input type="text" name="tel" value="<?php echo isset($_COOKIE['tel']) ? $_COOKIE['tel'] : '' ?>"></label>
    <label>Пароль<input type="password" name="pass" value=""></label>
    <label>Подтвердить пароль<input type="password" name="pass1" value=""></label>
    <input type="submit">
</form>

<!-- Add your site or application content here -->
<!--<main style="display: flex; justify-content:center; margin-top: 25px;">-->
<!--    <img src="palmo.jpg" alt="">-->
<!--</main>-->
<?php


//1.1 Создать файл index.php в котором две кнопки для регистрации и авторизации на сайте
//1.2 Если пользователь уже авторизирован, то вместо кнопок регистрации и авторизации добавить ссылку для перехода на страницу Home
//
//2.1 Создать страницу для регистрации пользователя на сайте, состоящую из имени пользователя, логина, пароля и его подтверждения
//2.2 Добавить валидацию полей на пустоту, номер телефона должен быть из 10 цифр. Если валидация не прошла то выводить в форму список ошибок
//2.3 Так же необходимо сохранять поля формы в куки (кроме пароля) что бы не вводить их повторно
//2.4 При прохождении валидации сохранять данные с формы регистрации в сессию и перенаправлять на страницу Home, где вывести текст: Здравствуйте, "Имя пользователя"!
//
//3.1 Немного доработать форму авторизации, добавив валидацию (авторизация пользователя по логину и паролю)
//3.2 При успешной авторизации так же перенаправлять на страницу Home
//
//4.1 На странице Home, помимо приветственного текста, необходимо сделать кнопку с выходом из учетной записи (завершение сессии)
//@Vyceslav

//    phpinfo()
?>
</body>

</html>
<?php
//phpinfo();
