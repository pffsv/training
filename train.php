<?php
//69.Начальные значения свойств при объявлении
/*1.Реализуйте класс Arr, похожий на тот, который я реализовал выше.
В отличие от моего класса метод add вашего класса параметром должен принимать массив чисел. 
Все числа из этого массива должны добавляться в конец массива $this->numbers.*/
/*2.Вместо метода getSum реализуйте метод getAvg, который будет находить среднее арифметическое переданных чисел.*/
class Arr
{
private $numbers = [];

public function add($arr)
{
$this->numbers = array_merge($this->numbers, $arr);
}
public function getAvg()
{
return array_sum($this->numbers) / count($this->numbers);
}
}
$array = [1, 2, 3, 4, 5];
$arr = new Arr;
$arr->add($array);
echo $arr->getAvg();// 3
?>	