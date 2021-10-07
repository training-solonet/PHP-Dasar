<?php

session_start();
$_SESSION['name'] = '';
unset($_SESSION['name']);
session_unset();
session_destroy();
header('Location: login-session.php');

?>