<?php
/*89.Абстрактные классы

4.Сделайте аналогичный класс Rectangle (прямоугольник), у
которого будет два приватных свойства: $a для ширины и $b для длины.
Данный класс также должен наследовать от класса Figure
и реализовывать его методы.
5.Добавьте в класс Figure метод getSquarePerimeterSum,
который будет находить сумму площади и периметра.
*/
abstract class Figure
{
abstract public function getSquare();
abstract public function getPerimeter();
public function getSquarePerimeterSum()
{
return $this->getSquare() + $this->getPerimeter();
}
}

class Rectangle extends Figure
{
private $a;
private $b;

function __construct($a, $b)
{
$this->a = $a;
$this->b = $b;
}
public function getSquare()
{
return $this->a * $this->b;
}
public function getPerimeter()
{
return 2 * ($this->a + $this->b);
}
}
$r = new Rectangle(2, 4);
echo $r->getSquare();// 8
echo $r->getPerimeter();// 12
echo $r->getSquarePerimeterSum();// 20
?>	