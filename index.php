<?php
declare(strict_types=1); //Задаем режим строгой типизации для скрипта
 
function my_sum(int $a,int $b,int $c=null){ //Функция ожидает три целых числа 
  $sum=$a+$b; 
  if($c===null){         //null по-прежнему принят без проблем
    echo 'null'.'<br>';
  }
  return  $sum;          //Возвращаем сумму аргументов функции 
} 
echo my_sum(5,2);        //Выведет 7
//echo my_sum('5',2);    //Выведет ошибку, т.к. включен режим строгой типизации
                 
  /* Закомментируйте строку с объявлением режима строгой типизации  
  и посмотрите как интерпретатор отреагирует на строку 12    */    
?>