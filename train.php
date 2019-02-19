<?php
//Урок 58
//1.Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата).
class Employee
{
	public $name;
	public $age;
	public $salary;
}

//2.Создайте объект класса Employee, затем установите его свойства в следующие значения - имя 'Иван', возраст 25, зарплата 1000.

$employee1 = new Employee;
$employee1->name = 'Иван';
$employee1->age = 25;
$employee1->salary = 1000;

//3.Создайте второй объект класса Employee, установите его свойства в следующие значения - имя 'Вася', возраст 26, зарплата 2000.

$employee2 = new Employee;
$employee2->name = 'Вася';
$employee2->age = 26;
$employee2->salary = 2000;

//4.Выведите на экран сумму зарплат Ивана и Васи.

echo $employee1->salary + $employee2->salary;

//5.Выведите на экран сумму возрастов Ивана и Васи.

echo $employee1->age + $employee2->age;

?>