
<!--2.1.Спросите у пользователя имя, возраст, а также попросите его ввести сообщение 
(его сделайте в textarea). Выведите эти данные на экран в формате, 
приведенном под данной задачей.-->

<form action="" method="POST">
	<input name="name" placeholder="введите имя"><br><br>
	<input name="age" placeholder="введите возраст"><br><br>
	<textarea name="text" placeholder="введите сообщение"></textarea><br><br>
	<input type="submit" value="отправить">
</form>

<?php
//    error_reporting(E_ALL);

	if(!empty($_REQUEST['name'])){
		$name = $_REQUEST['name'];
		$text = $_REQUEST['text'];
		$age = $_REQUEST['age'];
		echo 'Привет, '.$name.', <br>';
		echo $age.'лет <br>';
		echo 'Твое сообщение: '.$text;
	}

?>
<!--2.1.Спросите у пользователя имя, возраст, а также попросите его ввести сообщение 
(его сделайте в textarea). Выведите эти данные на экран в формате, 
приведенном под данной задачей. Позаботьтесь о том, чтобы пользователь не мог 
вводить теги (просто удаляйте их) и таким образом сломать сайт.-->
<hr>
<form action="" method="GET">
	<input type="text" name="name" placeholder="введите имя"><br><br>
	<input type="text" name="age" placeholder="возраст"><br><br>
	<textarea name="message" placeholder="введите сообщение"></textarea><br><br>
	<input type="submit" name="submit">	
</form>

<?php
	if (isset($_REQUEST['submit'])) {
		$age = strip_tags($_REQUEST['age']);
		$name = strip_tags($_REQUEST['name']);
		$message = strip_tags($_REQUEST['message']);
		echo "Привет, $name, $age <br> твое сообщение: $message";
	}
?>