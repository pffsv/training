<?php
class User
{
public $name;
public $age;

public function show()
{
return '!!!';
}
}
$user = new User;
$user->name = 'Саша';
$user->age = 25;

echo $user->show();
?>