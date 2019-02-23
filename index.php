<?php 
	class User
	{
		public $name;
		public $age;
		
		// Метод для изменения имени юзера:
		public function setName($name)
		{
			$this->name = $name; // запишем новое значение свойства name
		}
	}
	
	$user = new User; // создаем объект класса
	$user->name = 'Коля'; // записываем имя
	$user->age = 25; // записываем возраст
	
	// Установим новое имя:
	$user->setName('Вася');
	
	// Проверим, что имя изменилось:
	echo $user->name; // выведет 'Вася'
?>