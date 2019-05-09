<?php
    $lines = file('testFile.txt');
    foreach($lines as $single_line)
        echo $single_line . "<br />\n";
?>