<?php
//37.Практика по работе с БД в PHP
/*Пусть в базе данных есть такая таблица workers:

id	name	age	salary
1	Коля	23	400
2	Вася	24	500
3	Петя	25	600
Давайте выведем ее в таком виде в браузер.
Для этого средствами PHP нам надо сформировать следующий HTML код:*/

?>
<!--<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Коля</td>
		<td>23</td>
		<td>400</td>
	</tr>
	<tr>
		<td>2</td>
		<td>Вася</td>
		<td>24</td>
		<td>500</td>
	</tr>
	<tr>
		<td>3</td>
		<td>Петя</td>
		<td>25</td>
		<td>600</td>
	</tr>
</table>
Каким образом мы это сделаем: часть HTML кода мы наберем вручную, а часть за нас сформирует PHP.
Вручную мы наберем статическую часть HTML - тег table и первую tr с заголовками таблицы.
А вот собственно ряды таблицы пусть сформирует PHP, взяв данные из БД.
Наберем статическую часть HTML кода и подготовим в нем место для вставки PHP:-->
<!--<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
	</tr>
	<?php
		//тут будет PHP код, который сформирует эту часть таблицы
	?>
</table>
Наш PHP код должен отправить запрос к базе данных, достать массив работников, затем сформировать из него соответствующее количество tr с td-шками.
Давайте достанем все работников из таблицы workers и запишем их в массив $data 
(пусть подключение к БД выполнено где-то выше, не будем его записывать для краткости):

<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
	</tr> -->
<?php
		$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
		$user = 'root'; //имя пользователя, по умолчанию это root
		$password = ''; //пароль, по умолчанию пустой
		$db_name = 'test'; //имя базы данных
		$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
		mysqli_query($link, "SET NAMES 'utf8'");
		/*$query = "SELECT * FROM workers";
		$result = mysqli_query($link, $query) or die( mysqli_error($link) );
		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
		var_dump($data); */
	?>
<!--</table>-->

<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
	</tr>
	<?php
		$query = "SELECT * FROM workers";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
		
		$result = '';
		foreach ($data as $elem) {
			$result .= '<tr>';
			
			$result .= '<td>' . $elem['id'] . '</td>';
			$result .= '<td>' . $elem['name'] . '</td>';
			$result .= '<td>' . $elem['age'] . '</td>';
			$result .= '<td>' . $elem['salary'] . '</td>';
			
			$result .= '</tr>';
		}
		
		echo $result;
	?>
</table>