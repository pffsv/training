<?php

 if (!empty($_POST["user_name"])&&!empty($_POST["age"]))
 {
 echo "Получены новые вводные:<br>";
 echo "имя - ";
 echo $_POST["user_name"];
 echo "<br>возраст - ";
 echo $_POST["age"];
 echo " лет";
 }
 else
 {
 echo "Переменные не дошли. Проверьте все еще раз.";
 }

?>