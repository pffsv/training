<?php
//62.Модификаторы доступа public и private
//3.Сделайте класс Student со свойствами $name и $course (курс студента, от 1-го до 5-го).
	class Student
	{
		public $name;
		public $course;
	
//4.В классе Student сделайте public метод transferToNextCourse, который будет переводить студента на следующий курс.	
	public function transferToNextCourse()
	{
		$newcourse = $this->course + 1;
//5.Выполните в методе transferToNextCourse проверку на то, что следующий курс не больше 5.	
		return $newcourse <= 5;
	}

//6.Вынесите проверку курса в отдельный private метод isCourseCorrect.
	private function isCourseCorrect($newcourse)
	{
	return $newcourse <= 5;
	}
	}
?>	