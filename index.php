<?php
 
$sum=0;
$product=1;
 
function my_func(&$arg_1, &$arg_2, ...$args){ 
   
  foreach($args as $value){  
    $arg_1+=$value; 
    $arg_2*=$value;
   }
    
  return [$arg_1,$arg_2]; 
}
 
//Для удобства присвоили вызов переменной
$b=my_func($sum,$product,5,10,15);    
//Выводим значения массива
echo $b[0].'<br>'.$b[1].'<br>'.'<br>';  
  
//Выводим значения переменных
echo $sum.'<br>'.$product;        
 
/* Аргументы были переданы функции по ссылке, поэтому значения 
наших переменных были изменены. */
 
?>
