<?php

	/*
44. Задайте бесконечный цикл for, который будет выводить квадраты целых 
положительных чисел. Цикл будет бесконечным, если второй параметр в условии 
будет отсутствовать. Если квадрат числа превысит 70, прервите цикл при помощи
 оператора goto, который будет осуществлять переход к метке после цикла для 
 вывода соответствующего сообщения.  
	*/

//Задаем бесконечный цикл 
for($i=1;;$i++){         
                
  //Если квадрат числа превышает 70
  if($i*$i>70){           
    //прерываем цикл и переходим к метке
    goto message_1; 
  }
      
  //Выводим квадраты чисел на экран
  echo $i*$i.'<br>';  
} 
 
message_1:
echo 'Вывод квадратов чисел, которые меньше 70, окончен!';
 
?>