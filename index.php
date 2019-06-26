<?php
interface my_intf_1{                    //Объявляем первый интерфейс
   const c_1="Константа интерфейса 1";  //Объявляем константу интерфейса
  public function my_func_1($a, $b);    //Метод должен принимать 2 аргумента
}
 
interface my_intf_2{                    //Объявляем второй интерфейс
   public function my_func_2($d);       //Метод должен принимать 1 аргумент
}
 
interface my_intf_3 extends my_intf_1, my_intf_2{ //Расширяем интерфейс
   public function my_func_3();         //Метод без аргументов
}
 
interface my_intf_4{                    //Объявляем еще один интерфейс
   const c_4="Константа интерфейса 4";  //Объявляем константу интерфейса
}
 
 
class my_class implements my_intf_3, my_intf_4{//Реализуем расширенный интерфейс
   const c_2="Константа класса";        //Объявляем константу класса
  public function my_func_1($a, $b){    //Реализуем первый метод
         return $a+$b;    
        }
         
  public function my_func_2($d){        //Реализуем второй метод
        echo $this->my_func_1($d,5).'<br>';  
       }
        
  public function my_func_3(){          //Реализуем третий метод
        $this->my_func_4();  
       }
        
  private function my_func_4(){         //Объявляем закрытый метод класса
        echo 'Строка из my_func_4'.'<br>';  
       }  
}
 
$obj= new my_class();      
$obj->my_func_2(5);                      //Выведет '10'
$obj->my_func_3();                       //Выведет 'Строка из my_func_4'
echo $obj::c_1.'<br>'.$obj::c_4.'<br>'.$obj::c_2; //Выведет все константы
?> 