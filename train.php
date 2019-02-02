<?php
//36.Задачи на базы данных SQL в PHP
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
		$query = "SELECT COUNT(*) as count FROM workers WHERE salary = 500";

	//Делаем запрос к БД, результат запроса пишем в $result:
		$result = mysqli_query($link, $query) or die( mysqli_error($link) );

	//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

	//Массив результата лежит в $data, выведем его на экран:
		var_dump($data); 
//На LIMIT
//Для решения задач данного блока вам понадобятся следующие SQL команды: LIMIT.
//1.Из таблицы workers достаньте первые 6 записей. 
	$query = "SELECT * FROM workers WHERE id > 0 LIMIT 6";

//2.Из таблицы workers достаньте записи со вторую, 3 штуки.
	$query = "SELECT * FROM workers WHERE id > 0 LIMIT 2,3";

//На ORDER BY
//Для решения задач данного блока вам понадобятся следующие SQL команды: ORDER BY, LIMIT.
//3.Из таблицы workers достаньте всех работников и отсортируйте их по возрастанию зарплаты.
	$query = "SELECT * FROM workers ORDER BY salary";

//4.Из таблицы workers достаньте всех работников и отсортируйте их по убыванию зарплаты.
	$query = "SELECT * FROM workers ORDER BY salary DESC";

//5.Из таблицы workers достаньте работников со второго по шестого и отсортируйте их по возрастанию возраста.
	$query = "SELECT * FROM workers ORDER BY age LIMIT 2,4";

//На COUNT
//Для решения задач данного блока вам понадобятся следующие функции SQL: COUNT.
//6.В таблице workers подсчитайте всех работников.
	$query = "SELECT COUNT(*) as count FROM workers";

//7.В таблице workers подсчитайте всех работников c зарплатой 300$.
	$query = "SELECT COUNT(*) as count FROM workers WHERE salary = 300";
?>