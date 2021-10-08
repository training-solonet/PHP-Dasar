<?php
    session_start();
    $_SESSION['login'] = '';
    unset($_SESSION['login']);
    session_unset();
    session_destroy();
    setcookie('key','', time()-3600);
    header("Location: login.php");
?>