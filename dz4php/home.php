<?php
session_start();
echo 'Здравствуйте, ', $_SESSION['name'];
session_destroy();
?>
<a href="home.php">Завершить сессию</a>
