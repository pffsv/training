<?php
 
namespace{
  //Объявляем константу в глобальном пространстве
  const my_const = 'global constant';
     
  //Объявляем функцию в глобальном пространстве
  function global_function(){
    echo 'global function'.'<br>';
  }
   
  //Объявляем класс в глобальном пространстве
  class global_class{
    static function global_method(){
      echo 'global method'.'<br>';
    }
  }
   
  //PHP обратится к \my_const 
  //Выведет 'global constant'
  echo namespace\my_const.'<br>';                 
   
  //Вызываем функцию \global_function()
  //Выведет 'global function'
  namespace\global_function();                    
  //Выведет 'global method'
  namespace\global_class::global_method();        
}
 
 
//Объявили пространство имен
namespace current_name_space{                     
  //Объявляем константу в текущем пространстве имен 
  const my_const = 'current_constant'; 
    
  //Объявляем функцию в текущем пространстве имен   
  function current_function(){
    echo 'current function'.'<br>';
  }
   
  //Объявляем класс в текущем пространстве имен
  class current_class{
    static function current_method(){
      echo 'current method'.'<br>';
    }
  } 
     
  //PHP обратится к current_name_space\my_const 
  //Выведет 'current_constant'
  echo namespace\my_const.'<br>';                   
   
  //Вызываем функцию current_name_space\current_function()
  //Выведет 'current function'  
  namespace\current_function();                     
   
  //Вызываем метод current_name_space\current_method()
  //Выведет 'current method'
  namespace\current_class::current_method();          
}
 
?>

