<?php
/*
99.Работа с трейтами

1.Реализуйте класс Country (страна) со свойствами
name (название), age (возраст), population
(количество населения) и геттерами для них.
Пусть наш класс для сокращения своего кода
использует уже созданный нами трейт Helper.
*/
trait Helper
{
private $name;
private $age;

public function getName()
{
return $this->name;
}

public function getAge()
{
return $this->age;
}
}
class Country
{
use Helper;

private $population;

function __construct($name, $age, $population)
{
$this->name = $name;
$this->age = $age;
$this->population = $population;
}
public function getPopulation()
{
return $this->population;
}
}

$c = new Country('Хоббитания', 1200, 500);
echo $c->getName().' '.$c->getAge().' '.$c->getPopulation();// Хоббитания 1200 500

?>	