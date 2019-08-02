<?php
 
//Переместим файл, загруженный при помощи формы примера №1, 
//в папку loaded_files
//Сохраним путь к файлу во временной папке в переменной
$userFileTmp = $_FILES['userFile']['tmp_name'];
 
//Сохраним в переменной исходное имя загруженного файла
$file_name = $_FILES['userFile']['name'];
//Путь построим от корня сайта '/' и заменим временное имя файла обратно на свое
$my_dir="/loaded_files/{$file_name}";
 
//Если файл будет перемещен, функция вернет true
if(move_uploaded_file($userFileTmp, $my_dir)){
    echo "Файл корректен и был успешно перемещен.";
}else{
    echo "Файл не был перемещен!";
}
 
?>