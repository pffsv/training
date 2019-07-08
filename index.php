<?php
 
namespace{
  //Объявляем константы в глобальном пространстве
  const my_const = 'global constant';
  const my_const_2 = 'global constant_2';
   
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
   
  //Выведет 'global constant'
  echo my_const.'<br>';                    
   
  //А вот здесь будет ошибка, т.к. константа еще не определена
  //echo current_name_space\my_const.'<br>'; 
   
  //Выведет 'global function'
  global_function();                       
  //Выведет 'current function'
  current_name_space\current_function();    
  //Выведет 'global method'
  global_class::global_method();           
}
 
 
//Объявили пространство имен
namespace current_name_space{              
  //Объявляем константу в текущем пространстве имен 
  const my_const = 'current_constant';    
     
  //PHP обратится к current_name_space\my_const 
  //Выведет 'current_constant'
  echo my_const.'<br>';                    
   
  //PHP использует абсолютное имя \my_const 
  //Выведет 'global constant'
  echo \my_const.'<br>';                   
   
  //Здесь PHP не найдет константы, поэтому перейдет к глобальному пространству
  //Выведет 'global constant_2'
  echo my_const_2.'<br>';                  
     
  function current_function(){
    echo 'current function'.'<br>';
  }
     
  //Вызываем функцию current_name_space\current_function()
  //Выведет 'current function'
  current_function();                       
   
  //Вызываем глобальную функцию \global_function()
  //Выведет 'global function'
  \global_function();                      
   
  //Имена классов всегда преобразуются к текущему имени пространства имен
  //Выведет ошибку
  //global_class::global_method();         
   
  //А вот здесь все правильно, PHP воспользуется абсолютным адресом
  //Выведет 'global method'
  \global_class::global_method();          
}
 
?>
