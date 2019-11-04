<html>
<head>
   <meta charset="utf-8">  
   <title>Отправка простых текстовых данных</title>
</head>
<body>
   <form action="php/example_89.php" method="POST" name="form_89"> 
    Введите имя  &nbsp; <input type="text" name="first_name"><br><br>
    Введите фамилию  &nbsp; <input type="text" name="last_name"><br><br>
 
    Укажите ваш возраст: &nbsp; 
    <!-- Создаем раскрывающийся список -->
    <select name="age">
      <option value="до 18 лет">до 18 лет</option>
      <option value="19-30 лет">19-30 лет</option>
      <option value="30-50 лет">30-50 лет</option>
      <option value="50 лет и старше">50 лет и старше</option>
    </select> <br><br> 
 
    Предпочитаете &nbsp; 
    <input type="radio" name="user_choice" value="овощи" checked>овощи &nbsp; 
    <input type="radio" name="user_choice" value="фрукты">фрукты<br><br>
    <button type="submit" name="submit" value="send">Отправить</button>
   </form>
</body>
</html>