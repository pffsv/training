<?php

	/*
48. Создайте пользовательскую функцию, принимающую аргументы в массив переменной 
длины и выводящую их затем на экран. Используйте для доступа к элементам массива 
цикл foreach. Вызовите функцию, передав ей в качестве значения две строки и число.
	*/

//Использовали массив переменной длины
function my_func(...$argums){     
  //Выводим все значения на экран
  foreach($argums as $value){  
      echo $value.'<br>'; 
   }                          
}
  
//Передаем функции три аргумента
my_func('one', 'two', 3);          
 
?>