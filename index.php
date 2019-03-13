<?php 
//81.Передача объектов параметрами
//Пусть у нас дан вот такой класс Employee:

	class Employee
	{
		private $name;
		private $salary;
		
		public function __construct($name, $salary)
		{
			$this->name = $name;
			$this->salary = $salary;
		}
		
		public function getName()
		{
			return $this->name;
		}
		
		public function getSalary()
		{
			return $this->salary;
		}
	}

//Давайте сделаем еще и класс EmployeesCollection, который будет хранить массив работников, то есть массив объектов класса Employee.
//Пусть работники будут храниться в свойстве employees, а для добавления работников будет существовать метод add.
//Этот метод add параметром будет принимать объект класса Employee и записывать его в конец массива $this->employees:
/*
	class EmployeesCollection
	{
		private $employees = []; // массив работников, по умолчанию пустой
		
		// Добавляем нового работника:
		public function add($employee)
		{
			$this->employees[] = $employee; // $employee - объект класса Employee
		}
	}
*/
//Давайте также добавим в наш класс метод getTotalSalary, который будет находить суммарную зарплату всех хранящихся работников:

	class EmployeesCollection
	{
		private $employees = [];
		
		public function add($employee)
		{
			$this->employees[] = $employee;
		}
		
		// Находим суммарную зарплату:
		public function getTotalSalary()
		{
			$sum = 0;
			
			// Перебираем работников циклом:
			foreach ($this->employees as $employee) {
				$sum += $employee->getSalary(); // получаем з/п работника через метод getSalary()
			}
			
			return $sum;
		}
	}

//Давайте проверим работу класса EmployeesCollection:

	$employeesCollection = new EmployeesCollection;
	
	$employeesCollection->add(new Employee('Коля', 100));
	$employeesCollection->add(new Employee('Вася', 200));
	$employeesCollection->add(new Employee('Петя', 300));
	
	echo $employeesCollection->getTotalSalary(); // выведет 600

//Итак, как вы видите, объекты одного класса можно параметрами передавать в другой класс.

//Давайте сделаем наш класс EmployeesCollection более жизненным и добавим метод получения всех работников и метод подсчета:

	class EmployeesCollections
	{
		private $employees = [];
		
		// Получаем всех работников в виде массива:
		public function get()
		{
			return $this->employees;
		}
		
		// Подсчитываем количество хранимых работников:
		public function count()
		{
			return count($this->employees);
		}
		
		public function add($employee)
		{
			$this->employees[] = $employee;
		}
		
		public function getTotalSalary()
		{
			$sum = 0;
			
			foreach ($this->employees as $employee) {
				$sum += $employee->getSalary();
			}
			
			return $sum;
		}
	}

?>