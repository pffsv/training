<?php

	/*
43. Используйте условие задачи №39, 
но исключите из таблицы столбик умножения на 5. 
Для этого прервите внутренний цикл оператором 
continue при $k==5. 
	*/

//Задаем внешний цикл
for($i=1;$i<=9;$i++){         
     
    //Задаем внутренний цикл
  for($k=1;$k<=9;$k++){  
          
        //Если $k==5,
    if($k==5){            
      //прерываем внутренний цикл
      continue;   
    }
       
    //Добавим пробелы для выравнивания столбцов таблицы
    if($i*$k<10){   
            //Для результатов с одной цифрой
      echo $i*$k.' &nbsp; &nbsp; '; 
        }else{
            //Для результатов с 2 цифрами
      echo $i*$k.' &nbsp; ';        
        }
    }
      
    //Добавляем разрывы строк, чтобы таблица шла рядами
  echo '<br><br>';      
} 
 
?>