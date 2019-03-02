<?php
//68.Начальные значения свойств в конструкторе
/*1.реализуйте такой же класс Student.*/
/*2.Модифицируйте метод transferToNextCourse так, чтобы при переводе на новый курс выполнялась проверка того, что новый курс не будет больше 5.*/
class Student
{
	private $name;
	private $course;

	function __construct($name)
	{
		$this->name = $name;
		$this->course = 1;
	}
	public function getName()
	{
	return $this->name;
	}
	public function getCourse()
	{
	return $this->course;
	}

	public function transferToNextCourse()
	{
	$newcourse = $this->course + 1;
	if ($this->isCourseCorrect($newcourse)) {
	$this->course = $newcourse;
	}
	}
	private function isCourseCorrect($newcourse)
	{
	return $newcourse <= 5;
	}
}

	$std = new Student('Вася');
	echo $std->getCourse();// 1
	$std->transferToNextCourse();
	echo $std->getCourse();// 2
	$std->transferToNextCourse();
	echo $std->getCourse();// 3
	$std->transferToNextCourse();
	echo $std->getCourse();// 4
	$std->transferToNextCourse();
	echo $std->getCourse();// 5
	$std->transferToNextCourse();
	echo $std->getCourse();// 5	
?>	