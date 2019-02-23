<?php
//7.Сделайте класс User, в котором будут следующие свойства - name (имя), age (возраст).

class User
{
	public $name;
	public $age;
//8.Сделайте метод setAge, который параметром будет принимать новый возраст пользователя.	
	public function setAge($age)
	{
		$this->age = $age; 
	}
}
//9.Создайте объект класса User с именем 'Коля' и возрастом 25. С помощью метода setAge поменяйте возраст на 30. Выведите новое значение возраста на экран.
$user = new User;
$user->name = 'Коля';
$user->age = 25;

$user->setAge(30);

echo $user->age;

?>