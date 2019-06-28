<?php
trait tr_1{         
  public $var_tr_1='Св-во трейта';   //Объявили свойство трейта
  public function func_a(){          //Объявили метод трейта
    echo 'Метод func_a 1-го трейта'.'<br>';
  }
  public function func_b(){          //Объявили метод трейта
    echo 'Метод func_b 1-го трейта'.'<br>';
  }
}
trait tr_2{                          //Объявили второй трейт
  public function func_a(){          //Имя используется и в tr_1
    echo 'Метод func_a 2-го трейта'.'<br>';
  }
  public function func_b(){          //Имя используется и в tr_1
    echo 'Метод func_b 2-го трейта'.'<br>';
  }
  public function func_c(){          //Еще один метод 2-го трейта
    echo 'Метод func_c 2-го трейта'.'<br>';
  }
}
 
class base_class{                     //Объявили класс
// public $var_tr_1='Свойство класса';//Ошибка, свойство уже определено в трейте
  use tr_1, tr_2{
    tr_1::func_a insteadof tr_2;      //Будем использовать метод первого трейта
    tr_1::func_a as protected;        //Переопределяем его на protected 
    tr_2::func_b insteadof tr_1;      //Будем использовать метод второго трейта
    tr_2::func_a as protected func_a_2;//Метод 2-го трейта используем под именем
  }                                   //func_a_2 с областью видимости protected
  public function func_c(){           //Объявили собственный метод класса
                                      //который переопределит метод 2-го трейта
    echo 'Метод класса base_class'.'<br>';
  }
}
 
class child_class extends base_class{ //Объявили класс-потомок
  public function func_d(){     //Объявили собственный метод класса-потомка
    parent::func_a();           //Вызываем метод родительского класса
  }
  public function func_e(){     //Объявили еще один метод класса-потомка
    parent::func_a_2();         //Вызываем метод родительского класса
  }
  public function func_b(){     //Переопределяем метод родительского класса
    echo 'Метод класса child_class'.'<br>';  
  }
}
 
$obj_bs_cl=new base_class();    //Создали объект класса base_class
$obj_bs_cl->func_b();           //Выведет 'Метод func_b 2-го трейта '
$obj_bs_cl->func_c();           //Выведет 'Метод класса base_class '
 
$obj_cld_cl=new child_class();  //Создали объект класса-потомка 
$obj_cld_cl->func_b();          //Выведет 'Метод класса child_class '
$obj_cld_cl->func_d();          //Выведет 'Метод func_a 1-го трейта '
$obj_cld_cl->func_e();          //Выведет 'Метод func_a 2-го трейта '
$obj_cld_cl->func_c();          //Выведет 'Метод класса base_class '
?>