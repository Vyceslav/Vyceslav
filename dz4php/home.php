<?php
session_start();
echo 'Здравствуйте, ', $_SESSION['name'];
session_destroy();
