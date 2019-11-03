<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">  
   <title>Подключение php-файлов к html-странице</title>
</head>
<body>
      
<?php
  //Подключаем скрипт php
  include_once $_SERVER['DOCUMENT_ROOT'].'/test/incl_file.php';
?>
 
</body>
</html>
