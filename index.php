<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">  
  <title>Отправка данных в массивах</title>
</head>
<body>
  <form action="example_10_6.php" method="POST" name="form_10_5"> 
    фрукты:   <select multiple name="fruits[]" size="3">    
            <option value="яблоки">Яблоки</option>
            <option value="апельсины">Апельсины</option>
            <option value="лимоны">Лимоны</option>
          </select> <br><br>
    <button type="submit" name="submit" value="send">Отправить</button>
  </form>
</body>
</html>