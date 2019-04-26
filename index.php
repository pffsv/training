
<?
//Соединение с удаленным FTP-сервером
  $host = "ftp://ftp.server.ru";
  $connect = ftp_connect($host);
  if(!$connect)
  {
    echo("Ошибка соединения");
    exit;
  }
  else
  {
    echo("Соединение установлено");  
  }
?>