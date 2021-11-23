<?php
    session_start();
    session_destroy();
    header('Location: aritzia login page.php');
    exit();
?>