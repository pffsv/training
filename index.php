<?
  $file = fopen ("file.txt","r+");
  $str = "Hello, world!";
  if ( !$file )
  {
    echo("Ошибка открытия файла");
  }
  else
  {
    fputs ( $file, $str);
  }
  fclose ($file);
?>