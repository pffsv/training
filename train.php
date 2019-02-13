
<?php 
//Модифицируйте ваш код так, чтобы после регистрации пользователь автоматически становился авторизованным

//Файл login.php
session_start(); 

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
$_SESSION['auth'] = true; 
$_SESSION['login'] = $login; 
header ('Location: index.php'); 
} 
else { 
$_SESSION['auth'] = null; 
echo "<p> Повторите попытку </p>"; 
} 
} 
?> 
<head> 
<meta charset="utf-8"> 
</head> 
<form action="" method="POST"> 
<input name="login" placeholder="login"> 
<input type="password" name="password" placeholder="password"> 
<input type="submit"> 
</form>

Файл index.php
<?php 
session_start(); 
if (!empty($_SESSION['auth'])) { 
$_SESSION['auth'] = true; 
} 
else { 
$_SESSION['auth'] = null; 
} 
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
<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer imperdiet lectus quis justo...</p><br> 

<?php 
if (!empty($_SESSION['auth'])) { 
echo "<p style=\"color:blue\"> Maecenas aliquet accumsan leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra... </p>"; 
echo 'Вы зашли на сайт как '.$_SESSION['login'].''; 
$exit = "<a href=\"logout.php\"> Завершить сессию </a>"; 
} 
else { 
echo "<p><i> Авторизируйтесь, чтобы увидеть продолжение статьи... </i></p> 
<a href=\"login.php\"> Авторизация </a> &nbsp&nbsp&nbsp <a href=\"register.php\"> Регистрация </a>"; 
} 
echo $_SESSION['result']; 
unset($_SESSION['result']); 
?> 
<br> 
<?= $exit; ?> 
</body> 
</html>

Файл register.php
<?php 
session_start(); 

$local = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db_base = 'test'; 

$connect = mysqli_connect($local, $user, $password, $db_base) or die (mysqli_error($connect)); 
mysqli_query($connect, "SET NAMES 'utf8'");