<?php
 
//Задаем режим строгой типизации для скрипта
declare(strict_types=1);        
 
//Функция ожидает два целых числа 
function my_func(int $a,int $b){  
  return $a*$b; 
} 
 
$count_apples='my_func';
//Выведет 161 кг
echo $count_apples(23,7).' кг';   
 
?>