<?php
//Задачи на пользовательские функции
//Задача. Сделайте функцию, которая возвращает куб числа. Число передается параметром.

	function cube($num)
	{
		return $num * $num * $num;
	}
	
//1.Сделайте функцию, которая возвращает квадрат числа. Число передается параметром.
    
	function fun($num){

        return $num * $num;
	}

//2.Сделайте функцию, которая возвращает сумму двух чисел. Числа передаются параметрами функции.

	function sum($a, $b){

		return $a + $b;
	}
//3.Сделайте функцию, которая отнимает от первого числа второе и делит на третье.

	function func($a, $b, $c){

		return $a - $b / $c;
	}

//4.Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.
		function funcday($day)
 	{
		$week = [1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
		return $arr[$week];
	}

?>