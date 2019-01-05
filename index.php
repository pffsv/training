<!--Спросите имя пользователя с помощью формы. Результат запишите в переменную $login. 
Сделайте так, чтобы после отправки формы значения ее полей не пропадали.-->

<form action="" method="GET">
	<input name="login" value="<?php if (isset($_GET['login'])) echo $_GET['login']; ?>">
	<input type="submit">
</form>
<?php
error_reporting(E_ALL);
mb_internal_encoding("UTF-8");
var_dump($_GET);

	if (isset($_GET['submit'])) {
		$login = $_GET['login'];
		echo $login;
	}
?>

<!-- Спросите у пользователя имя, а также попросите его ввести сообщение (textarea). 
Сделайте так, чтобы после отправки формы значения его полей не пропадали-->

<form action="" method="GET">
	<input name="name" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>">
	<textarea name="message">
		<?php if (isset($_GET['message'])) echo $_GET['message']; ?>
	</textarea>
	<input type="submit">
</form>