<?php
 
class my_class{
 
  //Определяем частный метод
  private function my_func(){ 
    echo 'Получен доступ к частной функции!'.'<br>';
  }
   
  //Определяем статический частный метод
  private static function static_func(){//
    echo 'Получен доступ к статической частной функции!'.'<br>';
  }
   
  //Определяем метод перегрузки  
  public function __call($name, $arguments){
    $this->my_func(); 
        
  }
   
  //Определяем метод перегрузки в статическом контексте
  public static function __callStatic($name, $arguments){
    self::static_func();  
  }
}
 
//Создаем объект класса my_class
$obj_1=new my_class();      
            
//Выведет строку функции my_func() благодаря 
//определению в классе метода перегрузки __call()
echo $obj_1->my_func();     
 
//Выведет строку функции my_func() благодаря 
//наличию метода перегрузки __callStatic()
echo $obj_1::static_func(); 
 
?> 
