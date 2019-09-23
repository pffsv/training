<?php
 
//Объявили класс
class my_class{           
  //Создаем числовую константу
  const baskets=7;       
  //Объявили, но неинициализировали свойство класса
  public $mass;          
 
  function product_mass(){ 
    //$this ссылается на сам объект
    return $this::baskets*$this->mass;  
  } 
}
  
class my_class_2 extends my_class{
  //Объявили, но неинициализировали свойство класса
  public $price;          
 
  function product_price(){ 
    //$this ссылается на сам объект
    return $this::baskets*$this->price;  
  }   
}
   
//Создали экземпляр класса, т.е. объект
$apples=new my_class_2();  
//Выведет 7
echo 'Количество корзин '.$apples::baskets.'<br>';        
                 
//Пусть в корзину влазит 10кг яблок
$apples->mass=10;       
echo 'Всего вместится '.$apples->product_mass().'кг яблок'.'<br>'; 
 
//Пусть 1кг яблок стоит 1.5 у.е.
$apples->price=1.5;     
echo 'Стоимость составит '.$apples->product_price().' у.е.'; 
 
?>