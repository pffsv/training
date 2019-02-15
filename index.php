<?php
//Регистрация
		//Устанавливаем доступы к базе данных:
		$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
		$user = 'root'; //имя пользователя, по умолчанию это root
		$password = ''; //пароль, по умолчанию пустой
		$db_name = 'test'; //имя базы данных

	//Соединяемся с базой данных используя наши доступы:
		$link = mysqli_connect($host, $user, $password, $db_name);

	//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
		mysqli_query($link, "SET NAMES 'utf8'");

	//Делаем запрос к БД, результат запроса пишем в $result:
//		$result = mysqli_query($link, $query) or die(mysqli_error($link));

//		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

	// Если форма регистрации отправлена...
	if (!empty($_POST['login']) and !empty($_POST['password'])) {
	
		// Пишем логин и пароль из формы в переменные для удобства работы:
		$login = $_POST['login'];
		$password = $_POST['password'];
		
		// Формируем и отсылаем SQL запрос:
		$query = "INSERT INTO users SET login='$login', password='$password'";
		mysqli_query($link, $query);
	}
?>
<form action="" method="POST">
	<input name="login">
	<input name="password" type="password">
	<input type="submit" value="Отправить">
</form>

