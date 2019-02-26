<?php
//63.Конструктор объекта
/*3.Создайте объект класса Employee с именем 'Петя', возрастом 30, зарплатой 2000.*/
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

	$Employee = new Employee('Петя', 30, 2000); // создадим объект
	
?>	