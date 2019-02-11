4. Задача:
Модифицируйте код так, чтобы на странице index.php выводилось сообщение об успешной авторизации. Решите задачу через флеш-сообщения на сессиях (про них было в простом движке php)

Файл login.php 
<?php 
//session_start(); 
$local = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db_base = 'test'; 

$connect = mysqli_connect($local, $user, $password, $db_base) or die (mysqli_error($connect)); 
mysqli_query($connect, "SET NAMES 'utf8'"); 

if (!empty($_POST['login']) AND !empty($_POST['password'])) { 
$login = $_POST['login']; 
$password = $_POST['password']; 

$query = "SELECT * FROM users WHERE login='$login' AND password='$password'"; 
$result = mysqli_query($connect, $query) or die (mysqli_error($connect)); 

$user = mysqli_fetch_assoc($result); 

if (!empty($user)) { 
$_SESSION['showResult'] = "Авторизация прошла успешно"; 
header('Location: index.php'); 
} 
else { 
$_SESSION['showResult'] = "Ошибка. Пользователь не авторизован"; 
header('Location: index.php'); 
} 
} 
?> 
<form action="" method="POST"> 
<input name="login" placeholder="login"> 
<input type="password" name="password" placeholder="password"> 
<input type="submit"> 
</form> 

Файл index.php 
<?php 
//session_start(); 
?> 
<!DOCTYPE html> 
<html> 
<head> 
<meta charset="utf-8"> 
<title>Учу PHP :)</title> 
<style> 
</style> 
</head> 
<body> 
<? 
if (isset($_SESSION['showResult'])) { 
echo $_SESSION['showResult']; 

unset($_SESSION['showResult']); 
} 
?> 
</body> 
</html>