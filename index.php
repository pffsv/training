<?php 
//77.Перезапись методов родителя в классе потомке
//Пусть дан класс User с приватными свойствами name и age, а также геттерами и сеттерами этих свойств.
//При этом в сеттере возраста выполняется проверка возраста на то, что он равен или больше 18 лет:

	class User
	{
		private $name;
		private $age;
		
		public function getName()
		{
			return $this->name;
		}
		
		public function setName($name)
		{
			$this->name = $name;
		}
		
		public function getAge()
		{
			return $this->age;
		}
		
		public function setAge($age)
		{
			// Выполняем проверку возраста:
			if ($age >= 18) {
				$this->age = $age;
			}
		}
	}

//От класса User наследует класс Student с приватным свойством course, его геттером и сеттером:

	class Student extends User
	{
		private $course;
		
		public function getCourse()
		{
			return $this->course;
		}
		
		public function setCourse($course)
		{
			$this->course = $course;
		}
	}

/*Предположим теперь, что метод setAge, который Student наследует от User нам чем-то не подходит, 
например, нам нужна также проверка того, что возраст студента до 25 лет.
То есть проверка на то, что возраст более 18 лет нас устраивает, но хотелось бы иметь добавочную проверку на то, что он меньше 25.
Для решения проблемы мы используем то, что в PHP в классе-потомке разрешено сделать метод 
с таким же именем, как и у родителя, таким образом переопределив этот метод родителя на свой.
Как раз то, что нам нужно.
Итак, давайте напишем студент свой setAge в классе Student. Наш setAge будет проверять то, что возраст студента меньше от 18 до 25 лет:*/


	class Students extends User
	{
		private $course;
		
		// Перезаписываем метод родителя:
		public function setAge($age)
		{
			if ($age >= 18 and $age <= 25) {
				$this->age = $age;
			}
		}
		
		public function getCourse()
		{
			return $this->course;
		}
		
		public function setCourse($course)
		{
			$this->course = $course;
		}
	}

//Так как наш метод setAge использует свойство age от родителя, то в родителе это свойство надо объявить как защищенное:

	class Users
	{
		private $name;
		protected $age; // изменим модификатор доступа на protected
		
		public function getName()
		{
			return $this->name;
		}
		
		public function setName($name)
		{
			$this->name = $name;
		}
		
		public function getAge()
		{
			return $this->age;
		}
		
		public function setAge($age)
		{
			if ($age >= 18) {
				$this->age = $age;
			}
		}
	}

//Давайте проверим работу переопределенного метода setAge:

	$student = new Student;
	
	$student->setAge(24); // укажем корректный возраст
	echo $student->getAge(); // выведет 24 - возраст поменялся
	
	$student->setAge(30); // укажем НЕкорректный возраст
	echo $student->getAge(); // выведет 24 - возраст НЕ поменялся

?>