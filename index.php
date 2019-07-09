<?php
 
//Объявили пространство имен
namespace name_space_1{    
  //Объявляем константу в текущем пространстве имен 
  const current_const_1 = 'current_constant_1'; 
 
  //Объявляем функцию в текущем пространстве имен   
  function current_function_1(){
    echo 'current_function_1'.'<br>';
  }
   
  //Объявляем класс в текущем пространстве имен
  class current_class_1{
    static function current_method_1(){
      echo 'current_method_1'.'<br>';
    }
  }
}
 
 
//Объявили пространство имен
namespace name_space_2{   
  //Импортируем имя константы из name_space_1 и создаем ей псевдоним
  use const name_space_1\current_const_1 as B;
  //Импортируем имя функции из name_space_1 и создаем ей псевдоним
  use function name_space_1\current_function_1 as f;
  //Импортируем имя класса из name_space_1 и создаем ей псевдоним
  //При этом писать слово class не нужно
  use name_space_1\current_class_1 as CL;
  //Импортируем имя функции из глобального пространства и создаем ей псевдоним
  use function \global_function as gl_f;
   
  //Выведет 'current_constant_1'
  echo B.'<br>'; 
  //Выведет 'current_function_1'
  f();           
   
  //Создаем объект класса name_space_1\current_class_1
  $a=new CL;     
  //Выведет 'current_method_1'
  $a->current_method_1();
  //Выведет 'global_function'
  gl_f();         
   
  //Объявляем константу в текущем пространстве имен 
  const current_const_2 = 'current_constant_2'; 
   
  //Объявляем функцию в текущем пространстве имен   
  function current_function_2(){
    echo 'current_function_2'.'<br>';
  }
   
  //Объявляем класс в текущем пространстве имен
  class current_class_2{
    static function current_method_2(){
      echo 'current_method_2'.'<br>';
    }
  }
}
 
 
namespace{
  //Создаем псевдоним пространства имен для сокращения записи
  use name_space_2 as ns_2;
     
  //Объявляем функцию в глобальном пространстве
  function global_function(){
    echo 'global_function'.'<br>';
  }
   
  //Выведет 'current_constant_2'
  echo ns_2\current_const_2.'<br>'; 
  //Выведет 'current_function_2'
  ns_2\current_function_2();        
  //Объект класса name_space_2\current_class_2
  $b=new ns_2\current_class_2;      
  //Выведет 'current_method_2'
  $b->current_method_2();           
}
 
?>