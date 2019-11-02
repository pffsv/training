<?php
 
//Записываем требуемое содержимое в переменную
$str=<<<HD
body{
color: blue;
}
HD;
              
//Добавляем строку в файл в режиме перезаписи
//а если файл не существует, то сперва создаем его
if(file_put_contents('../css/styles.css',$str)){ 
    echo 'Запись в файл  прошла успешно!<br>';
}else{
    echo 'Какая-то ошибка, styles.css записан не был!<br>';
  die();  
}
 
//Записываем требуемое содержимое в переменную
//Подключаем таблицу стилей styles.css
$str_2=<<<HD
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">  
   <title>Запись и чтение файлов</title>
   <link rel="stylesheet" href="css/styles.css">
</head>
<body>
   Данный файл был записан функцией file_put_contents()
</body>
</html>
HD;
              
//Добавляем строку в файл в режиме перезаписи
//а если файл не существует, то сперва создаем его
if(file_put_contents('../index.html',$str_2)){ 
    echo 'Запись в файл index.html прошла успешно!<br>';
}else{
    echo 'Какая-то ошибка, index.html записан не был!';   
}
 
?> 