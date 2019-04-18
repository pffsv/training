<?
   $ship = array(
      "Passenger ship" => array("Yacht","Liner","Ferry"),
      "War ship" => array("Battle-wagon","Submarine","Cruiser"),
      "Freight ship" => array("Tank vessel","Dry-cargo ship","Container 
      cargo ship")
   );
   foreach($ship as $key => $type)
   {
      echo(
      "<h2>$key</h2>\n"."<ul>\n");
      foreach($type as $ship)
      {
         echo("\t<li>$ship</li>\n");
      }
   }
   echo("</ul>\n");
?>