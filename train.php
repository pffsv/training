<?php

	/*
33. Реализуйте условие задачи №32 при помощи оператора switch.
	*/

//Присвоили первой переменной положительное число
$a=10;    
//Присвоили второй переменной положительное число
$b=5;              
 
//Присвоили частное третьей переменной
$d=$a/$b;   
//Вход будет осуществляться всегда
switch(true){   
  case $d>0: 
   echo $d;
  //Прерываем, чтобы не выполнялись другие блоки case
  break;    
   
  case $d==0:          
   echo 'Частное равно нулю!'; 
  break;
   
  //Можно заменить на default, т.к. вариантов больше нет
  case $d<0:             
   echo 'Частное имеет отрицательное значение!'; 
  break;
} 
       
?>