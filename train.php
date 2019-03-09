<?php
//78.Перезапись конструктора родителя в потомке
/*1.Сделайте класс User, в котором будут следующие свойства только для чтения: name (имя), surname (фамилия), 
Начальные значения этих свойств должны устанавливаться в конструкторе. Сделайте также геттеры этих свойств.
2.Сделайте так, чтобы третьим параметром в конструктор передавалась дата рождения работника в формате год-месяц-день 
Запишите ее в свойство birthday. Сделайте геттер для этого свойства.
3.Сделайте приватный метод calculateAge, который параметром будет принимать дату рождения, 
а возвращать возраст с учетом того, был ли уже день рождения в этом году, или нет.
4.Сделайте так, чтобы метод calculateAge вызывался в конструкторе объекта, 
рассчитывал возраст пользователя и записывал его в приватное свойство age. Сделайте геттер для этого свойства.*/

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

?>	