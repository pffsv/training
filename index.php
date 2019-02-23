<?php 

Class user
{
	public $name;
	public $age;

// Создаем метод:
	public function show()
	{
		return $this->name;
	}
}

	$user = new User; // создаем объект класса
	$user->name = 'Коля'; 
	$user->age = 25; 

	echo $user->show();

?>