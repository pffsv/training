<?
  $host = "ftp.server.ru";
  $port = 21;
  $user = "anonymous";
  $passwrod = "password";
  $connect = ftp_connect($host, $port, 150);
  if(!$connect)
  {
    exit();  
  }
  $result = ftp_login($connect, $user, $password);
  if($result)
  {
    // сохраняем имя текущего рабочего каталога
    $current_dir = ftp_pwd($connect);
    // переходим в родительский каталог 
    ftp_cdup($connect);
    // сохраняем имя нового каталога
    $new_dir = ftp_pwd($connect);
  }
  else
  {
    ftp_quit($connect);
    exit();
  }
  // Закрываем соединение
  ftp_quit($connect);
?>