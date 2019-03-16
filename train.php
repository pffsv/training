<?php
//83.Определение принадлежности объекта к классу
/*
Оператор instanceof и наследование

7.Сделайте класс User с публичным свойствами
name (имя) и surname (фамилия).
8.Сделайте класс Employee, который будет наследовать
от класса User и добавлять salary (зарплата).
9.Сделайте класс City с публичными свойствами name
(название города) и population (количество населения).
10.Создайте 3 объекта класса User, 3 объекта класса
Employee, 3 объекта класса City, и в произвольном
порядке запишите их в массив $arr.
11.Переберите циклом массив $arr и выведите на
экран столбец свойств name тех объектов, которые
принадлежат классу User или потомку этого класса.
12.Переберите циклом массив $arr и выведите на
экран столбец свойств name тех объектов, которые
НЕ принадлежат классу User или потомку этого класса.
13.Переберите циклом массив $arr и выведите на экран
столбец свойств name тех объектов, которые принадлежат
именно классу User, то есть не классу City и не классу Employee.
*/
class User
{
public $name;
public $surname;

function __construct($name, $surname)
{
$this->name = $name;
$this->surname = $surname;
}
}

class Employee extends User
{
public $salary;

function __construct($name, $surname, $salary)
{
parent::__construct($name, $surname);
$this->salary = $salary;
}
}

class City
{
public $name;
public $population;

function __construct($name, $population)
{
$this->name = $name;
$this->population = $population;
}
}
$arr[] = new User('Вася', 'Пупкин');
$arr[] = new User('Коля', 'Пупкин');
$arr[] = new User('Вова', 'Пупкин');
$arr[] = new Employee('Саша', 'Пупкин', 1000);
$arr[] = new Employee('Женя', 'Пупкин', 1000);
$arr[] = new Employee('Гога', 'Пупкин', 1000);
$arr[] = new City('Москва', 10000000);
$arr[] = new City('Питер', 7000000);
$arr[] = new City('Караганда', 100000);
foreach ($arr as $name) {
if ($name instanceof User) {
echo $name->name;// ВасяКоляВоваСашаЖеняГога
}
}
foreach ($arr as $name) {
if (!$name instanceof User) {
echo $name->name;// МоскваПитерКараганда
}
}
foreach ($arr as $name) {
if (!$name instanceof Employee && !$name instanceof City) {
echo $name->name;// ВасяКоляВова
}
}

?>	