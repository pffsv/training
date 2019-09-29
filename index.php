<?php
 
//Объявляем первый трейт
trait my_trait_1{                  
  //Метод принимает 1 аргумент
  public function my_func_1($a){  
    return $a;
  } 
}
 
//Объявляем второй трейт
trait my_trait_2{                  
  //Метод принимает 1 аргумент
  public function my_func_2($b){  
    return $b;
  } 
}
 
class my_class{
  //Реализуем трейты в классе
  use  my_trait_1,  my_trait_2;   
}
 
$obj= new my_class();          
//Выведет '1'
echo $obj->my_func_1(11)%$obj->my_func_2(10);   
 
?> 
