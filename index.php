<?php 
//71.Переменные названия методов
class User
	{
		private $name;
		private $age;
		
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

//Пусть в переменной $method хранится имя метода. Давайте вызовем метод с таким именем:

	$user = new User('Коля', 21);
	
	$method = 'getName';
	echo $user->$method(); // выведет 'Коля'

//Если имя метода получается из массива, то такое обращение к методу следует брать в фигурные скобки вот таким образом (круглые скобки будут снаружи фигурных):


	$user = new User('Коля', 21);
	
	$methods = ['getName', 'getAge'];
	echo $user->{$methods[0]}(); // выведет 'Коля'

//Все остальные нюансы точно такие же, как и при работе со свойствами из переменной.

?>	