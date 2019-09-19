<?php
 
//Объявили класс
class my_class{           
  //Создаем числовую константу
  const my_const=10;     
  //Объявили и сразу инициализировали свойство класса
  public $my_var=15;     
 
  //Метод класса
  function my_method(){    
    //Выводим строку на экран
    echo 'Я создал свой класс!'.'<br>';     
  } 
}
   
//Создали экземпляр класса, т.е. объект
$my_object=new my_class();     
//Выведет 'Я создал свой класс!'
$my_object->my_method();       
                 
//Присваиваем сумму переменной
$sum=$my_object->my_var+$my_object::my_const;  
//Выведет 25
echo $sum;               
 
?>