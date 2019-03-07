<?php
//75.Наследование классов
/*1.реализуйте классы User, Employee.*/
/*2.класс Student, наследующий от класса User.*/
class User
{
private $name;
private $age;

public function getName()
{
return $this->name;
}

public function setName($name)
{
$this->name = $name;
}

public function getAge()
{
return $this->age;
}

public function setAge($age)
{
$this->age = $age;
}
}
class Employee extends User
{
private $salary;

public function getSalary()
{
return $this->salary;
}

public function setSalary($salary)
{
$this->salary = $salary;
}
}
$empl = new Employee;

$empl->setSalary(1000);
$empl->setName('Вася');
$empl->setAge(30);

echo $empl->getSalary();
echo $empl->getName();
echo $empl->getAge();

class Student extends User
{
private $course;

public function getCourse()
{
return $this->course;
}
public function setCourse($course)
{
$this->course = $course;
}
}
$st = new Student;

$st->setCourse(1);
$st->setName('Вася');
$st->setAge(30);

echo $st->getCourse();
echo $st->getName();
echo $st->getAge();

?>	