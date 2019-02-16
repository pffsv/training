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

	$form = '
		<form method="POST">
			<input name="log">
			<input type="password" name="pass">
			<input type="submit">
		</form>
	';

	if(!empty($_POST['log']) and !empty($_POST['pass'])) {

		$log = $_POST['log'];
		$pass = $_POST['pass'];

		$query = "SELECT * FROM users WHERE login = '$log' AND pass = '$pass'";
		$res = mysqli_query($link, $query) or die(mysqli_error($link));
		$user = mysqli_fetch_assoc($res);

		if(!empty($user)) {
			$_SESSION['auth'] = true;

			$_SESSION['logName'] = $_POST['log'];
			
			$_SESSION['mess'] = [
				'text' => 'Authorized.'
			];
			header('Location: /index.php'); die();
		} else {
			echo $form;
		}
	} else {
		echo $form;
	}
?>