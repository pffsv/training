<?php

	/*
60. Создайте абстрактный класс, который будет содержать два абстрактных защищенных метода 
return_car_name() и return_car_price(), а также один обычный общедоступный метод return_year($year), 
принимающий год выпуска автомобиля, а возвращающий строку "Год выпуска авто: {$year}". После оформления 
абстрактного класса, создайте два класса-потомка bmw_car и ford_car. Абстрактный метод return_car_name() 
после реализации должен возвращать строку с маркой автомобиля, а return_car_price(), соответственно, 
его цену в виде числа. Создайте экземпляр первого класса и вызовите его методы, а затем повторите 
тоже самое со вторым классом.
	*/

//Объявили абстрактный класс
abstract class abstract_class{                     
  //Будет возвращать марку авто
  abstract protected function return_car_name();  
  //Будет возвращать цену авто
  abstract protected function return_car_price(); 
 
  //Обычный общий метод 
  public function return_year($year){          
    return "Год выпуска авто: {$year}";
  }
}
  
  
class bmw_car extends abstract_class{
    
  //Реализуем (заполняем) метод
  public function return_car_name(){ 
    return 'BMW';
  }
 
  //Расширяем область видимости метода
  public function return_car_price(){ 
    return 30000;
  }
}
  
  
class ford_car extends abstract_class{
    
  //Реализуем (заполняем) метод
  public function return_car_name() { 
    return 'Ford';
  }
 
  //Расширяем область видимости метода
  public function return_car_price(){  
    return 20000;
  }
}
  
//Создаем экземпляр первого класса-потомка
$bmw = new bmw_car;            
echo $bmw->return_car_name().'<br>';
echo $bmw->return_year(2003).'<br>';
echo $bmw->return_car_price().'<br><br>';
  
//Создаем экземпляр второго класса-потомка
$ford = new ford_car;          
echo $ford->return_car_name().'<br>';
echo $ford->return_year(2005).'<br>';
echo $ford->return_car_price().'<br>';
 
?>