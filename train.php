<?php
//63.Конструктор объекта
/*1.Сделайте класс Employee, в котором будут следующие публичные свойства - name (имя), age (возраст), salary (зарплата). 
Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта.*/
	class Employee
	{
		public $name;
		public $age;
		public $salary;
		
		// Конструктор объекта:
		public function __construct($name, $age)
		{
			$this->name = $name; // запишем данные в свойство name
			$this->age = $age; // запишем данные в свойство age
			$this->salary = $salary; // запишем данные в свойство salary
		}
	}
	
?>	