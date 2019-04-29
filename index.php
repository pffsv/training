<?
  $error = "";
  $action = $HTTP_POST_VARS["action"];
  if (!empty($action)) 
  {
    $name = trim($name);
    $msg = trim($msg);
      if (empty($msg)) // если не введено сообщение
      {
        $action = "";
        $error = $error."<LI>Вы не ввели сообщение\n";
      }
      if (empty($name)) // если не введено имя
      {
        $action = "";
        $error = $error."<LI>Вы не ввели имя\n";
      }
      if (!empty($email))
      /* если введен e-mail, то проверяем с помощью регулярного выражения
      правильность ввода */
      {
        if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $email))
        {
          $action = "";
          $error = $error."<LI> Неверно введен е-mail.&nbsр Введите e-mail
          в виде <i>softtime@softtime.ru</i> \n";
        }
      }