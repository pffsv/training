<?php
 
//Здесь объявлять ничего нельзя и перед тегом '<?php' тоже 
//const my_const = 1;   
 
//Использовать инструкцию declare разрешается
declare(strict_types=1);
 
//Объявили пространство имен
namespace myStore{      
 
  //Объявили константу в пространстве имен myStore
  const my_const = 1;     
 
  //Объявили класс в пространстве имен myStore
  class my_class{        
    public $a=2;
  }
 
  //Объявили функцию в пространстве имен myStore
  function my_function(){ 
    echo 3;
  }
 
  //Выведет 1
  echo my_const.'<br>';   
 
  $b = new my_class;
  //Выведет 2
  echo $b->a.'<br>';      
  //Выведет 3
  my_function();          
 
} //Конец области данного пространства имен
 
//Здесь и после тега '?&gt;' тоже нельзя ничего объявлять 
//$f=5; 
                 
?>