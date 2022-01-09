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
<form name="city" method="post" action="">
    <label>Назовите ваш город:<input type="text" name="name"></label>
    <input type="submit" name="send" value="Отправить">

</form>
<form>

</form>

<!-- Add your site or application content here -->
<!--<main style="display: flex; justify-content:center; margin-top: 25px;">-->
<!--    <img src="palmo.jpg" alt="">-->
<!--</main>-->
<?php
//Спросите город пользователя с помощью формы. Выведите на экран фразу 'Ваш город: %Город%'
if (isset($_POST)){
    print("Город: ". $_POST['name']);
}
//Спросите у пользователя его возраст с помощью нескольких radio-кнопок. Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30.

//Создайте форму создания товара(Ввести его наименование,производитель,краткая характеристика,фотография)

//Создайте страницу теста.В тесте должны быть разные типы ответов(Текстовый,Один из нескольких вариантов,Несколько правильных ответов,вопрос с картинками).По отправке формы отобразить ответы пользователя,правильные ответы и подсчитать количество баллов


?>
</body>

</html>
<?php
//phpinfo();
