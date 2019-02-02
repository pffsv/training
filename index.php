<?php
//39.Практика по работе с БД в PHP
//Давайте теперь сделаем добавление нового работника с помощью формы.
//Давайте сделаем HTML код формы добавления:
?>
<!--
<form action="" method="POST">
	<input name="name">
	<input name="age">
	<input name="salary">
	<input type="submit" value="добавить работника">
</form>
А теперь напишем PHP код, который будет формировать INSERT запрос для сохранения данных из формы в базу данных:
-->
<?php
/*
	$name = $_POST['name'];
	$age = $_POST['age'];
	$salary = $_POST['salary'];
	
	$query = "INSERT INTO workers SET name='$name', age='$age', salary='$salary'";
	mysqli_query($link, $query) or die(mysqli_error($link));
	
Давайте теперь совместим нашу форму и код, обрабатывающий данные с нее в одном файле.

Напомню, что в этом случае наш скрипт выполнится два раза: первый раз пользователь зайдет на страницу, 
заполнит форму и отправит ее. После отправления мы попадем на эту же страницу и скрипт начнет выполнятся сначала, 
но уже будут доступны данные из формы.
Эти данные будут хранится в $_POST, если форма, как у нас, отправлена методом POST.
Наш PHP код для сохранения должен выполнится после того, как форма была отправлена 
и не должен выполнятся при первом заходе пользователя на страницу.
Добиться этого мы можем с помощью ифа. Например, можно спросить, не пустой ли POST и, 
если не пустой - только тогда начинать выполнять наш код для сохранения, вот так:

	if (!empty($_POST)) {
		$name = $_POST['name'];
		$age = $_POST['age'];
		$salary = $_POST['salary'];
		
		$query = "INSERT INTO workers SET name='$name', age='$age', salary='$salary'";
		mysqli_query($link, $query) or die(mysqli_error($link));
	}
Давайте совместим наш PHP и форму:

	if (!empty($_POST)) {
		$name = $_POST['name'];
		$age = $_POST['age'];
		$salary = $_POST['salary'];
		
		$query = "INSERT INTO workers SET name='$name', age='$age', salary='$salary'";
		mysqli_query($link, $query) or die(mysqli_error($link));
	}
*/	
?>
<!--<form action="" method="POST">
	<input name="name">
	<input name="age">
	<input name="salary">
	<input type="submit" value="добавить работника">
</form>
Я поставил форму под PHP кодом, но ее можно разместить где угодно - 
ведь наш файл со скриптом выполняется два раза и поэтому разницы нет, где что будет размещено.

В общем код, решающий поставленную задачу, написан. Его можно разместить на отдельной странице, 
а можно совместить с нашей HTML таблицей работников.

Первый вариант у нас уже реализован - можете потестировать его, разместив этот код в отдельном 
файле и проверив его работу (не забудьте про подключение к базе данных, которое я опускаю для краткости).

Давайте теперь совместим вывод таблицы работников с добавлением нового.

Вспомним код, который делает вывод таблицы и удаление:

<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
		<th>delete</th>
	</tr>-->
	<?php
/*	
		// Удаление по id (до получения!):
		if (isset($_GET['del'])) {
			$del = $_GET['del'];
			$query = "DELETE FROM workers WHERE id=$del";
			mysqli_query($link, $query) or die(mysqli_error($link));
		}
		
		// Получение всех работников:
		$query = "SELECT * FROM workers";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
		
		// Вывод на экран:
		$result = '';
		foreach ($data as $elem) {
			$result .= '<tr>';
			
			$result .= '<td>' . $elem['id'] . '</td>';
			$result .= '<td>' . $elem['name'] . '</td>';
			$result .= '<td>' . $elem['age'] . '</td>';
			$result .= '<td>' . $elem['salary'] . '</td>';
			$result .= '<td>' . $elem['salary'] . '</td>';
			$result .= '<td><a href="?del=' . $elem['id'] . '">удалить</a></td>';
			
			$result .= '</tr>';
		}
		
		echo $result;
*/		
	?>
<!--</table>
Давайте совместим его с нашим кодом, который делает добавление нового работника. 
При этом форму добавления поставим под таблицу (ее можно поставить куда угодно), 
а сам PHP код добавления разместим до получения всех работников, чтобы сначала 
добавлялся новый и потом получались все работники вместе с новым добавленным.
Итак, вот наш код:-->

<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
		<th>delete</th>
	</tr>
	<?php
		$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
		$user = 'root'; //имя пользователя, по умолчанию это root
		$password = ''; //пароль, по умолчанию пустой
		$db_name = 'test'; //имя базы данных

	//Соединяемся с базой данных используя наши доступы:
		$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));

	//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
		mysqli_query($link, "SET NAMES 'utf8'");
		// Сохранение нового (до получения!):
		if (!empty($_POST)) {
			$name = $_POST['name'];
			$age = $_POST['age'];
			$salary = $_POST['salary'];
			
			$query = "INSERT INTO workers SET name='$name', age='$age', salary='$salary'";
			mysqli_query($link, $query) or die(mysqli_error($link));
		}
		
		// Удаление по id (до получения!):
		if (isset($_GET['del'])) {
			$del = $_GET['del'];
			$query = "DELETE FROM workers WHERE id=$del";
			mysqli_query($link, $query) or die(mysqli_error($link));
		}
	
		// Получение всех работников:
		$query = "SELECT * FROM workers";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
		
		// Вывод на экран:
		$result = '';
		foreach ($data as $elem) {
			$result .= '<tr>';
			
			$result .= '<td>' . $elem['id'] . '</td>';
			$result .= '<td>' . $elem['name'] . '</td>';
			$result .= '<td>' . $elem['age'] . '</td>';
			$result .= '<td>' . $elem['salary'] . '</td>';
			$result .= '<td>' . $elem['salary'] . '</td>';
			$result .= '<td><a href="?del=' . $elem['id'] . '">удалить</a></td>';
			
			$result .= '</tr>';
		}
		
		echo $result;
	?>
</table>
<form action="" method="POST">
	<input name="name">
	<input name="age">
	<input name="salary">
	<input type="submit" value="добавить работника">
</form>