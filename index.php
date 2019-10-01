<?php
 
//Объявляем первый трейт
trait my_trait{                     
  //Защищенный метод принимает 1 аргумент
  protected function my_func_1($a){  
    return $a;
  } 
}
  
//Объявляем второй интерфейс
interface my_interface{               
  //Метод должен принимать 1 аргумент
  public function my_func_2($b);      
}
   
$obj= new class implements my_interface{
  //Реализуем трейт
  use  my_trait{             
    //Расширяем область видимости метода
    my_trait::my_func_1 as public;
  }
 
  //Реализуем метод интерфейса
  public function my_func_2($b){     
    return $b;
  }
   
}; //Не забываем про точку с запятой 
           
//Выведет '1'
echo $obj->my_func_1(11)%$obj->my_func_2(10); 
 
?>  
