<?php
$m_1=[
  "apple",
  "my_array"=>[4,12],
  "building"=>'house'
  ];                              //Создаем массив 
 
echo $m_1[0].'<br>';              //Выведет строку 'apple'
echo $m_1["building"].'<br>';     //Выведет строку 'house'
echo $m_1["my_array"][0].'<br>';  //Выведет '4'
?> 