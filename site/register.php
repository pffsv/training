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

	if(!empty($_POST['log']) and !empty($_POST['pass'])) {

		$log = trim($_POST['log']);
		$pass = trim($_POST['pass']);
		$email = trim($_POST['email']);
		$birthdate = $_POST['birthdate'];
		$country = $_POST['country'];
		$date = date('Y-m-d');

		$flag = true;

		// Проверка на пустоту пароля и логина
		if($log == '' and $pass == '') {
			$flag = false;
			$_SESSION['messReg']['emptyLogPass'] = [
				'text' => 'Login and password fields must not be empty. Try again.',
				'status' => ' class="errorReg"'
			];
		}	
		// Проверка логина
		if(!(strlen(trim($_POST['log'])) >= 4 and strlen(trim($_POST['log'])) <= 10) and !preg_match('#(a-zA-Z0-9)+#', $_POST['log'])) {
				$flag = false;
				$_SESSION['messReg']['log'] = [
					'text' => 'Login must consist of 4 - 10 Latin characters or digits.',
					'status' => ' class="errorReg"'
				];
		}
		// проверка пароля
		if(!(strlen(trim($_POST['pass'])) >= 6 and strlen(trim($_POST['pass'])) <= 12) and !preg_match('#(a-zA-Z0-9)+#', $_POST['pass'])) {
				$flag = false;
				$_SESSION['messReg']['pass'] = [
					'text' => 'Password must consist of 6 - 12 Latin characters or digits.',
					'status' => ' class="errorReg"'
				];
		}
		// Проверка на совпадение пароля
		if($_POST['pass'] != $_POST['confirm']) {
			$flag = false;
			$_SESSION['messReg']['confirm'] = [
				'text' => 'Password does not match confirmation. Try again.',
				'status' => ' class="errorReg"'
			];
		}
		// Проверка e-mail
		if(preg_match('#^([^.;@\s]+\.)*[^.;@\s]{1,64}@([\wа-я]+[-.])*[\wа-я]+\.[a-zа-я]{2,6}$#ui', $email) != 1) {
			$flag = false;
			$_SESSION['messReg']['email'] = [
				'text' => 'You have entered an incorrect email.',
				'status' => ' class="errorReg"'
			];
		}
		// Проверка даты рождения
		if($birthdate) {
			$arr = explode('.', $birthdate);
			if(!checkdate($arr[1], $day = $arr[0], $arr[2])) {
				$flag = false;
				$_SESSION['messReg']['birthdate'] = [
					'text' => 'You have entered an incorrect date of birth.',
					'status' => ' class="errorReg"'
				];		
			}
		}

		$query = "SELECT * FROM users WHERE login = '$log'";
		$user = mysqli_fetch_assoc(mysqli_query($link, $query));
		// Проверка занятости логина
		if(!empty($user)) {
			$flag = false;
				$_SESSION['messReg']['busyLog'] = [
					'text' => 'You have entered a busy login.',
					'status' => ' class="errorReg"'
				];		
		}

		if($flag) {
			$query = "INSERT INTO users (login, password, email, birthday, country, registration_date) VALUES ('$log', '$pass', '$email', '$birthdate', '$country', '$date')";
			mysqli_query($link, $query) or die(mysqli_error($link));
			$_SESSION['auth'] = true;
			$_SESSION['logName'] = $log;
			$id = mysqli_insert_id($link);
			$_SESSION['id'] = $id;

			header('Location: /index.php');
		} else {
			include 'registerForm.php';	
		}

	} else {
		include 'registerForm.php';
	}
?>