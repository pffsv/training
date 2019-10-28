<?php
 
//Проверяем существование файла .htaccess
if(file_exists('.htaccess')){
  echo 'Файл .htaccess уже существует!<br>';
}else{
  //Пытаемся создать файл
  if(touch('.htaccess')){
    echo 'Файл .htaccess успешно создан!<br>';
  }else{
    echo 'Ошибка создания файла .htaccess!<br>';
  }
}
 
//Проверяем существование файла index.html
if(file_exists('index.html')){
  echo 'Файл index.html уже существует!';
}else{
  //Пытаемся создать файл
  if(touch('index.html')){
    echo 'Файл index.html успешно создан!';
  }else{
    echo 'Ошибка создания файла index.html!';
  }
}
 
?> 
