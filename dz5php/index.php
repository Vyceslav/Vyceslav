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
<!--<form method="post" action="" enctype="multipart/form-data">-->
<!--    <input type="file" name="text">-->
<!--    <input type="submit">-->
<!--</form>-->
<form method="post" action="" name="userSave">
    <label>Имя<input type="text" name="name"></label>
    <label>Фамилия<input type="text" name="surname"></label>
    <label>Возраст<input type="text" name="age"></label>
    <label>Пароль<input type="password" name="pass"></label>
    <input type="submit" value="Зарегистрация">
</form>

<!-- Add your site or application content here -->
<!--<main style="display: flex; justify-content:center; margin-top: 25px;">-->
<!--    <img src="palmo.jpg" alt="">-->
<!--</main>-->
<?php

//Создайте файл fructs.txt
$fileFfructs = fopen('fructs.txt', 'w+');
//Запишите туда 10 названий фруктов
$arrFructs = ['Apple', 'banana', 'pear', 'Orange', 'Orange', 'plum', 'apricot', 'mango', 'grapefruit', 'Cherry'];
file_put_contents('fructs.txt', json_encode($arrFructs));
//Отсортируйте содержимое fructs.txt по алфвиту
$textFructs = file_get_contents('fructs.txt');
$arr = explode(',', $textFructs);
natcasesort($arr);
print_r($arr);
//Создайте форму загрузки текстового файла,отобразите его содержимое на странице
if($_SERVER['REQUEST_METHOD']=='POST') {
    if (isset($_FILES['text'])) {
        $fileItem = file_get_contents($_FILES['text']['tmp_name']);
        echo "<br>",$fileItem, "<br>";
    }
}
//Создайте форму регистрации пользователей,данные пользователей(кроме пароля) сохраните в файле users.txt
$userForm = fopen('users.txt', 'w+');
if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['age'])){
    file_put_contents('users.txt', json_encode($_POST['name']). json_encode($_POST['surname']). json_encode($_POST['age']));
    echo $userForm;
}


//Создайте функцию которая принимает путь к директории и удаляет все вложенные в нее файлы,которые больше 1мб
function recursiveRemoveDir($dir) {

    $includes = glob($dir.'/*');

    foreach ($includes as $include) {

        if(is_file($include) && stat($include['size']) >= 1) {

            unlink($include);
        }
    }

    rmdir($dir);
}
//    phpinfo()
?>
</body>

</html>
<?php
//phpinfo();
