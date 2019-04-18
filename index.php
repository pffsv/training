<?
   $car = array("passenger car", "land-rover",
      "station-wagon","victoria");
   foreach($car as $index => $val)
   {
      echo("$index -> $val <br>");
   }
//Как видно из синтаксиса, переменная $key необязательна и может быть опущена:
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