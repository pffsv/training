<?php
//21.Задачи на отработку циклов и функций PHP
//1.Выведите с помощью цикла столбец чисел от 1 до 100.

	for ($i = 1; $i <= 100; $i++) { 
//		echo $i.'<br>';
	}

//2.Выведите с помощью цикла столбец четных чисел от 1 до 100.

	for ($i = 0; $i < 100; $i+=2) { 
//		echo $i . '<br>';
	}

//3.Найдите с помощью цикла сумму чисел от 1 до 100.

    $sum = 0;
	for ($i = 1; $i <= 100; $i++) { 
		$sum += $i;
	}
	echo $sum . '<br>';

//4.Найдите с помощью цикла сумму квадратов чисел от 1 до 15.

	$sum = 0;
	for ($i = 1; $i <= 15; $i++) { 
		$sum += $i*$i;
	}
	echo $sum . '<br>';

//5.Найдите с помощью цикла сумму корней чисел от 1 до 15. Результат округлите до двух знаков после дробной части.

	$sum = 0;
	for ($i = 1; $i <= 15; $i++) { 
		$sum += sqrt($i);
	}
	echo round($sum, 2) . '<br>';

//6.Найдите с помощью цикла сумму тех чисел от 1 до 100, которые делятся на 7

	$sum = 0;
	for ($i = 1; $i <= 100; $i++) { 
		if ($i % 7 == 0 ) {
			$sum +=$i;
		}
	}
	echo $sum . '<br>';

//7. Заполните массив 10-ю иксами с помощью цикла

	$arr = [];
	for ($i = 1; $i <= 10; $i++) { 
		$arr[] = 'x';
	}
    var_dump($arr);
    echo '<br>';

 //8.Заполните массив числами от 1 до 10 с помощью цикла.

    $arr = [];
	for ($i = 1; $i <= 10; $i++) { 
		$arr[] = $i;
	}
    var_dump($arr);
    echo '<br>';

//9.Заполните массив числами от 10 до 1 с помощью цикла.

    $arr = [];
	for ($i = 10; $i > 0; $i--) { 
		$arr[] = $i;
	}
    var_dump($arr);
    echo '<br>';

//10.Заполните массив 10-ю случайными числами от 1 до 10 с помощью цикла.

    $arr = [];
	for ($i = 1; $i <= 10; $i++) {  
		$arr[] = mt_rand(1, 10);
	}
    var_dump($arr);
    echo '<br>';

?>