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
 
class my_class_3 extends my_class_2{
  //Скидка в 20%
  const sale=0.8;   
 
  function product_sale(){ 
    //вычисляем общую стоимость
    $start_price=parent::product_price();  
 
    //Если общая масса яблок больше 50кг,
    if($this->product_mass()>50){    
      //возвращаем цену со скидкой в 20%.
      return $start_price*self::sale;    
    //Иначе
    }else{              
      //без скидки
      return $start_price;    
    }
  }   
}
   
//Создали экземпляр класса, т.е. объект
$apples=new my_class_3();  
//Выведет 7
echo 'Количество корзин '.$apples::baskets.'<br>';        
                 
//Пусть в корзину влазит 12кг яблок
$apples->mass=12;          
echo 'Всего вместится '.$apples->product_mass().'кг яблок'.'<br>'; 
 
//Пусть 1кг яблок стоит 1.6 у.е.
$apples->price=1.6;        
echo 'Стоимость без скидки составит '.$apples->product_price().' у.е.'.'<br>'; 
echo 'Стоимость со скидкой составит '.$apples->product_sale().' у.е.';
 
/* Отметим, что в данном примере вместо parent и self 
можно было использовать и $this */
 
?>