<?php
//63.Конструктор объекта
/*4.Выведите на экран сумму зарплат Васи и Пети.*/
	class Employee
	{
		public $name;
		public $age;
		public $salary;
		
		// Конструктор объекта:
		public function __construct($name, $age, $salary)
		{
			$this->name = $name; // запишем данные в свойство name
			$this->age = $age; // запишем данные в свойство age
			$this->salary = $salary; // запишем данные в свойство salary
		}
	}

	$Employee1 = new Employee('Вася', 25, 1000);
	$Employee2 = new Employee('Петя', 30, 2000);
	echo $Employee1->salary + $Employee2->salary;
	
?>	