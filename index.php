<?php 
//64.Работа с геттерами и сеттерами
class User
	{
		public $name;
		private $age; // объявим возраст приватным
		
		// Метод для чтения возраста юзера:
		public function getAge()
		{
			return $this->age;
		}
		
		// Метод для изменения возраста юзера:
		public function setAge($age)
		{
			// Проверим возраст на корректность:
			if ($this->isAgeCorrect($age)) {
				$this->age = $age;
			}
		}
		
		// Метод для проверки возраста:
		private function isAgeCorrect($age)
		{
			return $age >= 18 and $age <= 60;
		}
	}
		$user = new User;
	
		// Установим возраст:
		$user->setAge(50);
	
		// Прочитаем новый возраст:
		echo $user->getAge(); // выведет 50
?>