<?php
//start session
session_start();

require_once 'App/User.php';

$user = new User();

if(isset($_POST['login'])){
	$username = $user->escape_string($_POST['username']);
	$password = $user->escape_string($_POST['password']);

	$auth = $user->check_login($username, $password);

	if(!$auth){
		$_SESSION['message'] = 'Invalid username or password';
    	header('location:index.php');
	}
	else{
		$_SESSION['user'] = $auth;
		echo '<div align="center">
				<img style="margin-top = -400px;" src="Assets/img/spin.gif">
			  </div>';
		header('Refresh: 2; url=home.php');
	}
}
else{
	$_SESSION['message'] = 'You need to login first';
	header('location:index.php');
}
?>