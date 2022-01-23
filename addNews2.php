<?php
$arrNews = [];
$news = fopen('news2.txt', 'a+');
if (isset($_POST['nameNews']) && $_POST['nameNews'] != ''){
    $arrNews['name'] = $_POST['nameNews'];
}else {
    echo 'Название новостиобязательно';
}
if (isset($_POST['content']) && strlen($_POST['content']) >= 2){
    $arrNews['content'] = $_POST['content'];
}else {
    echo 'Краткое описание минимум 20 символов';
}
if (isset($_POST['date']) && $_POST['date'] != ''){
    $arrNews['date'] = $_POST['date'];
}else{
    $arrNews['date'] = date("Y.m.d");
}
if (isset($_POST['textNews']) && strlen($_POST['textNews']) >= 10){
    $arrNews['textNews'] = $_POST['textNews'];
}else{
    echo 'Новасть должна быть минимум 100 символов';
}
if (isset($_POST['author']) && $_POST['author'] != '') {
    $arrNews['author'] = $_POST['author'];
}else{
    echo 'Укажите автора';
}
if (isset($_FILES['avatar'])){
    $avatar = $_FILES['avatar'];
    if (!is_dir('../uploads')){
        mkdir('../uploads', 0777, true);
    }
    move_uploaded_file($avatar['tmp_name'], '../uploads/'.$avatar['name']);
}else{
    echo 'Добавьте картинку';
}

$listNews = serialize($arrNews);
fwrite($news, $listNews);
fclose($news);
header('Location: http://example.palmo/index.php');




