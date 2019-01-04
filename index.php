
<!--Работа с формами в PHP*/
    Пример формы-->
<form action="" method="GET">
	<input type="text" name="user"><br><br>
	<textarea name="message"></textarea><br><br>
	<input type="submit"><br><br>
</form>

<!--1.Спросите имя пользователя с помощью формы. 
Результат запишите в переменую $name. Выведите на экран фразу 'Привет, %Имя%'.-->
<form action="" method="POST">
	<input name="name" placeholder="введите имя">
	<input type="submit" valua="отправить">	
</form>

<?php
		$name = $_REQUEST['name'];
		echo 'Привет, '.$name.'<br><br>';
?>

<!--1.Спросите имя пользователя с помощью формы. 
Результат запишите в переменую $name. Выведите на экран фразу 'Привет, %Имя%'. Скрыть решение.-->
<form action="" method="GET">
	<input type="text" name="name">
	<input type="submit">
</form>

<?php
	if (isset($_REQUEST['name'])) {
		$name = $_REQUEST['name'];
		echo 'Привет,'.$name;
	}
?>