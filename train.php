<?php
/*
96.Несколько интерфейсов

1.Сделайте так, чтобы класс Rectangle также
реализовывал два интерфейса: и Figure, и Tetragon.
2.Сделайте интерфейс Circle (круг) с методами
getRadius (получить радиус) и getDiameter (получить диаметр).
3.Сделайте так, чтобы класс Disk также реализовывал
два интерфейса: и Figure, и Circle.
*/
interface Figure
{
public function getSquare();
public function getPerimeter();
}
interface Tetragon
{
public function getA();
public function getB();
public function getC();
public function getD();
}
interface Circle
{
public function getRadius();
public function getDiameter();
}
class Rectangle implements Figure, Tetragon
{
private $a;
private $b;

public function __construct($a, $b)
{
$this->a = $a;
}
public function getA()
{
return $this->a;
}
public function getB()
{
return $this->b;
}
public function getC()
{
return $this->a;
}
public function getD()
{
return $this->b;
}
public function getSquare()
{
return $this->a * $this->b;
}
public function getPerimeter()
{
return 2 * $this->a * $this->b;
}
}
class Disk implements Figure, Circle
{
public function getSquare()
{

}
public function getPerimeter()
{

}

public function getRadius()
{

}
public function getDiameter()
{

}
}

?>	