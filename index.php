
<!--3. Спросите возраст пользователя. Если форма была отправлена и введен возраст, 
	то выведите его на экран, а форму уберите. Если же форма не была отправлена 
	(это будет при первом заходе на страницу) - просто покажите ее-->



<?php
//    error_reporting(E_ALL);

	if(!empty($_REQUEST['name']) and
	   !empty($_REQUEST['age']) and
	   !empty($_REQUEST['text'])
		){
		$name = $_REQUEST['name'];
		$text = $_REQUEST['text'];
		$age = $_REQUEST['age'];
		echo 'Привет, '.$name.', <br>';
		echo $age.'лет <br>';
		echo 'Твое сообщение: '.$text;
	}

	if(
	   (empty($_REQUEST['name']) or
	   empty($_REQUEST['age']) or
	   empty($_REQUEST['text']))
	   and !empty($_REQUEST)
	  )
	{
		echo 'Поля не могут быть пустые';
	}	


	if(
	   empty($_REQUEST['name']) or
	   empty($_REQUEST['age']) or
	   empty($_REQUEST['text'])
		){
?>

	<form action="" method="POST">
	<input name="name" placeholder="введите имя"><br><br>
	<input name="age" placeholder="введите возраст"><br><br>
	<textarea name="text" placeholder="введите сообщение"></textarea><br><br>
	<input type="submit" value="отправить">
    </form>

<?php } ?>




