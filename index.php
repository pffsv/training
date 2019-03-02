<?php 
//69.Начальные значения свойств при объявлении
class Student
	{
		private $name;
		private $course = 1; // начальное значение курса
		
		public function __construct($name)
		{
			$this->name = $name;
		}
		
		// Геттер имени:
		public function getName()
		{
			return $this->name;
		}
		
		// Геттер курса:
		public function getCourse()
		{
			return $this->course;
		}
		
		// Перевод студента на новый курс:
		public function transferToNextCourse()
		{
			$this->course++;
		}
	}
//Пусть у нас есть вот такой класс Arr, у которого есть метод add для добавления чисел и метод getSum для получения суммы всех добавленных чисел:

	class Arr
	{
		// Массив для хранения чисел:
		private $numbers;
		
		// Добавляет число в набор:
		public function add($num)
		{
			$this->numbers[] = $num;
		}
		
		// Находит сумму чисел набора:
		public function getSum()
		{
			return array_sum($this->numbers);
		}
	}

//Давайте воспользуемся нашим классом Arr - добавим несколько чисел и найдем их сумму:

	$arr = new Arr;
	
	$arr->add(1);
	$arr->add(2);
	$arr->add(3);
	
	echo $arr->getSum(); // выведет 6

?>