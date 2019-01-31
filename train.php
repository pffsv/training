<?php
//35.Команды SELECT, INSERT, DELETE, UPDATE
//Задачи для решения
	//Устанавливаем доступы к базе данных:
		$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
		$user = 'root'; //имя пользователя, по умолчанию это root
		$password = ''; //пароль, по умолчанию пустой
		$db_name = 'test'; //имя базы данных

	//Соединяемся с базой данных используя наши доступы:
		$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));

	//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
		mysqli_query($link, "SET NAMES 'utf8'");
	//ВЫБРАТЬ все_столбцы ИЗ workers ГДЕ ад_ди_больше_нуля (т.е. все)
		$query = "SELECT * FROM workers WHERE age = 27 OR salary != 400";

	//Делаем запрос к БД, результат запроса пишем в $result:
		$result = mysqli_query($link, $query) or die( mysqli_error($link) );

	//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

	//Массив результата лежит в $data, выведем его на экран:
		var_dump($data);

//На SELECT
//Для решения задач данного блока вам понадобятся следующие SQL команды: SELECT, WHERE.
 //1.Выбрать работника с id = 3.
	$query = "SELECT name FROM workers WHERE id = 3";

//2.Выбрать работников с зарплатой 1000$.
	$query = "SELECT * FROM workers WHERE salary = 1000";

//3.Выбрать работников в возрасте 23 года.
	$query = "SELECT * FROM workers WHERE age = 23"; 

//4.Выбрать работников с зарплатой более 400$.
	$query = "SELECT * FROM workers WHERE salary > 400";

//5.Выбрать работников с зарплатой равной или большей 500$.
	$query = "SELECT * FROM workers WHERE salary >= 500";

//6.Выбрать работников с зарплатой НЕ равной 500$.
	$query = "SELECT * FROM workers WHERE salary != 500";

//7.Выбрать работников с зарплатой равной или меньшей 900$.
	$query = "SELECT * FROM workers WHERE salary <= 900";

//8.Узнайте зарплату и возраст Васи.
	$query = "SELECT salary FROM workers WHERE name = 'Вася'";

//На OR и AND
//Для решения задач данного блока вам понадобятся следующие SQL команды: SELECT, WHERE, OR, AND.
//9.Выбрать работников в возрасте от 25 (не включительно) до 28 лет (включительно).
	$query = "SELECT * FROM workers WHERE age > 25 AND age <= 28";

//10.Выбрать работника Петю.
	$query = "SELECT * FROM workers WHERE name = 'Петя'";

//11.Выбрать работников Петю и Васю.
	$query = "SELECT * FROM workers WHERE name = 'Петя' OR name = 'Вася'";

//12.Выбрать всех, кроме работника Петя.
	$query = "SELECT * FROM workers WHERE name != 'Петя'";

//13.Выбрать всех работников в возрасте 27 лет или с зарплатой 1000$.
	$query = "SELECT * FROM workers WHERE age = 27 OR salary = 1000";

//14.Выбрать всех работников в возрасте от 23 лет (включительно) до 27 лет (не включительно) или с зарплатой 1000$. 
	$query = "SELECT * FROM workers WHERE (age >= 23 AND age < 27) OR salary = 1000";

//15.Выбрать всех работников в возрасте от 23 лет до 27 лет или с зарплатой от 400$ до 1000$.
	$query = "SELECT * FROM workers WHERE (age >= 23 AND age < 27) OR (salary > 400 AND salary < 1000)";

//16.Выбрать всех работников в возрасте 27 лет или с зарплатой не равной 400$.
	$query = "SELECT * FROM workers WHERE age = 27 OR salary != 400";

?>