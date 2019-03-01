<?php
//66.Хранение классов в отдельных файлах
/*1.Сделайте класс Employee, в котором будут следующие свойства: name (имя), surname (фамилия), patronymic (отчество) и salary (зарплата).
Пусть этот класс хранится в отдельном файле.*/
class Employee
{
private $name;
private $surname;
private $patronymic;
private $salary;

function __construct($name, $patronymic, $surname, $salary)
{
$this->name = $name;
$this->surname = $surname;
$this->salary = $salary;
}
public function getName()
{
return $this->name;
}
public function getSurname()
{
return $this->surname;
}
public function getPatronymic()
{
return $this->patronymic;
}
public function getSalary()
{
return $this->salary.'$';
}
public function setSalary($salary)
{
$this->salary = $salary;
}
}

?>	