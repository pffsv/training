<?
   $array1 = $array2 = array("pict10.gif", "pict2.gif", "pict20.gif", "pict1.gif");
   echo ("обычная сортировка:"); echo ("<br>");
   sort($array1);
   print_r($array1);
   echo ("<br>"); echo ("естественная сортировка:"); echo ("<br>");
   natsort($array2);
   print_r($array2);
?>