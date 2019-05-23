<?php
$a;
 
echo $a;   //Выведет предупреждение 'Notice: Undefined variable: a in...'
 
echo @ $a; //Предупреждение не выводится
 
@ echo $a; //Выведет "Parse error: syntax error, unexpected 'echo' ...", т.к. 
           //перед языковыми конструкциями использовать оператор нельзя
?>