<?php 
//70.Переменные названия свойств
//Пусть у нас есть вот такой класс User:

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
	
	$user = new User('Коля', 21);
	echo $user->name; // выведет 'Коля'

/*На примере этого класса мы сейчас разберем то, что названия свойств можно хранить в переменной.
К примеру, пусть у нас есть переменная $prop, в которой лежит строка 'name'.
Тогда обращение $user->$prop по сути эквивалентно обращению $user->name.
Посмотрим на примере:*/

	$user = new User('Коля', 21);
	
	$prop = 'name';
	echo $user->$prop; // выведет 'Коля'

?>