<?php 
//76.Модификатор доступа protected
//Теперь метод addOneYear потомка сможет менять свойство age, но оно по-прежнему не будет доступно извне наших классов.

//Давайте соберем все вместе и запустим:

	class User
	{
		private $name;
		protected $age; // объявим свойство как protected
		
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
			$this->age = $age;
		}
	}
	
	class Student extends User
	{
		private $course;
		
		// Метод добавления 1 года к возрасту:
		public function addOneYear()
		{
			$this->age++;
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

//Проверим работу класса Student:


	$student = new Student();
	
	$student->setName('Коля'); // установим имя
	$student->setCourse(3); // установим курс
	$student->setAge(25); // установим возраст в 25
	
	$student->addOneYear(); // увеличим возраст на единицу
	echo $student->getAge(); // выведет 26

//Попытка обратится к свойству age снаружи класса выдаст ошибку, как нам и нужно:


	$student = new Student();
//	$student->age = 30; // выдаст ошибку

?>