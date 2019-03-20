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

/*
2.Сделайте класс Num, у которого будут два приватны
статических свойства: num1 и num2. Пусть по умолчанию
в свойстве num1 хранится число 2, а в свойстве num2 - число 3.
3.Сделайте в классе Num метод getSum, который будет
выводить на экран сумму значений свойств num1 и num2.
*/

class Num1
{
private static $num1 = 2;
private static $num2 = 3;

public static function getSum()
{
return self::$num1 + self::$num2;
}
}
echo Num1::getSum();// 5

/*
4.Добавьте в наш класс Geometry метод, который будет
находить объем шара по радиусу. С помощью этого
метода выведите на экран объем шара с радиусом 10.
*/

class Geometry
{
private static $pi = 3.14;

public static function getCircleSquare($radius)
{
return self::$pi * $radius * $radius;
}
public static function getCircleСircuit($radius)
{
return 2 * self::$pi * $radius;
}
public static function getBallVolume($radius)
{
return 4/3 * self::$pi * pow($radius, 3);
}
}
echo Geometry::getBallVolume(10);// 4186.66


?>	