<?php
//64.Работа с геттерами и сеттерами
/*3.Дополните класс Employee приватным методом isAgeCorrect, 
который будет проверять возраст на корректность (от 1 до 100 лет). 
Этот метод должен использоваться в сеттере setAge перед установкой 
нового возраста (если возраст не корректный - он не должен меняться).*/
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
	private function isAgeCorrect($age)
	{
	return $age >= 1 and $age <= 100;
	}	
	}
	
?>	