<?php
//75.Наследование классов
/*3.Сделайте класс Programmer, который будет наследовать от класса Employee. 
Пусть новый класс имеет свойство langs, в котором будет хранится массив языков, 
которыми владеет программист. Сделайте также геттер и сеттер для этого свойства.*/
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

$empl->setSalary(1500);
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

class Programmer extends Employee
{
private $langs = [];

public function setLang($arr)
{
$this->langs = array_merge($this->langs, $arr);
return $this;
}
public function getLang()
{
return $this->langs;
}
}
$prog = new Programmer;
$prog->setName('Петя');
$prog->setSalary(2500);
$prog->setLang(['php', 'js', 'sql']);
var_dump($prog->getLang());// 'php', 'js', 'sql'
echo $prog->getName();// Петя
echo $prog->getSalary(); // 2500

/*4.Сделайте класс Driver (водитель), который будет наследовать от класса Employee. 
Пусть новый класс добавляет следующие свойства: водительский стаж, категория вождения (A, B, C, D), а также геттеры и сеттеры к ним.*/

class Driver extends Employee
{
private $experience;
private $category = [];

public function setExperience($years)
{
$this->experience = $years;
return $this;
}
public function getExperience()
{
return $this->experience;
}
public function setCategory($category)
{
$this->category [] = $category;
return $this;
}
public function setListCategory($arrcat)
{
$this->category = array_merge($this->category, $arrcat);
return $this;
}
public function getCategory()
{
return $this->category;
}
}
$drv = (new Driver)->setCategory('A')->setListCategory(['B', 'C', 'D'])->setExperience(5);
$drv->setName('Вова');
$drv->setSalary(1000);
echo $drv->getName();// Вова
echo $drv->getSalary(); // 1000
echo $drv->getExperience();// 5
var_dump($drv->getCategory());// 'A', 'B', 'C', 'D'

?>	