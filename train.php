<?php
/*
93.Объявление конструктора в интерфейсе
1.Сделайте интерфейс iCube, который будет описывать фигуру Куб.
Пусть ваш интерфейс описывает конструктор, параметром принимающий
сторону куба, а также методы для получения объема куба и площади поверхности.
2.Сделайте класс Cube, реализующий интерфейс iCube.
*/
interface iCube
{
public function __construct($a);
public function getCubeVolume();
public function getCubeSquare();
}

class Cube implements iCube
{
private $a;

public function __construct($a)
{
$this->a = $a;
}
public function getCubeVolume()
{
return pow($this->a, 3);
}
public function getCubeSquare()
{
return 6 * $this->a * $this->a;
}
}
$c = new Cube(3);
echo $c->getCubeVolume();// 27
echo $c->getCubeSquare();// 54
/*
3.Сделайте интерфейс iUser, который будет описывать юзера.
Предполагается, что у юзера будет имя и возраст и эти поля
будут передаваться параметрами конструктора.
Пусть ваш интерфейс также задает то, что у юзера будут
геттеры (но не сеттеры) для имени и возраста.
4.Сделайте класс User, реализующий интерфейс iUser.
*/
interface iUser
{
public function __construct($name, $age);
public function getName();
public function getAge();
}

class User implements iUser
{
private $name;
private $age;

public function __construct($name, $age)
{
$this->name = $name;
$this->age = $age;
}
public function getName()
{
return $this->name;
}
public function getAge()
{
return $this->age;
}
}
$u = new User('Вася', 30);
echo $u->getName();// Вася
echo $u->getAge();// 30

?>	