<?php
class User
{
	public $name;
	public $age;
}

$user = new User();
$user -> name = 'Коля';
$user -> age = 25;

echo $user -> name;
echo $user -> age;
echo "<br>";

$user1 = new User();
$user1 -> name = 'Kola';
$user1 -> age = 25;

$user2 = new User();
$user2 -> name = 'Vasa';
$user2 -> age = 30;

echo $user1 -> age + $user2 -> age;

?>

