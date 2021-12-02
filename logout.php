<?php
    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['login']);
    header('Location: aritzia login page.php');
?>
