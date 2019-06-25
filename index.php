<?php
abstract class abstract_class{                 //Объявили абстрактный класс
   abstract protected function return_value(); //Абстрактный, т.е. без реализации
   abstract protected function get_name($name);//Абстрактный, т.е. 'пустой'
    
  public function common_method(){        //Обычный общий метод наследуемый
      return  $this->return_value();      //всеми классами-потомками
    }
}
 
class concrete_class_1 extends abstract_class{
   protected function return_value() {    //Реализуем (заполняем) метод
      return 'Реализация метода в классе-потомке concrete_class_1'.'<br>';
   }
   
   public function get_name($first_name){ //Расширяем область видимости метода
      return "{$first_name}".'<br>';
   }
}
 
class concrete_class_2 extends abstract_class{
   public function return_value(){        //Расширяем область видимости метода
      return 'Реализация метода в классе-потомке concrete_class_2'.'<br>';
   }
//Расширяем область видимости метода и добавляем ему один необязательный параметр 
  public function get_name($first_name, $last_name=' Иванов '){ 
      return "{$first_name} {$last_name}".'<br>';   
   }
}
 
$obj_1 = new concrete_class_1;        //Создаем экземпляр первого класса-потомка
echo $obj_1->common_method();
echo $obj_1->get_name(' Иван ');
 
$obj_2 = new concrete_class_2;        //Создаем экземпляр второго класса-потомка
echo $obj_2->common_method();
echo $obj_2->get_name(' Петр ');      //Используется значение по умолчанию
echo $obj_2->get_name(' Петр ', ' Сидоров');
?>