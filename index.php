<?php
function m_sum(...$args){   //Указали, что функция принимает аргументы  
                            //в массив $args переменной длины 
  $sum=0;                   //Присвоили начальное значение сумме аргументов
  foreach($args as $value){ //Перебираем все значения массива аргументов
    $sum+=$value; 
  }
  return  $sum;             //Возвращаем сумму аргументов функции 
} 
echo m_sum(1,2,3,4,5);      //Выведет 15 
?>