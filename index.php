<?php
   $a = true;
   $b = false;
   $c = 11;
   $d = 10;
   
   $f = $a ? $c : $d; # Переменной $f присвоится значение переменной $c, 
                      # т. к. значение выражения $a истинно.
                      
   $g = $b ? $c : $d;   # Здесь наоборот: $g будет присвоено значение $d,
                        # т. к. значение выражения $b ложно.
                        
   $h = (!empty($n)) ? $n : $c + $d;  # Сперва проверится существование 
                                      # переменной $n. Т. к. она не существует, 
                                      # переменной $h присвоится 
                                      # сумма $c и $d, т. е. "21".
?>
