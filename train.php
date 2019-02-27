<?php
//64.Работа с геттерами и сеттерами
/*2.Сделайте геттеры и сеттеры для всех свойств класса Employee*/
	class Employee
	{
		public $name;
		public $age;
		public $salary;

	public function setName($name)
	{
		$this->name = $name;
	}
	public function getName()
	{
		return $this->name;
	}
	public function setAge($age)
	{
		if ($this->isAgeCorrect($age)) {
		$this->age = $age;
	}
    }
	public function getAge()
	{
		return $this->age;
	}
	public function setSalary($salary)
	{
		$this->salary = $salary;
	}
	public function getSalary()
	{
		return $this->salary;
	}	
	}
	
?>	