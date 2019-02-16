<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');

	$host = 'localhost';
	$user = 'root';
	$password = '';
	$dbName = 'test';
	$link = mysqli_connect($host, $user, $password, $dbName);
	mysqli_query($link, "SET NAMES 'utf-8'");

	session_start();

	if(!empty($_SESSION['auth'])) {
		echo 'You are logged as ' . $_SESSION['logName'] . '<br>';
		echo '<a href="logout.php">Logout</a><br>';
		echo 'Your id is ' . $_SESSION['id'] . '<br>';
	} else {
		echo '<a href="login.php">login</a><br>';
		echo '<a href="register.php">Register</a><br>';
	}

		echo 'Index<br>';

		include 'info.php';

		echo '<a href="1.php">1</a><br>';
		echo '<a href="2.php">2</a><br>';
		echo '<a href="3.php">3</a><br>';
	
?>