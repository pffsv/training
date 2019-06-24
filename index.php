<?php
class parent_class{
  protected function protected_func(){//Доступен изнутри самого класса  
    echo 'Защищенный метод'.'<br>';   //и всех классов-потомков
  }                            
   private function private_func(){   //Доступен только изнутри класса
    echo 'Закрытый метод'.'<br>';
  }
   
  function all_func(){           //Объявляем общедоступный метод
     $this->protected_func();    //Оба метода доступны, т.к. запрашиваются 
    $this->private_func();       //изнутри класса, где были определены
  }
}
class descendant_class extends parent_class{
   
  function all_func(){           //Переопределяем метод 
      $this->protected_func();   //Этот метод доступен, т.к. он protected и  
                                 //запрашивается изнутри класса-потомка
    $this->private_func();       //Ошибка, метод доступен только изнутри 
                                 //класса parent_class, где он был объявлен
  }
}
$obj=new parent_class();         //Создаем экземпляр родительского класса 
$obj_2=new descendant_class();   //Создаем экземпляр класса-потомка
 
$obj->all_func();         //Сработает без ошибок 
//$obj_2->all_func();     //Выдаст ошибку, т.к. метод $this->private_func() 
                          //неопределен в классе-потомке и доступен только  
                          //изнутри класса parent_class, где он был объявлен
 
//$obj->protected_func(); //Выдаст ошибку, т.к. метод вне классов недоступен
//$obj->private_func();   //Выдаст ошибку, т.к. метод вне класса недоступен 
?>