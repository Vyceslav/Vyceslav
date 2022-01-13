<?php
session_start();
setcookie('log','log');
setcookie('tel', 'tel');
$_SESSION['log'] = 'Piter';
$_SESSION['pass'] = '202cb962ac59075b964b07152d234b70';
//$telValid = "/[^0-9]/";
if (isset($_POST['log']) && $_POST['log'] == $_SESSION['log'] && isset($_POST['tel']) && is_numeric($_POST['tel']) && strlen($_POST['tel']) == 10 && $_POST['pass'] == $_POST['pass1'] && md5($_POST['pass']) == $_SESSION['pass']){
    $_SESSION['name'] = $_POST['log'];
    $_SESSION['number'] = $_POST['tel'];
    $_SESSION['password'] = $_POST['pass'];
    $_SESSION['password1'] = $_POST['pass1'];
    header('Location: http://example.palmo/home.php');
}else {
//    header('Location: http://example.palmo/index.php');
    echo 'Не верно введены данные';
}
