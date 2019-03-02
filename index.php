<?php 
//68.Начальные значения свойств в конструкторе
//Пусть у нас есть какой-то класс с двумя свойствами:
/*
	class TestOne
	{
		public $prop1;
		public $prop2;
	}

//Давайте сделаем так, чтобы при создании объекта класса эти свойства имели какие-либо значения.
//Как вы уже знаете, в момент создания объекта вызывается метод __construct. Давайте зададим начальные значения свойства в этом методе:
	class Test
	{
		public $prop1;
		public $prop2;
		
		public function __construct()
		{
			$this->prop1 = 'value1'; // начальное значение свойства
			$this->prop2 = 'value2'; // начальное значение свойства
		}
	}
	
	$test = new Test;
	echo $test->prop1; // выведет 'value1'
	echo $test->prop2; // выведет 'value2'
//Применение
//Пусть у нас есть класс Student с двумя свойствами - name и course (курс студента).
//Сделаем так, чтобы имя студента приходило параметром при создании объекта, а курс автоматически принимал значение 1:

	class Student
	{
		private $name;
		private $course;
		
		public function __construct($name)
		{
			$this->name = $name;
			$this->course = 1; // курс изначально равен 1
		}
	}

Сделаем геттеры для наших свойств:
	class Student
	{
		private $name;
		private $course;
		
		public function __construct($name)
		{
			$this->name = $name;
			$this->course = 1;
		}
		
		// Геттер имени:
		public function getName()
		{
			return $this->name;
		}
		
		// Геттер курса:
		public function getCourse()
		{
			return $this->course;
		}
	}
*/	
/*Пусть имя созданного студента будет неизменяемым и доступным только для чтения, а вот для курса мы сделаем метод, 
который будет переводить нашего студента на следующий курс:*/

	class Student
	{
		private $name;
		private $course;
		
		public function __construct($name)
		{
			$this->name = $name;
			$this->course = 1;
		}
		
		// Геттер имени:
		public function getName()
		{
			return $this->name;
		}
		
		// Геттер курса:
		public function getCourse()
		{
			return $this->course;
		}
		
		// Перевод студента на новый курс:
		public function transferToNextCourse()
		{
			$this->course++;
		}
	}

//Проверим работу нашего класса:

	$student = new Student('Коля'); // создаем объект класса
	
	echo $student->getCourse(); // выведет 1 - начальное значение
	$student->transferToNextCourse(); // переведем студента на следующий курс
	echo $student->getCourse(); // выведет 2
	
?>