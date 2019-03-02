<?php
//67.Хранение объектов в массивах
/*1.Сделайте класс City (город), в котором будут следующие свойства: name (название города), population (количество населения).*/
class City
{
	public $name;
	public $population;

	public function __construct($name, $population)
	{
		$this->name = $name;
		$this->population = $population;
	}
}
//2.Создайте 5 объектов класса City, заполните их данными и запишите в массив.
	$cities = [
		new City('Москва', 80000000),
		new City('Новосибирск', 1000000),
		new City('Томск', 500000),
		new City('Кемерово', 400000),
		new City('Омск', 1000000)
		];

//3.Переберите созданный вами массив с городами циклом и выведите города и их население на экран.
	foreach ($cities as $city) {
		echo 'г. '.$city->name.' (кол-во населения: '.$city->population.')<br>';
	}		
?>	