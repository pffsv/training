<?php

	/*
73. Создайте массив, в который поместите все натуральные числа, не превышающие 20. 
Теперь измените все четные значения массива, увеличив их в три раза. Выведите их 
на экран. Для решения задачи создайте соответствующую callback-функцию, передав ей 
аргумент по ссылке, а затем используйте функцию array_walk(), передав ей в качестве 
второго аргумента созданную callback-функцию. Не забудьте посмотреть описание функции 
в официальном справочнике. 
	*/

//Создаем пустой массив. Можно и $m=array();
$m=[];
//Циклом заполняем его
for($n=1;$n<=20;$n++){
  //Добавляем текущее число n в массив
  $m[]=$n;
}
 
//Создаем callback-функцию передав аргумент по ссылке
function my_func(&$val){
  //Если элемент массива четное число
  if($val%2==0){
    //Увеличиваем его в 3 раза
    $val*=3; 
  }
}
 
//Применяем callback-функцию к каждому элементу массива
array_walk($m,"my_func");
//Выводим элементы массива на экран через пробел
foreach($m as $value){
  echo $value.' ';  
}   
 
?>