<?php
//17.Правильное использование пользовательских функций
/*Дан массив с числами. Создайте из него новый массив, где останутся лежать только положительные числа. 
Создайте для этого вспомогательную функцию isPositive, которая параметром будет принимать число и возвращать 
true, если число положительное, и false - если отрицательное.*/
	$arr = [1, 2, 3, -1, -2, -3];

	function isPositive($num)
	{
		if ($num >= 0) {
			return true;
		} else {
			return false;
		}
	}

	$newArr = [];
	foreach ($arr as $elem) {
		if (isPositive($elem)) {
			$newArr[] = $elem;
		}
	}
	
	var_dump($newArr);
	echo'<br>';

/*1.Сделайте функцию isNumberInRange, которая параметром принимает число и проверяет, 
что оно больше нуля и меньше 10. Если это так - пусть функция возвращает true, если не так - false.*/

    function isNumberInRange($num)
    {
    	if($num > 0 and $num <10) {
    		return true;
		} else {
			return false;
		}
    }
/* Второй вариант - сокращенный:
    function isNumberInRange($num)
	{
		return $num > 0 and $num < 10;
	} */

/*2.Дан массив с числами. Запишите в новый массив только те числа, которые больше нуля и меньше 10-ти. 
Для этого используйте вспомогательную функцию isNumberInRange из предыдущей задачи. */

	$arr = [1, 3, 5, 6, 9, 11, 15, 30];
	$newArr = [];
	foreach ($arr as $elem) {
		if (isNumberInRange($elem)) {
			$newArr[] = $elem;
		}
	}
	
	var_dump($newArr);
	echo '<br>';


/*3.Сделайте функцию getDigitsSum (digit - это цифра), которая параметром принимает целое число и возвращает сумму его цифр.*/

	function getDigitsSum($num)
	{
		return array_sum((str_split($num, 1)));
	}
	
	echo getDigitsSum(123); //выведет 6
	echo '<br>';

//4.Найдите все года от 1 до 2019, сумма цифр которых равна 13. Для этого используйте вспомогательную функцию getDigitsSum из предыдущей задачи

	$year = date('Y');
	$arr = [];
	for ($i = 1; $i < $year; $i++) {
		if(getDigitsSum($i) == 13) {
			$arr[] = $i;
		}
	}
	
	var_dump($arr);
	echo '<br>';

/*5.Сделайте функцию isEven() (even - это четный), которая параметром принимает целое число и проверяет: 
четное оно или нет. Если четное - пусть функция возвращает true, если нечетное - false.*/

    function isEven($num)
	{
		if ($i % 2 == 0) {
			return true;
		} else {
			return folse;
		}
	} 

/* Второй вариант - сокращенный:
	function isEven($num)
	{
		return $num % 2 == 0;
	}*/

/*6.Дан массив с целыми числами. Создайте из него новый массив, 
где останутся лежать только четные из этих чисел. Для этого используйте 
вспомогательную функцию isEven из предыдущей задачи.*/

	$arr = [1, 3, 5, 6, 9, 11, 15, 30];
	$newArr = [];
	foreach ($arr as $elem) {
		if (isEven($elem)) {
			$newArr[] = $elem;
		}
	}

	var_dump($arr);

//7.Сделайте функцию getDivisors, которая параметром принимает число и возвращает массив его делителей (чисел, на которое делится данное число).

	function getDivisors($num)
	{
		$arr = [];
		for ($i = 1; $i <= $num; $i++) {
			if ($num % $i == 0) {
				$arr[] = $i;
			}
		}
		
		return $arr;
	}

/*8.Сделайте функцию getCommonDivisors, которая параметром принимает 2 числа, 
а возвращает массив их общих делителей. Для этого используйте вспомогательную функцию getDivisors из предыдущей задачи*/

	function getCommonDivisors($num1, $num2)	{
		return array_intersect(getDivisors($num1), getDivisors($num2));
	} 

?>