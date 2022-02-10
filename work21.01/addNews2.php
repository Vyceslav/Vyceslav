<?php
$content = strlen($_POST['content']);
$text = strlen($_POST['textNews']);
if (isset($_POST['nameNews']) && $content >= 2 && isset($_POST['published']) && $text >= 5 && isset($_POST['author'])) {
    $nameNews = $_POST['nameNews'];
    setcookie('nameNews', $nameNews);
    setcookie('content', $_POST['content']);
    setcookie('date', $_POST['date']);
    setcookie('textNews', $_POST['textNews']);
    setcookie('author', $_POST['author']);
    header('Location: http://example.palmo/index.php');
}


