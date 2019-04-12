<?
   $var = 7;
   $i = 0;
   while(++$i <= $var)
   {
      if($i==5)
      {
         continue;
      }
      echo($i);
      echo('<br>');
   }
?>