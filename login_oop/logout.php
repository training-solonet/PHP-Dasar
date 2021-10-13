<?php
	session_start();
	session_destroy();
	echo '<div align="center">
				<img style="margin-top = -400px;" src="Assets/img/spin.gif">
			  </div>';
	header('Refresh: 2;url=index.php');
?>