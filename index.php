<?php 
//78.Перезапись конструктора родителя в потомке
//Пусть у нас есть вот такой класс User, у которого свойства name и age задаются в конструкторе и в дальнейшем доступны только для чтения (то есть приватные и имеют только геттеры, но не сеттеры):

	class User
	{
		private $name;
		private $age;
		
		// Конструктор объекта:
		public function __construct($name, $age)
		{
			$this->name = $name;
			$this->age = $age;
		}
		
		public function getName()
		{
			return $this->name;
		}
		
		public function getAge()
		{
			return $this->age;
		}
	}

//От этого класса наследует класс Student:

	class Student extends User
	{
		private $course;
		
		public function getCourse()
		{
			return $this->course;
		}
	}

//Класс-потомок не имеет своего конструктора - это значит что при создании объекта класса сработает конструктор родителя:

	$student = new Student('Коля', 19); // сработает конструктор родителя
	
	echo $student->getName(); // выведет 'Коля'
	echo $student->getAge(); // выведет 19

//Все замечательно, но есть проблема: мы бы хотели при создании объекта класса Student третьим параметром передавать еще и курс, вот так:


	$student = new Student('Коля', 19, 2); // это пока не работает

//Самое простое, что можно сделать, это переопределить конструктор родителя своим конструктором, забрав из родителя его код:

	class Students extends User
	{
		private $course;
		
		// Конструктор объекта:
		public function __construct($name, $age, $course)
		{
			// Дублируем код конструктора родителя:
			$this->name = $name;
			$this->age = $age;
			
			// Наш код:
			$this->course = $course;
		}
		
		public function getCourse()
		{
			return $this->course;
		}
	}

//При этом мы в классе потомке обращаемся к приватным свойствам родителя name и age, что, конечно же, не будет работать так, как нам нужно.

//Переделаем их на protected:


	class Users
	{
		protected $name; // объявим свойство защищенными
		protected $age; // объявим свойство защищенными
		
		// Конструктор объекта:
		public function __construct($name, $age)
		{
			$this->name = $name;
			$this->age = $age;
		}
		
		public function getName()
		{
			return $this->name;
		}
		
		public function getAge()
		{
			return $this->age;
		}
	}

//Теперь при создании студента третьим параметром мы можем передать и курс:

	$student = new Student('Коля', 19, 2); // теперь это работает
	
	echo $student->getName(); // выведет 'Коля'
	echo $student->getAge(); // выведет 19
	echo $student->getCourse(); // выведет 2

?>