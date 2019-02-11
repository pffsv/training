Задача 1 :

Реализуйте описанную выше авторизацию. Сделайте так, чтобы, если пользователь прошел авторизацию - выводилось сообщение об этом, а если не прошел - то сообщение о том, что введенный логин или пароль вбиты не правильно.
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
echo "Good"; 
} 
else { 
echo 'Wrong '; 
} 
}
?>

<form action="" method="POST">
   <input name="login">
   <input name="password" type="password">
   <input type="submit" value="Отправить">
</form>