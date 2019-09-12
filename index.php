<?php
 
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