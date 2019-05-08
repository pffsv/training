<?php

//Пользователь отправляет нам данные и надеется перенаправить нам на свой сайт
$userInput = "Смотрите, сейчас я перенаправлю вас на example.com! Хахаха!
  <script type='text/javascript'>
  window.location = 'https://www.example.com/'
  </script>'";
  
//Но мы это предусмотрели и использовали htmlentities
$userInputEntities = htmlentities($userInput);

//И теперь без опасений используем присланные данные
echo $userInputEntities;

?>