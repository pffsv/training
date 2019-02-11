2. Задача:
Модифицируйте код так, чтобы в случае успешной авторизации форма для ввода пароля и логина не показывалась на экране

<?php 
$local = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db_base = 'test'; 

$connect = mysqli_connect($local, $user, $password, $db_base) or die (mysqli_error($connect)); 
mysqli_query($connect, "SET NAMES 'utf8'"); 

$form = '<form action="" method="POST"> 
<input name="login" placeholder="login"> 
<input type="password" name="password" placeholder="password"> 
<input type="submit"> 
</form>'; 

if (!empty($_POST['login']) AND !empty($_POST['password'])) { 
$login = $_POST['login']; 
$password = $_POST['password']; 

$query = "SELECT * FROM users WHERE login='$login' AND password='$password'"; 
$result = mysqli_query($connect, $query) or die (mysqli_error($connect)); 

$user = mysqli_fetch_assoc($result); 

if (!empty($user)) { 
echo "Good"; 
echo $form = ''; 
} 
else { 
echo 'Wrong '; 
} 
} 
echo $form;
?>

<form action="" method="POST">
   <input name="login">
   <input name="password" type="password">
   <input type="submit" value="Отправить">
</form>