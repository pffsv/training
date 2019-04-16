<?
   $product = "maxtor/203-5505";
   $str = sscanf($product,"maxtor/%3d-%4d");
   echo ("$str[0]-$str[1]");

   $date = "august 10 2003";
   list($month, $day, $year) = sscanf($date, "%s %d %d");
   echo("Date: $day-".substr($month,0,3)."-$year");

?>