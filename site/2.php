<?php
session_start();
	if(!empty($_SESSION['auth'])) {
		echo 'You are logged as ' . $_SESSION['logName'];
	} else {
		echo '<a href="login.php">Logged in</a>';
	}
?>