<?php 
//89.Абстрактные классы
//Абстрактные методы
/*Абстрактные классы также могут содержать абстрактные методы.
Такие методы не должны иметь реализации, а нужны для того, чтобы указать, что такие методы должны быть у потомков.
А собственно реализация таких методов - уже задача потомков.
Для того, чтобы объявить метод абстрактным, при его объявлении следует написать ключевое слово abstract.
Давайте попробуем на практике. Пусть предполагается, что все потомки класса User должны иметь метод increaseRevenue (увеличить доход).
Этот метод должен брать текущий доход пользователя и увеличивать его на некоторую величину, переданную параметром.
Сам класс User не знает, какой именно доход будет получать наследник - ведь у работника это зарплата, а у студента - стипендия.
Поэтому каждый потомок будет реализовывать этот метод по-своему.
Фишка тут в том, что абстрактный метод класса User заставляет программиста реализовывать этот метод в потомках, иначе PHP выдаст ошибку.
Таким образом вы, или другой программист, работающий с вашим кодом, никак не сможете забыть реализовать нужный метод в потомке.
Итак, давайте попробуем на практике. Добавим абстрактный метод increaseRevenue в класс User:*/

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
		
		// Абстрактный метод без тела:
		abstract public function increaseRevenue($value);
	}

/*Пусть наш класс Employee пока останется без изменений. В этом случае, даже если не создавать объект класса Employee, 
а просто запустить код, в котором определяются наши классы, - PHP выдаст ошибку.
Давайте проверим - запустите приведенный ниже код:*/

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
		
		abstract public function increaseRevenue($value);
	}
	
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

//Давайте теперь напишем реализацию метода increaseRevenue в классе Employee:

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
		
		// Напишем реализацию метода:
		public function increaseRevenue($value)
		{
			$this->salary = $this->salary + $value;
		}
	}

//Проверим работу нашего класса:

	$employee = new Employee;
	$employee->setName('Коля'); // установим имя
	$employee->setSalary(1000); // установим зарплату
	$employee->increaseRevenue(100); // увеличим зарплату
	
	echo $employee->getSalary(); // выведет 1100

//Реализуем метод increaseRevenue и в классе Student. Только теперь наш метод будет увеличивать уже стипендию:

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
		
		// Метод увеличивает стипендию:
		public function increaseRevenue($value)
		{
			$this->scholarship = $this->scholarship + $value;
		}
	}

/*Некоторые замечания.
При наследовании от абстрактного класса, все методы, помеченные абстрактными в родительском классе, должны быть определены в дочернем классе.
При этом область видимости этих методов должна совпадать или быть менее строгой. Что значит менее строгой: 
например, если абстрактный метод объявлен как protected, то реализация этого метода должна быть protected или public, но не private.
Объявления методов также должны совпадать: количество обязательных параметром должно быть одинаковым.
Однако класс-потомок может добавлять необязательные параметры, которые не были указанны при объявлении метода в родителе.*/

?>