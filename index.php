<?php
function my_echo($str){ //Функция-обертка для echo
  echo $str;
}
$my_func = 'my_echo';
$my_func('test');       //Вызывает функцию my_echo()
?>