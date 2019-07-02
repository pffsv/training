<?php
 
//Создаем трейт
trait tr_5_minus{                  
  //Определяем один метод
  public function _5_minus($n){    
    echo $this->m-$n.'<br>'; 
  }
}
 
//Создаем интерфейс
interface int_5_mult{              
  //Задаем шаблон метода
  public function _5_plus($n);     
}
 
//Создаем объект анонимного класса
$obj_5=new class(5) implements int_5_mult{ 
  //Подключаем интерфейс
  use tr_5_minus;                  
  //Объявляем свойство класса
  public $m;                       
   
  //Объявляем конструктор класса
  function __construct($arg){      
    //Устанавливает первый член операций
    $this->m=$arg;                  
  }
   
  //Реализуем интерфейс
  public function _5_plus($n){     
    echo $this->m+$n.'<br>'; 
  }
   
  //Создаем собственный метод
  public function _5_mult($n){     
    echo $this->m*$n.'<br>'; 
  }
}; //Не забываем про точку с запятой!!!
 
//Выведет '-1'
$obj_5->_5_minus(6);               
//Выведет '11'
$obj_5->_5_plus(6);                
//Выведет '30'
$obj_5->_5_mult(6);                
 
?> 