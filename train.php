<?php
/*
98.Константы в интерфейсе

1.Сделайте класс Sphere, который будет
реализовывать интерфейс iSphere.
*/
interface iSphere
{
const PI = 3.14;

public function __construct($radius);
public function getVolume();
public function getSquare();
}

class Sphere implements iSphere
{
private $radius;

function __construct($radius)
{
$this->radius = $radius;
}
public function getVolume()
{
return 4/3 * self::PI * pow($this->radius, 3);
}
public function getSquare()
{
return 4 * self::PI * pow($this->radius, 2);
}
}

$s = new Sphere(10);
echo $s->getVolume();// 4186.6666666667
echo $s->getSquare();// 1256

?>	