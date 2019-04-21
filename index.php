<?
  $count = 1;
  $file =  fopen ("file.csv","r");
  while ($data = fgetcsv ($file, 1000, ",")) 
  {
    $num = count ($data);
    $count++;
    for ($i=0; $i < $num; $i++) 
    {
      print "$data[$i]<br>";
    }
  }
  fclose ( $file );
?>