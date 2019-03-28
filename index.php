<?php 
//94.Наследование интерфейсов друг от друга
//Интерфейсы, так же, как и классы, могут наследовать друг от друга с помощью оператора extends.
//Давайте посмотрим на примере.
//В предыдущем уроке мы с вами сделали вот такой интерфейс iRectangle:

	interface iRectangle
	{
		public function __construct($a, $b);
		public function getSquare();
		public function getPerimeter();
	}

//Однако у нас уже есть интерфейс Figure, описывающий часть методов интерфейса iRectangle (метод getSquare и метод getPerimeter):

	interface Figure
	{
		public function getSquare();
		public function getPerimeter();
	}

//Давайте сделаем так, чтобы интерфейс iRectangle наследовал методы интерфейса Figure:

	interface iRectangle extends Figure
	{
		public function __construct($a, $b);
	}

?>