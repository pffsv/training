<?php
 
//Объявили пространство имен
namespace current_name_space{    
  //Объявили константу в текущем пространстве имен 
  const my_const = 1;    
   
  //Обратимся к константе из текущего пространства имен
   
  //PHP дополнит неполное имя до полного current_name_space\my_const 
  //выведет 1
  echo my_const.'<br>';  
   
  //PHP использует полное имя current_name_space\my_const 
  //выведет 1
  echo \current_name_space\my_const.'<br>'; 
   
  //PHP преобразует в current_name_space\current_name_space\my_const 
  //выведет ошибку
  //echo current_name_space\my_const.'<br>';
}
 
//Объявили подпространство имен
namespace current_name_space\myStore{ 
  //Объявили константу в current_name_space\myStore
  const my_const = 2;    
   
  //Объявили класс в current_name_space\myStore
  class my_class{        
    function my_method(){
      echo my_const.'<br>';
    }
  }
   
  //Создали объект класса
  $a=new my_class;       
   
  //Обратимся к константе и методу из текущего пространства имен 
   
  //PHP дополнит неполное имя до полного current_name_space\myStore\my_const 
  //выведет 2
  echo my_const.'<br>';  
   
  //PHP преобразует в полное имя current_name_space\myStore\my_const 
  //выведет 2
  echo \current_name_space\myStore\my_const.'<br>';
   
  //PHP просто вызовет метод, т.к. переменные не зависят от пространства имен 
  //выведет 2
  $a->my_method();       
   
  //вызовет ошибку, т.к. к переменным пространства имен не применяются
  //\current_name_space\myStore\a->my_method();
}
 
namespace{
  //Выведет ошибку, т.к. в глобальном пространстве my_const не определена
  //echo my_const.'<br>';
   
  //PHP обратится к current_name_space\my_const 
  //выведет 1
  echo current_name_space\my_const.'<br>';
   
  //PHP опять обратится к current_name_space\my_const 
  //выведет 1
  echo \current_name_space\my_const.'<br>';
   
  //PHP обратится к current_name_space\myStore\my_const 
  //выведет 2
  echo current_name_space\myStore\my_const.'<br>';
   
  //PHP опять обратится к current_name_space\myStore\my_const 
  //выведет 2
  echo \current_name_space\myStore\my_const.'<br>';
   
  //PHP просто вызовет метод, т.к. переменные не зависят от пространства имен
  //А вот если бы метод был объявлен статическим, тогда к нему можно было бы 
  //обратиться как current_name_space\myStore\my_class::my_method()
  $a->my_method();//выведет 2
}
 
?>