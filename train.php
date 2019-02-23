<?php
//7.Сделайте класс User, в котором будут следующие свойства - name (имя), age (возраст).

class User
{
	public $name;
	public $age;
//8.Сделайте метод setAge, который параметром будет принимать новый возраст пользователя.	
/*	public function setAge($age)
	{
		$this->age = $age; 
	}
}
//9.Создайте объект класса User с именем 'Коля' и возрастом 25. С помощью метода setAge поменяйте возраст на 30. Выведите новое значение возраста на экран.
$user = new User;
$user->name = 'Коля';
$user->age = 25;

$user->setAge(30);

echo $user->age;

/*10.Модифицируйте метод setAge так, чтобы он вначале проверял, что переданный возраст больше или равен 18. 
Если это так - пусть метод меняет возраст пользователя, а если не так - то ничего не делает.*/

	public function setAge($age)
	{
		if ($age >=18) {
			$this->age = $age;
		}
	}	
}

/*11.Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), salary (зарплата). 
Сделайте метод doubleSalary, который текущую зарплату будет увеличивать в 2 раза.*/

class Employee
{
	public $name;
	public $salary;

		public function doubleSalary()
		{
			return $this->$salary * 2;
		}

}

//12.Сделайте класс Rectangle (прямоугольник), в котором в свойствах будут записаны ширина и высота.

class Rectangle
{
	public $width;
	public $height;

//13.В классе Rectangle сделайте метод getSquare, который будет возвращать площадь этого прямоугольника.

		public function getSquare()
		{
			return $this->width * $this->height;
		}
//14.В классе Rectangle сделайте метод getPerimeter, который будет возвращать периметр этого прямоугольника.

		public function getPerimeter()
		{
		return ($this->width + $this->height) * 2;
		}
}		
?>