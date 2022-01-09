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
<form name="age" method="GET" action="">
    <div>Укажите ваш возраст</div>
    <div>менее 20лет<input type="radio" name="age" value="1"></div>
    <div>20-25<input type="radio" name="age" value="2"></div>
    <div>26-30<input type="radio" name="age" value="3"></div>
    <div>более 30лет<input type="radio" name="age" value="4"></div>
    <input type="submit">
</form>
<form name="product" method="post" action="" enctype="multipart/form-data">
    <div>Cоздаем новый товар</div>
    <label>Наименование<input type="text" name="name"></label>
    <label>Производитель<input type="text" name="manufacturer"></label>
    <label>Описание<input type="text" name="description"></label>
    <label><input type="file" name="avatar"></label>
    <input type="submit">

</form>


<!-- Add your site or application content here -->
<!--<main style="display: flex; justify-content:center; margin-top: 25px;">-->
<!--    <img src="palmo.jpg" alt="">-->
<!--</main>-->
<?php
//Спросите город пользователя с помощью формы. Выведите на экран фразу 'Ваш город: %Город%'
if (isset($_POST)) {
    print("Город: " . $_POST['name']);
}
//Спросите у пользователя его возраст с помощью нескольких radio-кнопок. Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30.
if (isset($_REQUEST['age']) and $_REQUEST['age'] == 1) {
    echo "<br/>", 'Вам менее 25лет';
}
if (isset($_REQUEST['age']) and $_REQUEST['age'] == 2) {
    echo "<br/>", 'Вам 20-25';
}
if (isset($_REQUEST['age']) and $_REQUEST['age'] == 3) {
    echo "<br/>", 'Вам 26-30';
}
if (isset($_REQUEST['age']) and $_REQUEST['age'] == 4) {
    echo "<br/>", 'Вам больше 30';
}
//Создайте форму создания товара(Ввести его наименование,производитель,краткая характеристика,фотография)
if (isset($_POST)){
    print("<br>Название: ".$_POST['name']);
    print("<br>Произведено: ".$_POST['manufacturer']);
    print("<br>Описание: ".$_POST['description']);

}
//Создайте страницу теста.В тесте должны быть разные типы ответов(Текстовый,Один из нескольких вариантов,Несколько правильных ответов,вопрос с картинками).По отправке формы отобразить ответы пользователя,правильные ответы и подсчитать количество баллов


?>
</body>

</html>
<?php
//phpinfo();
