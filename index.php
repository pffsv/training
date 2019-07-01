<?php
 
trait tr_1{         
  //Объявили свойство трейта
  public $var_tr_1='Св-во трейта';   
   
  //Объявили метод трейта
  public function func_a(){          
    echo 'Метод func_a 1-го трейта'.'<br>';
  }
   
  //Объявили метод трейта
  public function func_b(){          
    echo 'Метод func_b 1-го трейта'.'<br>';
  }
}
 
//Объявили второй трейт
trait tr_2{                          
  //Имя используется и в tr_1
  public function func_a(){          
    echo 'Метод func_a 2-го трейта'.'<br>';
  }
   
  //Имя используется и в tr_1
  public function func_b(){          
    echo 'Метод func_b 2-го трейта'.'<br>';
  }
   
  //Еще один метод 2-го трейта
  public function func_c(){          
    echo 'Метод func_c 2-го трейта'.'<br>';
  }
}
 
//Объявили класс
class base_class{                     
 
  //Ошибка, свойство уже определено в трейте
  // public $var_tr_1='Свойство класса';
  use tr_1, tr_2{
    //Будем использовать метод первого трейта
    tr_1::func_a insteadof tr_2;      
    //Переопределяем его на protected
    tr_1::func_a as protected;         
    //Будем использовать метод второго трейта
    tr_2::func_b insteadof tr_1;      
    //Метод 2-го трейта используем под именем
    //func_a_2 с областью видимости protected
    tr_2::func_a as protected func_a_2;
  }                                   
     
  //Объявили собственный метод класса,который переопределит метод 2-го трейта
  public function func_c(){           
    echo 'Метод класса base_class'.'<br>';
  }
}
 
//Объявили класс-потомок
class child_class extends base_class{ 
  //Объявили собственный метод класса-потомка
  public function func_d(){     
    //Вызываем метод родительского класса
    parent::func_a();           
  }
   
  //Объявили еще один метод класса-потомка
  public function func_e(){     
    //Вызываем метод родительского класса
    parent::func_a_2();         
  }
   
  //Переопределяем метод родительского класса
  public function func_b(){     
    echo 'Метод класса child_class'.'<br>';  
  }
}
 
//Создали объект класса base_class
$obj_bs_cl=new base_class();    
//Выведет 'Метод func_b 2-го трейта '
$obj_bs_cl->func_b();           
//Выведет 'Метод класса base_class '
$obj_bs_cl->func_c();           
 
//Создали объект класса-потомка
$obj_cld_cl=new child_class();   
//Выведет 'Метод класса child_class '
$obj_cld_cl->func_b();          
//Выведет 'Метод func_a 1-го трейта '
$obj_cld_cl->func_d();          
//Выведет 'Метод func_a 2-го трейта '
$obj_cld_cl->func_e();          
//Выведет 'Метод класса base_class '
$obj_cld_cl->func_c();          
 
?>