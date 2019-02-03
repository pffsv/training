
//40.Практика по работе с БД в PHP
Сейчас мы с вами начнем добавлять новый функционал к нашему скрипту и для простоты изложения давайте вынесем добавление нового работника на отдельную страницу, назовем ее add.php.

Вот ее код:

<?php
	if (!empty($_POST)) {
		$name = $_POST['name'];
		$age = $_POST['age'];
		$salary = $_POST['salary'];
		
		$query = "INSERT INTO workers SET name='$name', age='$age', salary='$salary'";
		mysqli_query($link, $query) or die(mysqli_error($link));
	}
?>
<form action="" method="POST">
	<input name="name">
	<input name="age">
	<input name="salary">
	<input type="submit" value="добавить работника">
</form>
Сейчас наш скрипт добавления работает так: пользователь нашего сайта вводит данные в форму, нажимает на кнопку отправки, страница сайта перезагружается и при этом выполняется INSERT запрос на добавление работника.

Если вы запустите этот код, то увидите, что инпуты после перезагрузки страницы очищаются.

Давайте сделаем так, чтобы данные в инпутах оставались после отправки формы.

Используем для этого атрибут value, в который будем выводить соответствующие данные из массива $_POST.

Под соответствующими данными подразумевается то, что для инпута с именем name, в атрибут value мы вставим данные из $_POST['name'], вот так:

<input name="name" value="<?php echo $_POST['name']; ?>">
Для каждого инпута получается аналогично содержимое $_POST с именем соответствующего инпута:

<form action="" method="POST">
	<input name="name" value="<?php echo $_POST['name']; ?>">
	<input name="age" value="<?php echo $_POST['age']; ?>>
	<input name="salary" value="<?php echo $_POST['salary']; ?>>
	<input type="submit" value="добавить работника">
</form>
В нашем коде, однако, есть проблема - при первом заходе на страницу, когда форма не отправлена - мы увидим ошибки, так как в $_POST['name'], в $_POST['age'] и в $_POST['salary'] ничего не лежит, ведь массив $_POST - пустой.

Чтобы избежать подобной проблемы, давайте добавим иф с проверкой:

<form action="" method="POST">
	<input name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>">
	<input name="age" value="<?php if (isset($_POST['age'])) echo $_POST['age']; ?>>
	<input name="salary" value="<?php 
		if (isset($_POST['salary'])) echo $_POST['salary']; ?>> 
	<input type="submit" value="добавить работника">
</form>
Давайте добавим в наш код PHP часть для сохранения нового работника в БД:

<?php
	if (!empty($_POST)) {
		$name = $_POST['name'];
		$age = $_POST['age'];
		$salary = $_POST['salary'];
		
		$query = "INSERT INTO workers SET name='$name', age='$age', salary='$salary'";
		mysqli_query($link, $query) or die(mysqli_error($link));
	}
?>
<form action="" method="POST">
	<input name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>">
	<input name="age" value="<?php if (isset($_POST['age'])) echo $_POST['age']; ?>>
	<input name="salary" value="<?php 
		if (isset($_POST['salary'])) echo $_POST['salary']; ?>> 
	<input type="submit" value="добавить работника">
</form>
Если вы запустите этот код, введете данные в инпуты и нажмете на кнопку отправки - форма отправится, страница обновится, но данные из инпутов не пропадут.