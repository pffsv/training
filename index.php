<?php
 
//Объявили абстрактный класс
abstract class abstract_class{                 
  //Абстрактный, т.е. без реализации
  abstract protected function return_value(); 
  //Абстрактный, т.е. 'пустой'
  abstract protected function get_name($name);
 
  //Обычный общий метод наследуемый
  public function common_method(){        
    //всеми классами-потомками
    return  $this->return_value();      
  }
}
 
class concrete_class_1 extends abstract_class{
   //Реализуем (заполняем) метод
   protected function return_value() {    
       return 'Реализация метода в классе-потомке concrete_class_1'.'<br>';
   }
   
   //Расширяем область видимости метода
   public function get_name($first_name){ 
       return "{$first_name}".'<br>';
   }
}
 
class concrete_class_2 extends abstract_class{
  //Расширяем область видимости метода
  public function return_value(){       
       return 'Реализация метода в классе-потомке concrete_class_2'.'<br>';
   }
 
  //Расширяем область видимости метода и добавляем 1 необязательный параметр 
  public function get_name($first_name, $last_name=' Иванов '){ 
       return "{$first_name} {$last_name}".'<br>';    
   }
}
 
//Создаем экземпляр первого класса-потомка
$obj_1 = new concrete_class_1;        
echo $obj_1->common_method();
echo $obj_1->get_name(' Иван ');
 
//Создаем экземпляр второго класса-потомка
$obj_2 = new concrete_class_2;        
echo $obj_2->common_method();
 
//Используется значение по умолчанию
echo $obj_2->get_name(' Петр ');      
echo $obj_2->get_name(' Петр ', ' Сидоров');
 
?>