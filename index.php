<?php 
//63.Конструктор объекта
	class User
	{
		public $name;
		public $age;
		
		// Конструктор объекта:
		public function __construct()
		{
			echo '!!!';
		}
	}
	
	$user = new User; // выведет '!!!'

	class Users
	{
		public $name;
		public $age;
		
		// Конструктор объекта:
		public function __construct($name, $age)
		{
			$this->name = $name; // запишем данные в свойство name
			$this->age = $age; // запишем данные в свойство age
		}
	}
	
	$user = new User('Коля', 25); // создадим объект, сразу заполнив его данными
	
	echo $user->name; // выведет 'Коля'
	echo $user->age; // выведет 25	
?>