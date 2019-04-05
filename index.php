<?php 
//107.Магический метод __toString
//Применение
//Пусть у нас есть вот такой класс, с помощью которого можно добавлять элементы в массив и находить их сумму:

	class Arr
	{
		private $numbers = [];
		
		public function add($num)
		{
			$this->numbers[] = $num;
			return $this;
		}
		
		public function getSum()
		{
			return array_sum($this->numbers);
		}
	}

//Давайте вспомним, как мы пользовались этим классом:

	$arr = new Arr;
	echo $arr->add(1)->add(2)->add(3)->getSum(); // выведет 6

//Как вы видите, у нас будет цепочка методов add, а последним методом мы всегда должны вызвать getSum, чтобы получить сумму.
//Давайте сделаем так, чтобы этот метод не нужно было писать, если мы выводим результат через echo.
//Для этого нам и пригодится изученный метод __toString.
//Есть, однако, один нюанс, мы сейчас рассмотрим.
//Пусть наша реализация метода __toString будет такой:

	public function __toString()
	{
		return array_sum($this->numbers);
	}

//Данный код выдаст ошибку, так как __toString обязательно должен вернуть строку, а результатом array_sum будет число.
//Исправим проблему, принудительно преобразовав результат в строку:

	public function __toString()
	{
		return (string) array_sum($this->numbers);
	}

//Применим изменения:

	class Arr
	{
		private $numbers = [];
		
		public function add($num)
		{
			$this->numbers[] = $num;
			return $this;
		}
		
		public function __toString()
		{
			return (string) array_sum($this->numbers);
		}
	}

//Проверим:

	$arr = new Arr;
	echo $arr->add(1)->add(2)->add(3); // выведет 6

?>	