<?
  $file = "/web/user/file.txt";
  $file_size = ftp_size($connect, $file);
  if ($file_size == -1)
  {
    echo("Размер файла не определен");
  }
  else
  {
    echo("Файл $file имеет размер $file_size байт");
  }
?>