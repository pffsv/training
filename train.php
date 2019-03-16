<?php
//83.Определение принадлежности объекта к классу
/*
Оператор instanceof и наследование

14.реализуйте такой же класс UsersCollection.
*/
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
class Student
{
private $name;
private $scholarship;

public function __construct($name, $scholarship)
{
$this->name = $name;
$this->scholarship = $scholarship;
}
public function getName()
{
return $this->name;
}
public function getScholarship()
{
return $this->scholarship;
}
}
class UsersCollection
{
private $employees = [];
private $students = [];

public function add($user)
{
if ($user instanceof Employee) {
$this->employees[] = $user;
}

if ($user instanceof Student) {
$this->students[] = $user;
}
}
public function getTotalSalary()
{
$sum = 0;
foreach ($this->employees as $employee) {
$sum += $employee->getSalary();
}
return $sum;
}
public function getTotalScholarship()
{
$sum = 0;
foreach ($this->students as $student) {
$sum += $student->getScholarship();
}
return $sum;
}
public function getTotalPayment()
{
return $this->getTotalScholarship() + $this->getTotalSalary();
}
}
$uscol = new UsersCollection;
$uscol->add(new Student('Вова', 300));
$uscol->add(new Student('Вася', 400));
$uscol->add(new Employee('Петя', 200));
$uscol->add(new Employee('Саня', 150));

echo $uscol->getTotalScholarship();// 700
echo $uscol->getTotalSalary();// 350
echo $uscol->getTotalPayment();// 1050
?>	