<?php

$myFile = "testFile.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = "Первая строчка\n";
fwrite($fh, $stringData);
$stringData = "Вторая строчка\n";
fwrite($fh, $stringData);
fclose($fh);
?>