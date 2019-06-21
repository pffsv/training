<?php
class fruit_color{
  public $color,  $fruit;       //Объявляем свойства
   
  function __construct($c){     //Объявляем конструктор с одним аргументом
    $this->color=$c;            //Задаем цвет фруктов
  }
   
  function set_fruit($fruit){   //Объявляем обычный метод с одним аргументом
    $this->fruit=$fruit;        //Задаем вид фруктов
    echo $this->color.' '.$this->fruit.'<br>';//Выводим цвет и вид 
  }
   
  function __destruct(){        //Вызываем деструктор для удаления
                                //объекта при освобождении ссылок на него
   }
}
 
$apples=new fruit_color('Yellow'); //Создаем объект и сразу же инициализируем 
$apples->set_fruit('orange');      //Вызываем метод объекта
 
class fruit_color_2 extends fruit_color{     //Объявляем класс-потомок
 
  function __construct($c_1, $c_2){          //Объявляем свой конструктор 
    $this->color=$c_1.' and '.$c_2;          //Задаем два цвета фруктов
  }
}
 
$apples_2=new fruit_color_2('Red', 'yellow');//Создаем объект класса-потомка
$apples_2->set_fruit('apples');              //Вызываем метод объекта
?>