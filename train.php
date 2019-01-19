<?php
//26.Задачи на регулярные выражения PHP
//На '.', символы
//1.Дана строка 'ahb acb aeb aeeb adcb axeb'. Напишите регулярку, которая найдет строки ahb, acb, aeb по шаблону: буква 'a', любой символ, буква 'b'.

	echo preg_replace('#a.b#', '!', 'ahb acb aeb aeeb adcb axeb').'<br>';

//2.Дана строка 'aba aca aea abba adca abea'. Напишите регулярку, которая найдет строки abba adca abea по шаблону: буква 'a', 2 любых символа, буква 'a'. 

	echo preg_replace('#a..a#', '!', 'aba aca aea abba adca abea').'<br>';

//3.Дана строка 'aba aca aea abba adca abea'. Напишите регулярку, которая найдет строки abba и abea, не захватив adca.

	echo preg_replace('#ab.a#', '!', 'aba aca aea abba adca abea').'<br>'; 

//На '+', '*', '?', ()
/*4.Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку, которая найдет строки 
aba, abba, abbba по шаблону: буква 'a', буква 'b' любое количество раз, буква 'a'.*/

	echo preg_replace('#ab+a#', '!', 'aa aba abba abbba abca abea').'<br>';	

/*5.Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку, которая найдет строки 
aa, aba, abba, abbba по шаблону: буква 'a', буква 'b' любое количество раз (в том числе ниодного раза), буква 'a'.*/

	echo preg_replace('#ab*a#', '!', 'aa aba abba abbba abca abea').'<br>';

/*6.Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку, которая найдет строки 
aa, aba по шаблону: буква 'a', буква 'b' один раз или ниодного, буква 'a'.*/

	echo preg_replace('#ab?a#', '!', 'aa aba abba abbba abca abea').'<br>';

//7.Дана строка 'ab abab abab abababab abea'. Напишите регулярку, которая найдет строки по шаблону: строка 'ab' повторяется 1 или более раз.

	echo preg_replace('#(ab)+#', '!', 'aa aba abba abbba abca abea').'<br>';

//На экранировку
//8.Дана строка 'a.a aba aea'. Напишите регулярку, которая найдет строку a.a, не захватив остальные.

	echo preg_replace('#a\.a#', '!', 'a.a aba aea').'<br>';

//9.Дана строка '2+3 223 2223'. Напишите регулярку, которая найдет строку 2+3, не захватив остальные.

	echo preg_replace('#2\+3#', '!', '2+3 223 2223').'<br>';

/*10.Дана строка '23 2+3 2++3 2+++3 345 567'. Напишите регулярку, которая найдет строки 
2+3, 2++3, 2+++3, не захватив остальные (+ может быть любое количество).*/

	echo preg_replace('#2\++3#', '!', '23 2+3 2++3 2+++3 345 567').'<br>';

//11.Дана строка '23 2+3 2++3 2+++3 445 677'. Напишите регулярку, которая найдет строки 23, 2+3, 2++3, 2+++3, не захватив остальные

	echo preg_replace('#2\+*3#', '!', '23 2+3 2++3 2+++3 445 667').'<br>';

//12.Дана строка '*+ *q+ *qq+ *qqq+ *qqq qqq+'. Напишите регулярку, которая найдет строки *q+, *qq+, *qqq+, не захватив остальные.

	echo preg_replace('#\*q+\+#', '!', '*+ *q+ *qq+ *qqq+ *qqq qqq+').'<br>';

//13.Дана строка '*+ *q+ *qq+ *qqq+ *qqq qqq+'. Напишите регулярку, которая найдет строки *+, *q+, *qq+, *qqq+, не захватив остальные. 

	echo preg_replace('#\*q*\+#', '!', '*+ *q+ *qq+ *qqq+ *qqq qqq+').'<br>';

//На жадность
/*14. Дана строка 'aba accca azzza wwwwa'. Напишите регулярку, которая найдет все строки по 
краям которых стоят буквы 'a', и заменит каждую из них на '!'. Между буквами a может быть любой символ (кроме a)*/

    echo preg_replace('#a.+?a#', '!', 'aba accca azzza wwwwa');

?>