<form action="" method="GET">
	<input type="text" name="city">
	<input type="submit">
</form>

<?php
	//Если форма была отправлена и город не пустой:
	if (!empty($_REQUEST['city'])) {
		$city = $_REQUEST['city'];
		echo 'Ваш город: '.$city;
	}
?>