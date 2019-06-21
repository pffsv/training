<?php
class parent_class{                        //Объявили родительский класс 
  public $my_var='value ';                 //Объявили свойство класса
  const parent_const='parent_constant ';   //Объявили константу класса
   
  function my_func(){                      //Определяем метод 
    echo $this->my_var;                    //Выводим значение свойства
  } 
} 
 
class descendant_class extends parent_class{//Создаем класс-потомок 
  const self_const='self_constant ';        //Объявили константу класса-потомка
   
  function my_func(){    //Переопределяем родительский метод  
    parent::my_func();   //Вызываем родительский метод, и дополняем его выводом
    echo parent::parent_const.'<br>';//константы (тут можно и $this::my_const;)
  }
   
  function self_func(){  //Определяем новый метод класса-потомка 
    self::my_func();     //Вызываем метод текущего класса-потомка, 
                         //хотя можно и привычным способом $this->my_func();
    echo self::self_const.'<br>';    //Выводим константу класса-потомка 
                         //Здесь можно использовать и $this::self_const;
  }
} 
 
$descendant_obj=new descendant_class(); //Создаем новый объект 
$descendant_obj->my_func();             //Вызываем метод объекта класса-потомка 
$descendant_obj->self_func();           //Вызываем метод объекта класса-потомка 
echo $descendant_obj::self_const.'<br>';//Выводим константу класса-потомка 
?>
