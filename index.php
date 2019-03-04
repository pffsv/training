<?php 
//70.Переменные названия свойств
//Массив свойств
//Пусть теперь дан вот такой класс User:

	class User
	{
		public $surname; // фамилия
		public $name; // имя
		public $patronymic; // отчество
		
		public function __construct($surname, $name, $patronymic)
		{
			$this->surname = $surname;
			$this->name = $name;
			$this->patronymic = $patronymic;
		}
	}
//И пусть дан массив свойств

	$props = ['surname', 'name', 'patronymic'];
//Попробуем теперь вывести значение свойства, которое хранится в нулевом элементе массива, то есть в $props[0].
//На самом деле, если просто попытаться сделать $user->$props[0] - это не будет работать:

	$user = new User('Иванов', 'Иван', 'Иванович');
	
	$props = ['surname', 'name', 'patronymic'];
	echo $user->$props[0]; // так работать не будет
//Для того, чтобы такое сложное имя свойства заработало, его нужно взять в фигурные скобки, вот так:

	$user = new User('Иванов', 'Иван', 'Иванович');
	
	$props = ['surname', 'name', 'patronymic'];
	echo $user->{$props[0]}; // выведет 'Иванов'
?>