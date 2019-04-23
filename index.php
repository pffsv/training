<?
  $dir = opendir (".");
  while ( $file = readdir ($dir))
  {
    if (( $file != ".") && ($file != ".."))
    {
      echo "$file<br>";
    }
  }
  closedir ($dir);
?>