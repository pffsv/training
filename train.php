3. Задача:
Модифицируйте код так, чтобы в случае успешной авторизации происходил редирект на страницу index.php

<?php 
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
header('Location: index.php'); 
} 
else { 
echo 'Wrong '; 
} 
} 
?> 
<form action="" method="POST"> 
<input name="login" placeholder="login"> 
<input type="password" name="password" placeholder="password"> 
<input type="submit"> 
</form>