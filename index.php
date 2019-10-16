<?php
 
//Объявили пространство имен
namespace my_name_space{ 
  //Объявляем константу в текущем пространстве имен 
  const my_const = 'Константа';    
     
  //Объявляем функцию в текущем пространстве имен
  function my_func($arg){
    echo $arg.'<br>';
  }
   
  //Объявляем класс в текущем пространстве имен
  class my_class{
    //Объявили статическое свойство
    public static $b=5; 
     
    //Объявляем общедоступный метод класса
    public function my_method($arg_1, $arg_2){
      return $arg_1+$arg_2;
    }
  }
   
  //Создали объект класса
  $a=new my_class; 
   
  //В текущем пространстве имен можно использовать неполные имена
  echo my_const.'<br>';
  my_func(10).'<br>';
  echo my_class::$b.'<br>';
  //Переменные не зависят от пространства имен
  echo $a->my_method(3,5).'<br>';
}
 
namespace{
  //Везде добавляем префикс 'my_name_space\' нашего пространства имен,
  //дополняя до полного имени
  echo my_name_space\my_const.'<br>';
  my_name_space\my_func(10).'<br>';
  echo my_name_space\my_class::$b.'<br>';
  //Переменные не зависят от пространства имен
  echo $a->my_method(3,5).'<br>';
}
 
?> 
