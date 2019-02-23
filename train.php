<?php
//1.Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата).
class Exployee
{
public $name;
public $age;
public $salary;

//2.Сделайте в классе Employee метод getName, который будет возвращать имя работника.

	public function getName()
	{
		return $this->name;
	}
//3.Сделайте в классе Employee метод getAge, который будет возвращать возраст работника.
		public function getAge()
	{
		return $this->age;
	}
//4.Сделайте в классе Employee метод getSalary, который будет возвращать зарплату работника.
		public function getSalary()
	{
		return $this->salary;
	}
//5.Сделайте в классе Employee метод checkAge, который будет проверять то, что работнику больше 18 лет и возвращать true, если это так, и false, если это не так.	
		public function checkAge()
	{
		if ($this->age > 18) {
			return true;
		}
	}
}	
//6.Создайте два объекта класса Employee, запишите в их свойства какие-либо значения. С помощью метода getSalary найдите сумму зарплат созданных работников.
	$Exployee1 = new Exployee;
	$Exployee1->salary = 5000;
	$Exployee2 = new Exployee;
	$Exployee2->salary = 2000;		

echo $Exployee1->getSalary() + $Exployee2->getSalary();
?>