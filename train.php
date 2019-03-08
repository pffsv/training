<?php
//76.Модификатор доступа protected
/*1.реализуйте описанный класс Student с методами getCourse, setCourse и addOneYear.*/
class User
{
private $name;
protected $age;

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
class Student extends User
{
private $course;

public function addOneYear()
{
$this->age++;
}
public function getCourse()
{
return $this->course;
}
public function setCourse($course)
{
$this->course = $course;
}
}
$std = new Student;
$std->setAge(30);
echo $std->getAge();// 30
$std->addOneYear();
echo $std->getAge();// 31
//echo $std->age;// err
?>	