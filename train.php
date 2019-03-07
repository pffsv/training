<?php
//74.Класс как набор методов
/*1Напишите реализацию методов класса ArrayAvgHelper*/
class ArraySumHelper
{
public function getAvg1($arr)
{
return $this->getSum($arr, 1);
}

public function getAvg2($arr)
{
return $this->calcSqrt($this->getSum($arr, 2), 2);
}

public function getAvg3($arr)
{
return $this->calcSqrt($this->getSum($arr, 3), 3);
}

public function getAvg4($arr)
{
return $this->calcSqrt($this->getSum($arr, 4), 4);
}

private function getSum($arr, $power)
{
$sum = 0;
foreach ($arr as $elem) {
$sum += pow($elem, $power);
}
return $sum;
}

private function calcSqrt($num, $power)
{
return pow($num, 1 / $power);
}
}
$arr = [1, 2, 3];

echo (new ArraySumHelper)->getAvg1($arr);
echo (new ArraySumHelper)->getAvg2($arr);
echo (new ArraySumHelper)->getAvg3($arr);
echo (new ArraySumHelper)->getAvg4($arr);

?>	