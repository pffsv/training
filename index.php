<?php
 
class A{
  public static function my_func_1(){
      echo 'Класс А'.'<br>';
   }
    
   public static function my_func_2(){
      self::my_func_1();
   }
}
 
class B extends A {
  //Переопределяем метод
  public static function my_func_1(){ 
    echo 'Класс B'.'<br>';
  }
}
 
//Выведет 'Класс А', т.к. функция my_func_2 использует
//статическую ссылку self::, которая использует область видимости
//того класса, в котором она была определена, а не используется
B::my_func_2();   
            
 
//Используем позднее статическое связывание          
class C{
  public static function my_func_1(){
      echo 'Класс C';
   }
    
   public static function my_func_2(){
      static::my_func_1();
   }
}
 
class D extends C {
  //Переопределяем метод
  public static function my_func_1(){ 
    echo 'Класс D';
  }
}
 
//Выведет 'Класс D', т.к. функция my_func_2 использует позднее
//статическое связывание при помощи ссылки static::, которая использует 
//область видимости класса, в котором она используется, а не определена
D::my_func_2();
 
?> 