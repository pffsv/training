<?php
/*90.Интерфейсы
1.Сделайте класс Disk (круг), реализующий интерфейс Figure.
*/
interface iDisk
{
public function getSquare();
public function getPerimeter();
}

class Disk implements iDisk
{
private $r;
const PI = 3.14;

function __construct($r)
{
$this->r = $r;
}
public function getSquare()
{
return self::PI * $this->r * $this->r;
}

public function getPerimeter()
{
return 2 * self::PI * $this->r;
}
}
$d = new Disk(3);
echo $d->getSquare();// 28.26
echo $d->getPerimeter();// 18.84
?>	