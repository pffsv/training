<?php
//65.Свойства только для чтения
/*2.Сделайте так, чтобы свойства name и surname были доступны только для чтения, а свойство salary - и для чтения, и для записи.*/
class Employee
{
private $name;
private $surname;
private $salary;

function __construct($name, $surname, $salary)
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
public function getSalary()
{
return $this->salary.'$';
}
public function setSalary($salary)
{
$this->salary = $salary;
}
}
$Employee = new Employee('Коля', 'Иванов', 500);
echo $Employee->getName().' '.$Employee->getSurname();// Коля Иванов
echo $Employee->getSalary();// 500$
$Employee->setSalary(1000);
echo $Employee->getSalary();// 1000$
?>	