<?php 
//67.Хранение объектов в массивах
//Пусть у нас дан вот такой класс User:
	class User
	{
		public $name;
		public $age;
		
		public function __construct($name, $age)
		{
			$this->name = $name;
			$this->age = $age;
		}
	}

//Давайте создадим 3 объекта этого класса:

	$user1 = new User('Коля', 21);
	$user2 = new User('Вася', 22);
	$user3 = new User('Петя', 23);

//Давайте теперь запишем созданные нами объекты в массив $users:
	
	$users[] = $user1;
	$users[] = $user2;
	$users[] = $user3;
	
	var_dump($users);
?>