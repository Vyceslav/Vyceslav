<?php
session_start();
setcookie('log','log');
setcookie('tel', 'tel');
//$telValid = /[^0-9]/;
if (isset($_POST['log']) && isset($_POST['tel']) == "/[^0-9]/"){
    $_SESSION['name'] = $_POST['log'];
    $_SESSION['number'] = $_POST['tel'];
    $_SESSION['password'] = $_POST['pass'];
    $_SESSION['password1'] = $_POST['pass1'];
    header('Location: http://example.palmo/home.php');
}