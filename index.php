<?php
//Задачи на приемы работы с циклами на PHP
//1.С помощью цикла for сформируйте строку '123456789' и запишите ее в переменную $a.
	$a = '';
	for ($i = 1; $i <= 9; $i++) {
		$a .= $i;
	}
	echo $a.'<br>';

//2.С помощью цикла for сформируйте строку '987654321' и запишите ее в переменную $b

	$b = '';
	for ($i = 9; $i > 0; $i--) {
		$b .= $i;
	}
	echo $b.'<br>';

//3.С помощью цикла for сформируйте строку '-1-2-3-4-5-6-7-8-9-' и запишите ее в переменную $c

	$c = '';
	for ($i = 1; $i <= 9; $i++) {
		$c .= '-'.$i;
	}

	echo $c.'<br>';

//4.Нарисуйте пирамиду, у вашей пирамиды должно быть 20 рядов

	 $d = '';
	for ($i = 1; $i <= 20; $i++) {
		$d .= 'x';
		echo $d.'<br>';
	}

//5.С помощью двух вложенных циклов нарисуйте следующую пирамидку

	for ($i = 1; $i <= 9; $i++) {
		$str = '';
		for ($j = 0; $j < $i; $j++) {
			$str .= $i;
		}
		echo $str.'<br>';
	}

//6.Нарисуйте пирамиду, воспользовавшись циклом for:

	$str = '';
	for ($i = 1; $i <= 20; $i++) {
		$str .= 'xx';
		echo $str.'<br>';
	}


?>