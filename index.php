<?
  $file = fopen("c:/www/html/pavlovo.jpg","rb");
  if(!file)
    {
      echo("Ошибка открытия файла");
    }
    else
    {
      fpassthru($file);
    }
?>