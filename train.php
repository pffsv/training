<?php
//80.Использование классов внутри других классов
/*
1.повторите описанные мною классы Arr и SumHelper.
2.Создайте класс AvgHelper с методом getAvg,
который параметром будет принимать массив и
возвращать среднее арифметическое этого массива
(сумма элементов делить на количество).
3.Добавьте в класс AvgHelper еще и метод getMeanSquare,
который параметром будет принимать массив и возвращать
среднее квадратичное этого массива (квадратный корень,
извлеченный из суммы квадратов элементов, деленной на количество).
4.Добавьте в класс Arr метод getAvgMeanSum, который
будет находить сумму среднего арифметического
и среднего квадратичного из массива $this->nums.
*/
class Arr
{
private $nums = [];
private $sumHelper;
private $avgHelper;

public function __construct()
{
$this->sumHelper = new SumHelper;
$this->avgHelper = new AvgHelper;
}

public function getAvgMeanSum()
{
return $this->avgHelper->getAvg($this->nums) + $this->avgHelper->getMeanSquare($this->nums);
}

public function getSum23()
{
return $this->sumHelper->getSum2($this->nums) + $this->sumHelper->getSum3($this->nums);
}

public function add($number)
{
$this->nums[] = $number;
return $this;
}
}
class SumHelper
{
public function getSum1($arr)
{
return $this->getSum($arr, 1);
}
public function getSum2($arr)
{
return $this->getSum($arr, 2);
}

public function getSum3($arr)
{
return $this->getSum($arr, 3);
}

private function getSum($arr, $power) {
$sum = 0;

foreach ($arr as $elem) {
$sum += pow($elem, $power);
}

return $sum;
}
}

class AvgHelper
{
private $sumHelper;

function __construct()
{
$this->sumHelper = new SumHelper;
}
public function getAvg($arr)
{
return $this->sumHelper->getSum1($arr) / count($arr);
}
public function getMeanSquare($arr)
{
return $this->getSquare2($this->sumHelper->getSum2($arr) / count($arr));
}
private function getSquare2($num)
{
return pow($num, 1/2);
}
}
$arr = (new Arr)->add(2)->add(4);
echo $arr->getAvgMeanSum();// 6.1622
?>	