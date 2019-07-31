<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">  
  <title>Загрузка нескольких файлов</title>
</head>
<body>
  <form action="example_9_10.php" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
    Загрузите аватарки (не более 3Мб каждая):<br><br>
    <input type="file" name="userFile[]" multiple><br><br>
    <button type="submit" name="submit" value="send">Отправить</button>
  </form>
</body>
</html>