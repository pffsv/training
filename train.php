<?php
//82.Сравнение объектов
/*
1.Сделайте функцию compare, которая параметром будет
принимать два объекта и возвращать true, если они имеют
одинаковые свойства и значения являются экземплярами
одного и того же класса, и false, если это не так.
2.Сделайте функцию compare, которая параметром будет
принимать два объекта и возвращать true, если
переданные переменные ссылаются на один и тот
же объект, и false, если на разные.
3.Сделайте функцию compare, которая параметром
будет принимать два объекта и сравнивать их.
Функция должна возвращать 1, если переданные
переменные ссылаются на один и тот же объект.
Функция должна возвращать 0, если объекты разные, но
одного и того же класса и с теми же свойствами и их значениями.
Функция должна возвращать -1 в противном случае.
4.Скопируйте мой код класса Employee, затем самостоятельно
реализуйте описанный класс EmployeesCollection, проверьте его работу.
5.Упростите ваш класс EmployeesCollection с
использованием функции in_array, проверьте его работу.
*/
class User
{
private $name;
private $age;

public function __construct($name, $age)
{
$this->name = $name;
$this->age = $age;
}
}

class Compare
{
public static function obj($obj1, $obj2)
{
return $obj1 == $obj2;
}
}
class Compare1
{
public static function obj($obj1, $obj2)
{
return $obj1 === $obj2;
}
}

class Compare2
{
public static function obj($obj1, $obj2)
{
if ($obj1 === $obj2) {
return 1;
} elseif ($obj1 == $obj2) {
return 0;
} else {
return -1;
}
}
}
$us1 = new User('Вася', 30);
$us2 = new User('Вася', '30');
$us3 = new User('Вова', 25);
$us4 = $us1;

var_dump(Compare::obj($us1, $us2));// true
var_dump (Compare1::obj($us1, $us2));// false
echo Compare2::obj($us1, $us4);// 1
echo Compare2::obj($us1, $us2);// 0
echo Compare2::obj($us1, $us3);// -1

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
class EmployeesCollection
{
private $employees = [];

public function add($newEmployee)
{
if (!in_array($newEmployee, $this->employees, true)) {
$this->employees[] = $newEmployee;
}
}

public function get()
{
return $this->employees;
}
}
$empCol = new EmployeesCollection;
$employee = new Employee('Коля', 100);
$empCol->add($employee);
$empCol->add($employee);
var_dump($empCol->get());// 'Коля', 100
?>	