<?php

	/*
31. Создайте переменные $a, $b и присвойте им положительные числа. 
Присвойте частное от деления $a/$b третьей переменной $d. 
Используя условный оператор if, осуществите схему вывода на 
экран значения переменной $d только в том случае, если оно 
является положительным числом. Если число окажется отрицательным 
или равным нулю, должно выводиться соответствующее предупреждение, 
а не значение переменной. Проверьте работу скрипта, после чего 
измените одно из значений переменных $a или $b на отрицательное 
число и снова запустите скрипт.
	*/

//Присвоили первой переменной положительное число
$a=10;    
//Присвоили второй переменной положительное число 
$b=5;             
//Присвоили частное третьей переменной
$d=$a/$b;   
 
//Проверяем условие
if($d>0){   
   //Выводим только, если условие истинно,
   echo $d; 
//иначе выводим предупреждение
}else{    
  echo 'Частное меньше или равно нулю!';
}        

?>