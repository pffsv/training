<?php
//19.Продвинутая работа с пользовательскими функциями в PHP
//Глобальные переменные	
	/*
		Определим ПЕРЕД функцией переменную $test,
		а затем попробуем вывести ее значение внутри функции:
	*/
	$test = 'Тест!';
	function func()
	{
		/*
			Укажем PHP то, что мы хотим взять глобальную переменную $test
			с помощью инструкции global:
		*/
		global $test; 
		var_dump($test); //выведет 'Тест!', так как теперь внешняя переменная видна внутри функции!
	}
	func(); //вызовем нашу функцию, чтобы проверить то, что она выводит
//Совет: если необходимо сделать глобальными сразу несколько переменных, их можно написать через запятую после слова global: global $a, $b, $c;	

	//Создадим простую функцию:
	function funcSimpl()
	{
		/*
			Изначально $a не определена и PHP может ругаться на это, 
			но после выполнения операции ++, в нее запишется единица.
		*/
		$a++; 
		echo $a;
	}
	funcSimpl(); //выведется 1
	funcSimpl(); //опять выведется 1
	funcSimpl(); //и опять...
	echo'<br>';
	/*
		Это говорит о том, что каждый раз при новом вызове функции 
		переменная $a имеет значение null!
	*/

//Static переменные

	//Создадим простую функцию:
	function funcStatic()
	{
		/*
			Укажем PHP, что мы хотим, чтобы $a была статической переменной:
		*/
		static $a;

		$a++;
		echo $a;
	}

	funcStatic(); //выведется 1
	funcStatic(); //выведется 2!
	funcStatic(); //выведется 3!!
	echo'<br>';

	/*
		Это говорит о том, что каждый раз при новом вызове функции
		к переменной $a прибавляется единица.
	*/


	//Функция, которая возвращает квадрат числа:
	function kvadrat($var)
	{
		return $var*$var;
	}

	$test = 2; //глобальная переменная $test, присваиваем ей значение 2

	echo kvadrat($test); //вызовем нашу функцию, передав ей параметром переменную $test

	/*
		Функция выведет 4.
	*/

//Рекурсия
//рекурсия - это когда функция вызывает сама себя.

	$arr = [1, 2, 3, 4, 5];

	last($arr);

	function last($arr)
	{
		echo array_pop($arr).'<br>'; //выводим последний элемент массива
    
		if(!empty($arr)) {
			last($arr); //это рекурсия
		}
	}		
?>