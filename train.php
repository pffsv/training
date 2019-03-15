<?php
//83.Определение принадлежности объекта к классу
/*
Определение принадлежности объекта к классу

1.Сделайте класс Employee с публичными
свойствами name (имя) и salary (зарплата).
2.Сделайте класс Student с публичными свойствами
name (имя) и scholarship (стипендия).
3.Создайте по 3 объекта каждого класса и в
произвольном порядке запишите их в массив $arr.
4.Переберите циклом массив $arr и выведите на
экран столбец имен всех работников.
5.Аналогичным образом выведите на экран
столбец имен всех студентов.
6.Переберите циклом массив $arr и с его помощью
найдите сумму зарплат работников и сумму стипендий
студентов. После цикла выведите эти два числа на экран.
*/
class Employee
{
public $name;
public $salary;

function __construct($name, $salary)
{
$this->name = $name;
$this->salary = $salary;
}
}
class Student
{
public $name;
public $scholarship;

function __construct($name, $scholarship)
{
$this->name = $name;
$this->scholarship = $scholarship;
}
}

$arr[] = new Employee('Вася', 2500);
$arr[] = new Employee('Коля', 2000);
$arr[] = new Employee('Саша', 3000);
$arr[] = new Student('Женя', 1000);
$arr[] = new Student('Олег', 900);
$arr[] = new Student('Дима', 950);
foreach ($arr as $name) {
if ($name instanceof Employee) {
echo $name->name;// ВасяКоляСаша
}
}
foreach ($arr as $name) {
if ($name instanceof Student) {
echo $name->name;// ЖеняОлегДима
}
}
$sal = 0;
$sch = 0;
foreach ($arr as $sum) {
if ($sum instanceof Employee) {
$sal += $sum->salary;
} elseif ($sum instanceof Student) {
$sch += $sum->scholarship;
}
}
echo 'Сумма ЗП: '.$sal.', Сумма стипендий: '.$sch;

?>	