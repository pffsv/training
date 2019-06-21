<?php
class parent_class{                 //Объявили родительский класс 
  public $my_var='value ';          //Объявили свойство класса
     
  final function my_func(){         //Определяем и финализируем метод 
    echo $this->my_var;             //Выводим значение свойства
  } 
}
  
class descendant_class extends parent_class{//Создаем класс-потомок
     
  function my_func(){                //Переопределение вызовет ошибку!!! 
    parent::my_func();        
    echo 'Нельзя переопределять финализированный метод';  
  }
} 
?>
