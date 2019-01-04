
<!--4.Спросите у пользователя логин и пароль (в браузере должен быть звездочками). 
	Сравните их с логином $login и паролем $pass, хранящихся в файле. Если все верно - выведите
	'Доступ разрешен!', в противном случае - 'Доступ запрещен!'. Сделайте так, чтобы скрипт 
	обрезал концевые пробелы в строках, которые ввел пользователь.-->



<?php
//    error_reporting(E_ALL);

    $loginInFail = 'user';
    $passInFail = 'qwerty';

	if(!empty($_REQUEST['login']) and !empty($_REQUEST['password'])){ 	   
		$login = trim($_REQUEST['login']);
		$password = trim($_REQUEST['password']);
        if($login==$loginInFail and $password==$passInFail){
        	echo "Доступ разрешен!";
        } else {
        	echo "Доступ запрещен!";
        }
	}

?>

<form>
	<form action="" method="POST">
	<input name="login" placeholder="введите логин"><br><br>
	<input type="password" name="password" placeholder="введите пароль"><br><br>
	<input type="submit" value="отправить">
</form>






