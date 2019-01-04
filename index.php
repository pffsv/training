
<!--Спросите город пользователя с помощью формы. Результат запишите в переменную $city. 
Выведите на экран фразу 'Ваш город: %Город%'.-->

<form action="" method="GET">
	<input type="text" name="city">
	<input type="submit">
</form>

<?php
//Если форма была отправлена и город не пустой:
	if (!empty($_REQUEST['city'])) {
		$city = $_REQUEST['city'];
		echo "Ваш город".$city;
   }
?>
<hr>

<!--Решим предыдущую задачу так, чтобы пользователь не мог вводить теги-->

<form action="" method="GET">
	<input type="text" name="city">
	<input type="submit">
</form>

<?php
	//Если форма была отправлена и город не пустой:
	if (isset($_REQUEST['city'])) {
		$city = strip_tags($_REQUEST['city']);
		echo 'Ваш город: '.$city;
	}
?>
<hr>

<!--Давайте сделаем так, чтобы форма после отправки скрывалась-->

<?php
	//Если город пустой - покажем форму
	if (isset($_REQUEST['city'])) {
?>
		<form action="" method="GET">
			<input type="text" name="name">
			<input type="submit">
		</form>
<?php
	}
?>

<?php
	//Если форма была отправлена и город не пустой:
	if (isset($_REQUEST['city'])) {
		$city = strip_tags($_REQUEST['age']);
		echo 'Ваш город: '.$age;
	}
?>