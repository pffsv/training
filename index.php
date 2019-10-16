<?php
 
//Объявили пространство имен
namespace my_name_space{ 
  //Объявляем константу в текущем пространстве имен 
  const my_const = 'Константа';    
  //Присвоили переменной число  
  $b=7; 
   
  //Объявляем функцию в текущем пространстве имен
  function my_func($arg){
    return $arg;
  }
   
  //Объявляем класс в текущем пространстве имен
  class my_class{
    //Объявляем статический метод класса
    public static function my_method($arg_1, $arg_2){
      echo $arg_1*$arg_1+$arg_2*$arg_2;
    }
  }
}
 
namespace my_name_space\inside{
  //Импортируем и создаем псевдонимы
  use const my_name_space\my_const as C;
  use function my_name_space\my_func as F;
  use my_name_space\my_class as CL;
   
  //Теперь просто используем псевдонимы
  echo C.'<br>';
  echo F(10).'<br>';
  CL::my_method(3, 5);
}
 
?> 
