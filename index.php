<?php
$mnojitel = 5; 
echo "<table border=\"1\" align=\"center\">";
echo "<tr><th>Переменная counter</th>";
echo "<th>counter * mnojitel</th></tr>";
for ( $counter = 3; $counter <= 11; $counter +=3) {
  echo "<tr><td>";
  echo $counter;
  echo "</td><td>";
  echo $mnojitel * $counter;
  echo "</td></tr>";
}
echo "</table>";
?>