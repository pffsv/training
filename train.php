<!--4. Задача
Реализуйте описанную выше авторизацию с соленым паролем. Попробуйте зарегистрируйтесь, авторизуйтесь, убедитесь, что все работает-->

<?php 
session_start(); 

$local = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db_base = 'test'; 

$connect = mysqli_connect($local, $user, $password, $db_base) or die (mysqli_error($connect)); 
mysqli_query($connect, "SET NAMES 'utf8'"); 

if (!empty($_POST['login']) AND !empty($_POST['password'])) { 
$login = $_POST['login']; 

$query = "SELECT * FROM users WHERE login='$login'"; 
$result = mysqli_query($connect, $query) or die (mysqli_error($connect)); 
$user = mysqli_fetch_assoc($result); 

if (!empty($user)) { 
$passwordEntered = md5($user['salt'].$_POST['password']); 
$passwordFromDatabase = $user['password']; 

if ($passwordEntered == $passwordFromDatabase) { 
$_SESSION['auth'] = true; 
$_SESSION['login'] = $login; 
header ('Location: index.php'); 
} 
else { 
$_SESSION['auth'] = null; 
echo "<p> Повторите попытку </p>"; 
} 
} 
else { 
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
<input type="submit" value="Авторизировать"> 
</form>