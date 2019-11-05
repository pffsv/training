<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">  
   <title>Загрузка файлов на сервер</title>
</head>
<body>
   <form action="php/example_90.php" method="POST" enctype="multipart/form-data"> 
    Введите имя  &nbsp; <input type="text" name="first_name"><br><br>
    Введите фамилию  &nbsp; <input type="text" name="last_name"><br><br>
 
    Загрузите аватарку:<br><br>
    <input type="file" name="avatar"><br><br>
     
    <button type="submit" name="submit" value="send">Отправить</button>
    <button type="reset" name="reset" value="send">Сброс</button>
   </form>
</body>
</html>
