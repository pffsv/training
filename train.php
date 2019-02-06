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
		$query = "SELECT SUM(age) FROM workers";

	//Делаем запрос к БД, результат запроса пишем в $result:
		$result = mysqli_query($link, $query) or die(mysqli_error($link));

		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);


	//Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
		var_dump($data);



//1.Выберите из таблицы workers записи с id равным 3, 5, 6, 10.

$query = "SELECT * FROM workers WHERE id IN(3,5,6,10)";

//2.Выберите из таблицы workers записи с id равным 3, 5, 6, 10 и логином, равным 'eee', 'zzz' или 'ggg'.

$query = "SELECT * FROM workers WHERE id IN(3,5,6,10) AND login IN('eee', 'zzz', 'ggg')";

//3.Выберите из таблицы workers записи c зарплатой от 500 до 1500.

$query = "SELECT * FROM workers WHERE price BETWEEN 500 AND 1500";

//4.Выберите из таблицы workers все записи так, чтобы вместо id было workersId, вместо login – workersLogin, вместо salary - workersSalary.

$query = "SELECT id AS userId, login AS userLogin, salary AS userSalary FROM workers";

//5.Найдите в таблице workers минимальный возраст.

$query = "SELECT MIN(age) FROM workers";
 
//7.Найдите в таблице workers суммарный возраст.

$query = "SELECT SUM(age) FROM workers";
 
//8.Вставьте в таблицу workers запись с полем date с текущим моментом времени в формате 'год-месяц-день часы:минуты:секунды'.
 
$query = "INSERT INTO workers ('name', 'date') VALUES ('Вася', NOW())";

//9.Вставьте в таблицу workers запись с полем date с текущей датой в формате 'год-месяц-день'.

$query = "INSERT INTO workers ('name', 'date') VALUES ( 'Маша', CURDATE())";

//10/При выборке из таблицы workers запишите день, месяц и год в отдельные поля.
/*
SELECT EXTRACT(DAY FROM date) AS day,
EXTRACT(MONTH FROM date) AS month,
EXTRACT(YEAR FROM date) AS year 
FROM workers
*/
//11.Выберите из таблицы workers записи, в которых минуты больше секунд.

$query = "SELECT * FROM workers WHERE HOUR(date) > SECOND(date)";

//12.При выборке из таблицы workers прибавьте к дате 1 год.

$query = "SELECT DATE_ADD(date, INTERVAL 1 YEAR) as date FROM workers";
//Или:
$query = "SELECT date + INTERVAL 1 YEAR as date FROM workers";

//13.При выборке из таблицы workers отнимите от даты 1 год.

$query = "SELECT DATE_ADD(date, INTERVAL - 1 YEAR) as date FROM workers";
//Или:
$query = "SELECT date - INTERVAL 1 YEAR as date FROM workers";

//14.При выборке из таблицы workers прибавьте к дате 3 года, 4 месяца.

$query = "SELECT DATE_ADD(date, INTERVAL '3:4' YEAR_MONTH) as date FROM workers";
//Или:
$query = "SELECT date + INTERVAL 3 YEAR + INTERVAL 4 MONTH as date FROM workers";

//15.При выборке из таблицы workers прибавьте к дате 4 дня, 3 часа, 2 минуты, 1 секунду.

$query = "SELECT DATE_SUB(date, INTERVAL '4 3:2:1' DAY_SECOND) FROM workers";

//16.При выборке из таблицы workers прибавьте к дате 3 дня и отнимите 2 часа.

$query = "SELECT date + INTERVAL 3 DAY - INTERVAL 2 HOUR FROM workers";

 ?>