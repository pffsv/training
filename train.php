<?php
//72.Вызов метода сразу после создания объекта
/*1.Не подсматривая в мой код реализуйте такой же класс Arr и вызовите его метод getSum сразу после создания объекта.*/
class Arr
{
private $numbers = [];

public function __construct($numbers)
{
$this->numbers = $numbers;
}

public function add($number)
{
$this->numbers[] = $number;
}

public function getSum()
{
return array_sum($this->numbers);
}
}
echo (new Arr([5, 4, 3, 2, 1]))->getSum();
?>	