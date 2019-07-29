<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">  
  <title>Отправка простых текстовых данных</title>
</head>
<body>
  <form action="example_10_2.php" method="POST" name="form_10_1"> 
    Введите имя  &nbsp; <input type="text" name="firstName"><br><br>
    Введите фамилию  &nbsp; <input type="text" name="lastName"><br><br>
    Предпочитаете &nbsp; 
     <input type="radio" name="user_choice" value="овощи" checked>овощи &nbsp; 
     <input type="radio" name="user_choice" value="фрукты">фрукты<br><br>
    <button type="submit" name="submit" value="send">Отправить</button>
  </form>
</body>
</html>