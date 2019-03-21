<?php
/*87.Объект со статическими свойствами и методами

1.реализуйте такой же класс User,
подсчитывающий количество своих объектов.
*/
class User
{
public $name;
public static $count;

public function __construct($name)
{
$this->name = $name;
self::$count++;
}
}
$us1 = new User('u1');
echo User::$count;
$us2 = new User('u2');
echo User::$count;
/*
2.Самостоятельно переделайте код вашего класса
User в соответствии с теоретической частью урока.
*/
class User1
{
public $name;
private static $count;

public function __construct($name)
{
$this->name = $name;
self::$count++;
}
public static function getCount()
{
return self::$count;
}
}
$usr1 = new User1('u1');
echo User1::getCount();
$usr2 = new User1('u2');
echo User1::getCount();

?>	