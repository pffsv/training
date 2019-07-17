<?php
 
//Функцию нужно вызывать до старта сессии
$old_name = session_name('belarusweb');
//А вот теперь стартуем и саму сессию
session_start();    
//Выводим новое имя запущенной сессии
echo session_name().'<br>';
//Выводим id сессии belarusweb
echo session_id().'<br>';
//Выводим старое имя сессии до перезаписи
echo $old_name;
 
?>