<?php 
//95.Интерфейсы и instanceof
//Оператор instanceof при работе с интерфейсами работает так же, как и при наследовании.
//Посмотрим на примере. Пусть у нас есть вот такой класс Quadrate, который реализует интерфейс Figure:

	interface Figure
	{
		
	}
	
	class Quadrate implements Figure
	{
		
	}

//Создадим объект этого класса и проверим его оператором instanceof:

	$quadrate = new Quadrate;
	
	var_dump($quadrate instanceof Quadrate); // выведет true
	var_dump($quadrate instanceof Figure); // выведет true

//То есть с помощью instanceof можно проверять, реализует какой-то класс заданный интерфейс или нет.

?>