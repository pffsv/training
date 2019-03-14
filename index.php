<?php 
//82.Сравнение объектов
//Сейчас мы с вами научимся сравнивать объекты с помощью операторов 'и'.
/*Вы должны уже знать, что для примитивов (то есть не объектов) оператор == сравнивает данные по значению без учета типа, 
а оператор === - учитывая тип:*/

	var_dump(3 == 3); // выведет true
	var_dump(3 == '3'); // выведет true
	
	var_dump(3 === 3); // выведет true
	var_dump(3 === '3'); // выведет false

/*Давайте теперь посмотрим, как работает сравнение объектов.
При использовании оператора == для сравнения двух объектов выполняется сравнение свойств объектов: 
два объекта равны, если они имеют одинаковые свойства и их значения (значения свойств сравниваются через ==) 
и являются экземплярами одного и того же класса.
При сравнении через ===, переменные, содержащие объекты, считаются равными только тогда, 
когда они ссылаются на один и тот же экземпляр одного и того же класса.
Давайте посмотрим на примере. Пусть у нас дан вот такой класс User:*/

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

//Создадим два объекта нашего класса с одинаковыми значениями свойств и сравним созданные объекты:


	$user1 = new User('Коля', 30);
	$user2 = new User('Коля', 30);
	
	var_dump($user1 == $user2); // выведет true

//Пусть теперь значения свойств одинаковые, но у них разный тип:


	$user1 = new User('Коля', 30); // возраст - число
	$user2 = new User('Коля', '30'); // возраст - строка
	
	var_dump($user1 == $user2); // выведет true

//Пусть значения свойств разные:

	$user1 = new User('Коля', 30);
	$user2 = new User('Коля', 25);
	
	var_dump($user1 == $user2); // выведет false

//Давайте теперь сравним два наших объекта через ===:


	$user1 = new User('Коля', 30);
	$user2 = new User('Коля', 30);
	
	var_dump($user1 === $user2); // выведет false

//Чтобы две переменных с объектами действительно были равными при сравнении через ===, они должны указывать на один и тот же объект.

//Давайте сделаем, чтобы это было так, и сравним переменные:


	$user1 = new User('Коля', 30);
	$user2 = $user1; // передача объекта по ссылке
	
	var_dump($user1 === $user1); // выведет true

?>