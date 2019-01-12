
<!--20.Задачи на продвинутую работу с формами в PHP
1.Сделайте чекбокс: если он отмечен, то выведите 'отмечен', если не отмечен - то выведите 'не отмечен'.-->

<form action="" method="GET">
	<input type="hidden" name="hello" value="0">
	<input type="checkbox" name="hello" value="1">
	<input type="submit">
</form>

<?php
	if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 0) {
		echo 'не отмечен';
	}

	if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 1) {
		echo 'отмечен';
	}

//2.Сделайте функцию input, которая создает инпут с типом text. Функция должна иметь следующие параметры: name, value.

	function input($name, $value)
	{
		return '<input type="text" name="'.$name.'" value="'.$value.'">';
	}

	echo input('age', 25); //выведет <input type="text" name="age" value="25">

//3.Задача. Модифицируйте функцию из предыдущей задачи так, чтобы она сохраняла значение инпута после отправки.

	function inputMod($name, $value)
	{
		if(isset($_REQUEST[$name])) {
			$value = $_REQUEST[$name];
		}

		return '<input type="text" name="'.$name.'" value="'.$value.'">';
	}

?>

<!--Работа с checkbox
1.Спросите у пользователя имя с помощью формы. Сделайте чекбокс: если он отмечен, 
то поприветствуйте пользователя, если не отмечен - попрощайтесь с пользователем.-->

<form action="" method="GET">
	<input type="text" name="name">
	<input type="hidden" name="hello" value="0">
	<input type="checkbox" name="hello" value="1">
	<input type="submit">
</form>

<?php
	if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 0) {
		echo 'Прощай '.$_REQUEST['name'];
	}

	if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 1) {
		echo 'Привет '.$_REQUEST['name'];
	}
?>

<!--Работа с checkbox
2.Спросите у пользователя имя с помощью формы. Сделайте чекбокс: если он отмечен, 
то поприветствуйте пользователя, если не отмечен - попрощайтесь с пользователем.-->

<form action="" method="GET">
	<p>html<input type="checkbox" name="lang[]" value="html"></p>
	<p>css<input type="checkbox" name="lang[]" value="css"></p>
	<p>php<input type="checkbox" name="lang[]" value="php"></p>
	<p>javascript<input type="checkbox" name="lang[]" value="javascript"></p>
	<input type="submit">
</form>

<?php
	if(isset($_REQUEST['lang']))
	{
		echo 'Вы знаете: ' . implode(',', $_REQUEST['lang']);
	}
?>

<!--Работа с radio переключателями
3.Спросите у пользователя знает ли он PHP с помощью двух radio-кнопок. 
Выведите результат на экран. Сделайте так, чтобы по умолчанию один из вариантов был уже отмечен.-->

<form action="" method="GET">
	<p>Вы знаете PHP?</p>
	<p>да<input type="radio" name="php" value="1"></p>
	<p>нет<input type="radio" name="php" value="0"></p>
	<input type="submit">
</form>

<?php
	if (isset($_REQUEST['php']) and $_REQUEST['php'] == 0) {
		echo 'Вы не знаете PHP';
	}

	if (isset($_REQUEST['php']) and $_REQUEST['php'] == 1) {
		echo 'Вы  знаете PHP!';
	}
?>

<!--4.Спросите у пользователя его возраст с помощью нескольких radio-кнопок. 
Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30-->

<form action="" method="GET">
	<p>Сколько вам лет?</p>
	<p>менее 20 лет<input type="radio" name="age" value="1"></p>
	<p>20-25<input type="radio" name="age" value="2"></p>
	<p>26-30<input type="radio" name="age" value="3"></p>
	<p>более 30<input type="radio" name="age" value="4"></p>
	<input type="submit">
</form>

<?php
	if (isset($_REQUEST['age']) and $_REQUEST['age'] == 1) {
		echo 'Вам менее 20 лет';
	}

	if (isset($_REQUEST['age']) and $_REQUEST['age'] == 2) {
		echo 'Вам 20-25 лет';
	}

	if (isset($_REQUEST['age']) and $_REQUEST['age'] == 3) {
		echo 'Вам 26-30 лет';
	}

	if (isset($_REQUEST['age']) and $_REQUEST['age'] == 4) {
		echo 'Вам более 30 лет';
	}

?>

<!--Select и multi-select
5.Спросите у пользователя его возраст с помощью select. 
Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30. -->

<form action="" method="GET">
	<select size="5"  name="age">
	<option disabled>Сколько вам лет?</option>
	<option value="1">менее 20 лет</option>
	<option value="2">20-25</option>
	<option value="3">26-30</option>
	<option value="4">более 30</option>
 	</select>
	<input type="submit">
</form>

<?php
	if (isset($_REQUEST['age']) and $_REQUEST['age'] == 1) {
		echo 'Вам менее 20 лет';
	}

	if (isset($_REQUEST['age']) and $_REQUEST['age'] == 2) {
		echo 'Вам 20-25 лет';
	}

	if (isset($_REQUEST['age']) and $_REQUEST['age'] == 3) {
		echo 'Вам 26-30 лет';
	}

	if (isset($_REQUEST['age']) and $_REQUEST['age'] == 4) {
		echo 'Вам более 30 лет';
	}
?>

<!--6.Спросите у пользователя с помощью мультиселекта, какие из языков он знает: 
html, css, php, javascript. Выведите на экран те языки, которые знает пользователь.-->

<form action="" method="GET">
	<select size="4" multiple name="lg">
	<option value="1">html</option>
	<option value="2">css</option>
	<option value="3">php</option>
	<option value="4">javascript</option>
 	</select>
	<input type="submit">
</form>

<?php
	$strc = 'Вы знаете: ';
	foreach ($_REQUEST["lg"] as $elem) {
		if($elem == 1) {
			$str .= 'html, ';
		}
		if($elem == 2) {
			$str .= 'css, ';
		}
		if($elem == 3) {
			$str .= 'php, ';
		}
		if($elem == 4) {
			$str .= 'javascript.';
		}
	}
	echo $strc;
?>