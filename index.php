<?php  
  function m_func(){            
    $sum='local_var';  //Создали локальную переменную
    echo $sum.'<br>';  //При вызове функции выведет 'local_var' 
  }   
  $sum='global_var';   //Создали глобальную переменную
   
  echo $sum.'<br>';    //Выведет 'global_var'
  m_func();            //Выведет 'local_var'  
?>