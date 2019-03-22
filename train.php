<?php
/*89.Абстрактные классы

1.реализуйте такой же абстрактный класс User, а
также классы Employee и Student, наследующие от него.
2.Добавьте в ваш класс User такой же абстрактный
метод increaseRevenue. Напишите реализацию этого
метода в классах Employee и Student.
3.Добавьте также в ваш класс User абстрактный метод
decreaseRevenue (уменьшить зарплату). Напишите
реализацию этого метода в классах Employee и Student.
*/
abstract class User
{
private $name;

public function getName()
{
return $this->name;
}
public function setName($name)
{
$this->name = $name;
}
abstract public function increaseRevenue($value);
abstract public function decreaseRevenue($value);
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
public function increaseRevenue($value)
{
$this->salary = $this->salary + $value;
}
public function decreaseRevenue($value)
{
$this->salary = $this->salary - $value;
}
}
class Student extends User
{
private $scholarship;

public function getScholarship()
{
return $this->scholarship;
}
public function setScholarship($scholarship)
{
$this->scholarship = $scholarship;
}
public function increaseRevenue($value)
{
$this->scholarship = $this->scholarship + $value;
}
public function decreaseRevenue($value)
{
$this->scholarship = $this->scholarship - $value;
}
}
$st = new Student;
$st->setName('Вася');
$st->setScholarship(1000);
$st->increaseRevenue(100);
echo $st->getName();
echo $st->getScholarship();// 1100
$st->decreaseRevenue(200);
echo $st->getScholarship();// 900
?>	