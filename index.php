<?php

// integer - целочисленный
// float (double) - с плавающей точкой
// string - строковый
// boolean (bool) - булево (0/1, true/false, да/нет)
// array - массив

$integer = 1;
$float = 1.2;
$string = 'Мама мыла раму';
$bool = true;

// echo $integer;
// $integer++;
// $integer = $integer + 2;
// $integer += 3;
// echo '<br>';
// echo $integer;

// $alphabet1 = [ // если не пишем ключи, то 
// 			   // используются следующие умолчания
// 	'Raskolnikov', // ключ = 0
// 	'Trubkin', // ключ = 1
// 	'Vasechkin'  // ключ = 2
// ];

$alphabet2 = [
	55 => 'Raskolnikov', 
	78 => 'Trubkin',
	79 => 'Vasechkin',
	'zampolit' => 'Zhukov',
];

// echo '<p>' . $alphabet2[79] . '</p>';
// echo '<p>' . $alphabet2['zampolit'] . '</p>';

// if ($alphabet1[0] == $alphabet2[0]) {
// 	echo 'equal';
// } else {
// 	echo 'not equal';
// }

$user1 = [
	'first_name' => 'Yegor',
	'last_name' => 'Popov',
	'middle_name' => 'Sergeevich',
	'email' => 'indeveler@gmail.com',
	'login' => 'indeveler',
	'password' => 'qwertsa1988'
];

$users = [
	1 => $user1,
	2 => [
		'first_name' => 'Sergey',
		'last_name' => 'Popov',
		'email' => 'pffsv@mail.ru',
		'login' => 'pffsv',
		'password' => 'qwertsa1964'
	]
];

echo '<p>' . $user1['email'] . '</p>';
// echo '<p>' . $users . '</p>';
echo '<p>' . $users[2]['email'] . '</p>';
