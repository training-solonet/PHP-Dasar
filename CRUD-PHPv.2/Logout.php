<?php
session_start();
session_unset();
session_destroy();
$_SESSION = [];

setcookie('id', '');
setcookie('username', '');

header("Location: Login.php");
exit;
