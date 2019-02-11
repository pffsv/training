Урок № 49
новая вкладка с new.code.mu
Авторизация
Простая авторизация через базу данных
<p>Давайте реализуем самую простую авторизацию на базе данных, пока без регистрации.

Вместо регистрации пользователей, мы просто вобьем их логины и пароли в таблицу в базе данных.

Итак, создайте с помощью PhpMyAdmin таблицу users с полями login (логин) и password (пароль) в какой-нибудь базе данных.

Давайте вручную добавим в нашу таблицу двух пользователей: первого с логином user и паролем 12345 и второго с логином admin и паролем 123.

Для этого нам вначале нужно реализовать форму, в которую будут вбиваться логин и пароль. Затем нужно будет написать PHP код, который будет проверять, отправлена ли форма и, если отправлена, то проверять, есть ли в базе данных пользователь с таким логином и паролем. Если есть - то авторизовывать его, а если нет - выводить сообщение о том, что данные вбиты неверно.

Пусть весь наш код авторизации будет размещаться на странице login.php.

Давайте напишем описанный выше код (при решении задач не копируйте этот код - изучите его и напишите такое же самостоятельно; это же относится к остальным примерам):

<?php
	$host = 'localhost'; 
	$user = 'root'; 
	$password = ''; 
	$db_name = 'test';

	
	$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));

	
	mysqli_query($link, "SET NAMES 'utf8'");
	
	// Если форма авторизации отправлена...
	if (!empty($_POST['password']) and !empty($_POST['login'])) {
		
		// Пишем логин и пароль из формы в переменные для удобства работы:
		$login = $_POST['login'];
		$password = $_POST['password'];
		
		// Формируем и отсылаем SQL запрос:
		$query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
		$result = mysqli_query($link, $query);
		
		// Преобразуем ответ из БД в нормальный массив PHP:
		$user = mysqli_fetch_assoc($result);
		var_dump($user);
		
		if (!empty($user)) {
			// Пользователь прошел авторизацию, выполним какой-то код
		} else {
			// Пользователь неверно ввел логин или пароль, выполним какой-то код
		}
	}
?>
<form action="" method="POST">
	<input name="login">
	<input name="password" type="password">
	<input type="submit" value="Отправить">
</form>