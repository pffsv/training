<?php
//62.Модификаторы доступа public и private
//2.Попробуйте вызвать метод isAgeCorrect снаружи класса. Убедитесь, что это будет вызывать ошибку.	
	class User
	{
		private $name;
		private $age;
			// Объявим приватным:
		private function isAgeCorrect($age)
		{
			return $age >= 18 and $age <= 60;
		}	

	$user = new User;
    $user->checkAge(30);
	}
?>	