<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">  
  <title>Загрузка нескольких файлов</title>
</head>
<body>
  <form action="example_10_12.php" method="POST" enctype="multipart/form-data"> 
    Загрузите фото (не более 1Мб):
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
    <input type="file"  name="file_1"><br><br>
    Загрузите аватарку (не более 50Кб):
    <input type="hidden" name="MAX_FILE_SIZE" value="50000">
    <input type="file"  name="file_2"><br><br>
    <button type="submit" name="submit" value="send">Отправить</button>
  </form>
</body>
</html>