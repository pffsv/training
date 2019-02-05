<?php
//45.Простой движок сайта на PHP
/*3.Дан файл index.php. Дан также файл file.php. 
Если этот файл существует, то подключите его к index.php, 
в противном случае выведите сообщение о том, что файл не существует.*/

$page = $_GET['page'];
$path = "pages/$page.php";
if(file_exists($path)){
	include $path;
} else {
	echo "not found";
}

?>