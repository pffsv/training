<?php 
//89.Абстрактные классы
/*Пусть у вас есть класс User, а от него наследуют классы Employee и Student.
При этом предполагается, что вы будете создавать объекты классов Employee и Student, 
но объекты класса User - не будете, так как сам класс User используется только для группировки общих свойств и методов своих наследников.
В этом случае можно принудительно запретить создавать объекты класса User, чтобы вы или другой программист где-нибудь их случайно не создали.
Для этого существуют так называемые абстрактные классы.
Абстрактные классы представляют собой классы, предназначенные для наследования от них. При этом объекты таких классов нельзя создать.
Для того, чтобы объявить класс абстрактным, нужно при его объявлении написать ключевое слово abstract:*/

	abstract class User
	{
		
	}

//Итак, давайте напишем реализацию абстрактного класса User. Пусть у него будет приватное свойство name, а также геттеры и сеттеры для него:

	abstract class User
	{
		private $name;
		
		public function getName()
		{
			return $this->name;
		}
		
		public function setName($name)
		{
			$this->name = $name;
		}
	}
//Попытка создать объект класса User вызовет ошибку:

	$user = new User; // выдаст ошибку

//А вот унаследовать от нашего класса будет можно. Сделаем класс Employee, который будет наследовать от нашего абстрактного класса User:

	class Employee extends User
	{
		private $salary;
		
		public function getSalary()
		{
			return $this->salary;
		}
		
		public function setSalary($salary)
		{
			$this->salary = $salary;
		}
		
	}

//Создадим объект класса Employee - все будет работать:

	$employee = new Employee;
	$employee->setName('Коля'); // метод родителя, т.е. класса User
	$employee->setSalary(1000); // свой метод, т.е. класса Employee
	
	echo $employee->getName(); // выведет 'Коля'
	echo $employee->getSalary(); // выведет 1000

//Аналогично можно создать объект класса Student, наследующий от User:

	class Student extends User
	{
		private $scholarship; // стипендия
		
		public function getScholarship()
		{
			return $this->scholarship;
		}
		
		public function setScholarship($scholarship)
		{
			$this->scholarship = $scholarship;
		}
	}

?>