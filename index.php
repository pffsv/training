<?php
 
//Объявляем первый интерфейс
interface my_intf_1{                    
  //Объявляем константу интерфейса
  const c_1="Константа интерфейса 1"; 
  //Метод должен принимать 2 аргумента
  public function my_func_1($a, $b);    
}
 
//Объявляем второй интерфейс
interface my_intf_2{                    
   //Метод должен принимать 1 аргумент
   public function my_func_2($d);       
}
 
//Расширяем интерфейс
interface my_intf_3 extends my_intf_1, my_intf_2{ 
   //Метод без аргументов
   public function my_func_3();         
}
 
//Объявляем еще один интерфейс
interface my_intf_4{                    
   //Объявляем константу интерфейса
   const c_4="Константа интерфейса 4";  
}
 
 
//Реализуем расширенный интерфейс
class my_class implements my_intf_3, my_intf_4{
  //Объявляем константу класса
  const c_2="Константа класса";       
  //Реализуем первый метод
  public function my_func_1($a, $b){    
    return $a+$b;   
  }
 
  //Реализуем второй метод
  public function my_func_2($d){        
    echo $this->my_func_1($d,5).'<br>';  
  }
 
  //Реализуем третий метод
  public function my_func_3(){          
    $this->my_func_4();  
  }
 
  //Объявляем закрытый метод класса
  private function my_func_4(){         
    echo 'Строка из my_func_4'.'<br>';  
  } 
}
 
$obj= new my_class();      
 
//Выведет '10'
$obj->my_func_2(5);                      
//Выведет 'Строка из my_func_4'
$obj->my_func_3();                       
//Выведет все константы
echo $obj::c_1.'<br>'.$obj::c_4.'<br>'.$obj::c_2; 
 
?> 