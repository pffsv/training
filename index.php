<?php
//38.Практика по работе с БД в PHP
/*Практика по работе с БД в PHP
В предыдущем уроке мы вывели список работников в виде таблицы HTML.

Давайте модифицируем эту задачу, добавив возможность удаления работников.

Для этого добавим в таблицу еще одну колонку, в которой для каждого работника будет размещаться ссылка на удаление работника:*/
?>
<!--<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
		<th>delete</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Коля</td>
		<td>23</td>
		<td>400</td>
		<td><a href="">удалить</a></td>
	</tr>
	<tr>
		<td>2</td>
		<td>Вася</td>
		<td>24</td>
		<td>500</td>
		<td><a href="">удалить</a></td>
	</tr>
	<tr>
		<td>3</td>
		<td>Петя</td>
		<td>25</td>
		<td>600</td>
		<td><a href="">удалить</a></td>
	</tr>
</table>
Сделаем так, чтобы при переходе по ссылке мы попадали на ту же страницу браузера, 
но отправляя при этом GET запрос с id работника, которого мы хотим удалить:

<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
		<th>delete</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Коля</td>
		<td>23</td>
		<td>400</td>
		<td><a href="?del=1">удалить</a></td>
	</tr>
	<tr>
		<td>2</td>
		<td>Вася</td>
		<td>24</td>
		<td>500</td>
		<td><a href="?del=2">удалить</a></td>
	</tr>
	<tr>
		<td>3</td>
		<td>Петя</td>
		<td>25</td>
		<td>600</td>
		<td><a href="?del=3">удалить</a></td>
	</tr>
</table>
Как это будет работать: если мы перейдем, например, по ссылке для работника "Коля", 
то отправим GET запросом параметр del со значением 1, соответствующим id Коли в таблице базы данных.

В коде PHP мы можем получить id работника для удаления, обратившись к $_GET['del'] и затем удалить его, вот так:-->

<?php
/*
	$del = $_GET['del']; // получим id для удаления
	$query = "DELETE FROM workers WHERE id=$del"; // сформируем запрос на удаление
	mysqli_query($link, $query) or die(mysqli_error($link)); // удалим

Так как мы не всегда выполняем операцию удаления, то GET параметра может и не быть в адресной строке. 
Поэтому давайте проверим его наличие с помощью функции isset - и только, если параметр есть - будем выполнять удаление:

	if (isset($_GET['del'])) {
		$del = $_GET['del'];
		$query = "DELETE FROM workers WHERE id=$del";
		mysqli_query($link, $query) or die(mysqli_error($link));
	}

Давайте теперь вспомним код для вывода данных в виде HTML таблицы, полученный нами в предыдущем уроке:
*/
?>
<!--<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
	</tr>-->
	<?php
/*		$query = "SELECT * FROM workers";
		$result = mysqli_query($link, $query) or die( mysqli_error($link) );
		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
		
		$result = '';
		foreach ($data as $elem) {
			$result .= '<tr>';
			
			$result .= '<td>' . $elem['id'] . '</td>';
			$result .= '<td>' . $elem['name'] . '</td>';
			$result .= '<td>' . $elem['age'] . '</td>';
			$result .= '<td>' . $elem['salary'] . '</td>';
			$result .= '<td>' . $elem['salary'] . '</td>';
			
			$result .= '</tr>';
		}
		
		echo $result;*/
	?>
<!--</table>
Добавим в таблицу еще одну ячейку со ссылкой на удаление (пока без GET запроса):

<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
		<th>delete</th>
	</tr>-->
	<?php
/*		$query = "SELECT * FROM workers";
		$result = mysqli_query($link, $query) or die( mysqli_error($link) );
		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
		
		$result = '';
		foreach ($data as $elem) {
			$result .= '<tr>';
			
			$result .= '<td>' . $elem['id'] . '</td>';
			$result .= '<td>' . $elem['name'] . '</td>';
			$result .= '<td>' . $elem['age'] . '</td>';
			$result .= '<td>' . $elem['salary'] . '</td>';
			$result .= '<td>' . $elem['salary'] . '</td>';
			$result .= '<td><a href="">удалить</a></td>';
			
			$result .= '</tr>';
		}
		
		echo $result;*/
	?>
<!--</table>
Давайте теперь сделаем так, чтобы при переходе по ссылке передавался GET запрос на удаление.

Так как наши tr-ки формируются в цикле, мы не можем просто вручную проставить номера id для удаления в GET запрос. 
Пусть это сделает PHP автоматически.

Сам id работника хранится в $elem['id'] - подставим это значение в GET запрос в href ссылки, вот так:

<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
		<th>delete</th>
	</tr>-->
	<?php
/*		$query = "SELECT * FROM workers";
		$result = mysqli_query($link, $query) or die( mysqli_error($link) );
		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
		
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
		
		echo $result;*/
	?>
<!--</table>
Теперь при переходе по ссылке будет происходить передача GET параметра с id работника, 
которого мы хотим удалить. Но самого удаления пока не будет, так как мы не выполняем SQL запрос на удаление.

Давайте добавим код для удаления, полученный нами в начале урока. Учтите, что его нужно 
добавлять до получения работников из БД, чтобы при удалении работник сначала удалился из базы, 
а уже потом мы получили оставшихся и вывели их на экран:-->

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
		// Удаление по id (до получения!):
		if (isset($_GET['del'])) {
			$del = $_GET['del'];
			$query = "DELETE FROM workers WHERE id=$del";
			mysqli_query($link, $query) or die(mysqli_error($link));
		}

		mysqli_query($link, "SET NAMES 'utf8'");
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
<!--Если запустить этот код, то в браузере мы увидим список работников. 
Если затем перейти по ссылке для удаления какого-либо работника, страница браузера перезагрузится (
т.к. мы перешли по ссылке), работник удалится из базы и в таблице его уже не будет.

Еще раз: удаление следует размещать до получения работников из БД, иначе вы сначала получите всех
 работников вместе с тем, которого хотели удалить, только затем удалите его в базе, но в HTML таблице 
 работник не удалится. Его удаление произойдет только после перезагрузки страницы. Учтите это и не совершайте такой ошибки.-->