<?php
/*85.Статические методы

1.Переделайте методы класса ArraySumHelper на статические.
2.Пусть дан массив с числами. Найдите с помощью класса
ArraySumHelper сумму квадратов элементов этого массива.
*/
class ArraySumHelper
{
public static function getSum1($arr)
{
return self::getSum($arr, 1);
}
public static function getSum2($arr)
{
return self::getSum($arr, 2);
}
public static function getSum3($arr)
{
return self::getSum($arr, 3);
}
public static function getSum4($arr)
{
return self::getSum($arr, 4);
}
private static function getSum($arr, $power) {
$sum = 0;

foreach ($arr as $elem) {
$sum += pow($elem, $power);
}
return $sum;
}
}

echo ArraySumHelper::getSum2([1, 2, 3,]);// 14

?>	