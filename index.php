<?php 
//70.Переменные названия свойств
//Ассоциативный массив
//Массив, кстати, может быть и ассоциативным:
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
	$user = new User('Иванов', 'Иван', 'Иванович');
	
	$props = ['prop1' => 'surname', 'prop2' => 'name', 'prop3' => 'patronymic'];
	echo $user->{$props['prop1']}; // выведет 'Иванов'

//Имя свойства из функции
//Имя свойства также может быть из функции:

	function getProp()
	{
		return 'surname';
	}
	
	$user = new User('Иванов', 'Иван', 'Иванович');
	echo $user->{getProp()}; // выведет 'Иванов'

//Имя свойства из свойства другого объекта
//Имя свойства может быть даже свойством другого объекта.

//Проиллюстрируем кодом. Пусть для примера дан объект Prop, который в свойстве value будет содержать название свойства объекта User:

	class Props
	{
		public $value;
		
		public function __construct($value)
		{
			$this->value = $value;
		}
	}

//Давайте выведем фамилию юзера с помощью объекта Prop:

	$user = new User('Иванов', 'Иван', 'Иванович');
	$prop = new Props('surname'); // будем выводить значение свойства surname
	
	echo $user->{$prop->value}; // выведет 'Иванов'

//Имя свойства из метода другого объекта
//Имя свойства также может браться из метода другого объекта:

	class Prop
	{
		private $value;
		
		public function __construct($value)
		{
			$this->value = $value;
		}
		
		public function getValue()
		{
			return $this->value;
		}
	}

//Давайте выведем фамилию юзера:

	$user = new User('Иванов', 'Иван', 'Иванович');
	$prop = new Prop('surname'); // будем выводить значение свойства surname
	
	echo $user->{$prop->getValue()}; // выведет 'Иванов'

?>	