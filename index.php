<?php
//Задачи для решения
//Timestamp: time и mktime
//1.Выведите текущее время в формате timestamp

  echo '1.'. time() . '<br>';

//2.Выведите 1 марта 2025 года в формате timestamp

   echo '2.'. mktime(0, 0, 0, 3, 1, 2025) . '<br>';

//3.Выведите 31 декабря текущего года в формате timestamp. Скрипт должен работать независимо от года, в котором он запущен.

    echo '3.'. mktime(0, 0, 0, 31, 12) . '<br>';

 //4.Найдите количество секунд, прошедших с 13:12:59 15-го марта 2000 года до настоящего момента времени.
    echo '4.';
    echo time() - mktime(13, 12, 59, 15, 3, 2000);
    echo '<br>';

 //5. Найдите количество целых часов, прошедших с 7:23:48 текущего дня до настоящего момента времени.

    $sec = time() - mktime(7, 23, 48);      
    echo '5.';
    echo floor($sec/3600);
    echo '<br><hr>';

//  Функция date
//6. Выведите на экран текущий год, месяц, день, час, минуту, секунду.

    echo '6.';
    echo date('H:i:s d.m.Y');
    echo '<br>';

 //7. Выведите текущую дату-время в форматах '2025-12-31', '31.12.2025', '31.12.13', '12:59:59'

    echo '7.';
    echo date('Y-m-d').'<br>';
    echo date('d.m.Y').'<br>';
    echo date('d.m.y').'<br>';
    echo date('H:i:s d.m.y').'<br>';

//8. С помощью функций mktime и date выведите 12 февраля 2025 года в формате '12.02.2025'

    echo '8.';
    echo date('d.m.Y', mktime(0, 0, 0, 12, 2, 2025));
    echo '<br>';

/*9. Создайте массив дней недели $week. Выведите на экран название текущего дня недели
с помощью массива $week и функции date. Узнайте какой день недели был 06.06.2006.*/

$week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
    echo '9.';
    echo $week[date('w',  mktime(0, 0, 0, 6, 6, 2006))];
    echo '<br>';

/*9. Создайте массив месяцев $month. Выведите на экран название текущего месяца 
с помощью массива $month и функции date.*/

	$month = [
		1=>'янв', 'фев', 'мар', 'апр', 'май', 'июнь',
		'июль', 'авг', 'сен', 'окт', 'ноя', 'дек'
	];
	echo '10.';
	echo $month[date('n')];
	echo '<br>';

//11. Найдите количество дней в текущем месяце. Скрипт должен работать независимо от месяца, в котором он запущен.

	echo '11.';
    echo date(t);
    echo '<br>';

//12. Сделайте поле ввода, в которое пользователь вводит год (4 цифры), а скрипт определяет високосный ли год

?>
<p>12.</p>
<form action="" method="GET">
	<input type="text" name="year">
	<input type="submit">
</form>

<?php
	if (isset($_GET['year'])) {
		$year = $_GET['year'];
		if (date('L', mktime(0, 0, 0, 1, 1, $year)) == 1) {
			echo 'год високосный';
		} else {
			echo 'год не високосный';
		}
	}
?>

<!--13. Сделайте форму, которая спрашивает дату в формате '31.12.2025'. 
С помощью функций mktime и explode переведите эту дату в формат timestamp. 
Узнайте день недели (словом) за введенную дату.-->

<p>13.</p>
<form action="" method="GET">
	<input type="text" name="date">
	<input type="submit">
</form>

<?php
	if (isset($_REQUEST['date'])) {
		$date = explode('.', $_REQUEST['date']);
		$week = ['вс', 'пн', 'вт', 'ср','чт', 'пт', 'сб'];
		echo $week[date('w',  mktime(0, 0, 0, $date[1], $date[0], $date[2]))];
	}
?>

<!--14.  Сделайте форму, которая спрашивает дату в формате '2025-12-31'. 
С помощью функций mktime и explode переведите эту дату в формат timestamp. 
Узнайте месяц (словом) за введенную дату.-->

<p>14.</p>
<form action="" method="GET">
	<input type="text" name="dat">
	<input type="submit">
</form>

<?php
	if (isset($_REQUEST['dat'])) {
		$dat = explode('-', $_REQUEST['dat']);
		$month = [
			1=>'янв', 'фев', 'мар', 'апр', 'май', 'июнь',
			'июль', 'авг', 'сен', 'окт', 'ноя', 'дек'
		];
		echo $month[date('n', mktime(0, 0, 0, $dat[1], $dat[2], $dat[0]))];
	}
?>

<!--15. Сделайте форму, которая спрашивает две даты в формате '2025-12-31'. 
Первую дату запишите в переменную $date1, а вторую в $date2. 
Сравните, какая из введенных дат больше. Выведите ее на экран.-->

<p>15.</p>
<form action="" method="GET">
	<input type="text" name="date1">
	<input type="text" name="date2">
	<input type="submit">
</form>

<?php
	if (isset($_REQUEST['date1']) and isset($_REQUEST['date2'])) {
		$date1 = $_REQUEST['date1'];
		$date2 = $_REQUEST['date2'];
		if ($date1 > $date2) {
			echo $date1;
		} else {
			echo $date2;
		}
	}

	echo '<br><hr>';

/*16. Дана дата в формате '2025-12-31'. С помощью функции strtotime и 
функции date преобразуйте ее в формат '31-12-2025'.*/

	echo date('d-m-Y', strtotime('2025-12-31'));

?>

 <!--17.Сделайте форму, которая спрашивает дату-время в формате '2025-12-31T12:13:59'. 
 С помощью функции strtotime и функции date преобразуйте ее в формат '12:13:59 31.12.2025'-->

 <form action="" method="GET">
	<input type="text" name="date">
	<input type="submit">
</form>

<?php
	if (isset($_REQUEST['date'])) {
		echo date('H:i:s d.m.Y', strtotime($_REQUEST['date']));
	}

	echo '<br><hr>';


 /*18.В переменной $date лежит дата в формате '2025-12-31'. 
 Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня. */
    
    echo '18.<br>';
	//2 дня
	$date =  date_create('2025-12-31');
	date_modify($date, '2 day');
	echo date_format($date, 'd.m.Y');
	echo '<br>';

	//1 месяц и 3 дня
	$date =  date_create('2025-12-31');
	date_modify($date, '1 month 3 day');
	echo date_format($date, 'd.m.Y');
	echo '<br>';

	//1 год
	$date =  date_create('2025-12-31');
	date_modify($date, '1 year');
	echo date_format($date, 'd.m.Y');
	echo '<br>';

	//Минус 3 дня
	$date =  date_create('2025-12-31');
	date_modify($date, '-3 day');
	echo date_format($date, 'd.m.Y');
	echo '<br><hr>';

/*19.Узнайте сколько дней осталось до Нового Года. Скрипт должен работать в любом году.*/

    echo '19.<br>';
	$time = mktime(23, 59, 59, 12, 31);
	$time = $time + 1;
	echo floor(($time - time()) / (60 * 60 * 24));
    echo '<br><hr>';
?>	

<!-- 20.Сделайте форму с одним полем ввода, в которое пользователь вводит год. 
	Найдите все пятницы 13-е в этом году. Результат выведите в виде массива дат.-->

	<form action="" method="GET">
	<input type="text" name="year">
	<input type="submit">
    </form>

<?php
	if (isset($_REQUEST['year'])) {
		$year = $_REQUEST['year'];
		$arr = [];
		for($i = 1; $i <= 12; $i++) {
			$timestamp = mktime(0, 0, 0, $i, 13, $year);
			if (date('w', $timestamp) == 5) {
				$arr[] = date('d-m-Y', $timestamp);
			}
		}
		var_dump($arr);
	}
	echo '<br><hr>';

/*21. Узнайте какой день недели был 100 дней назад.*/

	$date = date_create();
	date_modify($date, '-100 day');
	$num = date_format($date, 'w');

	$week = ['вс', 'пн', 'вт', 'ср','чт', 'пт', 'сб'];
	echo $week[$num];

?>

