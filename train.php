<?php

	/*
19. Создайте переменную $m_1 и присвойте ей массив, состоящий из двух элементов 
(ключи не указывайте). Выведите на экран значение второго элемента массива 
(не забываем, что нумерация элементов массива начинается с нуля). Добавьте 
в массив третий элемент, также не указывая его ключ. Выведите его значение 
на экран. Добавьте в массив еще один элемент, указав в качестве ключа число 5. 
Выведите его значение на экран.
	*/

//Присвоили переменной массив с двумя элементами
$m_1=[56, 33];          
//Выведет 33
echo $m_1[1]."<br>";    
 
//Добавили в массив еще один элемент
$m_1[]=10;              
//Выведет 10
echo $m_1[2]."<br>";    
  
//Добавили в массив элемент с ключем 5
$m_1[5]=50;             
//Выведет 50
echo $m_1[5]."<br>";    
 
          
?>