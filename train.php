<?php
/*
95.Интерфейсы и instanceof

1.Сделайте интерфейс Figure3d (трехмерная фигура),
который будет иметь метод getVolume (получить объем) и
метод getSurfaceSquare (получить площадь поверхности).
2.Сделайте класс Cube (куб), который будет
реализовывать интерфейс Figure3d.
3.Создайте несколько объектов класса Quadrate,
несколько объектов класса Rectangle и несколько
объектов класса Cube. Запишите их в массив $arr
в случайном порядке.
4.Переберите циклом массив $arr и выведите на
экран только площади объектов реализующих интерфейс Figure.
5.Переберите циклом массив $arr и выведите для плоских
фигур их площади, а для объемных - площади их поверхности.
*/
interface Figure
{
public function getSquare();
public function getPerimeter();
}
interface Figure3d
{
public function getVolume();
public function getSurfaceSquare();
}
class Quadrate implements Figure
{
private $a;

public function __construct($a)
{
$this->a = $a;
}
public function getSquare()
{
return $this->a * $this->a;
}
public function getPerimeter()
{
return 4 * $this->a;
}
}
class Rectangle implements Figure
{
private $a;
private $b;

public function __construct($a, $b)
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

class Cube implements Figure3d
{
private $a;

public function __construct($a)
{
$this->a = $a;
}
public function getVolume()
{
return pow($this->a, 3);
}
public function getSurfaceSquare()
{
return 6 * $this->a * $this->a;
}
}
$arr[] = new Cube(3);
$arr[] = new Quadrate(3);
$arr[] = new Cube(4);
$arr[] = new Rectangle(1, 2);
$arr[] = new Quadrate(4);
$arr[] = new Cube(5);
$arr[] = new Rectangle(2, 3);
$arr[] = new Quadrate(5);
$arr[] = new Rectangle(3, 4);

foreach ($arr as $obj) {
if ($obj instanceof Figure) {
echo $obj->getSquare().'<br>';
}
}
foreach ($arr as $obj) {
if ($obj instanceof Figure) {
echo $obj->getSquare().'<br>';
} elseif ($obj instanceof Figure3d) {
echo $obj->getSurfaceSquare().'<br>';
}
}

?>	