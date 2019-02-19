<?php
//Урок 59
//1.Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата).
class User
{
	public $name;
	public $age;

	// Создаем метод
	public function show()
	{
		return '!!!';
	}
}
	$user = new User;
	$user->name = 'Коля';
	$user->age = 25;
	
	// Вызовем наш метод:
	echo $user->show(); // выведет '!!!'	
?>

