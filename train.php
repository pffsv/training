<?php
/*86.Статические свойства

1.Сделайте класс Num, у которого будут два публичных
статических свойства: num1 и num2. Запишите в первое
свойство число 2, а во второе - число 3. Выведите
сумму значений свойств на экран.
*/
class Num
{
public static $num1;
public static $num2;
}
Num::$num1 = 2;
Num::$num2 = 3;
echo Num::$num1 + Num::$num2;// 5

?>	