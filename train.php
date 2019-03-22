<?php
/*88.Константы классов

1.Реализуйте предложенный класс Circle самостоятельно.
2.С помощью написанного класса Circle найдите длину
окружности и площадь круга с радиусом 10.
*/
class Circle
{
const PI = 3.14;

public static function getCircleSquare($radius)
{
return self::PI * $radius * $radius;
}
public static function getCircleСircuit($radius)
{
return 2 * self::PI * $radius;
}
}

echo Circle::getCircleSquare(10);// 314
echo Circle::getCircleСircuit(10);// 62.8

?>	