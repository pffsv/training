<?php
//21.Задачи на отработку циклов и функций PHP
//Практика.
//20.Напишите свой аналог функции ucfirst.

	$str = 'apple';
	$first = substr($str, 0, 1);
	$str = strtoupper($first).substr($str, 1, strlen($str));
	echo $str.'<br>';

//21.Напишите свой аналог функции strrev. Решите задачу двумя способами.

    $str = 'apple';
    $arr = str_split($str, 1);
	$arr = array_reverse($arr);
	$str = implode($arr);
	var_dump($arr);
	echo'<br>';

	$str ='apple';
	$str2 = '';
	$numStr = strlen($str);;
	for ($i = $numStr; $i >= 1; $i--) {
		$str2 .= substr($str, $i-1, 1);
	}
	echo $str2.'<br>';

//22.Напишите свой аналог функции strlen.

	$str = 'apple';
	$numStr = count(str_split($str, 1));
	echo $numStr.'<br>';

//23.Поменяйте в строке большие буквы на маленькие и наоборот.
	$str = 'apple';
	echo strtoupper($str).'<br>';
/*	$str1 = str_split($str);
	$str2 = '';
	foreach ($str1 as $elem) {
		if(ord($elem) >= 97 && ord($elem) <= 122) {
			$str2 .= strtoupper($elem);
		} else {
			$str2 .= strtolower($elem);
		}
	}
	echo $str2;*/

//23.Преобразуйте строку 'var_text_hello' в 'varTextHello'. Скрипт должен работать с любыми стоками такого рода.

	$arr = explode('_', 'var_test_hello');
	$str = '';
	foreach ($arr as $elem) {
		if($elem == $arr[0]) {
			$str .= $elem;
		} else {
			$str .= ucfirst($elem);
		}
	}
	echo $str.'<br>';

//24.С помощью только одного цикла нарисуйте следующую пирамидку:

	for ($i = 1; $i <= 9; $i++) {
		echo str_repeat($i , $i) . '<br>';
	}

/*26.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть не 5 рядов, 
а произвольное количество, оно задается так: $str = 'xxxxxxxx'; - это первый ряд пирамиды.*/

//	$str = 'xxxxxxxxxx';	
    $str = '';
	for ($i = 10; $i > 1; $i--) {
		$str .= 'x';
		echo $str.'<br>';
	}

	$str = 'xxxxxxxxxx';
	$strNum = strlen($str);
	$str2 = '';
	for ($i = 10; $i > 0; $i--) {
		$str2 .= substr($str, 0, $i) . '<br>';
	}
	echo $str2;

/*27.Дан массив с произвольными числами. Сделайте так, чтобы элемент повторился в массиве 
количество раз, соответствующее его числу. Пример: [1, 3, 2, 4] превратится в [1, 3, 3, 3, 2, 2, 4, 4, 4, 4].*/

	$arr = [1, 2, 3, 4];
	$newArr = [];
	foreach ($arr as $elem) {
		for ($i = 1; $i <= $elem; $i++) {
			$newArr[] = $elem;
		}
	}
	var_dump($newArr);
	echo '<br>';

/*28.Дан массив с произвольными целыми числами. Сделайте так, чтобы первый элемент стал ключом 
второго элемента, третий элемент - ключом четвертого и так далее. Пример: [1, 2, 3, 4, 5, 6] превратится в [1=>2, 3=>4, 5=>6].*/

	$arr = [1, 2, 3, 4, 5, 6];
	$newArr = [];
	$key = [];
	$num = count($arr);
	for ($i = 1; $i <= $num -1; $i+= 2) {
		$key = $arr[$i];
		$newArr[$key] = $arr[$i + 1];
	}
	var_dump($newArr);
	echo '<br>';	

//29.Дана строка. Удалите из этой строки четные символы.

	$str = 'aazzqqq';
	$i = 0;
	$res = '';
	while ($i <= strlen($str)) {
		$res .= substr($str, $i, 1);
		$i += 2;
	}
	echo $res;
	echo '<br>';

/*30.Дана строка. Поменяйте ее первый символ на второй и наоборот, 
третий на четвертый и наоборот, пятый на шестой и наоборот и так далее. 
То есть из строки '12345678' нужно сделать '21436587'.*/

	$str = '12345678';
	$newStr = array_reverse(str_split(strrev($str), 2));
	echo implode('', $newStr);
	echo '<br>';

//31.Сделайте аналог функции array_unique

	function getArrUnique ($arr)
	{
		$result = [];
		foreach ($arr as $elem) {
			if (in_array($elem, $result) == false) {
				$result[] = $elem;
			}
		}
		return $result;
	}

//32.Сделайте функцию, противоположную функции array_unique. Ваша функция должна оставлять дубли и удалять элементы, не имеющие дублей. 

	$arr = [1, 1, 1, 2, 3, 3, 4 ,5, 1, 6, 1, 3];
	$newArr = [];
	$elems = count($arr);
	for ($i = 0; $i < $elems; $i++) {
		$value = $arr[$i];
		unset($arr[$i]);
		if (in_array($value, $arr)) {
			$newArr[] = $value;
		}
		$arr[$i] = $value;
	}
	$arr = $newArr;
	echo var_dump($arr);
	echo '<br>';

//33.Напишите скрипт, который проверяет, является ли данное число простым (простое число - это то, которое делится только на 1 и на само себя).

	$num = 31;
	$flag = false;
	for ($i = 2; $i < $num; $i++) {
		if ($num % $i == 0) {
			$flag = true;
			break;
		}
	}

	if ($flag == true) {
		echo'Простое число';
	} else {
		echo 'Сложное число';
	}
	echo '<br>';

//33.Дан массив со строками. Запишите в новый массив только те строки, которые начинаются с 'http://'

	$arr = ['http://google.com', 'https://youtube.com', 'https://vk.com'];
	$newArr = [];
	foreach ($arr as $elem) {
		$pos = strpos($elem, 'http://');
		if ($pos !== false) {
			$newArr[] = $elem;
		}
	}
	
	var_dump($newArr);

?>