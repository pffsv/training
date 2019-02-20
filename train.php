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
/**
* задача 2
*/
class User1
{
public $name;
public $age;

public function show($mess)
{
return $mess.'!!!';
}
}
$user1 = new User1;
$user1->name = 'Саша';
$user1->age = 25;

echo $user1->show('Hi');
?>