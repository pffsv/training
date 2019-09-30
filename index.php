<?php
 
//Объявляем первый трейт
trait my_trait_1{                     
  //Защищенный метод принимает 1 аргумент
  protected function my_func_1($a){  
    return $a;
  } 
}
  
//Объявляем второй трейт
trait my_trait_2{                     
  //Защищенный метод принимает 1 аргумент
  protected function my_func_1($b){  
    return $b;
  } 
}
   
class my_class{
  //Реализуем трейты в классе
  use  my_trait_1, my_trait_2{      
    //Используем метод 1-го трейта
    my_trait_1::my_func_1 insteadof my_trait_2; 
    //Расширяем область видимости метода
    my_trait_1::my_func_1 as public;     
    //Используем под другим именем
    my_trait_2::my_func_1 as public my_func_2;  
  }
}
  
$obj= new my_class();          
//Выведет '1'
echo $obj->my_func_1(11)%$obj->my_func_2(10);    
 
?>  