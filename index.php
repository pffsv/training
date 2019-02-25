<?php 
//62.Модификаторы доступа public и private
class User
	{
		public $name;
		public $age;
		
		// Метод для изменения возраста юзера:
		public function setAge($age)
		{
			// Проверим возраст на корректность:
			if ($this->isAgeCorrect($age)) {
				$this->age = $age;
			}
		}
		
		// Метод для добавления к возрасту:
		public function addAge($years)
		{
			$newAge = $this->age + $years; // вычислим новый возраст
			
			// Проверим возраст на корректность:
			if ($this->isAgeCorrect($newAge)) {
				$this->age = $newAge; // обновим, если новый возраст прошел проверку
			}
		}
		
		// Метод для проверки возраста:
		private function isAgeCorrect($age)
		{
			return $age >= 18 and $age <= 60;
		}
	}
?>