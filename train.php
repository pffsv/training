<?php
//78.Перезапись конструктора родителя в потомке
/*1.реализуйте такой же класс Student, наследующий от User.*/
class User
{
private $name;
private $age;

public function __construct($name, $age)
{
$this->name = $name;
$this->age = $age;
}
public function getName()
{
return $this->name;
}
public function getAge()
{
return $this->age;
}
}
class Student extends User
{
private $course;

function __construct($name, $age, $course)
{
parent::__construct($name, $age);
$this->course = $course;
}
public function getCourse()
{
return $this->course;
}
}
$std = new Student('Вася', 21, 1);
echo $std->getName();//Вася
echo $std->getAge();// 21
echo $std->getCourse();// 1
?>	