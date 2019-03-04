<?php
//70.Переменные названия свойств
/*1.Сделайте класс City (город), 
в котором будут следующие свойства - name (название), foundation (дата основания), population (население). 
Создайте объект этого класса.*/
class City
{
public $name;
public $foundation;
public $population;

function __construct($name, $foundation, $population)
{
$this->name = $name;
$this->foundation = $foundation;
$this->population = $population;
}
}
/*2.Пусть дана переменная $props, в которой хранится массив названий свойств класса City. 
Переберите этот массив циклом foreach и выведите на экран значения соответствующих свойств.*/

$props = ['name', 'foundation', 'population'];
$city = new City('Томск', 1604, 600000);

foreach ($props as $prop) {
echo $city->$prop.' ';
}

?>	