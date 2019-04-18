<?
   $arr = array ("php", 4.0, array ("green", "red"));
   $result = array_reverse ($arr);
   echo "Массив: <br>";   
   foreach($result as $key => $val) 
   {
      echo ("$key => $val <br>");
   }
   echo("<br>");
   echo "Сортированный массив: <br>";      
   $result_keyed = array_reverse ($arr, false);
   foreach($result_keyed as $key => $val) 
   {
      echo ("$key => $val<br> ");
   }
?>