<?php

	/*
67. Присвойте переменной анонимный класс. В классе объявите закрытое свойство, 
но не инициализируйте его. Для того, чтобы получить возможность инициализации 
свойства вне класса используйте метод перегрузки __set, а для получения его 
значения – метод __get. Сделайте так, чтобы в случае неинициализированного 
свойства метод выводил соответствующее предупреждение. После оформления класса 
попытайтесь вывести значение свойства на экран. Затем присвойте свойству значение и 
повторите попытку. Объясните результат.
	*/

$a = new class{
  //Объявили закрытое свойство, но не инициализировали
  private $private_var;  
 
  //Метод автоматически вызывается в случае обращения к недоступным свойствам
  public function __set($name, $value){ 
    //Устанавливаем значение недоступного свойства
    $this->$name=$value;    
  }
     
  //Метод возвращает значение недоступного свойства, если оно установлено,  
  //или выводит сообщение, если такого свойства нет или оно не инициализировано
  public function __get($name){
    //Если переменная установлена значением отличным от null
    if(isset($this->$name)){
      //возвращаем значение недоступного свойства
      return  $this->$name;
    }else{
      echo "Свойство {$name} отсутствует или не определено в данном классе";
    }
  }
};
                  
//Метод перегрузки __get() выведет сообщение
echo $a->private_var.'<br>';   
                               
//Изменяем значение закрытого свойства вне класса,
//что возможно благодаря методу перегрузки __set()
$a->private_var=10;           
//Выведет 10
echo $a->private_var;       

?>