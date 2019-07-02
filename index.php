<?php
 
//Создаем внешний класс
class outer_class{             
  //Объявили свойство внешнего класса
  protected $n_out=2;          
     
  //Определяем первый метод outer_class
  public function func_ins_1(){
     
    //Здесь $this представляет внешний класс
    echo (new class($this->n_out) extends outer_class{
          //Объявили свойство анонимного класса
          public $n_ins;       
          //Конструктор
          function __construct($arg){
            //А здесь $this уже относится к анонимному классу
            $this->n_ins=$arg*$arg;
          }
        //И сразу же обращаемся к свойству созданного 
        //объекта анонимного класса
        })->n_ins;.'<br>'      
  }                                   
     
  //Определяем второй метод outer_class 
  public function func_ins_2(){
     
    //Здесь $this представляет внешний класс
    return new class($this->n_out) extends outer_class{
          //Объявили константу анонимного класса
          const a=5;           
          //Объявили свойство анонимного класса
          public $n_ins;       
          //Конструктор
          function __construct($arg){
            //А здесь $this уже относится к анонимному классу
            $this->n_ins=$arg*$arg;
          }
         }; //Возвращаем готовый анонимный объект
  }
}
 
$obj=new outer_class();
//Выведет '4'
$obj->func_ins_1();                    
//Выведет '4'
echo $obj->func_ins_2()->n_ins.'<br>'; 
//Выведет '5'
echo $obj->func_ins_2()::a;            
 
?> 