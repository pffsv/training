<?php
 
//Устанавливаем временную зону сервера
//Мой сервер находится в Минске
date_default_timezone_set('Europe/Minsk');
 
//Получаем текущую дату (массив)
$s_d=getdate();
 
//Переводим дни недели на русский
switch(true){
   
  case $s_d['weekday']=='Monday':
    $s_day_ru='Понедельник';
  break;
 
  case $s_d['weekday']=='Tuesday':
    $s_day_ru='Вторник';
  break;
   
  case $s_d['weekday']=='Wednesday':
    $s_day_ru='Среда';
  break;
   
  case $s_d['weekday']=='Thursday':
    $s_day_ru='Четверг';
  break;
   
  case $s_d['weekday']=='Friday':
    $s_day_ru='Пятница';
  break;
   
  case $s_d['weekday']=='Saturday':
    $s_day_ru='Суббота';
  break;
   
  case $s_d['weekday']=='Sunday':
    $s_day_ru='Воскресенье';
  break;
   
  default: $s_day_ru='';
}
 
//Заносим в переменную порядковый номер месяца
$m=$s_d['mon'];
 
//Добавляем нули к месяцам
if($m<10){
  $m='0'.$m;
}
 
echo <<<HD
Минское время<br>
Дата: {$s_d['mday']}.{$m}.{$s_d['year']} ({$s_day_ru})<br>
Время: {$s_d['hours']}ч. {$s_d['minutes']}мин. {$s_d['seconds']}сек.
HD;
 
?>
