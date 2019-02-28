<?php 
//65.Свойства только для чтения
/*сделаем так, чтобы свойство name было доступно только для чтения, а свойство age - и для чтения и для записи.
Для этого свойству name сделаем только геттер, а свойству age - и геттер и сеттер:*/
	class User
	{
		private $name;
		private $age;
//Давайте теперь добавим конструктор объекта, в котором будем задавать начальные значения наших свойств:
		// Конструктор объекта:
		public function __construct($name, $age)
		{
			$this->name = $name;
			$this->age = $age;
		}		
		
		// Геттер для имени:
		public function getName()
		{
			return $this->name;
		}
		
		// Геттер для возраста:
		public function getAge()
		{
			return $this->age;
		}
		
		// Сеттер для возраста:
		public function setAge($age)
		{
			$this->age = $age;
		}
	}
	$user = new User('Коля', 25); // создаем объект с начальными данными
	
	// Имя можно только читать, но нельзя поменять:
	echo $user->getName(); // выведет 'Коля'
	
	// Возраст можно и читать, и менять:
	echo $user->getAge(); // выведет 25
	echo $user->setAge(30); // установим возраст в значение 30
	echo $user->getAge(); // выведет 30
?>