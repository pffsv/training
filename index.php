<?php
 
//Массив с переменными
$m=["Dima", 11, true, null, [33,44], 1.23];
 
//Выводим данные о значениях массива
foreach($m as $key=>$val){
  //Чтобы нумерация шла с 1
  $n=$key+1;
   
  switch(true){
    case is_int($val):
      echo "{$n}-й элемент массива ". 
         "является целым числом".'<br>';
    break;
     
    case is_double($val):
      echo "{$n}-й элемент массива ". 
         "является вещественным числом".'<br>';
    break;    
     
    case is_string($val):
      echo "{$n}-й элемент массива ". 
         "является строкой".'<br>';
    break;    
     
    case is_array($val):
      echo "{$n}-й элемент массива ". 
         "является массивом".'<br>';
    break;    
     
    case is_bool($val):
      echo "{$n}-й элемент массива ". 
         "относится к логическому типу данных".'<br>';
    break;    
     
    case is_null($val):
      echo "{$n}-й элемент массива ". 
         "является значением NULL".'<br>';
    break;    
 
    default:
      echo "Скрипт не может определить тип данных.";
  }
}
 
?>