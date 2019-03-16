<?php 
//83.Определение принадлежности объекта к классу
//Оператор instanceof и наследование
//Пусть теперь у нас есть родительский класс и дочерний:

	// Родительский класс:
	class ParentClass
	{
		
	}
	
	// Дочерний класс:
	class ChildClass extends ParentClass
	{
		
	}

//Создадим объект дочернего класса:


	$obj = new ChildClass;

//Проверим теперь с помощью instanceof, принадлежит ли наш объект классу ParentClass и классу ChildClass:


	var_dump($obj instanceof ChildClass); // выведет true
	var_dump($obj instanceof ParentClass); // тоже выведет true

//Как вы видите из примера - оператор instanceof не делает различия при проверки между родительскими и дочерними классами.
//Не путайтесь - если объект будет действительно родительского класса то, конечно же, проверка на принадлежность к дочернему классу вернет false:


	$obj = new ParentClass; // объект родительского класса
	
	var_dump($obj instanceof ParentClass); // выведет true
	var_dump($obj instanceof ChildClass); // выведет false
?>