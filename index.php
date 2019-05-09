<?php
//Строка - шаблон
$rawstring = "На Z лежит X килограмм отборных Y.";

//массив ЧТО будем заменять
$placeholders = array('Z', 'X', 'Y');
//Массив НА ЧТО будем заменять
$vals_1 = array('полке', '5', 'апельсинов');
//Ну или на это
$vals_2 = array('столе', '189', 'груш');

//заменяем раз
$str_1 = str_replace($placeholders, $vals_1, $rawstring);

//заменяем два
$str_2 = str_replace($placeholders, $vals_2, $rawstring);

echo "Один: ". $str_1 . "<br />";
echo "Два: ". $str_2;
?>