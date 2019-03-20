<?php 
//86.Статические свойства
//Статическое свойство внутри класса
//Можно также обращаться к статическим свойствам внутри самого класса, используя self::, смотрите пример:

	class Test
	{
		// Приватное статическое свойство:
		private static $property;
		
		// Статический метод для задания значения свойства:
		public static function setProperty($value)
		{
			self::$property = $value; // записываем данные в наше static свойство
		}
		
		// Статический метод для получения значения свойства:
		public static function getProperty()
		{
			return self::$property; // прочитываем записанные данные
		}
	}
//Воспользуемся нашим классом:

	Test::setProperty('test'); // запишем данные в свойство
	echo Test::getProperty(); // выведем на экран
//Можно также задать начальное значение свойства:


	class Test
	{
		// Начальное значение свойства:
		private static $property = 'test';
		
		public static function getProperty()
		{
			return self::$property;
		}
	}
	
	echo Test::getProperty(); // выведет 'test'
//Применение
//Пусть у нас есть класс Geometry для работы с геометрическими фигурами.
//В этом классе есть методы для определения площади круга и длины окружности:

	class Geometry
	{
		// Площадь круга:
		public static function getCircleSquare($radius)
		{
			return 3.14 * $radius * $radius;
		}
		
		// Длина окружности:
		public static function getCircleСircuit($radius)
		{
			return 2 * 3.14 * $radius;
		}
	}
/*Как вы видите, в обоих методах используется число Пи, равное 3.14.
Было бы удобно вынести это число в статическое свойство класса - в этом случае значение числа Пи 
будет задаваться в одном месте и мы легко сможем поменять его в случае необходимости (например, написать больше знаков в дробной части).
Давайте сделаем это:*/

	class Geometry
	{
		private static $pi = 3.14; // вынесем Пи в свойство
		
		public static function getCircleSquare($radius)
		{
			return self::$pi * $radius * $radius;
		}
		
		public static function getCircleСircuit($radius)
		{
			return 2 * self::$pi * $radius;
		}
	}	
?>