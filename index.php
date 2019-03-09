<?php 
//78.Перезапись конструктора родителя в потомке
/*Используем конструктор родителя
Понятно, что дублирование кода родителя в классе потомке - это не очень хорошо.
Давайте вместо дублирования кода в конструкторе потомка вызовем конструктор родителя.
Для полной ясности распишу все по шагам.
Вот так выглядит конструктор класса User, он принимает два параметра $name и $age и записывает их в соответствующие свойства:*/

	// Конструктор объекта класса User:
/*	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}

//Вот конструктор класса Student, который мы хотим переписать:

	// Конструктор объекта класса Student:
	public function __construct($name, $age, $course)
	{
		// Этот код хотим заменить на вызов конструктора родителя:
		$this->name = $name;
		$this->age = $age;
		
		// Наш код:
		$this->course = $course;
	}

/*Как вызвать конструктор родителя внутри потомка? Вы это уже знаете - с помощью parent. То есть вот так: parent::__construct.
При этом конструктор родителя первым параметром ожидает имя, а вторым - возраст, и мы должны ему их передать, вот так: parent::__construct($name, $age).
Давайте сделаем это:*/

	// Конструктор объекта класса Student:
/*	public function __construct($name, $age, $course)
	{
		// Вызовем конструктор родителя, передав ему два параметра:
		parent::__construct($name, $age);
			
		// Запишем свойство course:
		$this->course = $course;
	}
*/
//Напишем полный код класса Student:

	class Student extends User
	{
		private $course;
		
		// Конструктор объекта:
		public function __construct($name, $age, $course)
		{
			parent::__construct($name, $age); // вызываем конструктор родителя
			$this->course = $course;
		}
		
		public function getCourse()
		{
			return $this->course;
		}
	}

//Проверим, что все работает:


	$student = new Student('Коля', 19, 2);
	
	echo $student->getName(); // выведет 'Коля'
	echo $student->getAge(); // выведет 19
	echo $student->getCourse(); // выведет 2

//Так как класс Student теперь не обращается напрямую к свойствам name и age родителя, можно их опять сделать приватными:

	class User
	{
		private $name; // объявим свойство приватным
		private $age; // объявим свойство приватным
		
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

?>