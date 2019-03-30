<?php
/*
97.Наследование от класса и реализация интерфейса

1.Скопируйте код моего класса Employee и код интерфейса
iProgrammer. Не копируйте мою заготовку класса iProgrammer -
не подсматривая в мой код реализуйте этот класс самостоятельно.
*/
interface iProgrammer
{
public function __construct($name, $salary);
public function getName();
public function getSalary();
public function getLangs();
public function addLang($lang);
}
class Employee
{
private $name;
private $salary;

public function __construct($name, $salary)
{
$this->name = $name;
$this->salary = $salary;
}
public function getName()
{
return $this->name;
}
public function getSalary()
{
return $this->salary;
}
}
class Programmer extends Employee implements iProgrammer
{
private $name;
private $salary;
private $lang;

public function __construct($name, $salary)
{
parent::__construct($name, $salary);
}
public function addLang($lang)
{
$this->lang = $lang;
}

public function getLangs()
{
return $this->lang;
}
}
$p = new Programmer('Вася', 1000);
$p->addLang('php');
echo $p->getName();// Вася
echo $p->getSalary();// 1000
echo $p->getLangs();// php

?>	