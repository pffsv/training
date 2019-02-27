<?php
//64.Работа с геттерами и сеттерами
/*4.Пусть зарплата наших работников хранится в долларах. Сделайте так, чтобы геттер getSalary добавлял в конец числа с зарплатой значок доллара.*/
class Employee
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
if ($this->isAgeCorrect($age)) {
$this->age = $age;
}
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
return $this->salary.'$';
}
private function isAgeCorrect($age)
{
return $age >= 1 and $age <= 100;
}
}
$emp = new Employee;

$emp->setSalary(500);
echo $emp->getSalary();// 500$
	
?>	