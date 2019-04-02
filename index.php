<?php 
//100.Работа с трейтами
/*Несколько трейтов
В классе можно использовать не один, а несколько трейтов. В этом и проявляется их преимущество перед наследованием.
Нужные для использования в классе трейты можно указать через запятую после ключевого слова use.*/

//Разрешение конфликтов в трейтах
/*Так как один класс может использовать несколько трейтов, то нас может поджидать проблема, возникающая тогда, когда два трейта имеют одноименные методы.
В этом случае PHP выдаст фатальную ошибку. Чтобы поправить ситуацию, нужно будет разрешить конфликт имен явным образом. Как это делается - посмотрим на практике.
Пусть у нас есть два трейта с одинаковым методом method:*/

	trait Trait1
	{
		private function method()
		{
			return 1;
		}
	}
	
	trait Trait2
	{
		private function method()
		{
			return 2;
		}
	}

/*Пусть у нас также есть класс Test, использующий оба наших трейта. Если просто подключить оба трейта к нашему классу, 
то PHP выдаст ошибку, так как у трейтов есть совпадающий методы:*/

	// Данный код выдаст ошибку!
	class Test
	{
		use Trait1, Trait2; // подключаем трейты
	}

/*Давайте разрешим (в данном контексте это слово значит разрулим) конфликт имен наших трейтов. Для этого существует специальный оператор insteadof 
(переводится вместо чего-то).
Давайте с помощью этого оператора скажем следующее: использовать метод method трейта Trait1 вместо такого же метода трейта Trait2:*/

	class Test
	{
		use Trait1, Trait2 {
			Trait1::method insteadof Trait2;
		}
	}
	
	new Test;

//Как вы видите, синтаксис тут следующий: вначале имя трейта, потом два двоеточия, потом имя метода, потом наш оператор insteadof и имя второго трейта.
//Давайте проверим:

	class Test
	{
		use Trait1, Trait2 {
			Trait1::method insteadof Trait2;
		}
		
		public function __construct()
		{
			echo $this->method(); // выведет 1, тк это метод первого трейта
		}
	}
	
	new Test;

//Итак, в нашем классе мы сказали, что если используется метод method, то следует брать его из первого трейта.
//Можно и наоборот - взять метод второго трейта:

	class Test
	{
		use Trait1, Trait2 {
			Trait2::method insteadof Trait1;
		}
		
		public function __construct()
		{
			echo $this->method(); // выведет 2, тк это метод второго трейта
		}
	}
	
	new Test;

//В любом случае, если мы указываем использовать метод одного трейта, то метод второго трейта оказывается недоступным.
//Можно использовать и метод второго трейта, переименовав его через ключевое слово as, вот так:

	class Test
	{
		use Trait1, Trait2 {
			Trait1::method insteadof Trait2; // берем метод из первого трейта
			Trait2::method as method2; // метод второго трейта будет доступен как method2
		}
		
		public function __construct()
		{
			echo $this->method() + $this->method2(); // выведет 3
		}
	}
	
	new Test;

//При желании можно переименовать и метод первого трейта:

	class Test
	{
		use Trait1, Trait2 {
			Trait1::method insteadof Trait2;
			Trait1::method as method1; // метод первого трейта будет доступен как method1
			Trait2::method as method2; // метод второго трейта будет доступен как method2
		}
		
		public function __construct()
		{
			echo $this->method1() + $this->method2(); // выведет 3
		}
	}
	
	new Test;

//Использовать ключевое слово as без определения главного метода через insteadof нельзя, это выдаст ошибку:

	// Данный класс выдаст ошибку:
	class Test
	{
		use Trait1, Trait2 {
			Trait1::method as method1;
			Trait2::method as method2;
		}
		
		public function __construct()
		{
			echo $this->method1() + $this->method2();
		}
	}
	
	new Test;
	trait Helper
	{
		private $name;
		private $age;
		
		public function getName()
		{
			return $this->name;
		}
		
		public function getAge()
		{
			return $this->age;
		}
	}

//Пусть у нас также есть вот такой класс User, в конструкторе которого задаются свойства name и age:

	class User
	{
		public function __construct($name, $age)
		{
			$this->name = $name;
			$this->age = $age;
		}
	}

/*Давайте теперь добавим геттеры для свойств нашего класса User. Только не будем их записывать в самом классе, 
а просто подключим трейт Helper, в котором эти методы уже реализованы:*/

	class User
	{
		use Helper; // подключаем трейт
		
		public function __construct($name, $age)
		{
			$this->name = $name;
			$this->age = $age;
		}
	}

//После подключения трейта в нашем классе появятся методы этого трейта. При этом обращаться мы к ним будем будто к методам самого класса:

	$user = new User('Коля', 30);
	echo $user->getName(); // выведет 'Коля'
	echo $user->getAge(); // выведет 30

/*Свойства трейта также будут доступны в нашем классе.
Для того, чтобы продемонстрировать преимущества трейтов, давайте сделаем еще один класс City (город).
У города также будет имя и возраст, однако, логично, что город и юзер не могут наследовать от одного родителя, 
так представляют собой немного разные сущности, пусть и имеющие похожие методы.
Поэтому воспользуемся созданным нами трейтом Helper и в классе City:*/

	class City
	{
		use Helper;
		
		public function __construct($name, $age)
		{
			$this->name = $name;
			$this->age = $age;
		}
	}

//Проверим работу нашего класса:

	$city = new City('Минск', 1000);
	echo $city->getName(); // выведет 'Минск'
	echo $city->getAge(); // выведет 1000

?>	