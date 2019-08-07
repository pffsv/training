<?php 
 
//Локальные и глобальные переменные
 
$a=1;
 
//Объявили новую пользовательскую функцию m_func()
function m_func(){              
  $b=2; 
  echo $a;
}            
 
$c=3;
    
echo $a.'<br>'; 
echo $b.'<br>';                 
echo $c;
m_func(); 
 
?>