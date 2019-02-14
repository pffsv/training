
<?php 
/*Урок 52. Валидация данных 
1. Задача 
Модифицируйте ваш код так, чтобы нельзя было зарегистрировать пользователя с пустым логином или паролем*/
session_start(); 

$local = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db_base = 'test'; 

$connect = mysqli_connect($local, $user, $password, $db_base) or die (mysqli_error($connect)); 
mysqli_query($connect, "SET NAMES 'utf8'"); 

if (!empty($_POST['addLogin']) && !empty($_POST['addPassword']) && !empty($_POST['confirm'])) { 
if ($_POST['addPassword'] == $_POST['confirm']) { 
if (!empty(trim($_POST['addLogin'])) AND !empty(trim($_POST['addPassword'])) AND !empty(trim($_POST['confirm']))) { 
$addLogin = $_POST['addLogin']; 
$addPassword = $_POST['addPassword']; 

$query = "SELECT * FROM users WHERE login = '$addLogin'"; 
$checkLogin = mysqli_query($connect, $query) or die (mysqli_error($connect)); 
$user = mysqli_fetch_assoc($checkLogin); 

if (empty($user)) { 
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
echo "<p style=\"color:red\"> username already exists </p>"; 
} 
} 
else { 
echo "<p style=\"color:red\"> Enter a valid username or password. Must not contain an empty string </p>"; 
} 
} 
else { 
echo "<p style=\"color:red\"> enter the correct password </p>"; 
} 
} 
?> 
<form action="" method="POST"> 
<input name="addLogin" placeholder="enter login" value="<?php if(!empty($_POST['addLogin'])) echo $_POST['addLogin']; ?>">
<input type="password" name="addPassword" placeholder="enter password" value="<?php if(!empty($_POST['addLogin'])) echo $_POST['addPassword']; ?>">
<input type="password" name="confirm" placeholder="confirm your password" value="<?php if(!empty($_POST['confirm'])) echo $_POST['confirm']; ?>">
<input type="submit" value="Register">
</form>