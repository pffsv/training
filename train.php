<?php
/*
107.Магический метод __toString

1.Сделайте класс User, в котором будут следующие
свойства - name (имя), surname (фамилия),
patronymic (отчество).
Сделайте так, чтобы при выводе объекта через
echo на экран выводилось ФИО пользователя
(фамилия, имя, отчество через пробел).
*/
class User
{
private $name;
private $surname;
private $patronymic;

public function __construct($name, $surname, $patronymic)
{
$this->name = $name;
$this->surname = $surname;
$this->patronymic = $patronymic;
}
public function __toString()
{
return $this->surname.' '.$this->name.' '.$this->patronymic;
}
}
$u = new User('Василий', 'Пупкин', 'Алибабаевич');
echo $u;// Пупкин Василий Алибабаевич
/*
2.реализуйте такой же класс Arr.
*/
class Arr
{
private $num = [];

public function add($n)
{
$this->num[] = $n;
return $this;
}
public function __toString()
{
return (string) array_sum($this->num);
}
}
echo (new Arr)->add(1)->add(2)->add(3);// 6

?>	