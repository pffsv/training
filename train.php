<?php

	/*
35. Создайте переменную $a и присвойте ей ноль в качестве стартового значения. 
Выведите на экран при помощи цикла while цифры от 1 до 5, использовав для этого 
операцию префиксного инкремента переменной $a. Сбросьте значение переменной и 
сделайте тоже самое, но при помощи цикла do/while.
	*/

$a=0;     
 
while($a<5){       
   //Код выполняется пока $a<5
   echo $a=++$a; 
} 
 
$a=0;
echo '<br>';
 
do{
  //Код выполняется пока $a<5
  echo $a=++$a; 
}while($a<5);
   

?>