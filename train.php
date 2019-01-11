<?php
//Задачи на приемы работы с массивами на PHP
//Давайте заполним массив десятью иксами 'x':

	$arr = [];
	for ($i = 0; $i < 10; $i++) {
		$arr[] = 'x';
	}
	var_dump($arr);
	echo'<br>';

//Давайте теперь заполним массив числами от 1 до 10:

	$arr = [];
	for ($i = 0; $i < 10; $i++) {
		$arr[] = $i;
	}
	var_dump($arr);	
	echo'<br>';

/*Давайте поменяем ключи и значения в ассоциативный массиве, например из ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5] 
сделаем [1=>'a', 2=>'b', 3=>'c', 4=>'d', 5=>'e'].*/	

	$arr = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5];
	$result = [];
	
	foreach ($arr as $key=>$elem) {
		$result[$elem] = $key;
	}
	
	var_dump($result); //выведет [1=>'a', 2=>'b', 3=>'c', 4=>'d', 5=>'e']
	echo'<br>';

/*Дан массив ['a', 'b', 'c', 'a', 'a', 'b']. Давайте подсчитаем количество одинаковых элементов в этом массиве
и сделаем результат в виде массива ['a'=>3, 'b'=>2, 'c'=>1].*/

	$arr = ['a', 'b', 'c', 'a', 'a', 'b'];
	$count = ['a'=>0, 'b'=>0, 'c'=>0];
	
	foreach ($arr as $elem) {
		$count[$elem]++;
	}
	
	var_dump($count); //выведет ['a'=>3, 'b'=>2, 'c'=>1]
	echo'<br>';

	$arr = ['a', 'b', 'c', 'a', 'a', 'b'];
	$count = [];
	
	foreach ($arr as $elem) {
		if (!isset($count[$elem])) {
			$count[$elem] = 1;
		} else {
			$count[$elem]++;
		}
	}
	
	var_dump($count); //выведет ['a'=>3, 'b'=>2, 'c'=>1]
	echo'<br>';

$arr = [[1, 2, 3, 4, 5], [6, 7, 8], [9, 10]];
	
	foreach ($arr as $elem) {
		foreach ($elem as $subElem) {
			echo $subElem;
		}
	}

?>