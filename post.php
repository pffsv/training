<?php

$name = $_POST['name123'];

if (!empty($name)) { // сравниваем $name с '', 0, null
	echo '<p>Your name is ' . $name . '</p>';
} else {
	header('Location: index.php?name_is_empty=1', 301);
}

?>

<a href="index.php">Go back</a>

<?php

/**
 * Структура запроса
 * 1. Адрес (URL) 
 * 2. Заголовки запроса
 * 3. Тело запроса
 */