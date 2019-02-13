
<?php 
/*6. Задача
Модифицируйте ваш код так, чтобы при отправке формы пароль сравнивался с его подтверждением. 
Если они совпадают - то продолжаем регистрацию, а если не совпадают - то выводим сообщение об этом */

session_start(); 

$local = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db_base = 'test'; 

$connect = mysqli_connect($local, $user, $password, $db_base) or die (mysqli_error($connect)); 
mysqli_query($connect, "SET NAMES 'utf8'"); 

if (!empty($_POST['addLogin']) && !empty($_POST['addPassword']) && !empty($_POST['confirm'])) { 
if ($_POST['addPassword'] == $_POST['confirm']) { 
$addLogin = $_POST['addLogin']; 
$addPassword = $_POST['addPassword']; 

$date = date('Y-m-d'); 
$query = "INSERT INTO users SET login = '$addLogin', password = '$addPassword', registration_date = '$date'"; 
$result = mysqli_query($connect, $query) or die (mysqli_error($connect)); 

$_SESSION['auth'] = true; 
$_SESSION['login'] = $addLogin; 

$id = mysqli_insert_id($connect); 
$_SESSION['id'] = $id; 

header('Location: index.php'); 
} 
else { 
echo "<p style=\"color:red\"> enter the correct password </p>"; 
} 
} 
?> 
<form action="" method="POST"> 
<input name="addLogin" placeholder="enter login"> 
<input type="password" name="addPassword" placeholder="enter password"> 
<input type="password" name="confirm" placeholder="confirm your password"> 
<input type="submit"> 
</form>