<?php
  //Устанавливаем доступы к базе данных:
    $host = 'localhost'; //имя хоста, на локальном компьютере это localhost
    $user = 'root'; //имя пользователя, по умолчанию это root
    $password = ''; //пароль, по умолчанию пустой
    $db_name = 'yii2_loc'; //имя базы данных

  //Соединяемся с базой данных используя наши доступы:
    $link = mysqli_connect($host, $user, $password, $db_name);

  //Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
    mysqli_query($link, "SET NAMES 'utf8'");

  //Формируем тестовый запрос:
//    $query = "SELECT * FROM category WHERE name LIKE 'NikeNike'";


//    $result = mysqli_query($link, $query) or die(mysqli_error($link));

  //Преобразуем то, что отдала нам база в нормальный массив PHP $data:
//    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

//    $data = array_replace($data, ['name'=>"Nike Nike"]);

    $query = "UPDATE category SET name='Nike Nike' WHERE name='NikeNike'";
    $result = mysqli_query($link, $query) or die( mysqli_error($link) );

?>