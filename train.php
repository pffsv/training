<?php
//35.Команды SELECT, INSERT, DELETE, UPDATE

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
		$query = "UPDATE workers SET salary=1000, age=20 WHERE name='Дима'";

	//Делаем запрос к БД, результат запроса пишем в $result:
		$result = mysqli_query($link, $query) or die( mysqli_error($link) );

	//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
//		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

	//Массив результата лежит в $data, выведем его на экран:
//		var_dump($data);


//1.Выбрать работника с id=10.
	$query = "SELECT * FROM workers WHERE id=1";

//2.Выбрать работников с зарплатой 500$.
	$query = "SELECT * FROM workers WHERE salary=500";

//3.Выбрать работников с зарплатой 500$ и id больше 3.
	$query = "SELECT * FROM workers WHERE salary=500 AND id>3";	

//4.Добавьте нового работника Джона, 20 лет, зарплата 700$.
//Воспользуемся первым синтаксисом:
	$query = "INSERT INTO workers SET name='Джон', age=20, salary=700";

//Воспользуемся вторым синтаксисом:
	$query = "INSERT INTO workers (name, age, salary) VALUES ('Джон', 20, 700)";

//5.Добавьте одним запросом трех новых работников: Катю, 20 лет, зарплата 500$, Юлю, 25 лет, зарплата 600$, Женю, 30 лет, зарплата 900$.
	$query = "INSERT INTO workers (name, age, salary)
			VALUES ('Катя', 20, 500), ('Юля', 25, 600), ('Женя', 30, 900)";

//6.Удалите работника Джона.
	$query = "DELETE FROM workers WHERE name='Джон'";

//7.Поставьте Диме зарплату в 1000$.
	$query = "UPDATE workers SET salary=1000 WHERE name='Дима'";

//8.Поставьте Диме зарплату в 1000$ и возраст 20 лет.
	$query = "UPDATE workers SET salary=1000, age=20 WHERE name='Дима'";		
?>