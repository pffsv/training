<?
   $number = array ("1"=>"15", "2"=>"20", "3"=>"25");
   function printarray ($item, $key) 
   {
      echo "$key=>$item<br>\n";
   }
   function add_array (&$item, $key) 
   // параметр $item передаем по ссылке, так как            
   // его нам надо изменять
   {
      $item = $item + 1;
   }
   echo("Before:<br>");
   array_walk ($number, 'printarray');
   echo("After:<br>");
   array_walk ($number, 'add_array');
   array_walk ($number, 'printarray');
?>