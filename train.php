<?php
/*
94.Наследование интерфейсов друг от друга

1.Сделайте интерфейс iUser с методами
getName, setName, getAge, setAge.
2.Сделайте интерфейс iEmployee,
наследующий от интерфейса iUser и добавляющий
в него методы getSalary и setSalary.
3.Сделайте класс Employee, реализующий интерфейс iEmployee.
*/
interface iUser
{
public function setName($name);
public function getName();
public function setAge($age);
public function getAge();
}
interface iEmployee
{
public function setSalary($salary);
public function getSalary();
}

class Employee implements iEmployee
{
private $name;
private $age;
private $salary;

public function setName($name)
{
$this->name = $name;
}
public function getName()
{
return $this->name;
}
public function setAge($age)
{
$this->age = $age;
}
public function getAge()
{
return $this->age;
}
public function setSalary($salary)
{
$this->salary = $salary;
}
public function getSalary()
{
return $this->salary;
}
}
$e = new Employee;
$e->setName('Вася');
$e->setSalary(1000);
echo $e->getName().' '.$e->getSalary();// Вася 1000

?>	