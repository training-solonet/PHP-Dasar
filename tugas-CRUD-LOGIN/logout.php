<?php

session_start();
session_unset(); 
session_destroy();
$_SESSION = [];

setcookie('id', '', time() -3600);
setcookie('user', '', time() -3600);

header('Location: login.php');
exit;


?>