<?
  $dir = opendir (".");
  echo "Files:\n";
  while ($file = readdir ($dir)) 
  {
    echo "$file<br>";
  }
  closedir ($dir);
?>