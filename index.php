<?php 
//105.Использование трейтов в трейтах
//Трейты, подобно классам, также могут использовать другие трейты
//Давайте посмотрим на примере. Пусть у нас есть вот такой трейт с двумя методами:

	trait Trait1
	{
		private function method1()
		{
			return 1;
		}
		
		private function method2()
		{
			return 2;
		}
	}

//Пусть у нас также есть еще один трейт:

	trait Trait2
	{
		private function method3()
		{
			return 3;
		}
	}

//Давайте к трейту Trait2 подключим трейт Trait1:

	trait Trait2
	{
		use Trait1; // используем первый трейт
		
		private function method3()
		{
			return 3;
		}
	}

//После такого подключения получится, что Trait2 кроме своих методов будет иметь еще и методы трейта Trait1.
//Проверим это: сделаем класс Test, подключим к нему трейт Trait2 и убедимся, что в нашем классе появятся методы как первого трейта, так и второго:

	class Test
	{
		use Trait2; // подключаем второй трейт
		
		public function __construct()
		{
			echo $this->method1(); // метод первого трейта
			echo $this->method2(); // метод первого трейта
			echo $this->method3(); // метод второго трейта
		}
	}
	
	new Test;
?>	