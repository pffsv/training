<?php 

Class user
{
	public $name;
	public $age;

// Создаем метод:
	public function show($str)
	{
		return $str . '!!!';
	}
}
$user = new User;
$user->name = 'Kola';
$user->age = 25;

echo $user->show('hello');

?>