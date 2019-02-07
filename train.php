<?php
//46.Задачи на продвинутые SQL запросы
	//Устанавливаем доступы к базе данных:
		$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
		$user = 'root'; //имя пользователя, по умолчанию это root
		$password = ''; //пароль, по умолчанию пустой
		$db_name = 'test'; //имя базы данных

	//Соединяемся с базой данных используя наши доступы:
		$link = mysqli_connect($host, $user, $password, $db_name);

	//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
		mysqli_query($link, "SET NAMES 'utf8'");

	//Формируем тестовый запрос:
		$query = "INSERT INTO workers SET id=5, date=NOW()";

	//Делаем запрос к БД, результат запроса пишем в $result:
		$result = mysqli_query($link, $query) or die(mysqli_error($link));

		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);


	//Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
		var_dump($data);



//На IN
//Для решения задач данного блока вам понадобятся следующие SQL команды и функции: IN.
//1.Выберите из таблицы workers записи с id равным 1, 2, 3, 5, 14.
$query = "SELECT * FROM workers WHERE id IN(1,2,3,5,14)";

//2.Выберите из таблицы workers записи с login равным 'eee', 'bbb', 'zzz'.
$query =  "SELECT * FROM workers WHERE  login IN('eee', 'bbb', 'zzz'')";
 
//3.Выберите из таблицы workers записи с id равным 1, 2, 3, 7, 9, и логином, равным 'user', 'admin', 'ivan' и зарплатой больше 300.
$query = "SELECT * FROM workers WHERE id IN(1,2,3,7,9) AND login IN('user', 'admin', 'ivan') AND price>300";

//На BETWEEN
//Для решения задач данного блока вам понадобятся следующие SQL команды и функции: BETWEEN.
//4.Выберите из таблицы workers записи c зарплатой от 100 до 1000.
$query = "SELECT * FROM workers WHERE salary BETWEEN 100 AND 1500";

//5.Выберите из таблицы workers записи c id от 3 до 10 и зарплатой от 300 до 500.
$query = "SELECT * FROM workers WHERE id BETWEEN 3 AND 10 AND salary BETWEEN 100 AND 500";

//На AS
//Для решения задач данного блока вам понадобятся следующие SQL команды и функции: AS.
//6.Выберите из таблицы workers все записи так, чтобы вместо id было userId, вместо login – userLogin, вместо salary - userSalary.
$query = "SELECT id AS userId, login AS userLogin, salary AS userSalary FROM workers";

//На DISTINCT
//Для решения задач данного блока вам понадобятся следующие SQL команды и функции: DISTINCT.
//7.Выберите из таблицы workers все записи так, чтобы туда попали только записи с разной зарплатой (без дублей).
$query = "SELECT DISTINCT salary FROM workers";

//8.Получите SQL запросом все возрасты без дублирования.
$query = "SELECT DISTINCT age FROM workers";

//На MIN и MAX
//Для решения задач данного блока вам понадобятся следующие SQL команды и функции: MIN, MAX.
//9.Найдите в таблице workers минимальную зарплату.
$query = "SELECT MIN(salary) FROM workers";

//10.Найдите в таблице workers максимальную зарплату.
$query = "SELECT MAX(salary) FROM workers";

//На SUM
//Для решения задач данного блока вам понадобятся следующие SQL команды и функции: SUM.
//11.Найдите в таблице workers суммарную зарплату.
$query = "SELECT SUM(salary) FROM workers";

//12.Найдите в таблице workers суммарную зарплату для людей в возрасте от 21 до 25.
$query = "SELECT SUM(salary) FROM workers WHERE age BETWEEN 21 AND 25";

//13.Найдите в таблице workers суммарную зарплату для id, равного 1, 2, 3 и 5.
$query = "SELECT SUM(salary) FROM workers WHERE id IN(1,2,3,5)";

//На AVG
//Для решения задач данного блока вам понадобятся следующие SQL команды и функции: AVG.
//14.Найдите в таблице workers среднюю зарплату.
$query = "SELECT AVG(salary) FROM workers";

//15.Найдите в таблице workers средний возраст.
$query = "SELECT AVG(age) FROM workers";

//На NOW, CURRENT_DATE, CURRENT_TIME
//Для решения задач данного блока вам понадобятся следующие SQL команды и функции: NOW, CURRENT_DATE, CURRENT_TIME.
//16.Выберите из таблицы workers все записи, у которых дата больше текущей.
$query = "SELECT * FROM workers WHERE date>CURRENT_DATE()";

//17.Вставьте в таблицу workers запись с полем date с текущим моментом времени в формате 'год-месяц-день часы:минуты:секунды'.
$query = "INSERT INTO workers ('name', 'date') VALUES ('Вася', NOW())";

//18.Вставьте в таблицу workers запись с полем date с текущей датой в формате 'год-месяц-день'.
$query = "INSERT INTO workers ('name', 'date') VALUES ('Петя', CURDATE())";

//19.Вставьте в таблицу workers запись с полем time с текущим моментом времени в формате 'часы:минуты:секунды'.
$query = "INSERT INTO workers ('name', 'time') VALUES ('Коля', CURTIME())";

 ?>