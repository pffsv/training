<?php
//Чтобы не создавать два файла, совместим все в одном php-файле. Весь 
//html-код с помощью синтаксиса heredoc присвоим переменной и выведем 
//только в том случае, если форма еще не была отправлена на сервер
//$_SERVER['PHP_SELF'] содержит имя текущего скрипта относительно корня сайта
 
$a=<<<HD
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">  
  <title>Отправка простых текстовых данных</title>
</head>
<body>
  <form action="{$_SERVER['PHP_SELF']}" method="POST"> 
    Введите имя  &nbsp; <input type="text" name="firstName"><br><br>
    Введите фамилию  &nbsp; <input type="text" name="lastName"><br><br>
    Предпочитаете &nbsp; 
     <input type="checkbox" name="choice[]" value="овощи">овощи &nbsp; 
     <input type="checkbox" name="choice[]" value="фрукты">фрукты<br><br>
    <button type="submit" name="submit" value="send">Отправить</button>
  </form>
</body>
</html>
HD;
 
//Если форма была уже отправлена, то в массиве есть элемент $_POST["submit"]
if(isset($_POST["submit"])){
 //Чтобы не усложнять пример, будем считать, что все данные были введены 
 //Достаем полученные данные из суперглобального массива $_POST
 //и присваиваем их переменным для удобства использования
 $firstName = $_POST['firstName'];
 $lastName = $_POST['lastName'];
 $user_choice_0 = $_POST["choice"][0];
 $user_choice_1 = $_POST["choice"][1];
 //Выводим сообщение
 echo $firstName.' '.$lastName.' любит '.$user_choice_0.' и '.$user_choice_1; 
}else{
  //Если же форма еще не была отправлена выводим ее
  echo $a;
}
?> 