<?php
//33.Задачи на cookie (куки) в PHP
//1.По заходу на страницу запишите в куку с именем test текст '123'. Затем обновите страницу и выведите содержимое этой куки на экран.
/*	
    setcookie('test', '123'); 
	if(isset($_COOKIE['test'])) { 
	echo $_COOKIE['test']; 
	}
*/
//2. Удалите куку с именем test.

//	setcookie('test', '', time()); 

//3. Сделайте счетчик посещения сайта посетителем. Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'.
/*
	if(!isset($_COOKIE['count'])) { 
	$_COOKIE['count'] = 0; 
	$count = $_COOKIE['count']; 
	} 
	else { 
	$_COOKIE['count']++; 
	$count = $_COOKIE['count']; 
	} 
	setcookie('count', $count); 
	echo 'Вы посетили наш сайт: '.$count.' раз'; 
*/
/*4. Спросите дату рождения пользователя. При следующем заходе на сайт напишите 
сколько дней осталось до его дня рождения. Если сегодня день рождения пользователя - поздравьте его!*/

	if(!isset($_GET['date'])) { 
	?> 
	<form method="get" accept-charset="utf-8"> 
	<p>Дата рождения: <input type="text" name="date"><input type="submit" value="Отправить"></p> 
	</form> 
	<?php 
	} 
	else { 
	setcookie('date', $_GET['date']); 
	$date = explode('.', $_COOKIE['date']); 
	$bday = mktime(0,0,0, $date[1], $date[0]); 
	if($bday-time()>0) { 
	$remain = floor(($bday-time())/86400); 
	if($remain==0) { 
	echo 'С днем рождения Вас!!!'; 
	} 
	else{ 
	echo 'До вашего дня рождения осталось: '.$remain.' дней'; 
	} 
	} 
	else { 
	$remain = floor((mktime(0,0,0, $date[1], $date[0], date('Y')+1)-time())/86400); 
	echo 'До вашего дня рождения осталось: '.$remain.' дней'; 
	} 
	} 

?>