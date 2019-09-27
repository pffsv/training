<?php
 
//Объявляем первый интерфейс
interface my_intf_1{                  
  //Метод должен принимать 1 аргумент
  public function my_func_1($a);     
}
  
//Объявляем второй интерфейс
interface my_intf_2{                  
  //Метод должен принимать 1 аргумент
  public function my_func_2($b);    
}
  
//Реализуем интерфейсы в классе
class my_class implements my_intf_1, my_intf_2{ 
                      
  //Реализуем первый метод
  public function my_func_1($a){               
    return $a;    
  }
 
  //Реализуем второй метод
  public function my_func_2($b){               
    return $b;
  }
}
  
$obj= new my_class();          
//Выведет '1'
echo $obj->my_func_1(11)%$obj->my_func_2(10);   
 
?> 
