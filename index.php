<?php
//36.Команды ORDER BY, LIMIT, COUNT, LIKE в SQL
/*
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
		$query = "SELECT * FROM workers WHERE id > 0";

	//Делаем запрос к БД, результат запроса пишем в $result:
		$result = mysqli_query($link, $query) or die(mysqli_error($link));

	//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

	//Массив результата лежит в $data, выведем его на экран:
		var_dump($data);
*/
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
		$query = "SELECT * FROM workers WHERE name LIKE '%я'"; 

	//Делаем запрос к БД, результат запроса пишем в $result:
		$result = mysqli_query($link, $query) or die( mysqli_error($link) );

	//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

	//Массив результата лежит в $data, выведем его на экран:
		var_dump($data); 

//ORDER BY - сортировка
//С помощью команды ORDER BY можно сортировать строки результата.
//Выберем из нашей таблицы workers всех работников и отсортируем их по возрасту:
	//В $data строки будут отсортированы по возрасту от меньшего к большему:
	$query = "SELECT * FROM workers WHERE id>0 ORDER BY age";

//Если мы хотим обратный порядок сортировки, то следует написать:
	//В $data строки будут отсортированы по возрасту от большего к меньшего:
	$query = "SELECT * FROM workers WHERE id>0 ORDER BY age DESC";

//LIMIT — ограничение количества
//С помощью команды LIMIT мы можем ограничить количество строк в результате.
//В следующем примере ограничим количество строк до двух:
	//В $data будет только две первых строки:
	$query = "SELECT * FROM workers WHERE id>0 LIMIT 2";

//С помощью LIMIT можно выбрать несколько строк из середины результата!
//В примере ниже мы выберем со второй строки, 5 штук:
	//В $data будут строки со второй, пять штук:
	$query = "SELECT * FROM workers WHERE id>0 LIMIT 2,5";

//LIMIT и ORDER вместе:
	//В $data будут строки со вторую, 5 штук, отсортированные по убыванию id
	$query = "SELECT * FROM workers WHERE id>0 ORDER BY id DESC LIMIT 2,5";	

//Команда COUNT — считаем количество
//С помощью команды COUNT можно подсчитать количество строк в выборке.
/*
	//В $result будет лежать количество строк:
	$query = "SELECT COUNT(*) as count FROM workers WHERE id>0"; 
	$result = mysqli_query($link, $query) or die( mysqli_error($link));
	$count = mysqli_fetch_[$result];

	//В $count будет лежать массив 'count'=>кол-во:
	var_dump($count);
//Обратите внимание на распространенную ошибку с COUNT: конструкцию COUNT(*) следует писать слитно, без всяких пробелов, иначе не будет работать.*/

//Команда LIKE - реализуем поиск
//С помощью команды LIKE (англ. подобный) можно реализовать поиск. Посмотрите пример использования с комментарием:

	//ВЫБРАТЬ все ИЗ таблицы ГДЕ имя ПОДОБНО любой_строке_заканчивающейся_на_я
	$query = "SELECT * FROM workers WHERE name LIKE '%я'";
	/*
		Результатом будет Петя, Вася и Коля
		(если они еще уцелели после урока с DELETE).
	*/	

//Кавычки ``
//Обратите внимание на такой нюанс: следующий запрос работать не будет, так как имя таблицы from совпадает с командой FROM:
	$query = "SELECT * FROM from";

//В таких случаях проблемные слова следует брать в косые кавычки, вот так:
	$query = "SELECT * FROM `from`";
?>