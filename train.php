<?php 
//Модифицируйте ваш код так, чтобы после регистрации пользователь автоматически становился авторизованным.
error_reporting(E_ALL); 
ini_set('display_errors', 'on'); 

$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$dbName = 'test'; 
$link = mysqli_connect($host, $user, $password, $dbName); 
mysqli_query($link, "SET NAMES 'utf-8'"); 

session_start(); 

if(!empty($_POST['log']) and !empty($_POST['pass'])) { 
$log = $_POST['log']; 
$pass = $_POST['pass']; 
$email = $_POST['email']; 
$birthdate = $_POST['birthdate']; 
$date = date('Y-m-d'); 

$query = "INSERT INTO users (login, password, email, birthday, registration_date) VALUES ('$log', '$pass', '$email', '$birthdate', '$date')"; 
mysqli_query($link, $query) or die(mysqli_error($link)); 

$_SESSION['auth'] = true; 
$_SESSION['logName'] = $log; 
header('Location: /index.php'); 
} else { 


?> 
<form method="POST"> 
<label for="log">Enter your login:</label><br> 
<input name="log" id="log"><br><br> 
<label for="pass">Enter your password:</label><br> 
<input type="password" name="pass" id="pass"><br><br> 
<label for="mail">Enter your e-mail:</label><br> 
<input type="email" name="email"><br><br> 
<label for="birth"></label><br> 
<input type="date" name="birthdate"><br><br> 
<input type="submit"> 
</form> 
<?php } ?>