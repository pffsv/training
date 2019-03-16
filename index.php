<?php 
//83.Определение принадлежности объекта к классу
//Применение
//Давайте рассмотрим применение оператора instanceof на достаточно сложном примере.
//Пусть у нас есть вот такой класс для работников:

	class Employee
	{
		private $name; // имя
		private $salary; // зарплата
		
		public function __construct($name, $salary)
		{
			$this->name = $name;
			$this->salary = $salary;
		}
		
		// Геттер имени:
		public function getName()
		{
			return $this->name;
		}
		
		// Геттер зарплаты:
		public function getSalary()
		{
			return $this->salary;
		}
	}

//Пусть также есть такой класс для студентов:

	class Student
	{
		private $name; // имя
		private $scholarship; // стипендия
		
		public function __construct($name, $scholarship)
		{
			$this->name = $name;
			$this->scholarship = $scholarship;
		}
		
		// Геттер имени:
		public function getName()
		{
			return $this->name;
		}
		
		// Геттер стипендии:
		public function getScholarship()
		{
			return $this->scholarship;
		}
	}

//Как вы видите, и работник, и студент имеют имя и какой-то доход: у работника это зарплата, а у студента - стипендия.
//Пусть теперь мы хотим сделать класс UsersCollection, предназначенный для хранения работников и студентов.
//Работников мы будем хранить в свойстве employees, а студентов - в свойстве students:

	class UsersCollection
	{
		private $employees = []; // массив работников
		private $students = []; // массив студентов
	}

//Давайте теперь реализуем единый метод add для добавления и работников, и студентов.
//Этот метод параметром будет принимать объект и, если это работник - добавлять его в массив работников, а если студент - в массив студентов.
//Пример того, как мы будем пользоваться методом add после его реализации:

	$usersCollection = new UsersCollection;
	
	$usersCollection->add(new Employee('Коля', 200)); // попадет к работникам
	$usersCollection->add(new Student('Вася', 100)); // попадет к студентам

//Итак, давайте реализуем описанный метод add. Здесь нам и поможет изученный нами оператор instanceof:

	class UsersCollection
	{
		private $employees = []; // массив работников
		private $students = []; // массив студентов
		
		// Добавление в массивы:
		public function add($user)
		{
			// Если передан объект класса Employee:
			if ($user instanceof Employee) {
				$this->employees[] = $user; // добавляем к работникам
			}
			
			// Если передан объект класса Student:
			if ($user instanceof Student) {
				$this->students[] = $user; // добавляем к студентам
			}
		}
	}

//Давайте также реализуем методы для нахождения суммарной зарплаты и суммарной стипендии:

	class UsersCollection
	{
		private $employees = []; // массив работников
		private $students = []; // массив студентов
		
		// Добавление в массивы:
		public function add($user)
		{
			if ($user instanceof Employee) {
				$this->employees[] = $user;
			}
			
			if ($user instanceof Student) {
				$this->students[] = $user;
			}
		}
		
		// Получаем суммарную зарплату:
		public function getTotalSalary()
		{
			$sum = 0;
			
			foreach ($this->employees as $employee) {
				$sum += $employee->getSalary();
			}
			
			return $sum;
		}
		
		// Получаем суммарную стипендию:
		public function getTotalScholarship()
		{
			$sum = 0;
			
			foreach ($this->students as $student) {
				$sum += $student->getScholarship();
			}
			
			return $sum;
		}
	}

//Реализуем также метод, который будет находить общую сумму платежей и работникам, и студентам:

	class UsersCollection
	{
		private $employees = []; // массив работников
		private $students = []; // массив студентов
		
		// Добавление в массивы:
		public function add($user)
		{
			if ($user instanceof Employee) {
				$this->employees[] = $user;
			}
			
			if ($user instanceof Student) {
				$this->students[] = $user;
			}
		}
		
		// Получаем суммарную зарплату:
		public function getTotalSalary()
		{
			$sum = 0;
			
			foreach ($this->employees as $employee) {
				$sum += $employee->getSalary();
			}
			
			return $sum;
		}
		
		// Получаем суммарную стипендию:
		public function getTotalScholarship()
		{
			$sum = 0;
			
			foreach ($this->students as $student) {
				$sum += $student->getScholarship();
			}
			
			return $sum;
		}
		
		// Получаем общую сумму платежей и работникам, и студентам:
		public function getTotalPayment()
		{
			return $this->getTotalScholarship() + $this->getTotalSalary();
		}
	}
//Проверим работу нашего класса:

	$usersCollection = new UsersCollection;
	
	$usersCollection->add(new Student('Петя', 100));
	$usersCollection->add(new Student('Ваня', 200));
	
	$usersCollection->add(new Employee('Коля', 300));
	$usersCollection->add(new Employee('Вася', 400));
	
	// Получим полную сумму стипендий:
	echo $usersCollection->getTotalScholarship(); // выведет 300
	
	// Получим полную сумму зарплат:
	echo $usersCollection->getTotalSalary(); // выведет 700
	
	// Получим полную сумму платежей:
	echo $usersCollection->getTotalPayment(); // выведет 1000
?>