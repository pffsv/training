<?php
////73.Цепочки методов
/*1.Не подсматривая в мой код самостоятельно реализуйте такой же класс Arr, методы которого будут вызываться в виде цепочки.*/
/*2.Добавьте в класс Arr еще один метод append, который параметром будет принимать массив чисел и добавлять эти числа в конец массива, хранящегося в объекте.
Предполагается, что методы add и append можно будет использовать в любом порядке:
	echo (new Arr)->add(1)->append([2, 3, 4])->add(5)->getSum();.*/

class Arr
{
private $numbers = [];

public function add($number)
{
$this->numbers[] = $number;
return $this;
}

public function append($arr)
{
$this->numbers = array_merge($this->numbers, $arr);
return $this;
}
public function getSum()
{
return array_sum($this->numbers);
}
}
$array = [2, 3, 4];
echo (new Arr)->add(1)->add(3)->add(5)->getSum();// 9
echo (new Arr)->add(10)->append($array)->add(5)->getSum();// 24

/*Сделайте класс User, у которого будут приватные свойства surname (фамилия), name (имя) и patronymic (отчество).
Эти свойства должны задаваться с помощью соответствующих сеттеров.
Сделайте так, чтобы эти сеттеры вызывались цепочкой в любом порядке, 
а самым последним методом в цепочке можно было вызвать метод getFullName, который вернет ФИО юзера (первую букву фамилии, имени и отчества).
Пример:
	echo (new User)->setName('Николай')->setPatronymic('Иванович')
		->setSurname('Петров')->getFullName(); // выведет 'ПНИ'*/
class User
{
private $name;
private $surname;
private $patronymic;

public function setName($name)
{
$this->name = $name;
return $this;
}
public function setSurname($surname)
{
$this->surname = $surname;
return $this;
}
public function setPatronymic($patronymic)
{
$this->patronymic = $patronymic;
return $this;
}
public function getFullName()
{
return mb_substr($this->surname, 0, 1).mb_substr($this->name, 0, 1).mb_substr($this->patronymic, 0, 1);
}
}
echo (new User)->setName('Николай')->setPatronymic('Иванович')->setSurname('Петров')->getFullName();
?>	