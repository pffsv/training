<?php
//77.Перезапись методов родителя в классе потомке
/*1.Модифицируйте код класса User так, чтобы в методе setName
выполнялась проверка того, что длина имени более 3-х символов.
2.Добавьте в класс Student метод setName, в котором будет
выполняться проверка того, что длина имени более 3-х символов
и менее 10 символов.
Пусть метод setName класса Student использует метод setName
своего родителя, чтобы выполнить часть проверки.
*/
class User
{
private $name;

public function getName()
{
return $this->name;
}

public function setName($name)
{
if (mb_strlen($name) > 3) {
$this->name = $name;
}

}
}
class Student extends User
{
public function setName($name)
{
if (mb_strlen($name) < 10) {
parent::setName($name);
}
}
}
$us = new User;
$us->setName('Вася');
echo $us->getName();//Вася
$us->setName('Ая');
echo $us->getName();//Вася

$std = new Student;
$std->setName('Саня');
echo $std->getName();//Саня
$std->setName('Ая');
echo $std->getName();//Саня
$std->setName('Константин');//10 символов
echo $std->getName();//Саня
?>	