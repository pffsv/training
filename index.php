<?
   $car = array("passenger car", "land-rover",
      "station-wagon","victoria");
   foreach($car as $index => $val)
   {
      echo("$index -> $val <br>");
   }


   echo(
      "available cars: <br> <ul>"
   );
   $car = array("passenger car", "land-rover",
      "station-wagon","victoria");
   foreach($car as $val)
   {
      echo("<li>$val</li>\n");
   }
   echo("</ul>");

?>