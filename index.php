<?php
trait tr_5_minus{                  //Создаем трейт
  public function _5_minus($n){    //Определяем один метод
    echo $this->m-$n.'<br>'; 
  }
}
 
interface int_5_mult{              //Создаем интерфейс
  public function _5_plus($n);     //Задаем шаблон метода
}
 
$obj_5=new class(5) implements int_5_mult{ //Создаем объект анонимного класса
  use tr_5_minus;                  //Подключаем интерфейс
  public $m;                       //Объявляем свойство класса
   
  function __construct($arg){      //Объявляем конструктор класса
    $this->m=$arg;                 //Устанавливает первый член операций 
  }
   
  public function _5_plus($n){     //Реализуем интерфейс
    echo $this->m+$n.'<br>'; 
  }
   
  public function _5_mult($n){     //Создаем собственный метод
    echo $this->m*$n.'<br>'; 
  }
};                                 //Не забываем про точку с запятой!!!
 
$obj_5->_5_minus(6);               //Выведет '-1'
$obj_5->_5_plus(6);                //Выведет '11'
$obj_5->_5_mult(6);                //Выведет '30'
?> 