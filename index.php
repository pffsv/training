<?
  $action = $HTTP_POST_VARS["action"];
  if (!empty($action)) 
  {
    if (empty($name)) 
    {
     // код, для случая, когда не введено имя
    }
    if (!empty($email))
    {
       // код, для случая, когда не введен e-mail
    }
  // дальнейший код скрипта
  }
  if (empty($action)) 
  {
?>
  <!-- здесь пишем HTML-код формы, в которой вводится информация -->
<?
  }
?>