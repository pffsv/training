<?php
$n_1=5;  //Присвоили первой переменной значение
$n_2=10; //Присвоили второй переменной значение
 
function my_func($arg_1, $arg_2) {  //Объявили функцию с 2 аргументами 
  $sum = $arg_1+$arg_2; 
  return  $sum;          //Значение возвращаемое функцией при ее вызове 
} 
echo my_func($n_1,$n_2); //Вызываем функцию и выводим ее значение, т.е. 15
 
 
/* Условно объявление функции и ее вызов можно представить так */
 
/* function my_func($arg_1, $arg_2, ..., $arg_n){ 
    'исполняемый код'
    return 'возвращаемое значение'; 
  }
 
  my_func($arg_1, $arg_2, ...);  */
?>