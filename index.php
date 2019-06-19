<?php
class my_class{
  function test(other_class $arg){    //Первый аргумент метода должен быть
                                      //экземпляром класса other_class
     echo $arg->my_var;
  }
    
  function test_array(array $arg_1,$arg_2){ //Первый аргумент должен быть
      echo $arg_1[0].' '.$arg_2;            //массивом, второй любой доступный
  }
}    
 
class other_class{                    //Создаем еще один класс
   public $my_var = 'Привет!'.'<br>'; //и определяем в нем свойство
}
 
$obj=new my_class();                  //Создаем экземпляр класса my_class
$other_obj=new other_class();         //Создаем экземпляр класса other_class
 
$obj->test($other_obj);    //Выведет строку 'Привет'
//$obj->test(7);           //Выведет ошибку, т.к. передан недопустимый                  
                           //тип данных (число вместо экземпляра класса)
$arr=['a','b','c'];        //Определяем массив
$obj->test_array($arr,5);  //Выведет строку 'a 5'
//$obj->test_array(5,$arr);//Выведет ошибку, первый аргумент должен быть массивом
?>