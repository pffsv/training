<?php
//29.Задачи на регулярные выражения PHP
//Примеры решения задач
/*С помощью позитивного и негативного просмотра найдите все строки по шаблону 
буква z, затем 2 буквы y и поменяйте 2 буквы y на знак '!'. То есть из 'zyy' нужно сделать 'z!'*/

	//Решение: воспользуемся позитивным просмотром назад:
	echo preg_replace('#(?<=z)yy#i', '!', 'zyy ayy');

 //Дана строка с целыми числами 'a1b2c3'. С помощью регулярки преобразуйте строку так, чтобы вместо этих чисел стояли их кубы.

    //Решение: воспользуемся функцией preg_replace_callback:
	echo preg_replace_callback('#(\d+)#', 'cube', 'a1b2c3');
 	function cube($matches)
	{
		$result = pow($matches[0], 3); //$matches[0] - это найденное число
		return $result;
	}

//На позитивный и негативный просмотр
/*1.С помощью позитивного и негативного просмотра найдите все строки по шаблону 
буква b, затем 3 буквы a и поменяйте 3 буквы a на знак '!'. То есть из 'baaa' нужно сделать 'b!' */

	echo preg_replace('#(?<=b)aaa#', '!', 'baaa');

/*2.С помощью позитивного и негативного просмотра найдите все строки по шаблону 
любая буква, но не b, затем 3 буквы a и поменяйте 3 буквы a на знак '!'. 
То есть из, к примеру, 'waaa' нужно сделать 'w!', а 'baaa' не поменяется.*/

	echo preg_replace('#(?<!b)aaa#', '!', 'baaa, waaa');

/*3.С помощью позитивного и негативного просмотра найдите все строки по шаблону 
3 буквы a, затем буква b и поменяйте 3 буквы a на знак '!'. То есть из 'aaab' нужно сделать '!b'.*/

	echo preg_replace('#aaa(?=b)#', '!', 'aaab');

/*4.С помощью позитивного и негативного просмотра найдите все строки по шаблону 
3 буквы a, затем любая буква, но не b и поменяйте 3 буквы a на знак '!'. 
То есть из, к примеру, 'aaaw' нужно сделать '!w', а 'aaab' не поменяется.*/

	echo preg_replace('#aaa(?!b)#', '!', 'aaaw, aaab');

//5.Дана строка со звездочками 'aaa * bbb ** eee * **'. Замените на '!' только одиночные звездочки, но не двойные.

	echo preg_replace('#(?<!\*)\*(?!\*)#', '!', 'aaa * bbb ** eee * **');

//6.Дана строка со звездочками 'aaa * bbb ** eee *** kkk ****'. Замените на '!' только двойные звездочки, но не одиночные или тройные и более. 

	echo preg_replace('#(?<!\*)\*{2}(?!\*)#', '!', 'aaa * bbb ** eee *** kkk ****');

//7.С помощью позитивного и негативного просмотра найдите две одинаковые идущие подряд буквы и первую поменяйте на '!'. 

	echo preg_replace('#([a-z])(?=\1)#', '!', 'aabbccdefffgh'); //!a!b!cde!!fgh

//8.С помощью позитивного и негативного просмотра найдите две одинаковые идущие подряд буквы и вторую поменяйте на '!'. 

	echo preg_replace('#(?<=([a-z]))\1#', '!', 'aabbccdefffgh'); //a!b!c!def!!gh

//На preg_replace_callback
//9.Дана строка с целыми числами. С помощью регулярки преобразуйте строку так, чтобы вместо этих чисел стояли их квадраты.

	function func($matches)
	{
		return $matches[0] * $matches[0];
	}

	echo preg_replace_callback('#\d#', 'func', '123456789');

/*10.Дана строка с целыми числами. Найдите числа, стоящие в кавычках и увеличьте их в два раза. 
Пример: из строки 2aaa'3'bbb'4' сделаем строку 2aaa'6'bbb'8'.*/

	function funct($matches)
	{
		return $matches[1] * 2;
	}

	echo preg_replace_callback("#'(\d+)'#", 'funct', " 2aaa'3'bbb'4'");

?>