<?php
/*
108.Магический метод __get

1.Переделайте код этого класса так, чтобы
вместо геттеров использовался магический метод __get.
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
public function __get($property)
{
return $this->$property;
}
}
$u = new User('Вася', 28);
echo $u->name.' '.$u->age;// Вася 28
/*
2.Сделайте класс Date с публичными свойствами
year (год), month (месяц) и day (день).
С помощью магии сделайте свойство weekDay,
которое будет возвращать день недели,
соответствующий дате.
*/
class Date
{
public $year;
public $month;
public $day;

public function __construct($year, $month, $day)
{
$this->year = $year;
$this->month = $month;
$this->day = $day;
}
public function __get($prop)
{
if ($prop == 'weekday') {
return (new DateTime("$this->year-$this->month-$this->day"))->format('l');
}
}
}
echo (new Date(2019, 02, 03))->weekday;// Sunday

?>	