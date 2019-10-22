<?php
 
//Заносим требуемую строку в переменную
$fool_name='Иван_Иванов';
 
//Ищем позицию разделителя
$delimiter=mb_strpos($fool_name,'_');
 
//Выделяем имя
$first_name=mb_substr($fool_name,0,$delimiter);
//Выделяем фамилию (разделитель не включаем)
$last_name=mb_substr($fool_name,$delimiter+1);
 
echo 'Имя: '.$first_name.'<br>';
echo 'Фамилия: '.$last_name;
 
?>