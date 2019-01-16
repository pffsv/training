<?php
//23.Работа с HTML из PHP
//Переменные и строки
/*1.Дана переменная $name со значением 'Иван'. Выведите с ее помощью на экран фразу 
'Привет, Иван!'. Напишите два варианта решения - с одинарными кавычками и двойными.*/

	$name ='Иван';
	echo 'Привет, '. $name.'!'.'<br>';
	echo "Привет, $name!";
	echo '<br>';

 /*2.Дан массив ['name'=>'Иван', 'age'=>30]. Выведите с его помощью на экран фразу 
'Привет, Иван! Тебе 30 лет.'. Напишите два варианта решения - с одинарными кавычками и двойными.*/
	$arr = ['name'=>'Иван', 'age'=>30];
	echo "Привет, {$arr['name']}! Тебе {$arr['age']} лет.".'<br>';
	echo "Привет, $arr[name]! Тебе $arr[age] лет.".'<br>';

//Формирование тегов
 /*3.Дана переменная $text со значением '!!!'. Выведите с ее помощью на экран текст <p>!!!</p>. 
 Напишите два варианта решения - с одинарными кавычками и двойными.	*/

	 $text ='!!!';
	 echo '<p>'.$text.'</p>';
	 echo "<p>$text</p>";


/*4.Дана переменная $href со значением 'index.html' и переменная $text со значением 'ссылка'. 
Выведите с их помощью на экран текст <a href="index.html">ссылка</a>. 
Напишите два варианта решения - с одинарными кавычками и двойными.*/

	$href = 'index.html';
	$text = 'ссылка';
	echo '<a href="'.$href.'">'.$text.'</a>';
	echo '<br>';
	echo "<a href=\"$href\">$text</a>";

//Теги и циклы	
//5.Дан массив. Выведите каждый элемент этого массива в отдельном абзаце.

	$arr = [1, 2, 3, 4, 5];
	foreach ($arr as $value) {
		echo "<p>$value</p>";
	}

//6.Дан массив. Выведите каждый элемент этого массива в отдельной li в теге ul.

	$arr = [1, 2, 3, 4, 5];
	echo "<ul>";
	foreach ($arr as $value) {
		echo "<li>$value</li>";
	}
	echo "</ul>";

	$arr = [1, 2, 3, 4, 5];
?>

    <ul>
<?php foreach ($arr as $value): ?>
	<li><?= $value; ?></li>
<?php endforeach; ?>
    </ul>

<?php

//7.Дан массив:

	$arr = [
		['href'=>'1.html', 'text'=>'ссылка 1'],
		['href'=>'2.html', 'text'=>'ссылка 2'],
		['href'=>'3.html', 'text'=>'ссылка 3'],
	];

	echo "<ul>";
	foreach ($arr as $value) {
		echo "<li><a href= \"{$value['href']}\">{$value['text']}</a></li>";
	}
	echo "</ul>";

	$arr = [
		['href'=>'1.html', 'text'=>'ссылка 1'],
		['href'=>'2.html', 'text'=>'ссылка 2'],
		['href'=>'3.html', 'text'=>'ссылка 3'],
	];

	echo "<ul>";
	foreach ($arr as $value) {
		echo "<li><a href= \"$value[href]\">$value[text]</a></li>";
	}
	echo "</ul>";

	$arr = [
		['href'=>'1.html', 'text'=>'ссылка 1'],
		['href'=>'2.html', 'text'=>'ссылка 2'],
		['href'=>'3.html', 'text'=>'ссылка 3'],
	];

	echo "<ul>";
	foreach ($arr as $value) {
		$href = $value['href'];
		$text = $value['text'];
		echo "<li><a href= \"$value\">$text</a></li>";
	}
	echo "</ul>";

?>

