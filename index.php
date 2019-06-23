<?php
class parent_class{
   protected $protected_var='protected_var '; //Доступно изнутри самого класса  
                                              //и всех классов-потомков
   private $private_var='private_var ';       //Доступно только изнутри класса
    
  function all_func(){
    echo $this->protected_var.'<br>';//Оба свойства доступны, т.к. запрашиваются 
    echo $this->private_var.'<br>';  //изнутри класса, где были определены
  }
}
 
class descendant_class extends parent_class{
  protected $protected_var='p_var ';//Переопределяем свойство, область видимости
                                    //при этом можно было изменить на public
  function all_func(){              //Переопределяем метод 
    echo $this->protected_var.'<br>';//Это свойство доступно, т.к. оно protected   
                                     //и запрашивается изнутри класса-потомка
    echo $this->private_var.'<br>';  //Ошибка, свойство доступно только изнутри 
                                     //класса parent_class, где было объявлено
  }
}
 
$obj=new parent_class();      //Создаем экземпляр родительского класса 
$obj_2=new descendant_class();//Создаем экземпляр класса-потомка
 
$obj->all_func();     //Сработает без ошибок 
//$obj_2->all_func(); //Выдаст ошибку, т.к. свойство $this->private_var
                      //неопределено в классе-потомке и доступно только изнутри 
                      //класса parent_class, где оно было объявлено
 
//echo $obj->private_var;   //Выдаст ошибку, т.к. свойство вне класса недоступно
//echo $obj->protected_var; //Выдаст ошибку, т.к. свойство вне классов недоступно 
//echo $obj_2->private_var; //Выдаст ошибку, т.к. свойство неопределено в descendant_class
?>