<?php
/*91.Применение интерфейсов

1.реализуйте такой же класс FiguresCollection.
2.Добавьте в класс FiguresCollection метод
getTotalPerimeter для нахождения суммарного
периметра всех фигур.
*/
interface iDisk
{
public function getSquare();
public function getPerimeter();
}

class FiguresCollection
{
private $figures = [];

public function addFigure(iDisk $figure)
{
$this->figures[] = $figure;
}
public function getTotalSquare()
{
$sum = 0;
foreach ($this->figures as $figure) {
$sum += $figure->getSquare();
}
return $sum;
}
public function getTotalPerimeter()
{
$sum = 0;
foreach ($this->figures as $figure) {
$sum += $figure->getPerimeter();
}
return $sum;
}
}
?>	