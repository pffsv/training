<!--Урок №54. Профиль и личный кабинет

1. Задача.
Пусть при регистрации мы спрашивали у пользователя логин, пароль, имя, отчество, фамилию, дату рождения. Выведите в профиле пользователя все эти данные, кроме пароля.

файл profile.php-->

<?php 
session_start(); 

$local = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db_base = 'test'; 

$connect = mysqli_connect($local, $user, $password, $db_base) or die (mysqli_error($connect)); 
mysqli_query($connect, "SET NAMES 'utf8'"); 

$id = $_GET['id']; 

$query = "SELECT * FROM users WHERE id='$id'"; 
$result = mysqli_query($connect, $query) or die (mysqli_error($connect)); 
$user = mysqli_fetch_assoc($result); 

echo "<h3> Карточка пользователя </h3>"; 
echo "<hr>"; 
echo "Логин: {$user['login']}".'<br>'; 
echo "Имя: {$user['name']}".'<br>'; 
echo "Фамилия: {$user['surname']}".'<br>'; 
echo "Отчество: {$user['patronymic']}".'<br>'; 
echo "День рождения: {$user['birthday']}".'<br><hr>'; 
?> 
<head> 
<meta charset="utf-8"> 
</head>