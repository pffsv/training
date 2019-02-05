<?php
//45.Простой движок сайта на PHP
//Работа с include
//1.Дан файл index.php. Дан также файл file.php. Подключите его с помощью инклуда к файлу index.php.

echo "!";
include 'train.php';
echo "!";

/*2.Дан файл index.php. Даны также файлы 1.php, 2.php, 3.php. 
Пусть имена этих файлов хранятся в массиве. Перебирете этот 
массив циклом и в цикле подключите все эти файлы к странице index.php*/

$arr = ['1.php', '2.php', '3.php'];
foreach($arr as $elem){
include $elem;
}


?>