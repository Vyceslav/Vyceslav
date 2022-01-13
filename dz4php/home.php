<?php
session_start();
echo 'Здравствуйте, ', $_SESSION['name'];
?>
<form action="destroy.php">
    <input type="submit">
</form>
