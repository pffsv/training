<?php
//78.Перезапись конструктора родителя в потомке
/*6.Сделайте класс Employee, который будет наследовать от класса User. 
Пусть новый класс имеет свойство salary, в котором будет хранится зарплата работника. 
Зарплата должна передаваться четвертым параметром в конструктор объекта. Сделайте также геттер для этого свойства.*/

class User
{
private $name;
private $surname;
private $birthday;
private $age;

public function __construct($name, $surname, $birthday)
{
$this->name = $name;
$this->surname = $surname;
$this->birthday = $birthday;
$this->age = $this->calculateAge($birthday);
}
public function getName()
{
return $this->name;
}
public function getSurname()
{
return $this->surname;
}
public function getBirthday()
{
return $this->birthday;
}
public function getAge()
{
return $this->age;
}
private function calculateAge($birthday)
{
return (new DateTime())->diff(new DateTime($birthday))->format('%Y');
}
}
$us = new User('Вася', 'Пупкин', '1985-02-10');
echo $us->getAge();// 33

class Employee extends User
{
private $salary;

function __construct($name, $surname, $birthday, $salary)
{
parent::__construct($name, $surname, $birthday);
$this->salary = $salary;
}
public function getSalary()
{
return $this->salary;
}
}
$emp = new Employee('Вася', 'Пупкин', '1985-02-10', 1500);
echo $emp->getAge();// 33
echo $emp->getSalary();// 1500

?>	