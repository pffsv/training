<?php
//63.Конструктор объекта
/*2.Создайте объект класса Employee с именем 'Вася', возрастом 25, зарплатой 1000.*/
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

	$Employee = new Employee('Вася', 25, 1000); // создадим объект
	
?>	